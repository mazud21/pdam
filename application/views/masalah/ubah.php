<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Masalah Air
                </div>
                <div class="card-body">
                <form action="" method="post">
                        <div class="form-group">
                            <label for="no_info">Nomor Info</label>
                            <input type="text" name="no_info" class="form-control" id="no_info" value="<?= $no_info['no_info']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('no_info'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="wilayah">Wilayah</label>
                            <input type="text" name="wilayah" class="form-control" id="wilayah" value="<?= $no_info['wilayah']; ?>">
                            <small class="form-text text-danger"><?= form_error('wilayah'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <input type="text" name="hari" class="form-control" id="hari" value="<?= $no_info['hari']; ?>">
                            <small class="form-text text-danger"><?= form_error('hari'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" name="tanggal" class="form-control" id="tanggal" value="<?= $no_info['tanggal']; ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="estimasi">Estimasi</label>
                            <input type="text" name="estimasi" class="form-control" id="estimasi" value="<?= $no_info['estimasi']; ?>">
                            <small class="form-text text-danger"><?= form_error('estimasi'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="kerusakan">Kerusakan</label>
                            <input type="text" name="kerusakan" class="form-control" id="kerusakan" value="<?= $no_info['kerusakan']; ?>">
                            <small class="form-text text-danger"><?= form_error('kerusakan'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="alternatif">Alternatif</label>
                            <input type="text" name="alternatif" class="form-control" id="alternatif" value="<?= $no_info['alternatif']; ?>">
                            <small class="form-text text-danger"><?= form_error('alternatif'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="penanganan">Penanganan</label>
                            <input type="text" name="penanganan" class="form-control" id="penanganan" value="<?= $no_info['penanganan']; ?>">
                            <small class="form-text text-danger"><?= form_error('penanganan'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right " >Ubah Data</button>
                        <a href="<?= base_url(); ?>masalah" class="btn btn-secondary float-right mx-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>