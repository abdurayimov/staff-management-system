<?php

class connection
{
    const PATH_TO_SQLITE_FILE = __DIR__ . '/messages.db';

    private $pdo;

    public function connect()
    {
        if($this->pdo == null) {
            $this->pdo = new PDO("sqlite:" . self::PATH_TO_SQLITE_FILE);
        }

        return $this->pdo;
    }
}