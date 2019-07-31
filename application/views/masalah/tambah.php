<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Masalah Air
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    
                        <div class="form-group">
                            <label for="wilayah">Wilayah</label>
                            <input type="text" name="wilayah" class="form-control" id="wilayah">
                            <small class="form-text text-danger"><?= form_error('wilayah'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <input type="text" name="hari" class="form-control" id="hari">
                            <small class="form-text text-danger"><?= form_error('hari'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" name="tanggal" class="form-control" id="tanggal">
                            <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="estimasi">Estimasi</label>
                            <input type="text" name="estimasi" class="form-control" id="estimasi">
                            <small class="form-text text-danger"><?= form_error('estimasi'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="kerusakan">Kerusakan</label>
                            <input type="text" name="kerusakan" class="form-control" id="kerusakan">
                            <small class="form-text text-danger"><?= form_error('kerusakan'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="alternatif">Alternatif</label>
                            <input type="text" name="alternatif" class="form-control" id="alternatif">
                            <small class="form-text text-danger"><?= form_error('alternatif'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="penanganan">Penanganan</label>
                            <input type="text" name="penanganan" class="form-control" id="penanganan">
                            <small class="form-text text-danger"><?= form_error('penanganan'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        <a href="<?= base_url(); ?>masalah" class="btn btn-secondary float-right mx-2">Kembali</a>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>