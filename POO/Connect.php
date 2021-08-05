<?php
class Connect {
    public function init() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "prueba";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=prueba", $username, $password);
            //set the PDO error mode to exception  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}