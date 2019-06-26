<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Tagihan Air
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <!--input type="hidden" name="id" value="<?= $tagihan_air['tagihan_air']; ?>" readonly-->
                        <div class="form-group">
                            <label for="tagihan_air">Nomor tagihan_air</label>
                            <input type="text" name="tagihan_air" class="form-control" id="tagihan_air" value="<?= $tagihan_air['tagihan_air']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('tagihan_air'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" name="password" class="form-control" id="password" value="<?= $tagihan_air['password']; ?>">
                            <small class="form-text text-danger"><?= form_error('password'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="no_ktp">Nomor KTP</label>
                            <input type="text" name="no_ktp" class="form-control" id="no_ktp" value="<?= $tagihan_air['no_ktp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_ktp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $tagihan_air['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $tagihan_air['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $tagihan_air['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="no_hp">Nomor HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $tagihan_air['no_hp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="foto_ktp">Foto KTP</label>
                            <input type="text" name="foto_ktp" class="form-control" id="foto_ktp" value="<?= $tagihan_air['foto_ktp']; ?>">
                            <small class="form-text text-danger"><?= form_error('foto_ktp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="pilih_tarif">Pilih Tarif</label>
                            <select class="form-control" id="pilih_tarif" name="pilih_tarif">
                                <?php foreach( $pilih_tarif as $pt ) : ?>
                                    <?php if( $pt == $tagihan_air['pilih_tarif'] ) : ?>
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