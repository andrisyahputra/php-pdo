<?php
require_once __DIR__ . '/getConnection.php';
$connection = getConnection();

$connection->beginTransaction(); //untuk mulai transaction

// percobaan
$connection->exec("INSERT INTO comment (nama, komentar) VALUES ('john', 'GG PROGRAMMER');");
$connection->exec("INSERT INTO comment (nama, komentar) VALUES ('john', 'GG PROGRAMMER');");
$connection->exec("INSERT INTO comment (nama, komentar) VALUES ('john', 'GG PROGRAMMER');");

// ini sukses semua tapi ketemu rolback akan dibatalkan
// ketika gagal maka dibatalkan
// dan ketemu roolback data yg masuk dibatlkan id tetap berlanjut sesuai yg dibatalkan
$connection->rollBack(); //jika berhasil query maka akan masuk database


$connection = null;
