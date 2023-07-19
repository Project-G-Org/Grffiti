<?php

namespace Models;

abstract class Fields {
    public const ID = "id";
}

interface Model {
    public function getData(Fields $tableFields): array;
    public function insertData(Fields $tableFields): bool;
    public function updateData(Fields $tableFields): bool;
    public function deleteData(Fields $tableFields): bool;
}