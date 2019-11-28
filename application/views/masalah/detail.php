<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Masalah Air
                </div>
                <div class="card-body">
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Nomor Masalah</h6></label><br>
                            <?= $masalah_air['no_info']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Wilayah</h6></label><br>
                            <?= $masalah_air['wilayah']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Hari</h6></label><br>
                            <?= $masalah_air['hari']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Tanggal</h6></label><br>
                            <?= date('d M Y', strtotime($masalah_air['tanggal'])) ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Estimasi Perbaikan</h6></label><br>
                            <?= $masalah_air['estimasi']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Kerusakan</h6></label><br>
                            <?= $masalah_air['kerusakan']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Alternatif</h6></label><br>
                            <?= $masalah_air['alternatif']; ?>
                        </div>
                    <div class="form-group">
                            <label for=""><h6 class="card-subtitle text-muted">Penanganan</h6></label><br>
                            <?= $masalah_air['penanganan']; ?>
                        </div>                    
                    <a href="<?= base_url(); ?>masalah" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>