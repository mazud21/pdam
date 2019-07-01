<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Tagihan Air
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $tagihan_air['no_tagihan']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                    
                    <?= $tagihan_air['no_pelanggan']; ?></h6>
                    <?= $tagihan_air['nama']; ?></h6><br>
                    <?= $tagihan_air['email']; ?></h6>
                    
                    <p class="card-text"><?= $tagihan_air['denda']; ?></p>
                    <p class="card-text"><?= $tagihan_air['bulan_bayar']; ?></p>
                    <p class="card-text"><?= $tagihan_air['biaya_air']; ?></p>
                    <p class="card-text"><?= $tagihan_air['biaya_segel']; ?></p>
                    <p class="card-text"><?= $tagihan_air['std_awal']; ?></p>
                    <p class="card-text"><?= $tagihan_air['std_akhir']; ?></p>
                    <p class="card-text"><?= $tagihan_air['tgl_bayar']; ?></p>
                    <p class="card-text"><?= $tagihan_air['status_bayar']; ?></p>
                    <p class="card-text"><?= $tagihan_air['angs_air']; ?></p>
                    <p class="card-text"><?= $tagihan_air['angs_non_air']; ?></p>
                    <p class="card-text"><?= $tagihan_air['total_tagihan']; ?></p>
                    
                    <a href="<?= base_url(); ?>tagihan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>