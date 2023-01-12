<div class="layout-container">

    <!-- Layout container -->
    <div class="layout-page">

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">

                                    <h5 class="card-title text-primary">Hallo <?php echo $_SESSION['nama_user'] ?>🎉</h5>
                                    <script type="text/javascript">
                                        //<![CDATA[
                                        var h = (new Date()).getHours();
                                        var m = (new Date()).getMinutes();
                                        var s = (new Date()).getSeconds();
                                        if (h >= 4 && h < 10) document.writeln("Selamat Pagi,");
                                        if (h >= 10 && h < 15) document.writeln("Selamat Siang,");
                                        if (h >= 15 && h < 18) document.writeln("Selamat Sore,");
                                        if (h >= 18 || h < 4) document.writeln("Selamat Malam,");
                                        //]]>
                                    </script>
                                    <p class="mb-4">
                                        Selamat Datang di Halaman <?php echo $_SESSION['level'] ?> <span class="fw-bold">Sistem Penilaian</span>
                                    </p>
                                    <hr>
                                    <!-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> -->
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/admin.png" alt="Credit Card" class="rounded">
                                        </div>

                                    </div>
                                    <span class="d-block mb-1">Jumlah Admin</span>
                                    <h3 class="card-title text-nowrap mb-2"><?= $jumlah_admin ?></h3>
                                    <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/penilai.png" alt="Credit Card" class="rounded">
                                        </div>

                                    </div>
                                    <span class="d-block mb-1">Jumlah Penilai</span>
                                    <h3 class="card-title text-nowrap mb-2"><?= $jumlah_penilai ?></h3>
                                    <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/instansi.png" alt="Credit Card" class="rounded">
                                        </div>

                                    </div>
                                    <span class="d-block mb-1">Jumlah Pegawai Ternilai</span>
                                    <h3 class="card-title text-nowrap mb-2"><?= $jumlah_instansi ?></h3>
                                    <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/opd.png" alt="Credit Card" class="rounded">
                                        </div>

                                    </div>
                                    <span class="d-block mb-1">Jumlah Jabatan</span>
                                    <h3 class="card-title text-nowrap mb-2"><?= $jumlah_opd ?></h3>
                                    <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/komponen.png" alt="Credit Card" class="rounded">
                                        </div>

                                    </div>
                                    <span class="d-block mb-1">Jumlah Komponen</span>
                                    <h3 class="card-title text-nowrap mb-2"><?= $jumlah_komponen ?></h3>
                                    <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/subkomponen.png" alt="Credit Card" class="rounded">
                                        </div>
                                    </div>
                                    <span class="d-block mb-1">Jumlah Sub Komponen</span>
                                    <h3 class="card-title text-nowrap mb-2"><?= $jumlah_subkomponen ?></h3>
                                    <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                            <div class="card-title">
                                                <h5 class="text-nowrap mb-2 text-center">Buku Manual Admin</h5>
                                                <p>Buku petunjuk (user manual book) pengelolaan data-data master SIPDISPUS.</p>
                                                <a href="<?php echo base_url('assets/bukupanduan/User Manual Siskip (Admin).pdf') ?>" target=”_blank” class="btn btn-sm btn-outline-primary">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- / Content -->

            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
</div>
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->
</body>

</html>