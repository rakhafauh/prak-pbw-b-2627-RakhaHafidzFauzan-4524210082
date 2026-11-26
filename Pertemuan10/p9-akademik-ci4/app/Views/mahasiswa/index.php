<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<h2 class="fw-bold mb-1">Dashboard Akademik</h2>
<p class="text-secondary">Informasi data mahasiswa</p>

<!-- GRID SYSTEM -->
<div class="row g-3 mb-4">

    <div class="col-12 col-md-6 col-lg-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-secondary">Total Mahasiswa</h6>
                <h2 class="text-primary fw-bold">
                    <?= $jumlahMahasiswa; ?>
                </h2>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-secondary">Program Studi</h6>
                <h2 class="text-success fw-bold">
                    <?= $jumlahProdi; ?>
                </h2>
            </div>
        </div>
    </div>

</div>

<!-- TABLE -->
<div class="card shadow-sm border-0">

    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h5 class="fw-bold">Data Mahasiswa</h5>

            <a href="<?= base_url('mahasiswa/tambah'); ?>"
               class="btn btn-primary">
                + Tambah Mahasiswa
            </a>

        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php endif; ?>

        <div class="table-responsive">

            <table class="table table-bordered table-striped table-hover">

                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        <th>Angkatan</th>
                        <th>IPK</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php if (!empty($mahasiswa)): ?>

                        <?php $no = 1; ?>

                        <?php foreach ($mahasiswa as $mhs): ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= esc($mhs['nim']); ?></td>
                                <td><?= esc($mhs['nama']); ?></td>
                                <td><?= esc($mhs['email']); ?></td>
                                <td><?= esc($mhs['prodi']); ?></td>
                                <td><?= esc($mhs['angkatan']); ?></td>
                                <td><?= esc($mhs['ipk']); ?></td>

                                <td class="text-nowrap">

                                    <a href="<?= base_url('mahasiswa/edit/'.$mhs['id']); ?>"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="<?= base_url('mahasiswa/hapus/'.$mhs['id']); ?>"
                                          method="post"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus?')">

                                        <?= csrf_field(); ?>

                                        <button type="submit"
                                                class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>

                                    </form>

                                </td>
                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="8" class="text-center">
                                Belum ada data mahasiswa
                            </td>
                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>