<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Akademik</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">

            <a class="navbar-brand fw-bold"
               href="<?= base_url('mahasiswa'); ?>">
                Sistem Akademik
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarMenu">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?= base_url('mahasiswa'); ?>">
                            Data Mahasiswa
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?= base_url('mahasiswa/tambah'); ?>">
                            Tambah Mahasiswa
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container py-4">

        <?= $this->renderSection('content'); ?>

    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>