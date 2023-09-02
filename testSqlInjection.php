<?php
require_once __DIR__ . "/getConnection.php";
$connection = getConnection();

// jgn pakai ini
// $username = "andri'; #"; //jadi berhasil tanpa tau password
// $password = "salah gk peduli";

// solusinya bisa pakai quote
$username = $connection->quote("andri'; #"); //jadi berhasil tanpa tau password
$password = $connection->quote("salah gk peduli");
// tanpa quote biasa
// $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

// gunakan quote tanpa kutip satu
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";

echo $sql . PHP_EOL; //diangap perintah komentar


$statement = $connection->query($sql);

$sukses = false;
$find_user = null;

foreach ($statement as $row) {
    $sukses = true;
    $find_user = $row["username"];
}

if ($sukses) {
    echo "Berhasil login" . $find_user . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}


$connection = null;