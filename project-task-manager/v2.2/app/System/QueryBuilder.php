<?php namespace TaskManager\System;

class QueryBuilder {
    public array $bindings = [];

    public function buildInsert(string $table, array $data): string {
        $columns = implode(',', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));
        return "INSERT INTO {$table} ($columns) VALUES ($values)";
    }

    public function buildDelete(string $table, array $conditions = []): string {
        $sql = "DELETE FROM {$table}";

        if (!empty($conditions)) {
            $whereClause = $this->constructWhereClause($conditions);
            $sql .= " WHERE {$whereClause}";
        }

        return $sql;
    }

    public function buildSelect(string $table, array $conditions = []): string {
        $sql = "SELECT * FROM {$table}";

        if (!empty($conditions)) {
            $whereClause = $this->constructWhereClause($conditions);
            $sql .= " WHERE {$whereClause}";
        }

        return $sql;
    }

    public function buildUpdate(string $table, array $data, array $conditions = []): string {
        $setClause = $this->constructSetClause($data);
        $sql = "UPDATE {$table} SET {$setClause}";

        if (!empty($conditions)) {
            $whereClause = $this->constructWhereClause($conditions);
            $sql .= " WHERE {$whereClause}";
        }

        return $sql;
    }

    private function constructSetClause(array $data): string {
        $set = [];
        foreach ($data as $column => $value) {
            $set[] = "$column = :$column";
            $this->setBinding($column, $value);
        }
        return implode(', ', $set);
    }

    private function constructWhereClause(array $conditions): string {
        $where = [];
        foreach ($conditions as $condition) {
            [$column, $operator, $value] = $condition;
            $where[] = "$column $operator :$column";
            $this->setBinding($column, $value);
        }
        return implode(' AND ', $where);
    }

    private function setBinding(string $column, mixed $value) : void {
        $this->bindings[":$column"] = $value;
    }
}
