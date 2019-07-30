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
            <a href="<?= base_url(); ?>pelanggan/tambah" class="btn btn-primary">Tambah
                Data Pelanggan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data pelanggan.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Pelanggan</h3>
            <?php if (empty($pelanggan)) : ?>
                <div class="alert alert-danger" role="alert">
                data pelanggan tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($pelanggan as $pell) : ?>
                <li class="list-group-item">
                    <?= $pell['no_pelanggan']; ?>
                    <?= $pell['nama']; ?>
                    <a href="<?= base_url(); ?>pelanggan/hapus/<?= $pell['no_pelanggan']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>pelanggan/ubah/<?= $pell['no_pelanggan']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>pelanggan/detail/<?= $pell['no_pelanggan']; ?>"
                        class="badge badge-primary float-right">detail</a>
                        
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>