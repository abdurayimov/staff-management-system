<?php

class db
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function insertMessage($name, $email, $message, $file_paths = [])
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO messages(name, email, message, file_path) " .
            "VALUES(:name, :email, :message, :file_path)"
        );

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);

        $paths = [];

        if(!empty($file_paths)) {
            foreach($file_paths as $file_path) {
                $paths[] = substr($file_path, strpos($file_path, 'uploads/'));
            }
            $paths = implode('||', $paths);

            $stmt->bindParam(':file_path', $paths, PDO::PARAM_STR);
        }

        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    public function getMessages()
    {
        $stmt = $this->pdo->prepare("SELECT name, email, message, file_path FROM messages");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}