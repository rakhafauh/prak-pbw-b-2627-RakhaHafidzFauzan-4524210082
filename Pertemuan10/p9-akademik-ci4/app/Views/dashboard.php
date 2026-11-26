<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Dashboard Akademik
    </title>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>

<body>
    <div class="container">
        <h1>
            Sistem Akademik
        </h1>
        <div class="dashboard">
            <div class="card">
                <h3>Mahasiswa</h3>
                <p>
                    <?= $jumlahMahasiswa; ?>
                </p>
            </div>
            <div class="card">
                <h3>Dosen</h3>
                <p>
                    <?= $jumlahDosen; ?>
                </p>
            </div>
            <div class="card">
                <h3>Mata Kuliah</h3>
                <p>
                    <?= $jumlahMK; ?>
                </p>
            </div>
            <div class="card">
                <h3>KRS</h3>
                <p>
                    <?= $jumlahKRS; ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>