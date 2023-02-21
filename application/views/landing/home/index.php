<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <!-- single-slide -->
                <div class="row single-slide align-items-center d-flex">
                    <div class="col-lg-5 col-md-6">
                        <div class="banner-content">
                            <h1 style="color: #FFFFFF">Masa Depan <br>Berbelanja!</h1>
                            <p style="color: #FFFF00">Rasakan pengalaman baru dalam berbelanja dengan mencoba
                                produk secara real-time dengan menggunakan teknologi Augmented Reality
                                yang dapat anda gunakan di semua produk kacamata SparkLens.</p>
                            <!-- <div class="add-bag d-flex align-items-center">
                                <a class="add-btn" href="<?= base_url('#produk'); ?>"><span
                                        class="lnr lnr-chevron-down"></span></a>
                                <span class="add-text text-uppercase" style="color: #FFFFFF">Eksplor Sekarang</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner-img">
                            <img class="img-fluid" src="assets/user/img/banner/banner-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End banner Area -->

<!-- single product slide -->
<br><br><br>
<section class="produk" id="produk">
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Produk Terbaru</h1>
                        <p>Klik ikon kamera untuk mencoba produk secara real-time menggunakan face tracking Augmented
                            Reality</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($new_produk as $new) { ?>
                    <!-- single product -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="<?= base_url('assets/images/produk/') ?><?= $new['foto_produk'] ?>" alt="IMG-PRODUCT">
                            <div class="product-details">
                                <a href="<?= base_url('home/detailProduk/') . $new['id_produk']; ?>" class="btn in-card">
                                    <h6><?= $new['nama'] ?></h6>
                                </a>
                                <div class="price">
                                    <h6>Rp. <?= $new['harga'] ?>,-</h6>
                                    <h6 class="l-through">Rp. 999.999,-</h6>
                                </div>
                                <div class="prd-bottom">
                                    <a href="<?= base_url('#'); ?>" class="social-info">
                                        <span class="ti-shopping-cart"></span>
                                        <p class="hover-text">Keranjang</p>
                                    </a>
                                    <a href="<?= base_url('arpage'); ?>" class="social-info">
                                        <span class="lnr lnr-camera"></span>
                                        <p class="hover-text">Coba AR!</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="<?= base_url('all_produk'); ?>" class="primary-btn submit_btn">Semua Produk</a>
        </div>
    </div>
    </div>
    <br>
    <br>
</section>
<!-- end product Area -->