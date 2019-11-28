<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data pelanggan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>pendaftar/tambah" class="btn btn-primary">Tambah
                Data Pendaftar</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data pendaftar.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Pendaftar</h3>
            <?php if (empty($pelanggan)) : ?>
                <div class="alert alert-danger" role="alert">
                data pendaftar tidak ditemukan.
                </div>
            <?php endif; ?>

<div class="table-wrapper-scroll-y my-custom-scrollbar">
  <table class="table table-bordered table-striped mb-0" id="dtVerticalScrollExample">
    <thead>
      <tr>
        <th scope="col">Nomor Daftar</th>
        <th scope="col">Nama Pelanggan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($pelanggan as $pell) : ?>
      <tr>
        <td><?= $pell['no_daftar']; ?></td>
        <td><?= $pell['nama']; ?></td>
        <td><a href="<?= base_url(); ?>pendaftar/hapus/<?= $pell['no_daftar']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>pendaftar/validasi/<?= $pell['no_daftar']; ?>"
                        class="badge badge-success float-right">validasi</a>
                    <a href="<?= base_url(); ?>pendaftar/detail/<?= $pell['no_daftar']; ?>"
                        class="badge badge-primary float-right">detail</a>
      </tr>
      <?php endforeach; ?>
    </tbody>
    
  </table>
  
</div>
        </div>
    </div>

</div>