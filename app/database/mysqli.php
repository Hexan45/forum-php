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
        private \mysqli_stmt|false $databaseStatement;
        private \mysqli_result|false $databaseQueryResult;

        const PREPARE_TYPES = [
            'integer' => 'i',
            'double' => 'd',
            'string' => 's'
        ];

        public const OBJECT_RESULT = 'fetch_object';
        public const ASSOC_RESULT = 'fetch_assoc';

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

        private function getValuesTypes(array $vars) : string {
            $result = '';
            foreach($vars as $value) {
                $result .= self::PREPARE_TYPES[gettype($value)];
            }
            return $result;
        }

        public function execute(string $query) : bool {
            if( $this->databaseStatement = $this->databaseConnection->prepare() ) {

                $valuesTypes = $this->getValuesTypes();
                $this->databaseStatement->bind_param($valuesTypes, );
                $this->databaseStatement->execute();
                $this->databaseQueryResult = $this->databaseStatement->get_result();

                return true;

            }
            return false;
        }

        public function getResult(string $resultType) : array|object {
            if($this->databaseQueryResult) {
                return $this->databaseQueryResult->{$resultType}();
            }
        }

    }