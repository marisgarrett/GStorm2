<?php
    namespace GStorm;

    class DatabaseTable {
        private $table;
        private $pdo;
        private $primaryKey;
        private $entityClass;
        private $entityConstructor;

        public function __construct($pdo, $table, $primaryKey, $entityClass = 'stdclass', $entityConstructor = []) {
            $this->pdo = $pdo;
            $this->table = $table;
            $this->primaryKey = $primaryKey;
            $this->entityClass = $entityClass;
            $this->entityConstructor = $entityConstructor;
        }

        function delete($field, $value) {
            $stmt = $this->pdo->prepare('DELETE FROM ' . $this->table . ' WHERE ' . $field . ' = :value');
            $criteria = [
                'value' => $value
            ];
            $stmt->execute($criteria);
        }

        function find($field, $value) {
            $stmt = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE ' . $field . ' = :value');
            
            $stmt->setFetchMode(\PDO::FETCH_CLASS, $this->entityClass, $this->entityConstructor);

            $stmt->execute([
                'value' => $value
            ]);
            return $stmt->fetchAll();
        }

        function findAll() {
            $stmt = $this->pdo->prepare('SELECT * FROM ' . $this->table);

            $stmt->setFetchMode(\PDO::FETCH_CLASS, $this->entityClass, $this->entityConstructor);
            
            $stmt->execute();
            return $stmt->fetchAll();
        }

        function insert($record) {
            $keys = array_keys($record);
            $values = implode(', ', $keys);
            $valuesWithColon = implode(', :', $keys);
            $query = 'INSERT INTO ' . $this->table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($record);
        }

        public function lastInsertId() {
            return $this->pdo->lastInsertId();
        }

        function save($record) {
            try {
                $this->insert($record);
            }
            catch (\Exception $e) {
                $this->update($record);
            }
        }

        function update($record) {
            $query = 'UPDATE ' . $this->table . ' SET ';

            $parameters = [];
            foreach ($record as $key => $value) {
                $parameters[] = $key . ' = :' .$key;
            }

            $query .= implode(', ', $parameters);
            $query .= ' WHERE ' . $this->primaryKey . ' = :primaryKey';

            $record['primaryKey'] = $record[$this->primaryKey];

            $stmt = $this->pdo->prepare($query);
            
            $stmt->execute($record);
        }
    }

?>