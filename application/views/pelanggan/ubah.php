<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Pelanggan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <!--input type="hidden" name="id" value="<?= $pelanggan['no_pelanggan']; ?>" readonly-->
                        <div class="form-group">
                            <label for="no_pelanggan">Nomor Pelanggan</label>
                            <input type="text" name="no_pelanggan" class="form-control" id="no_pelanggan" value="<?= $pelanggan['no_pelanggan']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('no_pelanggan'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" name="password" class="form-control" id="password" value="<?= $pelanggan['password']; ?>">
                            <small class="form-text text-danger"><?= form_error('password'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="no_ktp">Nomor KTP</label>
                            <input type="text" name="no_ktp" class="form-control" id="no_ktp" value="<?= $pelanggan['no_ktp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_ktp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $pelanggan['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $pelanggan['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $pelanggan['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="no_hp">Nomor HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $pelanggan['no_hp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="foto_ktp">Foto KTP</label>
                            <input type="text" name="foto_ktp" class="form-control" id="foto_ktp" value="<?= $pelanggan['foto_ktp']; ?>">
                            <small class="form-text text-danger"><?= form_error('foto_ktp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="pilih_tarif">Pilih Tarif</label>
                            <select class="form-control" id="pilih_tarif" name="pilih_tarif">
                                <?php foreach( $pilih_tarif as $pt ) : ?>
                                    <?php if( $pt == $pelanggan['pilih_tarif'] ) : ?>
                                        <option value="<?= $pt; ?>" selected><?= $pt; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $pt; ?>"><?= $pt; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>