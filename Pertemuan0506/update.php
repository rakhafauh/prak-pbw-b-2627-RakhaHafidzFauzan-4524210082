<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];
$ipk = $_POST['ipk'];

$query = mysqli_query(
    $koneksi,
    "UPDATE mahasiswa
    SET nama='$nama',
        email='$email',
        prodi='$prodi',
        angkatan='$angkatan',
        ipk='$ipk'
    WHERE nim='$nim'"
);

if ($query) {
    echo "<script>
        alert('Data mahasiswa berhasil diubah');
        window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Data gagal diubah');
        window.history.back();
    </script>";
}
?>