<?php
class Coordinates {
    private $conn;
    private $table = 'chart';

    private $id;
    private $x;
    private $y;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = 'SELECT id, x, y FROM ' . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        // $result = $stmt->fetchAll();
        // $json=json_encode($result, JSON_PRETTY_PRINT);
        // echo $json;

        return $stmt;
    }
}
?>