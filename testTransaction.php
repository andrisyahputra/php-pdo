<?php
require_once __DIR__ . '/getConnection.php';
$connection = getConnection();

$connection->beginTransaction(); //untuk mulai transaction

// percobaan
$connection->exec("INSERT INTO comment (nama, komentar) VALUES ('john', 'GG PROGRAMMER');");
$connection->exec("INSERT INTO comment (nama, komentar) VALUES ('john', 'GG PROGRAMMER');");
$connection->exec("INSERT INTO comment (namas, komentar) VALUES ('john', 'GG PROGRAMMER');");

// jika ada eror maka tidak masuk
// jika tanpa transaction maka akan dimasukan yg tidak jalan
$connection->commit(); //jika berhasil query maka akan masuk database


$connection = null;
