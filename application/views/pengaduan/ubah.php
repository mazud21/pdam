<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tanggapi Pengaduan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" id="id_pengaduan" name="id_pengaduan" value="<?= $pengaduan['id_pengaduan']; ?>" readonly>
                        <input type="hidden" id="no_daftar" name="no_daftar" value="<?= $pengaduan['no_daftar']; ?>" readonly>

                        <input type="hidden" id="regId" name="regId" value="<?= $pengaduan['regId']; ?>" readonly>

                        <div class="form-group">
                            <label for="no_pelanggan">No Pelangan</label>
                            <input type="text" name="no_pelanggan" class="form-control" id="no_pelanggan" value="<?= $pengaduan['no_pelanggan']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('no_pelanggan'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama">Nama Pelanggan</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $pengaduan['nama']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="alamat">Alamat Pelanggan</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $pengaduan['alamat']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Nomor Telepon Pelanggan</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $pengaduan['no_hp']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="keluhan">Keluhan Pelanggan</label>
                            <input type="text" name="keluhan" class="form-control" id="keluhan" value="<?= $pengaduan['keluhan']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('keluhan'); ?></small>
                        </div>

                        <div class="form-group">
                             <label for="tanggapan">Tanggapan</label>
                             <input type="input" name="tanggapan" class="form-control" id="tanggapan" placeholder="Silakan isi tangapan..." rows="5" value="<?= $pengaduan['tanggapan']; ?>">
                             <small class="form-text text-danger"><?= form_error('tanggapan'); ?></small>
                        </div>
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right" >Tanggapi Keluhan</button>
                        <a href="<?= base_url(); ?>pengaduan" class="btn btn-secondary float-right mx-2" >Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>