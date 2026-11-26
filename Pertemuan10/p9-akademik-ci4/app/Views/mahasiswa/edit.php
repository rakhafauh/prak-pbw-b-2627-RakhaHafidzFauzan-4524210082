<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <h4 class="fw-bold mb-4">Edit Mahasiswa</h4>

                <form action="<?= base_url('mahasiswa/update/'.$mahasiswa['id']); ?>"
                      method="post">

                    <?= csrf_field(); ?>

                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="nim"
                               class="form-control"
                               value="<?= esc($mahasiswa['nim']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama"
                               class="form-control"
                               value="<?= esc($mahasiswa['nama']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email"
                               class="form-control"
                               value="<?= esc($mahasiswa['email']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Program Studi</label>
                        <input type="text" name="prodi"
                               class="form-control"
                               value="<?= esc($mahasiswa['prodi']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <input type="number" name="angkatan"
                               class="form-control"
                               value="<?= esc($mahasiswa['angkatan']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">IPK</label>
                        <input type="number" name="ipk"
                               class="form-control"
                               min="0" max="4" step="0.01"
                               value="<?= esc($mahasiswa['ipk']); ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan Perubahan
                    </button>

                    <a href="<?= base_url('mahasiswa'); ?>"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>