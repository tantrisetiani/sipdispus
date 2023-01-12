\<div class="layout-container">

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
                                    <img src="../assets/img/illustrations/penilai.svg" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- content Kolom Dashboard-->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/admin.png" alt="Credit Card" class="rounded">
                                        </div>

                                    </div>
                                    <span class="d-block mb-1">Jumlah Jabatan</span>
                                    <h3 class="card-title text-nowrap mb-0"><?= $jumlah_opd ?></h3>
                                    <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/admin.png" alt="Credit Card" class="rounded">
                                        </div>

                                    </div>
                                    <span class="d-block mb-1">Pegawai Ternilai</span>
                                    <h3 class="card-title text-nowrap mb-0"><?= $jumlah_penilaian ?></h3>
                                    <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/komponen.png" alt="Credit Card" class="rounded">
                                        </div>

                                    </div>
                                    <span class="d-block mb-1">Petunjuk Pengisian Sistem Penilaian</span>

                                    <a href="<?php echo base_url('assets/bukupanduan/PETUNJUK PENGISIAN LKE AKIP.pdf') ?>" target=”_blank” class=" btn btn-sm btn-outline-primary">Lihat</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/komponen.png" alt="Credit Card" class="rounded">
                                        </div>

                                    </div>
                                    <span class="d-block mb-1">Tabel Interpretasi Sistem Penilaian</span>

                                    <a href="<?php echo base_url('assets/bukupanduan/TABEL INTERPRETASI HASIL EVALUASI LAKIP.pdf') ?>" target=”_blank” class=" btn btn-sm btn-outline-primary">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- notification/alert -->
                <?= $this->session->flashdata('message'); ?>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Data Penilaian Jabatan</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table " id="dataTable" width="100%" cellspacing="0">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Penilaian</th>
                                        <th>Penilai</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php $no = 1; ?>
                                    <?php foreach ($nilai as $nilai) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $nilai['nama_lengkap'] ?></td>
                                            <td><?= $nilai['tanggal'] ?></td>
                                            <td>
                                                <ul class="list-unstyled users-list">
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="<?= $nilai['nama_user'] ?>">
                                                        <img src="<?php echo base_url(); ?>assets/img/profil/<?= $nilai['foto_profil']; ?>" alt="Avatar" class="rounded-circle">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?= $nilai['hasil'] ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?= base_url('penilai/penilaian/detail/'); ?><?= $nilai['id_opd'] ?>"><i class="bx bx-edit-alt me-1"></i>Detail Nilai</a>
                                                        <a class="dropdown-item" onclick="deleteConfirm('<?= base_url('penilai/penilaian/hapus/' . $nilai['id_opd']) ?>')" data-bs-toggle="modal" data-bs-target="#deleteModal" href="#!"><i class="bx bx-trash me-1"></i> Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
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

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapus Data Penilaian?</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak dapat dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>