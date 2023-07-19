<?php

namespace Models;

use DbConnectionI;

abstract class Fields {
    public const ID = "id";
}

abstract class Model {
    public function __construct(
        protected DbConnectionI $pdo,
    ) { }

    public abstract function getData(Fields $tableFields): array;
    public abstract function insertData(Fields $tableFields): bool;
    public abstract function updateData(Fields $tableFields): bool;
    public abstract function deleteData(Fields $tableFields, int $id): bool;
}