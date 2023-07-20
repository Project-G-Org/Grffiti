<?php

namespace Models;

use DbConnectionI;

abstract class Model {
    public function __construct(
        protected DbConnectionI $pdo,
    ) { }

    public abstract function getData(): array;
    public abstract function findData(string $username, string $password): int;
    public abstract function insertData(): bool;
    public abstract function updateData(): bool;
    public abstract function deleteData(int $id): bool;
}