<div class="layout-container">
    <!-- Layout container -->
    <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0"><?= $title ?></h5>
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('admin/subkomponen/edit/') ?><?= $subkomponen['id_subkomponen'] ?>" id="form-tambah" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_subkomponen" id="id_subkomponen" value="<?= $subkomponen['id_subkomponen']; ?>" />

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="id_komponen">Komponen</label>
                                        <select class="form-control" name="id_komponen">
                                            <option value="">--Pilih Komponen--</option>
                                            <?php foreach ($komponen as $komp) : ?>
                                                <option <?= ($komp['id_komponen'] == $subkomponen['id_komponen'] ? 'selected=""' : '') ?> value="<?= $komp['id_komponen']; ?>"><?= $komp['komponen']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <?= form_error('id_komponen', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="subkomponen">Sub Komponen</label>
                                        <input type="text" class="form-control" id="subkomponen" name="subkomponen" placeholder="Contoh : Pengukuran Kinerja telah dilakukan" value="<?= $subkomponen['subkomponen'] ?>" />
                                        <?= form_error('subkomponen', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="kriteria">Kriteria</label>
                                        <textarea class="form-control" id="kriteria" name="kriteria"><?= $subkomponen['kriteria'] ?></textarea>
                                        <?= form_error('subkomponen', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="bobot">Bobot</label>
                                        <input type="number" class="form-control" id="bobot" name="bobot" placeholder="Contoh : 70" value="<?= $subkomponen['bobot'] ?>" onchange="setTwoNumberDecimal" min="0" max="100" step="0.5" />
                                        <?= form_error('bobot', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <hr>
                                    <a href="<?= base_url() . 'admin/subkomponen' ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i>&nbsp;&nbsp;Kembali</a>
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
<script>
    // Input kriteria
    CKEDITOR.replace('kriteria')

    // Input nilai dengan type data number dan value decimal
    function setTwoNumberDecimal(event) {
        this.value = parseFloat(this.value).toFixed(2);
    }
</script>
</body>

</html>