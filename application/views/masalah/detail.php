<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Masalah Air
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $masalah_air['no_info']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                    <?= $masalah_air['wilayah']; ?></h6>
                    <p class="card-text"><?= $masalah_air['hari']; ?></p>
                    <p class="card-text"><?= $masalah_air['tanggal']; ?></p>
                    <p class="card-text"><?= $masalah_air['estimasi']; ?></p>
                    <p class="card-text"><?= $masalah_air['kerusakan']; ?></p>
                    <p class="card-text"><?= $masalah_air['alternatif']; ?></p>
                    <p class="card-text"><?= $masalah_air['penanganan']; ?></p>
                    
                    <a href="<?= base_url(); ?>masalah" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>