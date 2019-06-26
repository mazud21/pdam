<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pengaduan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pengaduan['pengaduan']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                    <?= $pengaduan['nama']; ?></h6>
                    <p class="card-text"><?= $pengaduan['no_ktp']; ?></p>
                    <p class="card-text"><?= $pengaduan['alamat']; ?></p>
                    <p class="card-text"><?= $pengaduan['email']; ?></p>
                    <p class="card-text"><?= $pengaduan['no_hp']; ?></p>
                    <p class="card-text"><?= $pengaduan['foto_ktp']; ?></p>
                    <p class="card-text"><?= $pengaduan['pilih_tarif']; ?></p>
                    <p class="card-text"><?= $pengaduan['password']; ?></p>
                    
                    <a href="<?= base_url(); ?>pengaduan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>