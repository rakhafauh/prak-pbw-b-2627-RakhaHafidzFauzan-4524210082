<?php
include "koneksi.php";

$nim = $_GET['nim'];

$query = mysqli_query(
    $koneksi,
    "DELETE FROM mahasiswa
    WHERE nim = '$nim'"
);

if ($query) {
    echo "<script>
        alert('Data mahasiswa berhasil dihapus');
        window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Data gagal dihapus');
        window.history.back();
    </script>";
}
?>