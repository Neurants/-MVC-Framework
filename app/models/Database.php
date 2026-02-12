<?php
class Database {

    private static $instance = null;

    public static function connect() {
        if (!self::$instance) {
            try {
                self::$instance = new PDO(
                    "mysql:host=localhost;dbname=mvc_app;charset=utf8",
                    "root",
                    "",
                    [
                        PDO::ATTR_PERSISTENT => false, 
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    ]
                );
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
