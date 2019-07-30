<script>
    function copytextbox() {
        document.getElementById('message').value = 
        "Nomor Pelanggan = " + document.getElementById('no_pelanggan').value 
        + " || Password = " + document.getElementById('password').value
    }
</script>

<div class="container">
<div class="row mt-3">
  <div class="col-md-6">
  <div class="card">
                            <div class="card-header">
                                Form Validasi Pendaftar
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <input type="hidden" name="no_daftar" value="<?= $pelanggan['no_daftar']; ?>" readonly>
                                    <div class="form-group">
                                        <label for="no_pelanggan">Nomor Pelanggan</label>
                                        <input type="text" name="no_pelanggan" class="form-control" id="no_pelanggan" 
                                            value="<?= 
                                                $no_pelanggan+1;
                                            ?>" readonly>
                                        <small class="form-text text-danger"><?= form_error('no_pelanggan'); ?></small>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" name="password" class="form-control" id="password" 
                                            value="<?= 
                                                random_string('numeric', 8); 
                                            ?>" onclick="copytextbox1();" readonly>
                                        <small class="form-text text-danger"><?= form_error('password'); ?></small>
                                    </div>

                                    <button type="button" class="btn btn-large btn-block btn-success" onclick="copytextbox();">Konfirmasi</button>
                                        <span><i>*Klik tombol diatas untuk validasi ke email</i></span>

                                    <div class="form-group">
                                        <label for="message">Message to Email</label>
                                        <input type="text" name="message" class="form-control" id="message"  readonly>
                                        <small class="form-text text-danger">
                                        <?= form_error('message'); ?></small>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" value="<?= $pelanggan['email']; ?>"readonly>
                                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_ktp">Nomor KTP</label>
                                        <input type="text" name="no_ktp" class="form-control" id="no_ktp" value="<?= $pelanggan['no_ktp']; ?>" readonly>
                                        <small class="form-text text-danger"><?= form_error('no_ktp'); ?></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $pelanggan['nama']; ?>"readonly>
                                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $pelanggan['alamat']; ?>"readonly>
                                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="no_hp">Nomor HP</label>
                                        <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $pelanggan['no_hp']; ?>"readonly>
                                        <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="foto_ktp">Foto KTP</label><p>
                                        <img src="<?= base_url('./images/'.$pelanggan['foto_ktp'])?>" 
                                        width='200px' height='125px'>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="pilih_tarif">Pilihan Tarif</label>
                                        <input type="text" name="pilih_tarif" class="form-control" id="pilih_tarif" value="<?= $pelanggan['pilih_tarif']; ?>"readonly>
                                    </div>
                                    <button type="submit" name="validasi" id="validasi" class="btn btn-primary float-right">Validasi Pendaftar</button>
                                    <a href="<?= base_url(); ?>pendaftar" class="btn btn-primary float-right mx-2" >Kembali</a>
                                </form>
                            </div>
                        </div>
  </div>