<div class="layout-container">

    <!-- Layout container -->
    <div class="layout-page">

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

                <!-- notification/alert -->
                <?= $this->session->flashdata('message'); ?>

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <h5 class="card-header gy-3"><?= $title ?></h5>

                            <div class="card-body" id="formnilai">
                                <form action="<?= base_url('') ?>penilai/penilaian/input/" id="form-tambah" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="id_opd">Nama Jabatan</label>
                                                <select class="form-control" name="id_opd" id="nama_opd" required>
                                                    <option value="">---Pilih Jabatan---</option>
                                                    <?php foreach ($opd as $o) : ?>
                                                        <option value="<?= $o['id_opd']; ?>"><?= $o['jabatan']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="nama_kepala">Nama Lengkap</label>
                                                <select class="form-control" name="nama_kepala" id="nama_kepala" disabled>
                                                    <option value=""></option>
                                                    <?php foreach ($opd as $o) : ?>
                                                        <option value="<?= $o['id_opd']; ?>"><?= $o['nama_lengkap']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="tanggal">Tanggal Penilaian</label>
                                                <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?= date('d/m/Y') ?>" readonly />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="id_u">Nama Penilai</label>
                                                <input type="text" name="id_u" autocomplete="off" class="form-control" value="<?= $this->session->userdata('nama_user') ?>" readonly>
                                            </div>
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
                                                        <th>Masukkan Nilai</th>
                                                        <!-- <th>Hasil Nilai</th> -->
                                                        <th>Kualitas</th>
                                                        <th>Catatan</th>
                                                        <th>Daftar Evidence</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="text-justify">
                                                    <?php foreach ($subkomponen as $subkmp) {
                                                        if ($subkmp['id_komponen'] == $kmp['id_komponen']) {
                                                    ?>
                                                            <tr>
                                                                <td class="text-justify"><strong><?= $subkmp['subkomponen'] ?></strong></br>
                                                                    <strong> Kriteria : </strong></br>
                                                                    <?= $subkmp['kriteria'] ?>
                                                                </td>
                                                                <td class="text-center"><span id="bobot"><?= $subkmp['bobot'] ?></span></td>
                                                                <!-- <td class="text-center"><input type="text" class="form-control input-sm" value="<?= $subkmp['bobot'] ?>" id="bobot" readonly></td> -->
                                                                <td><input type="number" class="form-control input-sm nilai nilai-<?= $subkmp['id_subkomponen'] ?>" data-id_subkomponen="<?= $subkmp['id_subkomponen'] ?>" onchange="setTwoNumberDecimal" min="0" max="100" step="0.5" name="nilai<?= $subkmp['id_subkomponen'] ?>" required></td>
                                                                <td class="text-center"><input type="text" class="form-control input-sm kualitas kualitas-<?= $subkmp['id_subkomponen'] ?>" data-id_subkomponen="<?= $subkmp['id_subkomponen'] ?>" name="kualitas<?= $subkmp['id_subkomponen'] ?>" readonly></td>
                                                                <td><textarea type="text" class="form-control input-sm" name="catatan<?= $subkmp['id_subkomponen'] ?>" placeholder="Ketik catatan kriteria yang kurang apa saja. Jika tidak ada, isikan '-'" required></textarea></td>
                                                                <td><textarea type="text" class="form-control input-sm" name="daftar_evidence<?= $subkmp['id_subkomponen'] ?>" placeholder="Isikan Bukti fisik di sini, termasuk nomor tanggal dokumen jika ada. Jika tidak ada, isikan '-'" required></textarea></td>
                                                            </tr>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            </br>
                                        <?php endforeach ?>

                                        <div class="col-sm-12">
                                            <h5>Total Nilai (Predikat)</h5>
                                        </div>
                                        <table class="table table-sm table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th>Total Nilai</th>
                                                    <th>Kualitas</th>
                                                    <th>Predikat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" class="form-control input-sm hasil" name="hasil" readonly></td>
                                                    <td><input type="text" class="form-control input-sm kualitas_hasil" name="kualitas_hasil" readonly></td>
                                                    <td><input type="text" class="form-control input-sm predikat" name="predikat" readonly></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </br>
                                        <div class="form-group mb-3">
                                            <label for="kesimpulan_evaluasi">
                                                <h5>Kesimpulan Hasil Penilaian</h5>
                                            </label>
                                            <textarea class="form-control" id="kesimpulan" name="kesimpulan_evaluasi"></textarea>

                                        </div>
                                    </div>
                                    </br>
                                    <a href="<?= base_url() . 'penilai/dashboard' ?>" class="btn btn-secondary"><i class='bx bx-arrow-back'></i>&nbsp;&nbsp;Kembali</a>
                                    <button type=" submit" class="btn btn-primary"><i class='bx bx-save'></i>&nbsp;&nbsp;Simpan</button>
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


<script>
    // Menampilkan nama kepala OPD setelah nama OPD dipilih
    $(document).ready(function() {
        $('#nama_opd').on('change',
            function() {
                let id = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/opd/get_opd'); ?>",
                    data: {
                        id_opd: id
                    },
                    success: function(response) {
                        let data = JSON.parse(response);
                        $(`#nama_kepala option[value=${data.id_opd}]`).attr('selected', 'selected');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            })
    })

    // Input nilai dengan type data number dan value decimal
    function setTwoNumberDecimal(event) {
        this.value = parseFloat(this.value).toFixed(2);
    }

    // get kualitas

    $(document).ready(function() {
        $('.nilai').on('change', function() {
            var id_subkomponen = $(this).data('id_subkomponen');
            if (parseFloat($(this).val()) > 90) {
                $(".kualitas-" + id_subkomponen).val('AA');
            } else if (parseFloat($(this).val()) > 80) {
                $(".kualitas-" + id_subkomponen).val('A');
            } else if (parseFloat($(this).val()) > 70) {
                $(".kualitas-" + id_subkomponen).val('BB');
            } else if (parseFloat($(this).val()) > 60) {
                $(".kualitas-" + id_subkomponen).val('B');
            } else if (parseFloat($(this).val()) > 50) {
                $(".kualitas-" + id_subkomponen).val('CC');
            } else if (parseFloat($(this).val()) > 30) {
                $(".kualitas-" + id_subkomponen).val('C');
            } else if (parseFloat($(this).val()) <= 30) {
                $(".kualitas-" + id_subkomponen).val('D');
            }
        });

    });
</script>

<!-- Hasil -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#formnilai').on('input', '.nilai',
            function() {
                var sum = 0;
                $(".nilai").each(function() {
                    sum += +$(this).val();
                });
                // $(".avrg1").val(sum / 3);
                $(".hasil").val(parseFloat(sum / 12).toFixed(2)).change();
            });
    });

    $(document).ready(function() {
        $('.hasil').on('change', function() {

            if ($(this).val() > 90) {
                $(".kualitas_hasil").val('AA');
                $(".predikat").val('Sangat Memuaskan');
            } else if ($(this).val() > 80) {
                $(".kualitas_hasil").val('A');
                $(".predikat").val('Memuaskan');
            } else if ($(this).val() > 70) {
                $(".kualitas_hasil").val('BB');
                $(".predikat").val('Sangat Baik');
            } else if ($(this).val() > 60) {
                $(".kualitas_hasil").val('B');
                $(".predikat").val('Baik');
            } else if ($(this).val() > 50) {
                $(".kualitas_hasil").val('CC');
                $(".predikat").val('Cukup Memuaskan');
            } else if ($(this).val() > 30) {
                $(".kualitas_hasil").val('C');
                $(".predikat").val('Kurang');
            } else if ($(this).val() <= 30) {
                $(".kualitas_hasil").val('D');
                $(".predikat").val('Sangat Kurang');
            }

        })
    });
</script>

<!-- / Layout wrapper -->
</body>


</html>