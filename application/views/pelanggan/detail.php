<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pelanggan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pelanggan['no_pelanggan']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                    <?= $pelanggan['nama']; ?></h6>
                    <p class="card-text"><?= $pelanggan['no_ktp']; ?></p>
                    <p class="card-text"><?= $pelanggan['alamat']; ?></p>
                    <p class="card-text"><?= $pelanggan['email']; ?></p>
                    <p class="card-text"><?= $pelanggan['no_hp']; ?></p>
                    <img src="<?= base_url('./images/'.$pelanggan['foto_ktp'])?>" 
                    width="200px" height="100px">
                    <p class="card-text"><?= $pelanggan['pilih_tarif']; ?></p>
                    <p class="card-text"><?= $pelanggan['password']; ?></p>
                    
                    <a href="<?= base_url(); ?>pelanggan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>