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
                                <form action="<?= base_url('admin/admin/tambah') ?>" id="form-tambah" method="POST" enctype="multipart/form-data">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="nama_user">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Contoh : Nur Hadi" />
                                        <?= form_error('nama_user', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="usernme">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Contoh : nrhd_" />
                                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="mb-3 form-password-toggle validate-input" data-validate="Masukkan password">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password" aria-describedby="password">
                                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                        </div>
                                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="form-label">
                                            <label for="file">Pilih Gambar (Maksimal ukuran gambar 10Mb)</label>
                                            <br>
                                            <br>
                                            <div class="custom-file">
                                                <input type="file" name="foto_profil" class="form-control" id="file">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="level">Level</label>
                                        <option type="Admin" class="form-control"> Admin</option>
                                    </div>

                                    <hr>
                                    <a href="<?= base_url() . 'admin/admin' ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i>&nbsp;&nbsp;Kembali</a>
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
<!-- show hide password -->
<script>
    function password_show_hide() {
        var x = document.getElementById("password");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }
    JavaScript
</script>