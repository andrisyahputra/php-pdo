<?php
require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

// $sql = "SELECT * FROM customers"; //semua
$sql = "SELECT nama,email FROM customers";
$statement = $connection->query($sql);

foreach ($statement as $row) {
    $nama = $row["nama"];
    $email = $row["email"];

    echo "Nama : $nama" . PHP_EOL;
    echo "Email : $email" . PHP_EOL;
}

$connection = null;
