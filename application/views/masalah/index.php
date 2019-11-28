<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>masalah/tambah" class="btn btn-primary">Tambah
                Data Masalah Air</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data masalah_air.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Masalah Air</h3>
            <?php if (empty($masalah_air)) : ?>
                <div class="alert alert-danger" role="alert">
                data masalah air tidak ditemukan.
                </div>
            <?php endif; ?>
            
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-striped mb-0" id="dtVerticalScrollExample">
                    <thead>
                    <tr>
                        <th scope="col">Nomor Tagihan</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($masalah_air as $mas) : ?>
                    <tr>
                        <td><?= $mas['no_info']; ?></td>
                        <td><?= $mas['wilayah']; ?></td>
                        <td><a href="<?= base_url(); ?>masalah/hapus/<?= $mas['no_info']; ?>"
                        class="badge badge-danger float-right tombol-haapus">hapus</a>
                    <a href="<?= base_url(); ?>masalah/ubah/<?= $mas['no_info']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>masalah/detail/<?= $mas['no_info']; ?>"
                        class="badge badge-primary float-right">detail</a>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    
                </table>
                </div>
            </div>
        </div>
    </div>

</div>