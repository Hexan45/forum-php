<?php
    declare(strict_types=1);

    namespace app\database;

    class database {
        public databaseInterface $db;

        public function __construct(databaseInterface $databaseModule) {
            $this->db = $databaseModule;
            $this->db->dbConnection();
        }
    }