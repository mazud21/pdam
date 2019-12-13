<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Tagihan
                </div>
                <div class="card-body">
                    <form action="" method="POST">

                        <div class="form-group">
                            <input type="hidden" type="text" name="no_tagihan" class="form-control" id="no_tagihan" value="<?= $tagihan_air['no_tagihan']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('no_tagihan'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <input type="hidden" type="text" name="no_daftar" class="form-control" id="no_daftar" value="<?= $tagihan_air['no_daftar']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('no_daftar'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="no_pelanggan">No Pelanggan</label>
                            <input type="text" name="no_pelanggan" class="form-control" id="no_pelangan" value="<?= $tagihan_air['no_pelanggan']; ?>"readonly>
                            <small class="form-text text-danger"><?= form_error('no_pelanggan'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama">Nama Pelanggan</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $tagihan_air['nama']; ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="biaya_air">Biaya Air</label>
                            <input type="text" name="biaya_air" class="form-control" id="biaya_air" value="<?= $tagihan_air['biaya_air']; ?>">
                            <small class="form-text text-danger"><?= form_error('biaya_air'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="bulan_bayar">Bulan Bayar</label>
                            <input type="text" name="bulan_bayar" class="form-control" id="bulan_bayar" value="<?= date("F"); ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('bulan_bayar'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="std_awal">Standar Awal</label>
                            <input type="text" name="std_awal" class="form-control" id="std_awal" value="<?= $tagihan_air['std_awal']; ?>">
                            <small class="form-text text-danger"><?= form_error('std_awal'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="std_akhir">Standar Akhir</label>
                            <input type="text" name="std_akhir" class="form-control" id="std_akhir" value="<?= $tagihan_air['std_akhir']; ?>">
                            <small class="form-text text-danger"><?= form_error('std_akhir'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="denda">Denda</label>
                            <input type="text" name="denda" class="form-control" id="denda" value="<?= $tagihan_air['denda']; ?>">
                            <small class="form-text text-danger"><?= form_error('denda'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="biaya_segel">Biaya Segel</label>
                            <input type="text" name="biaya_segel" class="form-control" id="biaya_segel" value="<?= $tagihan_air['biaya_segel']; ?>">
                            <small class="form-text text-danger"><?= form_error('biaya_segel'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="angs_air">Angsuran Air</label>
                            <input type="text" name="angs_air" class="form-control" id="angs_air" value="<?= $tagihan_air['angs_air']; ?>">
                            <small class="form-text text-danger"><?= form_error('angs_air'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="angs_non_air">Angsuran Non Air</label>
                            <input type="text" name="angs_non_air" class="form-control" id="angs_non_air" value="<?= $tagihan_air['angs_non_air']; ?>">
                            <small class="form-text text-danger"><?= form_error('angs_non_air'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="total_tagihan">Total Tagihan</label>
                            <input type="text" name="total_tagihan" class="form-control" id="total_tagihan" value="<?= $tagihan_air['total_tagihan']; ?>">
                            <small class="form-text text-danger"><?= form_error('total_tagihan'); ?></small>
                        </div>
                        
                        <div class="form-group">
                        <label for="status_bayar">Status Bayar</label><p>
                            <input type="radio" name="status_bayar" value="1" checked/> Belum Bayar
                            <input type="radio" name="status_bayar" value="0" /> Sudah Bayar
                            <small class="form-text text-danger"><?= form_error('status_bayar'); ?></small>
                        </div>
             
                        <div class="form-group">
                            <label for="tgl_bayar">Tanggal Bayar</label>
                            <input type="text" name="tgl_bayar" class="form-control" id="tgl_bayar" value="<?= date('Y-m-d'); ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('tgl_bayar'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data Tagihan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>