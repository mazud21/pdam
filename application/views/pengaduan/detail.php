<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pengaduan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pengaduan['id_pengaduan']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                    <p class="card-text"><?= $pengaduan['keluhan']; ?></p>
                    <p class="card-text"><?= $pengaduan['tanggapan']; ?></p>
                    <p class="card-text"><?= $pengaduan['no_daftar']; ?></p>
                    
                    <a href="<?= base_url(); ?>pengaduan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>