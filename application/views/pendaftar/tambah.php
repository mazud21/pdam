<div class="container">
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pelanggan
                </div>
                <div class="card-body">
                <?= form_open("pendaftar/tambah", 
                            array('enctype'=>'multipart/form-data')); ?>
                    <form action="" method="post">

                        <div class="form-group">
                            <label for="no_ktp">Nomor KTP</label>
                            <input type="text" name="no_ktp" class="form-control" id="no_ktp">
                            <small class="form-text text-danger"><?= form_error('no_ktp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="no_hp">Nomor HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            
                            <label for="foto_ktp">Foto KTP</label>
                            <input type="file" name="foto_ktp" class="form-control" id="foto_ktp">
                            
                        </div>

                        <div class="form-group">
                            <label for="pilih_tarif">Pilih Tarif</label>
                            <select class="form-control" id="pilih_tarif" name="pilih_tarif">
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="A3">A3</option>
                                <option value="B1">B1</option>
                                <option value="B2">B2</option>
                                <option value="B3">B3</option>
                            </select>
                        </div>

                        <input type="submit" name="tambah" class="btn btn-primary float-right" value='Tambah Pendaftar'></button>
                        <a href="<?= base_url(); ?>pendaftar" class="btn btn-primary float-right mx-2" >Kembali</a>
                    </form>
                    <?= form_close(); ?>
                </div>
            </div>


        </div>
    </div>

</div>