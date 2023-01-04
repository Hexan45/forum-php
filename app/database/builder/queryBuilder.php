<?php
    declare(strict_types=1);

    namespace app\database\builder;

    class queryBuilder {
        private string $query;
        private mixed $queryValues = [];

        public function findById(string $table, int|array $id, string $fields = '*') : self {
            $query = 'SELECT ' . $fields . ' FROM ' . $table;

            if(is_array($id)) {
                $query .= ' WHERE id IN (' . implode(',', array_fill(0, count($id), '?')) . ')';
            } else {
                $query .= ' WHERE id=?';
            }

            $this->query = $query;
            $this->queryValues = $id;

            return $this;
        }

        public function select(string $table, string $fields = '*') : self {
            $this->query = 'SELECT ' . $fields . ' FROM ' . $table;
            return $this;
        }

        public function where(array $values, string $operator) : self {
            $where = implode(" {$operator} ", array_map(function($value) {
                return $value . '=?';
            }, array_keys($values)));

            $this->query .= ' WHERE ' . $where;
            $this->queryValues += array_values($values);

            return $this;
        }

        public function orderBy(string|array $columns, string $sort = 'ASC') : self {
            if(is_string($columns)) $this->query .= ' ORDER BY ' . $columns . ' ' . $sort;
            if(is_array($columns)) $this->query .= ' ORDER BY ' . implode(', ', $columns) . ' ' . $sort;

            return $this;
        }

        public function create(string $table, array $values) : self {
            $columns = implode(', ', array_keys($values));

            $this->query = 'INSERT INTO ' . $table . ' (' . $columns . ') VALUES (' . implode(', ', array_fill(0, count($values), '?')) . ')';
            $this->queryValues = $values;

            return $this;
        }

        public function update(string $table, array $values) : self {
            $set = implode(', ', array_map(function($value){
                return $value . '=?';
            }, array_keys($values)));

            $this->query = 'UPDATE ' . $table . ' SET ' . $set;
            $this->queryValues = $values;

            return $this;
        }

        public function delete(string $table) : self {
            $this->query = 'DELETE FROM ' . $table;
            return $this;
        }

        public function limit(int $limitValue) : self {
            $this->query .= ' LIMIT ' . $limitValue;
            return $this;
        }

        public function getQuery() : string {
            return $this->query;
        }

        public function getValues() : mixed {
            return array_values($this->queryValues);
        }

    }