<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];
    $ipk = $_POST['ipk'];

    $query = mysqli_query(
        $koneksi,
        "INSERT INTO mahasiswa
        (nim, nama, email, prodi, angkatan, ipk)
        VALUES
        ('$nim', '$nama', '$email', '$prodi', '$angkatan', '$ipk')"
    );

    if ($query) {
        echo "<script>
            alert('Data mahasiswa berhasil disimpan');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal disimpan');
            window.history.back();
        </script>";
    }
}
?>