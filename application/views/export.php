<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan Hasil Penilaian Mandiri Jabatan</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/kabmadiun.png" />
    <link href="<?= base_url() ?>assets/css/report.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="container">
        <!-- Print Body -->
        <div id="body">
            <table>
                <tbody>
                    <tr>
                        </br>
                        </br>
                        <td align="center">
                            <img src="<?= base_url(); ?>assets/img/kabmadiun.png" alt="" style="width:100px; height:auto">
                            <h1>LAPORAN HASIL PENILAIAN MANDIRI </br>DINAS PERPUSTAKAAN DAN KEARSIPAN KABUPATEN MADIUN</h1>
                            <h1 style="text-transform: uppercase;"></h1>
                            <h1>KABUPATEN MADIUN</h1>
                        </td>
                    </tr>

                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                </br>
                                <?php if (empty($belum_dinilai->id_opd)) { ?>
                                    <div class="col-xs-12 text-center">
                                        <p class="help-block">Belum Ada Nilai</p>
                                    </div>
                                <?php } else { ?>
                                    <tr>
                                        <td><strong>Nama</strong></td>
                                        <td>:</td>
                                        <td><?= $nilai->nama_lengkap ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Nama Penilai</strong></td>
                                        <td>:</td>
                                        <td><?= $nilai->nama_user ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tanggal Penilaian</strong></td>
                                        <td>:</td>
                                        <td><?= $nilai->tanggal ?></td>
                                    </tr>
                                   
                            </table>
                        </div>
                    </div>
                    </br>
                    <tr>

                        <td style="padding: 5px 20px;">
                            <table class="border thick data">
                                <thead>
                                    <tr class="thick">
                                        <th class="thick" width="2">No</th>
                                        <th class="thick">Komponen/Sub Komponen/Kriteria</th>
                                        <th class="thick">Bobot</th>
                                        <th class="thick">Nilai</th>
                                        <th class="thick">Kualitas</th>
                                        <th class="thick">Catatan</th>
                                        <th class="thick">Daftar Evidence</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($komponen as $index => $kmp) : ?>
                                        <tr class="thick">
                                            <td class="thick"><strong><?= $no++; ?></strong></td>
                                            <td class="thick" colspan="6">
                                                <strong><?= $kmp['komponen'] ?></strong>
                                            </td>
                                        </tr>
                                        <?php
                                        foreach ($subkomponen as $subkmp) {
                                            if ($subkmp['id_komponen'] == $kmp['id_komponen']) {

                                                echo '
                                                
                                                            <tr class="thick">
                                                                <td></td>
                                                                <td class="text-justify thick" width=""><strong>' . $subkmp['subkomponen'] . '</strong></br>
                                                                    <strong> Kriteria : </strong></br>
                                                                    ' . $subkmp['kriteria'] . '
                                                                </td>
                                                                <td class="text-center thick" width="2">' . $subkmp['bobot'] . '</td>
                                                                <td class="text-center thick" width="2">' . $subkmp['nilai'] . '</td>
                                                                <td class="text-center thick" width="3">' . $subkmp['kualitas'] . ' </td>
                                                                <td class="thick">' . $subkmp['catatan'] . '</td>
                                                                <td class="thick">' . $subkmp['daftar_evidence'] . '</td>
                                                            </tr>';
                                        ?>
                                        <?php
                                            }
                                        }
                                        ?>
                                    <?php endforeach ?>
                                </tbody>


                                <tbody>
                                    <tr class="thick">
                                        <th colspan="2" class="text-center">Total Nilai (Predikat)</th>
                                        <th class="text-center">100</th>
                                        <th class="text-center"><?= $nilai->hasil ?></th>
                                        <th class="text-center"><?= $nilai->kualitas_hasil ?></th>
                                        <th class="text-center" colspan="2"><?= $nilai->predikat ?></th>
                                    </tr>
                                </tbody>

                                <!-- <tfoot class="disabled color-palette">
                                  
                                </tfoot> -->
                            </table>
                            </br>
                            <div class="form-group mb-3">
                                <label for="kesimpulan_evaluasi">
                                    <h5>Kesimpulan Hasil Evaluasi</h5>
                                </label>
                                <p><?= $nilai->kesimpulan_evaluasi ?></p>
                            </div>
                        <?php } ?>
                        </td>
                    </tr>
                </tbody>
            </table>
                                    </br>
                                    <!-- <table class="table tabled-borderless">
                                        <tr>
                                        Mengetahui, <?=$nilai->tanggal?>
                                    </tr>
                                    </br>
                                        <tr>
                                        <td><strong</strong></td>
                                 
                                        <td></td>
                                        </tr>
                                    </table> -->
        </div>
    </div>
</body>

</html>