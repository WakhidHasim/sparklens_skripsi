<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <!-- Produk -->
        <div class="col-xl-3 col-md-3 mb-3">
            <div class="card border-left-success shadow-lg">
                <div class="card-body px-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-0">
                            <div class="h6 text-success">
                                Produk</div>
                            <div class="h4 mb-0 text-gray-800">
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cubes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-12">
                            <a href="<?= base_url('Produk'); ?>" class="badge badge-success float-right"><i class="far fa-eye nav-icon"></i>
                                Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pesanan -->
        <div class="col-xl-3 col-md-3 mb-3">
            <div class="card border-left-primary shadow-lg">
                <div class="card-body px-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-0">
                            <div class="h6 text-primary">
                                Pesanan</div>
                            <div class="h4 mb-0 text-gray-800">
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-12">
                            <a href="<?= base_url('buku-tamu'); ?>" class="badge badge-primary float-right"><i class="far fa-eye nav-icon"></i>
                                Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->