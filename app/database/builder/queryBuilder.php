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
                return sprintf("%s %s = ?", $previous, $current);
            });

            $this->queryValues = $where;
            $this->query = $query;
        }

        public function getValues() : array {
            return $this->queryValues ?? [];
        }

        public function __toString() : string {
            return $this->query;
        }
    }