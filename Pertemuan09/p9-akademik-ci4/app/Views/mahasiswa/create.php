<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Mahasiswa</h2>
    <form action="/mahasiswa/simpan" method="post">
        NIM:
        <input type="text" name="nim" required>
        <br><br>
        Nama:
        <input type="text" name="nama" required>
        <br><br>
        Email:
        <input type="email" name="email" required>
        <br><br>
        Prodi:
        <input type="text" name="prodi" required>
        Angkatan:
        <input type="text" name="angkatan" required>
        <br><br>
        IPK:
        <input type="number" step="0.01" name="ipk" required>
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>