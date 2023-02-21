<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center" style="margin-top: 110px">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?= base_url(); ?>assets/images/logo.png" alt="Logo Sparklens" class="img-fluid mb-3" width="250" height="100">
                                </div>
                                <?php
                                if ($this->session->flashdata('gagal')) { ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= $this->session->flashdata('gagal'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php } else if ($this->session->flashdata('berhasil')) { ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?= $this->session->flashdata('berhasil'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php } ?>
                                <form class="user" method="POST" action="<?= base_url('login') ?>">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" autofocus>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-green btn-user btn-block">
                                        Masuk
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <h6 style="font-size: 15px;">Belum Punya Akun ?
                                        <a href="<?= base_url('register'); ?>">
                                            Daftar
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>