<?php

require_once "Database.php";

class User {

    public static function login($email, $password) {

        $db = Database::connect();

        $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public static function register($name, $email, $password) {

        $db = Database::connect();

        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $db->prepare(
            "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
        );

        return $stmt->execute([$name, $email, $hashed]);
    }
    
    public static function findByEmail($email) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
