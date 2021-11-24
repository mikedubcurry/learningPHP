<?php

require 'functions.php';
require 'Task.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', '<DB_USER>', '<DB_PASSWORD>');
} catch (PDOException $e) {
    dd($e);
}

$statement = $pdo->prepare('select * from todos;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

// dd($results[0]->description);

require 'index.view.php';
