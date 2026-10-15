<?php
require_once "koneksi.php";
require_once "controllers/MahasiswaController.php";

$controller = new MahasiswaController($koneksi);
$controller->index();
?>