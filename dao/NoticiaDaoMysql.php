<?php

class NoticiaDaoMysql
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllNoticies()
    {
        $sql = $this->pdo->query('SELECT * FROM noticias ORDER BY id DESC');

        if ($sql->rowCount() > 0) {
            return $sql->fetchAll(PDO::FETCH_OBJ);
        }

        return false;
    }

    public function add($title, $body)
    {
        $sql = $this->pdo->prepare('INSERT INTO noticias (title, body) VALUES (:title, :body)');
        $sql->bindValue(':title', $title);
        $sql->bindValue(':body', $body);
        $sql->execute();

        return true;
    }

    public function getBySearch($searchTerm)
    {
        $sql = $this->pdo->prepare('SELECT * FROM noticias WHERE title LIKE ?');
        $sql->execute(['%' . $searchTerm . '%']);

        if ($sql->rowCount() > 0) {
            return $sql->fetchAll(PDO::FETCH_OBJ);
        }

        return false;
    }
}
