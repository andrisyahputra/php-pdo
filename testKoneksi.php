<?php
$host = "localhost";
$port = 3306;
$database = "belajar_pdo_pzn";
$username = "root";
$password = "";

try {
    $conection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "BERHASIL TERKONESI DATABASE" . PHP_EOL;

    // menutup koneksi
    $conection = null;
} catch (PDOException $exception) {
    echo "ERROR TERKONEKSI KE DATABASE" . $exception->getMessage() . PHP_EOL;
}
