    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
        <div class="container-xxl d-flex flex-wrap justify-content-center">
            <div class="mb-2 mb-md-0">
                <strong> © Dinas Perpustakaan dan Kearsipan Kabupaten Madiun <script>
                        document.write(new Date().getFullYear());
                    </script></strong>
            </div>
        </div>
    </footer>
    <!-- / Footer -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('assets/'); ?>vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/js/bootstrap.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url('assets/'); ?>vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url('assets/'); ?>vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('assets/'); ?>js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url('assets/'); ?>js/dashboards-analytics.js"></script>

    <!-- Datatables -->
    <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery-3.5.1.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

    </html>