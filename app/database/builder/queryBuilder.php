<?php
    declare(strict_types=1);

    namespace app\database\builder;

    trait queryBuilder {
        private string $query;
        private array $queryValues;

        public function select(string $table, ?array $where = null) : void {
            $query = "SELECT * FROM " . $table;

            if(is_null($where)) {
                $this->query = $query;
                return;
            }

            $query .= " WHERE";
            $query .= array_reduce(array_keys($where), function($previous, $current) {
                return sprintf("%s %s=?", $previous, $current);
            });

            $this->queryValues = array_values($where) ?: [];
            $this->query = $query;
        }
    }