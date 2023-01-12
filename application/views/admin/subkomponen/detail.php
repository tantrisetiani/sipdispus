<div class="layout-container">
    <!-- Layout container -->
    <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0"><?= $title ?></h5>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <div class="col-lg-8 col-md-4">
                                        <tr>
                                            <th> Komponen</th>
                                            <td><?= $detail->komponen; ?></td>
                                        </tr>
                                        <tr>
                                            <th> Sub Komponen</th>
                                            <td><?= $detail->subkomponen; ?></td>
                                        </tr>
                                        <tr>
                                            <th> Kriteria</th>
                                            <td><?= $detail->kriteria; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Bobot Nilai</th>
                                            <td><?= $detail->bobot; ?></td>
                                        </tr>
                                    </div>
                                </table>
                                </br>
                                <a href="<?= base_url() . 'admin/subkomponen' ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i>&nbsp;&nbsp;Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form -->



                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
</div>
<!-- / Layout wrapper -->
</body>

</html>