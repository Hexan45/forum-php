<?php
    declare(strict_types=1);

    namespace app\database;

    class database {
        private databaseInterface $databaseInstance;

        public function __construct(databaseInterface $databaseModule) {
            $this->databaseInstance = $databaseModule;
            $this->databaseInstance->dbConnection();
        }

        public function __destruct() {

        }
    }