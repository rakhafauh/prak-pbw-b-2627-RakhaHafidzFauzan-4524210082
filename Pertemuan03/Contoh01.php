<?php
require_once 'koneksi.php';

$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS akademik";

if (mysqli_query($koneksi, $sqlCreateDB)) {
    echo "Database 'akademik' berhasil dibuat atau sudah ada.";
} else {
    echo "Gagal membuat database: " . mysqli_error($koneksi) .
    "\n";
}

mysqli_set_charset($koneksi, "utf8mb4");

mysqli_select_db($koneksi, 'akademik');

$sqlCreateTables = [
    "CREATE TABLE IF NOT EXISTS mahasiswa (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    prodi VARCHAR(50) NOT NULL,
    angkatan YEAR NOT NULL,
    ipk DECIMAL(3, 2) DEFAULT 0.00
) ENGINE=InnoDB",
    "CREATE TABLE IF NOT EXISTS dosen (
    id BIGINT
    UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nidn VARCHAR(20) NOT NULL UNIQUE,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL UNIQUE
    ) ENGINE=InnoDB",
    "CREATE TABLE IF NOT EXISTS matakuliah (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode_mk VARCHAR(20) NOT NULL UNIQUE,
    nama_mk VARCHAR(100) NOT NULL,
    sks TINYINT UNSIGNED NOT NULL,
    dosen_id BIGINT UNSIGNED,
    CONSTRAINT fk_mk_dosen FOREIGN KEY (dosen_id) REFERENCES dosen(id)
    ) ENGINE=InnoDB"
];

foreach ($sqlCreateTables as $namaTabel => $query) {
    if (mysqli_query($koneksi, $query)) {
        echo "Tabel '$namaTabel' berhasil dibuat atau sudah ada.\n";
    } else {
        echo "Gagal membuat tabel '$namaTabel': " . mysqli_error($koneksi) . "\n";
    }
}

mysqli_close($koneksi);
?>