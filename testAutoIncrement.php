<?php
require_once __DIR__ . '/getConnection.php';
$connection = getConnection();

$connection->exec("INSERT INTO comment (nama, komentar) VALUES ('john', 'GG PROGRAMMER');");

// cek id terakhir di tambah
$id = $connection->lastInsertId();

echo "id terakhir $id" . PHP_EOL;


$connection = null;
