<div class="layout-container">

    <!-- Layout container -->
    <div class="layout-page">

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Stripped Rows -->
                <div class="card">
                    <h5 class="card-header gy-3"><?= $title; ?></h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jabatan</th>
                                        <th>Nama Lengkap</th>
                                        <th>NIP</th>

                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php $no = 1; ?>
                                    <?php foreach ($opd as $o) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $o['jabatan'] ?></td>
                                            <td><?= $o['nama_lengkap'] ?></td>
                                            <td><?= $o['nip'] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->
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

</html>