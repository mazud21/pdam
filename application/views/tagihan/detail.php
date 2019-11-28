<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Tagihan Air
                </div>
                <div class="card-body">    
                    <h5 class="form-grup">
                        <?= $tagihan_air['no_tagihan']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                    
                    <div class="form-group">
                            <label for="no_pelanggan">No Pelanggan</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['no_pelanggan']; ?></h6>
                    </div>

                    <div class="form-group">
                            <label for="nama">Nama Pelanggan</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['nama']; ?></h6>
                    </div>
                    
                    <div class="form-group">
                            <label for="email">Email</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['email']; ?></h6>
                    </div>
                    
                    <div class="form-group">
                            <label for="denda">Denda</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['denda']; ?></h6>
                    </div>

                    <div class="form-group">
                            <label for="bulan_bayar">Bulan Bayar</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['bulan_bayar']; ?></h6>
                    </div>

                    <div class="form-group">
                            <label for="biaya_air">Biaya Air</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['biaya_air']; ?></h6>
                    </div>

                    <div class="form-group">
                            <label for="biaya_segel">Biaya Segel</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['biaya_segel']; ?></h6>
                    </div>

                    <div class="form-group">
                            <label for="std_awal">Standar Awal</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['std_awal']; ?></h6>
                    </div>

                    <div class="form-group">
                            <label for="std_akhir">Standar Akhir</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['std_akhir']; ?></h6>
                    </div>

                    <div class="form-group">
                            <label for="tgl_bayar">Tanggal Bayar</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['tgl_bayar']; ?></h6>
                    </div>

                    <div class="form-group">
                            <label for="status_bayar">Status Bayar</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['status_bayar']; ?></h6>
                    </div>

                    <div class="form-group">
                            <label for="angs_air">Angsuran Air</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['angs_air']; ?></h6>
                    </div>

                    <div class="form-group">
                            <label for="angs_non_air">Angsuran non Air</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['angs_non_air']; ?></h6>
                    </div>

                    <div class="form-group">
                            <label for="total_tagihan">Total Tagihan</label>
                            <h6 class="card-subtitle mb-2 text-muted">
                            <?= $tagihan_air['total_tagihan']; ?></h6>
                    </div>
                    
                    <a href="<?= base_url(); ?>tagihan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>