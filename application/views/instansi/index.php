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
                                        var h = (new Date()).getHours();
                                        var m = (new Date()).getMinutes();
                                        var s = (new Date()).getSeconds();
                                        if (h >= 4 && h < 10) document.writeln("Selamat Pagi,");
                                        if (h >= 10 && h < 15) document.writeln("Selamat Siang,");
                                        if (h >= 15 && h < 18) document.writeln("Selamat Sore,");
                                        if (h >= 18 || h < 4) document.writeln("Selamat Malam,");
                                    </script>
                                    <p class="mb-4">
                                        Selamat Datang di Halaman <?php echo $_SESSION['level'] ?> <span class="fw-bold">Sistem Penilaian</span>
                                    </p>
                                    <hr>
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

                <div class="col-lg-12 mb-4 order-0">
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

                <!-- NILAI -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Nilai</h5>
                        <a href="<?= base_url('pdf') ?>" target="_blank" class="btn btn-secondary mb-3 mt-1">
                            <span><i class='bx bx-printer'></i></span>&nbsp;Cetak
                        </a>
                        <form>
                            <?php if (empty($belum_dinilai->id_opd)) { ?>
                                <div class="col-xs-12 text-center">
                                    <p class="help-block">Belum Ada Nilai</p>
                                </div>
                            <?php } else { ?>
                                <div class="row">
                                    <div class="col-md-7">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><strong>Jabatan</strong></td>
                                                <td>:</td>
                                                <td><?= $nilai->jabatan ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Nama Lengkap</strong></td>
                                                <td>:</td>
                                                <td><?= $nilai->nama_lengkap ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tanggal Penilaian</strong></td>
                                                <td>:</td>
                                                <td><?= $nilai->tanggal ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Nama Penilai</strong></td>
                                                <td>:</td>
                                                <td><?= $nilai->nama_user ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-5">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><strong>Total Nilai</strong></td>
                                                <td>:</td>
                                                <td><?= $nilai->hasil ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Kualitas</strong></td>
                                                <td>:</td>
                                                <td><?= $nilai->kualitas_hasil ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Predikat</strong></td>
                                                <td>:</td>
                                                <td><?= $nilai->predikat ?></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="table-responsive text-wrap">
                                    <?php foreach ($komponen as $index => $kmp) : ?>
                                        <div class="col-sm-12">
                                            <h4><?= ($index + 1) . ". " . $kmp['komponen'] ?></h4>
                                        </div>
                                        <table class="table table-sm table-bordered">
                                            <thead style="vertical-align: middle;">
                                                <tr class="text-center">
                                                    <th>Sub Komponen</th>
                                                    <th>Bobot</th>
                                                    <th>Nilai</th>
                                                    <th>Kualitas</th>
                                                    <th>Catatan</th>
                                                    <th>Daftar Evidence</th>
                                                </tr>
                                            </thead>

                                            <tbody class="text-justify">
                                                <?php
                                                foreach ($subkomponen as $subkmp) {
                                                    if ($subkmp['id_komponen'] == $kmp['id_komponen']) {
                                                        echo '
                                                                                                                <tr>
                                                                <td class="text-justify"><strong>' . $subkmp['subkomponen'] . '</strong></br>
                                                                    <strong> Kriteria : </strong></br>
                                                                    ' . $subkmp['kriteria'] . '
                                                                </td>
                                                                <td class="text-center">' . $subkmp['bobot'] . '</td>
                                                                <td class="text-center">' . $subkmp['nilai'] . '</td>
                                                                <td class="text-center">' . $subkmp['kualitas'] . ' </td>
                                                                <td>' . $subkmp['catatan'] . '</td>
                                                                <td>' . $subkmp['daftar_evidence'] . '</td>
                                                            </tr>';
                                                ?>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        </br>
                                    <?php endforeach ?>

                                    <div class="form-group mb-3">
                                        <label for="kesimpulan_evaluasi">
                                            <h5>Kesimpulan Hasil Penilaian</h5>
                                        </label>
                                        <p><?= $nilai->kesimpulan_evaluasi ?></p>
                                    <?php } ?>
                        </form>
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