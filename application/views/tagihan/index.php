<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>tagihan/tambah" class="btn btn-primary">Tambah
                Data tagihan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data tagihan.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar tagihan</h3>
            <?php if (empty($tagihan_air)) : ?>
                <div class="alert alert-danger" role="alert">
                data tagihan tidak ditemukan.
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
                    <?php foreach ($tagihan_air as $tag) : ?>
                    <tr>
                        <td><?= $tag['no_tagihan']; ?></td>
                        <td><?= $tag['nama']; ?></td>
                        <td><a href="<?= base_url(); ?>tagihan/hapus/<?= $tag['no_tagihan']; ?>"
                                class="badge badge-danger float-right tombol-hapus">hapus</a>
                            <a href="<?= base_url(); ?>tagihan/ubah/<?= $tag['no_tagihan']; ?>"
                                class="badge badge-success float-right">ubah</a>
                            <a href="<?= base_url(); ?>tagihan/detail/<?= $tag['no_tagihan']; ?>"
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