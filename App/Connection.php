<?php 
    namespace App;
    class Connection
    {
        public static function Connect(): void
        {
            try {
                $conn = new \PDO("mysql:host=localhost;dbname=clone_x", "root", "");
            } catch (\PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }