<?php
include "koneksi.php";
class MahasiswaModel {
    private $koneksi;

    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
    }

    public function getAllMahasiswa() {
        $query = mysqli_query(
        $this->koneksi, "SELECT * FROM mahasiswa"
        );
        return $query;
    }
}    
?>