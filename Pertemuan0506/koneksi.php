<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'akademik';

$koneksi = mysqli_connect($host, $user, $password, $dbname);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>