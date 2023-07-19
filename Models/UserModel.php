<?php

namespace Models;

class UserFields extends Fields {
    public static $tableName = "tb_users";

    public static $username = 'username';
    public static $password = 'password';
    public static $position = 'position';
    public static $profilePic = 'profilePic';

    public static function getField(): array {
        return [
            self::$username, self::$password,
            self::$position, self::$profilePic
        ];
    }
}

class UserModel extends Model {
    public function getData(Fields $tableFields): array { 
        $query = $this -> pdo -> connect() -> prepare(
            "SELECT * FROM `" . UserFields::$tableName . "` ORDER BY " . UserFields::ID . " DESC"
        );

        $query -> execute();

        return $query -> fetchAll();
    }

    public function insertData(Fields $tableFields): bool { 
        $query = $this -> pdo -> connect() -> prepare(
            "INSERT INTO `" . UserFields::$tableName . "`
             VALUES (null, ?, ?, ?, ?)"
        ); 
        
        return $query -> execute(UserFields::getField());
    }

    public function updateData(Fields $tableFields): bool {
        $query = $this -> pdo -> connect() -> prepare(
            "UPDATE `" . UserFields::$tableName . "`
             SET `" . UserFields::$username . "`=?, `" . UserFields::$password . "`=?, `" . UserFields::$position . "`=?, `" . UserFields::$profilePic . "`=?
             WHERE `" . UserFields::ID . "` = ?"
        ); 
        
        return $query -> execute(UserFields::getField());
    }

    public function deleteData(Fields $tableFields, int $id): bool {
        $query = $this -> pdo -> connect() -> prepare(
            "DELETE FROM `" . UserFields::$tableName . "` WHERE `" . UserFields::ID . "`=?"
        );

        return $query -> execute([$id]);
    }
}