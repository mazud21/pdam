<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Tagihan Air
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $tagihan_air['tagihan_air']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                    <?= $tagihan_air['nama']; ?></h6>
                    <p class="card-text"><?= $tagihan_air['no_ktp']; ?></p>
                    <p class="card-text"><?= $tagihan_air['alamat']; ?></p>
                    <p class="card-text"><?= $tagihan_air['email']; ?></p>
                    <p class="card-text"><?= $tagihan_air['no_hp']; ?></p>
                    <p class="card-text"><?= $tagihan_air['foto_ktp']; ?></p>
                    <p class="card-text"><?= $tagihan_air['pilih_tarif']; ?></p>
                    <p class="card-text"><?= $tagihan_air['password']; ?></p>
                    
                    <a href="<?= base_url(); ?>tagihan_air" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>