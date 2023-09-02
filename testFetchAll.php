<?php
require_once __DIR__ . '/getConnection.php';
$connection = getConnection();

$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);


$customers = $statement->fetchAll();

var_dump($customers); //semua keluar


$connection = null;
