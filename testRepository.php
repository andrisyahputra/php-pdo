<?php

use Repository\CommenRepositoryImp;
use Model\Comment;

require_once __DIR__ . '/getConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommenRepository.php';

$conn = getConnection();
$repository = new CommenRepositoryImp($conn);

// buat tambah
// $comment = new Comment(nama: "Andri Syahputra", komentar: "Hello Akhirat");
// $newComment = $repository->insert($comment);

// var_dump($newComment->getId());

// buat cari satu data
// $comment = $repository->findById(10);
// var_dump($comment);

// buat cari semuanya
$comment = $repository->findAll();
var_dump($comment);


$conn = null;
