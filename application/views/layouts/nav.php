<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('') ?>" class="brand-link">
        <img src="<?= base_url('assets/img/kotalama-crop.jpeg') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>Kotalama Koffie</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/template/admin') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= ucfirst($this->fungsi->user_login()->username); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">MAIN NAVIGATION</li>
                <li class="nav-item">
                    <a href="<?= site_url('home') ?>" class="nav-link <?= $this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('supplier') ?>" class="nav-link <?= $this->uri->segment(1) == 'supplier' ? 'active' : '' ?>">
                        <i class="fas fa-truck nav-icon"></i>
                        <p>Supliers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('customer') ?>" class="nav-link <?= $this->uri->segment(1) == 'customer' ? 'active' : '' ?>">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?= $this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url('category') ?>" class="nav-link <?= $this->uri->segment(1) == 'category' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        <li class="nav-item">
                            <a href="<?= site_url('unit') ?>" class="nav-link <?= $this->uri->segment(1) == 'unit' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Units</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('item') ?>" class="nav-link <?= $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Items</p>
                            </a>
                        </li>
                </li>
            </ul>
            </li>
            <li class="nav-item has-treeview <?= $this->uri->segment(1) == 'sales' || $this->uri->segment(2) == 'in' || $this->uri->segment(2) == 'out' ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link <?= $this->uri->segment(1) == 'sales' || $this->uri->segment(2) == 'in' || $this->uri->segment(2) == 'out' ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                    <p>
                        Transaction
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= site_url('sales') ?>" class="nav-link  <?= $this->uri->segment(1) == 'sales' ? 'active' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sales</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('stock/in'); ?>" class="nav-link <?= $this->uri->segment(2) == 'in' ? 'active' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Stock In</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('stock/out'); ?>" class="nav-link <?= $this->uri->segment(2) == 'out' ? 'active' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Stock Out</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview <?= $this->uri->segment(2) == 'sale_report' || $this->uri->segment(2) == 'stock_report' || $this->uri->segment(2) == 'report_sale' ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link <?= $this->uri->segment(2) == 'sale_report' || $this->uri->segment(2) == 'stock_report' || $this->uri->segment(2) == 'report_sale' ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Reports
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= site_url('reports/sale_report'); ?>" class="nav-link <?= $this->uri->segment(2) == 'sale_report' ? 'active' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sales</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('reports/stock_report') ?>" class="nav-link <?= $this->uri->segment(2) == 'stock_report' ? 'active' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Stocks</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('reports/report_sale') ?>" class="nav-link <?= $this->uri->segment(2) == 'report_sale' ? 'active' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                </ul>
            </li>
            <?php if ($this->fungsi->user_login()->level == 1) { ?>
                <li class="nav-header">SETTINGS</li>
                <li class="nav-item">
                    <a href="<?= site_url('user') ?>" class="nav-link">
                        <i class="fas fa-user nav-icon"></i>
                        <p>Users</p>
                    </a>
                </li>
            <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>