<div class="layout-container">

    <!-- Layout container -->
    <div class="layout-page">

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <?= $this->session->flashdata('message'); ?>
                <!-- Stripped Rows -->
                <div class="card">
                    <h5 class="card-header gy-3"><?= $title; ?></h5>
                    <div class="card-body">

                        <a href="<?= base_url('admin/admin/tambah'); ?>" class="btn btn-primary mb-3 mt-1">
                            <span class="tf-icons bx bx-plus-circle"></span>&nbsp;Tambah
                            </button>
                        </a>

                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Users</th>
                                        <th>Username</th>

                                        <th>Foto</th>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php $no = 1; ?>
                                    <?php foreach ($users as $u) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $u['nama_user'] ?></td>
                                            <td><?= $u['username'] ?></td>

                                            <td><img src="<?php echo base_url(); ?>assets/img/profil/<?= $u['foto_profil']; ?>" width="100" height="100" style="object-fit: cover;"></td>


                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?php echo base_url() ?>admin/admin/edit/<?php echo $u['id_u']; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="dropdown-item" onclick="deleteConfirm('<?= base_url('admin/admin/hapus/' . $u['id_u']) ?>')" data-bs-toggle="modal" data-bs-target="#deleteModal" href="#!"><i class="bx bx-trash me-1"></i> Hapus</a>
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

                <!-- End of Main Content -->
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

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

</html>
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapus Data User ?</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak dapat dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="<?= base_url('admin/admin/hapus/' . $u['id_u']) ?>">Hapus</a>
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