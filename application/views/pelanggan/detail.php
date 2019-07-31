<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pelanggan
                </div>
                <div class="card-body">
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Nomor Pelanggan</h6></label><br>
                            <?= $pelanggan['no_pelanggan']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Nama</h6></label><br>
                            <?= $pelanggan['nama']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Nomor KTP</h6></label><br>
                            <?= $pelanggan['no_ktp']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Alamat</h6></label><br>
                            <?= $pelanggan['alamat']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Alamat Email</h6></label><br>
                            <?= $pelanggan['email']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Nomor HP</h6></label><br>
                            <?= $pelanggan['no_hp']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Foto KTP</h6></label><br>
                            <img src="<?= base_url('./images/'.$pelanggan['foto_ktp'])?>" 
                            width="200px" height="125px">
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Pilihan Tarif Air</h6></label><br>
                            <?= $pelanggan['pilih_tarif']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Password</h6></label><br>
                            <?= $pelanggan['password']; ?>
                        </div>

                    <a href="<?= base_url(); ?>pelanggan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>