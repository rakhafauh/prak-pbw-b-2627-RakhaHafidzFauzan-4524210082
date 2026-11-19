<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>

<body>
    <div class="container">
        <div class="menu">
            <a href="<?= base_url('mahasiswa'); ?>">Mahasiswa</a>
            <a href="#">Dosen</a>
            <a href="#">Mata Kuliah</a>
        </div>
        <div class="dashboard">
            <div class="card">
                <h3>Mahasiswa</h3>
                <p>120</p>
            </div>
            <div class="card">
                <h3>Dosen</h3>
                <p>25</p>
            </div>
            <div class="card">
                <h3>Mata Kuliah</h3>
                <p>40</p>
            </div>
            <div class="card">
                <h3>KRS</h3>
                <p>350</p>
            </div>
        </div>
        <hr class="divider">
        <h2>Data Mahasiswa</h2>
        <a href="<?= base_url('mahasiswa/tambah'); ?>" 
            class="btn btn-primary">
            Tambah Mahasiswa
        </a>
        <div class="table-responsive">
            <table>
                <thead class="table-header">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        <th>Angkatan</th>
                        <th>IPK</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa as $mhs): ?>
                        <tr>
                            <td><?= esc($mhs['nim']); ?></td>
                            <td><?= esc($mhs['nama']); ?></td>
                            <td><?= esc($mhs['email']); ?></td>
                            <td><?= esc($mhs['prodi']); ?></td>
                            <td><?= esc($mhs['angkatan']); ?></td>
                            <td><?= esc($mhs['ipk']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>