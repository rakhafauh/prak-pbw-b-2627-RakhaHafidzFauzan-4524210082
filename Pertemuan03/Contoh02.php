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
    ) ENGINE=InnoDB",
    "CREATE TABLE IF NOT EXISTS krs (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    mahasiswa_id BIGINT UNSIGNED NOT NULL,
    semester TINYINT UNSIGNED NOT NULL,
    tahun_ajaran VARCHAR(9) NOT NULL,
    CONSTRAINT uq_krs UNIQUE (mahasiswa_id, semester, tahun_ajaran),
    CONSTRAINT fk_krs_mahasiswa FOREIGN KEY (mahasiswa_id) REFERENCES mahasiswa(id)
    ON UPDATE CASCADE ON DELETE CASCADE
    ) ENGINE=InnoDB",
    "CREATE TABLE IF NOT EXISTS mk_krs (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    krs_id BIGINT UNSIGNED NOT NULL,
    matakuliah_id BIGINT UNSIGNED NOT NULL,
    CONSTRAINT fk_mk_krs_krs FOREIGN KEY (krs_id) REFERENCES krs(id)
    ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT fk_mk_krs_matakuliah FOREIGN KEY (matakuliah_id) REFERENCES matakuliah(id)
    ON UPDATE CASCADE ON DELETE CASCADE ) ENGINE=InnoDB"
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