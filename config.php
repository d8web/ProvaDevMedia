<?php
session_start();
$base = 'http://localhost/prova';

$dbName = 'prova';
$dbhost = 'localhost';
$dbUser = 'root';
$dbPass = '';

try {
    $pdo = new PDO('mysql:dbname=' . $dbName . ';host=' . $dbhost, $dbUser, $dbPass);
} catch (PDOException $e) {
    echo 'Falha na conexão: ' . $e->getMessage();
    exit;
}
