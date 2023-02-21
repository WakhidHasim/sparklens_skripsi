<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard'); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url() ?>assets/images/icon.png" alt="" width="50px" height="50px">
        </div>
        <div class="sidebar-brand-text mx-3">Sparklens</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= $this->uri->segment(1) === 'dashboard' ? 'active"' : '' ?>">
        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Nav Item - Produk -->
    <li class="nav-item <?= $this->uri->segment(1) === 'produk' ? 'active"' : '' ?>">
        <a class="nav-link" href="<?= base_url('produk'); ?>">
            <i class="fas fa-fw fa-cubes"></i>
            <span>Produk</span></a>
    </li>
    <!-- Nav Item - Pesanan -->
    <li class="nav-item <?= $this->uri->segment(1) === 'order' ? 'active"' : '' ?>">
        <a class="nav-link" href="<?= base_url('order'); ?>">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Pesanan</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->