<?php

require __DIR__ . "/../vendor/autoload.php";

use CoffeeCode\DataLayer\Connect;

$conn = Connect::getInstance();
$error = Connect::getError();

if ($error) {
    echo $error->getMessage();
    die();
}

$query = $conn->query("SELECT * FROM users")->fetchAll();
var_dump($query);

