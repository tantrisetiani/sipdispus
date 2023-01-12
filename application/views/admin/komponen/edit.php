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
                                <form action="<?= base_url('admin/komponen/edit/') ?><?= $komponen['id_komponen']; ?>" id="form-tambah" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_komponen" id="id_komponen" value="<?= $komponen['id_komponen']; ?>" />
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="komponen">Komponen</label>
                                        <input type="text" class="form-control" id="komponen" name="komponen" placeholder="Contoh : Perancanaan Kinerja" value="<?= $komponen['komponen'] ?>" />
                                        <?= form_error('komponen', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <hr>
                                    <a href="<?= base_url() . 'admin/komponen' ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i>&nbsp;&nbsp;Kembali</a>
                                    <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i>&nbsp;&nbsp;Simpan</button>
                                </form>
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

</html>