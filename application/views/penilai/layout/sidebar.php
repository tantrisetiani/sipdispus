<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">

        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="" class="app-brand-link">
                    <img class="img-profile" src="<?= base_url(); ?>assets/img/kabmadiun.png" width="43px" height="43px" />
                    <span class="app-brand-text demo menu-text fw-bolder ms-2" style="text-transform: uppercase;">SIPDISPUS</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                
                <!-- Dashboard -->
                <li class="menu-item">
                <li class="menu-item <?php echo ($activeTab == "dashboard") ? "active" : ""; ?>">
                    <a href=" <?= site_url('penilai/dashboard') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Dashboard">Dashboard</div>
                    </a>
                </li>
                </li>
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Penilaian Kinerja</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Penilaian</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                        <li class="menu-item <?php echo ($activeTab == "opd") ? "active" : ""; ?>">
                            <!-- <li class="menu-item <?php echo activate_menu('opd'); ?>"> -->
                            <a href="<?= site_url('penilai/penilaian/opd') ?>" class="menu-link">
                                <div data-i18n="Account">List Jabatan</div>
                            </a>
                        </li>
                </li>
                <li class="menu-item">
                <li class="menu-item <?php echo ($activeTab == "penilaian") ? "active" : ""; ?>">
                    <a href="<?= site_url('penilai/penilaian/') ?>" class="menu-link">
                        <div data-i18n="Notifications">Input Nilai</div>
                    </a>
                </li>
                </li>
                <!-- <li class="menu-item <?php echo activate_menu('penilaian/view'); ?>">
                            <a href="<?= site_url('penilai/penilaian/view') ?>" class="menu-link">
                                <div data-i18n="Connections">View Nilai</div>
                            </a>
                        </li> -->
            </ul>
            </li>
        </aside>
        <!-- / Menu -->