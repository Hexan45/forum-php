<?php
    declare(strict_types=1);
    
    namespace app\database;

    use app\database\databaseInterface;
    use app\database\builder\queryBuilder;

    class mysqli implements databaseInterface {
        private string $host = '';
        private string $username = '';
        private string $password = '';
        private string $databaseName = '';

        private \mysqli $databaseConnection;
        private \mysqli_stmt $queryStatement;

        use queryBuilder;

        public function __construct() {
            $this->host = $_SERVER['DATABASE_HOST'];
            $this->username = $_SERVER['DATABASE_USERNAME'];
            $this->password = $_SERVER['DATABASE_PASSWORD'];
            $this->databaseName = $_SERVER['DATABASE_NAME'];
            return $this;
        }

        public function dbConnection() : bool {
            $connection = @new \mysqli($this->host, $this->username, $this->password, $this->databaseName);
            $connection->set_charset("utf8");

            if($connection->connect_errno) {
                trigger_error('Database connection error number ' . $connection->connect_errno . ' with message ' . $connection->connect_error);
                return false;
            }
            $this->databaseConnection = $connection;
            return true;
        }

    }