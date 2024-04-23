<?php namespace TaskManager\System;

use TaskManager\Traits\Singleton;
use PDO;
use PDOException;

class DatabasePDO {
    use Singleton;

    private PDO $connection;

    protected function init(): void {
        $connectionName = config('database.connection');
        $settings = config("database.{$connectionName}");

        if (!$settings) {
            die("Error: Configuration for '{$connectionName}' not found.");
        }

        $dsn = $this->generateDSN($settings);

        try {
            $this->connection = new PDO($dsn, $settings['username'], $settings['password']);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $pdoExcept) {
            die("Connection error:" . $pdoExcept->getMessage());
        }
    }

    private function generateDSN(array $settings): string {
        switch ($settings['driver']) {
            case 'mysql':
                return "mysql:host={$settings['host']};dbname={$settings['database']};port={$settings['port']}";
                //You can add other drivers
                //here as needed
            default:
                die("Erro: Driver '{$settings['driver']}' not supported.");
        }
    }

    public function getConnection(): PDO {
        return $this->connection;
    }
}
