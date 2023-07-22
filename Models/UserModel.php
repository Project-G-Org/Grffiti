<?php

//https://www.codexworld.com/store-retrieve-image-from-database-mysql-php/

namespace Models;

use PDOStatement;

class UserFields extends Fields {
    public static $tableName = "tb_users";

    public static $username = 'username';
    public static $password = 'password';
    public static $description = 'description';
    public static $position = 'position';
    public static $profilePic = 'profile_pic';

    public static function getFields(): array {
        return [
            self::$username, self::$password,
            self::$description,
            self::$position, self::$profilePic
        ];
    }
}

class UserModel extends Model {
    public function getData(): array { 
        $query = $this -> pdo -> connect() -> prepare(
            "SELECT * FROM `" . UserFields::$tableName . "` ORDER BY " . UserFields::ID . " DESC"
        );

        $query -> execute();

        return $query -> fetchAll();
    }

    public function findData(string $username, string $password): PDOStatement {
        $query = $this->pdo->connect()->prepare(
            "SELECT * FROM `" . UserFields::$tableName . "`
             WHERE `" . UserFields::$username . "` = ? AND `" . UserFields::$password . "` = ?;"
        );

        $query->execute([
            $username, $password
        ]);
        
        return $query;
    }

    public function insertData(): bool { 
        $query = $this -> pdo -> connect() -> prepare(
            "INSERT INTO `" . UserFields::$tableName . "`
             VALUES (null, ?, ?, ?, ?, ?)"
        ); 
        
        return $query -> execute(UserFields::getFields());
    }

    public function updateData(): bool {
        $query = $this -> pdo -> connect() -> prepare(
            "UPDATE `" . UserFields::$tableName . "`
             SET `" .
             UserFields::$username . "`=?, `" .
             UserFields::$password . "`=?, `" .
             UserFields::$description . "`=?, `" .
             UserFields::$position . "`=?, `" .
             UserFields::$profilePic . "`=?
             WHERE `" . UserFields::ID . "` = ?"
        ); 
        
        return $query -> execute(UserFields::getFields());
    }

    public function deleteData(int $id): bool {
        $query = $this -> pdo -> connect() -> prepare(
            "DELETE FROM `" . UserFields::$tableName . "` WHERE `" . UserFields::ID . "`=?"
        );

        return $query -> execute([$id]);
    }
}