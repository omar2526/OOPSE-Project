<?php
class Database
{
    private $conn;

    function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "steel");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }
}
?>