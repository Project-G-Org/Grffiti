<?php

namespace Models;

class UserFields extends Fields {
    public static $username = 'username';
    public static $password = 'password';
    public static $position = 'position';
    public static $profilePic = 'profilePic';
}

class UserModel implements Model {
    public function getData(Fields $tableFields): array { return []; }

    public function insertData(Fields $tableFields): bool { 
        return false; 
    }

    public function updateData(Fields $tableFields): bool {
        return false;
    }

    public function deleteData(Fields $tableFields): bool {
        return false;
    }
}