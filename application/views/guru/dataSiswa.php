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
                <h6 class="m-0 font-weight-bold text-primary">Data Siswa
                    <a href="" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#examplesubModal">Tambah
                        Siswa</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Kelas Dan Jurusan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($siswa as $k) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $k['nama_siswa']; ?></td>
                                    <td><?= $k['keju_siswa']; ?></td>
                                    <td>
                                        <button type="button" class="badge badge-primary mb-3" data-toggle="modal" data-target="#lexamplesubModal<?php echo $k['id_siswa']; ?>">Edit</button>

                                        <a href="<?= base_url(); ?>guru/deleteSiswa/<?= $k['id_siswa'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure?');">delete</a>
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
                <h5 class="modal-title" id="examplesubModalLabel">Tambah Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php echo form_open_multipart('guru/tambahSiswa'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Siswa" required>
                </div>
                <div class="form-group">
                    <label>Nama Kelas Dan jurusan</label>
                    <input type="text" class="form-control" id="keju" name="keju" placeholder="Nama Siswa Dan Jurusan" required>
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
<?php foreach ($siswa as $k) : ?>
    <div class="modal fade" id="lexamplesubModal<?php echo $k['id_siswa']; ?>" tabindex="-1" aria-labelledby="lexamplesubModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lexamplesubModalLabel">Edit Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo form_open_multipart('guru/editSiswa'); ?>
                <div class="modal-body">

                    <div class="form-group">
                        <input type="hidden" name="id_siswa" value="<?php echo $k['id_siswa']; ?>">
                        <label>Nama Siswa </label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $k['nama_siswa']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Kelas Dan Jurusan</label>
                        <input type="text" class="form-control" id="keju" name="keju" value="<?php echo $k['keju_siswa']; ?>">
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