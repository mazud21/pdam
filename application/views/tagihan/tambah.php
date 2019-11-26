<script>
    var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
    </script>
    <script src="<?php echo base_url("js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
    <script src="<?php echo base_url("js/config.js"); ?>"></script> <!-- Load file process.js -->

<script>
    function sum() {
      var biaya_air = document.getElementById('biaya_air').value;
      var denda = document.getElementById('denda').value;
      var biaya_segel = document.getElementById('biaya_segel').value;
      var angs_air = document.getElementById('angs_air').value;
      var angs_non_air = document.getElementById('angs_non_air').value;
      var total_tagihan = parseInt(biaya_air) + parseInt(denda) 
                        + parseInt(biaya_segel) + parseInt(angs_air) 
                        + parseInt(angs_non_air);
      if (!isNaN(total_tagihan)) {
         document.getElementById('total_tagihan').value = total_tagihan;
      }
}
</script>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Tagihan
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="no_pelanggan">No Pelanggan</label>
                                    <input type="text" class="form-control" placeholder="Cari nomor pelanggan . . ." name="no_pelanggan" id="no_pelanggan">
                                    <button id=btn-search class="btn btn-primary" type="button">Cari</button>
                                    <span id="loading">LOADING...</span>    
                                </div>
                                
                            </div>
                        </div>
                        
                        <!--div class="form-group">
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
                            <small class="form-text text-danger"><?= form_error('tagihan'); ?></small>
                        </div-->

                        <div class="form-group">
                            <input type="hidden" type="text" name="no_daftar" class="form-control" id="no_daftar" readonly>
                            <small class="form-text text-danger"><?= form_error('no_daftar'); ?></small>
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="nama">Nama Pelanggan</label>
                            <input type="text" name="nama" class="form-control" id="nama" readonly>
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="biaya_air">Biaya Air</label>
                            <input type="text" name="biaya_air" class="form-control" id="biaya_air" onchange="sum();" placeholder="0">
                            <small class="form-text text-danger"><?= form_error('biaya_air'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="bulan_bayar">Bulan Bayar</label>
                            <input type="text" name="bulan_bayar" class="form-control" id="bulan_bayar" value="<?= date("F"); ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('bulan_bayar'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="std_awal">Standar Awal</label>
                            <input type="text" name="std_awal" class="form-control" id="std_awal" placeholder="0">
                            <small class="form-text text-danger"><?= form_error('std_awal'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="std_akhir">Standar Akhir</label>
                            <input type="text" name="std_akhir" class="form-control" id="std_akhir" placeholder="0">
                            <small class="form-text text-danger"><?= form_error('std_akhir'); ?></small>
                        </div>

<?php
$denda = 5000;

$tgl = date('Y-m-d');
$tglBayar = substr($tgl, 8, 2);

//cek tanggal bayar untuk menentukan denda
if ($tglBayar > 20) {
    $d = $denda;
} else {
    $d = 0;
}
?>

                        <div class="form-group">
                            <label for="denda">Denda</label>
                            <input type="text" name="denda" class="form-control" id="denda" placeholder="0" value=<?= $d; ?> onchange="sum();" readonly>
                            <small class="form-text text-danger"><?= form_error('denda'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="biaya_segel">Biaya Segel</label>
                            <input type="text" name="biaya_segel" class="form-control" id="biaya_segel" placeholder="0" onchange="sum();">
                            <small class="form-text text-danger"><?= form_error('biaya_segel'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="angs_air">Angsuran Air</label>
                            <input type="text" name="angs_air" class="form-control" id="angs_air" placeholder="0" onchange="sum();">
                            <small class="form-text text-danger"><?= form_error('angs_air'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="angs_non_air">Angsuran Non Air</label>
                            <input type="text" name="angs_non_air" class="form-control" id="angs_non_air" placeholder="0" onchange="sum();">
                            <small class="form-text text-danger"><?= form_error('angs_non_air'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="total_tagihan">Total Tagihan</label>
                            <input type="text" name="total_tagihan" class="form-control" id="total_tagihan" readonly>
                            <small class="form-text text-danger"><?= form_error('total_tagihan'); ?></small>
                        </div>
                        
                        <div class="form-group">
                        <label for="status_bayar">Status Bayar</label><p>
                            <input type="radio" name="status_bayar" value="belum" checked<?PHP if(!empty($status_bayar) && $status_bayar == "belum") echo 'checked'; ?> /> Belum Bayar
                            <input type="radio" name="status_bayar" value="sudah" disabled<?PHP if(!empty($status_bayar) && $status_bayar == "sudah") echo 'checked'; ?> /> Sudah Bayar
                        <br>
                            <small class="form-text text-danger"><?= form_error('status_bayar'); ?></small-->
                        </div>
<!--                        
                        <div class="form-group">
                            <label for="tgl_bayar">Tanggal Bayar</label>
                            <input type="text" name="tgl_bayar" class="form-control" id="tgl_bayar" value="<?php echo date('d-m-Y'); ?>" readonly>
                            <small class="form-text text-danger"><?= form_error('tgl_bayar'); ?></small>
                        </div>
-->
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data Tagihan</button>
                        <a href="<?= base_url(); ?>tagihan" class="btn btn-secondary float-right mx-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>