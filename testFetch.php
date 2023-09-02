<?php
require_once __DIR__ . '/getConnection.php';
$connection = getConnection();

// $username = "andri'; #";
// $password = "admin";

$username = "andri";
$password = "12345";

// pakai tanya
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$prepareStatement = $connection->prepare($sql);
$prepareStatement->bindParam(1, $username);
$prepareStatement->bindParam(2, $password);


if ($row = $prepareStatement->fetch()) {
    echo "Berhasil login " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

var_dump($prepareStatement->fetch()); //maka data tidak ada lagi


$connection = null;
