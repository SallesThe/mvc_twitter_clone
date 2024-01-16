<?php 
    namespace App;
    class Connection
    {
        public static function Connect(): \PDO
        {
            try {
                $conn = new \PDO("mysql:host=localhost;dbname=clone_x", "root", "");
                return $conn;
            } catch (\PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }