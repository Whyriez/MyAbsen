<div class="row">
    <div class="col-lg">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>

        <?= $this->session->flashdata('message'); ?>





        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kelas Rpl
                    <a href="" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#examplesubModal">Tambah
                        Kelas</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kelas Dan Jurusan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kelasRpl as $r) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $r['keju']; ?></td>
                                    <td>
                                        <button type="button" class="badge badge-primary mb-3" data-toggle="modal" data-target="#lexamplesubModal<?php echo $r['id_kelasrpl']; ?>">Edit</button>

                                        <a href="<?= base_url(); ?>jurusan/deleteKelasRpl/<?= $r['id_kelasrpl'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure?');">delete</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal Tambah Data-->
<div class="modal fade" id="examplesubModal" tabindex="-1" aria-labelledby="examplesubModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="examplesubModalLabel">Tambah Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php echo form_open_multipart('jurusan/tambahKelasRpl'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Kelas Dan jurusan</label>
                    <input type="text" class="form-control" id="keju" name="keju" placeholder="Nama Kelas Dan Jurusan" required>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<!-- Modal Edit-->
<?php foreach ($kelasRpl as $r) : ?>
    <div class="modal fade" id="lexamplesubModal<?php echo $r['id_kelasrpl']; ?>" tabindex="-1" aria-labelledby="lexamplesubModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lexamplesubModalLabel">Edit Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo form_open_multipart('jurusan/editKelasRpl'); ?>
                <div class="modal-body">

                    <div class="form-group">
                        <input type="hidden" name="id_kelasrpl" value="<?php echo $r['id_kelasrpl']; ?>">
                        <label>Nama Kelas Dan Jurusan</label>
                        <input type="text" class="form-control" id="keju" name="keju" value="<?php echo $r['keju']; ?>">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>


<?php endforeach; ?>