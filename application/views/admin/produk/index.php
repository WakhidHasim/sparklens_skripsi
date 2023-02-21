<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><strong>Data Produk</strong></h1>
        <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addProduk">
            <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Data
        </button>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Deskripsi</th>
                            <th>Foto Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($produk as $value) { ?>
                            <tr>
                                <td style="width: 20px;"><?= $no++; ?></td>
                                <td><?= $value['nama']; ?></td>
                                <td><?= $value['harga']; ?></td>
                                <td><?= $value['stok']; ?></td>
                                <td><?= $value['harga']; ?></td>
                                <td style="text-align: center;">
                                    <img src="<?= base_url() ?>assets/images/produk/<?= $value['foto_produk'] ?>" style="width: 100px; height: 80px;">
                                </td>
                                <td style="width: 200px;">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editProduk<?= $value['id_produk'] ?>">
                                        Edit
                                    </button>
                                    <a href="<?= base_url(); ?>delete-produk/<?= $value['id_produk']; ?>" class="btn btn-danger btn-delete">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->

<!-- Modal Add -->
<div class="modal fade" id="addProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form role="form" action="<?= base_url('add-produk'); ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Data Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nama" class="form-label">Nama Produk</label>
                            <input type="text" id="nama" class="form-control" placeholder="Nama Produk" name="nama">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="harga" class="form-label">Harga Produk</label>
                            <input type="number" id="harga" class="form-control" placeholder="Harga Produk" name="harga">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="stok" class="form-label">Stok Produk</label>
                            <input type="number" id="stok" class="form-control" placeholder="Stok Produk" name="stok">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="foto">Foto Produk</label>
                            <img class="img-preview img-fluid mb-3">
                            <input type="file" class="form-control-file" id="foto" name="foto_produk" onchange="previewImage()">
                        </div>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit -->
<?php
foreach ($produk as $value) { ?>
    <div class="modal fade" id="#editProduk<?= $value['id_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form role="form" action="<?= base_url('add-produk'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Data Produk <?= $value['nama'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nama" class="form-label">Nama Produk</label>
                                <input type="text" id="nama" class="form-control" placeholder="Nama Produk" name="nama">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="harga" class="form-label">Harga Produk</label>
                                <input type="number" id="harga" class="form-control" placeholder="Harga Produk" name="harga">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="stok" class="form-label">Stok Produk</label>
                                <input type="number" id="stok" class="form-control" placeholder="Stok Produk" name="stok">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="foto">Foto Produk</label>
                                <img class="img-preview img-fluid mb-3">
                                <input type="file" class="form-control-file" id="foto" name="foto_produk" onchange="previewImage()">
                            </div>
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>