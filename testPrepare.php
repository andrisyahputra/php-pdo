<?php
require_once __DIR__ . '/getConnection.php';
$connection = getConnection();

// $username = "andri'; #";
// $password = "admin";

$username = "andri";
$password = "12345";


// seperti ini bisa
// $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
// $prepareStatement = $connection->prepare($sql);
// $prepareStatement->bindParam("username", $username);
// $prepareStatement->bindParam("password", $password);
// $prepareStatement->execute();

// pakai tanya
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$prepareStatement = $connection->prepare($sql);
$prepareStatement->bindParam(1, $username);
$prepareStatement->bindParam(2, $password);
$prepareStatement->execute();
$sukses = false;
$find_user = null;

foreach ($prepareStatement as $row) {
    $sukses = true;
    $find_user = $row["username"];
}

if ($sukses) {
    echo "Berhasil login " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}


$connection = null;
