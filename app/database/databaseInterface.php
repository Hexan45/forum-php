<?php
    declare(strict_types=1);

    namespace app\database;

    interface databaseInterface {
        public function dbConnection() : object|bool;
    }