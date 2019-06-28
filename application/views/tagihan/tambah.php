<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Tagihan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="tagihan">Nomor Pelanggan</label>
                                <select required name="kode_gejala">
                                <option value="">-- Nomor Pelanggan --</option>
                                    <?php                                
                                        foreach ($pelanggan as $row) {  
                                        echo "<option value='".$row->no_daftar."'>".$row->no_pelanggan."</option>";
                                        }
                                        echo"
                                        </select>"
                                    ?>
                            <!--small class="form-text text-danger"><?= form_error('tagihan'); ?></small-->
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Pelanggan</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $row->nama ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $row->alamat ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">Nomor HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $row->no_hp ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="biaya_air">Biaya Air</label>
                            <input type="text" name="biaya_air" class="form-control" id="biaya_air">
                            <small class="form-text text-danger"><?= form_error('biaya_air'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="bulan_bayar">Bulan Bayar</label>
                            <input type="text" name="bulan_bayar" class="form-control" id="bulan_bayar">
                            <small class="form-text text-danger"><?= form_error('bulan_bayar'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="std_awal">Standar Awal</label>
                            <input type="text" name="std_awal" class="form-control" id="std_awal">
                            <small class="form-text text-danger"><?= form_error('std_awal'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="std_akhir">Standar Akhir</label>
                            <input type="text" name="std_akhir" class="form-control" id="std_akhir">
                            <small class="form-text text-danger"><?= form_error('std_akhir'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="denda">Denda</label>
                            <input type="text" name="denda" class="form-control" id="denda">
                            <small class="form-text text-danger"><?= form_error('denda'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="biaya_segel">Biaya Segel</label>
                            <input type="text" name="biaya_segel" class="form-control" id="biaya_segel">
                            <small class="form-text text-danger"><?= form_error('biaya_segel'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="angs_air">Angsuran Air</label>
                            <input type="text" name="angs_air" class="form-control" id="angs_air">
                            <small class="form-text text-danger"><?= form_error('angs_air'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="angs_non_air">Angsuran Non Air</label>
                            <input type="text" name="angs_non_air" class="form-control" id="angs_non_air">
                            <small class="form-text text-danger"><?= form_error('angs_non_air'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="total_tagihan">Total Tagihan</label>
                            <input type="text" name="total_tagihan" class="form-control" id="total_tagihan">
                            <small class="form-text text-danger"><?= form_error('total_tagihan'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="status_bayar">Status Bayar</label>
                            <input type="text" name="status_bayar" class="form-control" id="status_bayar">
                            <small class="form-text text-danger"><?= form_error('status_bayar'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="tgl_bayar">Tanggal Bayar</label>
                            <input type="text" name="tgl_bayar" class="form-control" id="tgl_bayar" value="<?php echo date('d-m-Y'); ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('tgl_bayar'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data Tagihan</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>