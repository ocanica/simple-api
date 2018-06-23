<?php

class QueryBuilder {
    protected $pdo;

    // Constructor method initialising the class with a new instance of PDO
    // Additional type hinting requiring the PDO interface
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    // Simple select all query returning a standard class of fetch
    public function selectAll($table) {
        $stmt = $this->pdo->prepare("select * from {$table}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    // Dynamic insert query passing array key values as parameters allowing
    // for more complex query strings
    public function insert($table, $parameters) {
        $sql = sprintf(
            'insert into %s (%s) values (%s)', 

            // Array $parameters allow several attributes to be defined
            // implode() combines these into a single string value
            $table, implode(', ', array_keys($parameters)),

            // Prepend and append : for anonymous placeholders
            ':' . implode(', :', array_keys($parameters)) 
        );

        try {

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

        } catch (PDOException $e) {
            die('Oops, it appears that something went wrong: ' . $e->getMessage());
        }
    }
}