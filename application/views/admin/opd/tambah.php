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
                                <form action="<?= base_url('admin/opd/tambah') ?>" id="form-tambah" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="form-label" for="jabatan">Nama Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Contoh : Kepala Dinas" />
                                        <?= form_error('jabatan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="form-label" for="bidang">Bidang</label>
                                        <input type="text" class="form-control" id="bidang" name="bidang" placeholder="Contoh : Sekretaris Bidang Kearsipan" />
                                        <?= form_error('bidang', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Contoh : Nurhadi, S.Pd., M.Pd." />
                                        <?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="form-label" for="nip">NIP</label>
                                        <input type="text" class="form-control" id="nip" name="nip" placeholder="Contoh : 195808181984041001" />
                                        <?= form_error('nip', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <hr>
                                    <a href="<?= base_url() . 'admin/opd' ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i>&nbsp;&nbsp;Kembali</a>
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