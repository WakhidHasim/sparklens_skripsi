<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-center">
            <div class="col-first">
                <h1>Semua Produk</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<section class="produk" id="produk">
    <div class="single-product-slider">
        <div class="container"> <br><br><br>
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <!-- single product -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="<?= base_url('assets/images/produk/') ?><?= $product['foto_produk'] ?>" alt="IMG-PRODUCT">
                            <div class="product-details">
                                <a href="<?= base_url(); ?>detail-produk/<?= $product['id_produk']; ?>" class="btn in-card">
                                    <h6>
                                        <?= $product['nama'] ?>
                                    </h6>
                                </a>
                                <div class="price">
                                    <h6>Rp. <?= $product['harga'] ?>,-</h6>
                                    <h6 class="l-through">Rp. 999.999,-</h6>
                                </div>
                                <div class="prd-bottom">
                                    <a href="<?= base_url('#'); ?>" class="social-info">
                                        <span class="ti-shopping-cart"></span>
                                        <p class="hover-text">Keranjang</p>
                                    </a>
                                    <a href="<?= base_url('#'); ?>" class="social-info">
                                        <span class="lnr lnr-camera"></span>
                                        <p class="hover-text">Coba AR!</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
            <div class="row justify-content-center mt-4 mb-5">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</section>