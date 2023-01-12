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
                        <div class="card">
                            <h5 class="card-header gy-3"><?= $title ?></h5>

                            <div class="card-body">
                            <!-- <a href="<?= base_url('pdf') ?>" target="_blank" class="btn btn-secondary mb-3 mt-1">
                            <span><i class='bx bx-printer'></i></span>&nbsp;Export
                        </a> -->
                                <form>
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
                                    </br>
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
                                                <h5>Kesimpulan Hasil Evaluasi</h5>
                                            </label>
                                            <p><?= $nilai->kesimpulan_evaluasi ?></p>

                                        </div>
                                    </div>
                                    </br>
                                    <a href="<?= base_url() . 'penilai/dashboard' ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i>&nbsp;&nbsp;Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form -->

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