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
				<li class="menu-item ">
				<li class="menu-item <?php echo activate_menu('dashboard'); ?>">
					<a href=" <?php echo site_url('admin/dashboard') ?>" class="menu-link">
						<i class="menu-icon tf-icons bx bx-home-circle"></i>
						<div data-i18n="Dashboard">Dashboard</div>
					</a>
				</li>
				</li>

				<li class="menu-header small text-uppercase">
					<span class="menu-header-text">Manajemen Jabatan</span>
				</li>
				<li class="menu-item <?php echo activate_menu('opd'); ?>">
					<a href="<?php echo site_url('admin/opd') ?>" class="menu-link">
						<i class="menu-icon tf-icons bx bx-dock-top"></i>
						<div data-i18n="OPD">Jabatan</div>
					</a>
				</li>

				<!-- Components -->
				<li class="menu-header small text-uppercase"><span class="menu-header-text">Manajemen Penilaian</span></li>

				<!-- Kriteria Penilaian -->
				<li class="menu-item">
					<a href="javascript:void(0)" class="menu-link menu-toggle">
						<i class="menu-icon tf-icons bx bx-copy"></i>
						<div data-i18n="Kriteria Penilaian">Kriteria Penilaian</div>
					</a>
					<ul class="menu-sub">
						<li class="menu-item <?php echo activate_menu('komponen'); ?>">
							<a href="<?= site_url('admin/komponen') ?>" class="menu-link">
								<div data-i18n="Komponen">Komponen</div>
							</a>
						</li>
						<li class="menu-item <?php echo activate_menu('subkomponen'); ?>">
							<a href="<?= site_url('admin/subkomponen') ?>" class="menu-link">
								<div data-i18n="Sub Komponen">Sub Komponen</div>
							</a>
						</li>
					</ul>
				</li>
				<!-- Bobot Nilai -->


				<!-- Manajemen Users -->
				<li class="menu-header small text-uppercase"><span class="menu-header-text">Manajamen Users</span></li>
				<!-- Users -->
				<li class="menu-item menu-item <?php echo activate_menu('users'); ?>">
					<a href="javascript:void(0)" class="menu-link menu-toggle">
						<i class="menu-icon tf-icons bx bx-user"></i>
						<div data-i18n="Users">Users</div>
					</a>
					<ul class="menu-sub">
						<li class="menu-item <?php echo activate_menu('admin'); ?>">
							<a href="<?php echo site_url('admin/admin') ?>" class="menu-link">
								<div data-i18n="Perfect Scrollbar">Admin</div>
							</a>
						</li>
						<li class="menu-item <?php echo activate_menu('penilai'); ?>">
							<a href="<?php echo site_url('admin/penilai') ?>" class="menu-link">
								<div data-i18n="Text Divider">Penilai</div>
							</a>
						</li>
						<li class="menu-item <?php echo activate_menu('instansi'); ?>">
							<a href="<?php echo site_url('admin/instansi') ?>" class="menu-link">
								<div data-i18n="Text Divider">Ternilai</div>
							</a>
						</li>
					</ul>
				</li>

			

		</aside>
		<!-- / Menu -->