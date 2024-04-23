<?php namespace TaskManager\System;

use PDO;

abstract class Model {
    protected PDO $db;
    protected string $table;
    protected bool $softDelete = false;
    private array $conditions = [];
    private QueryBuilder $queryBuilder;

    public function __construct() {
        $this->db = DatabasePDO::instance()->getConnection();
        $this->queryBuilder = new QueryBuilder;
    }

    public function where(string $column, string $operator, $value): self {
        $this->conditions[] = [$column, $operator, $value];
        // returns the instance itself to allow chaining
        return $this;
    }

    public function all(): array {
        $sql = $this->queryBuilder->buildSelect($this->table, $this->conditions);
        $stmt = $this->db->prepare($sql);
        $stmt->execute($this->queryBuilder->bindings);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function find(int $id): ?object {
        $this->where('id', '=', $id);
        return $this->first();
    }

    public function first(): ?object {
        $sql = $this->queryBuilder->buildSelect($this->table, $this->conditions);
        $stmt = $this->db->prepare($sql);
        $stmt->execute($this->queryBuilder->bindings);

        return $stmt->fetch(PDO::FETCH_OBJ) ?: null;
    }

    public function create(array $data): bool {
        $sql = $this->queryBuilder->buildInsert($this->table, $data);
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($data);
    }

    public function update(array $data): bool {
        $sql = $this->queryBuilder->buildUpdate($this->table, $data, $this->conditions);
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($this->queryBuilder->bindings);
    }

    public function delete(): bool {
        if($this->softDelete){
            return $this->logicDelete();
        }
        $sql = $this->queryBuilder->buildDelete($this->table, $this->conditions);
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($this->queryBuilder->bindings);
    }

    public function logicDelete(): bool {
        $data = [
            'deleted_at' => \date('Y-m-d H:i:s'),
        ];
        $sql = $this->queryBuilder->buildUpdate($this->table, $data, $this->conditions);
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($this->queryBuilder->bindings);
    }
}
