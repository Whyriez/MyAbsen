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
                <h6 class="m-0 font-weight-bold text-primary">Data Akun Kelas Rpl
                    <a href="" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#examplesubModal">Tambah
                        Akun</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Tanggal Dibuat</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($akunRpl as $r) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $r->name ?></td>
                                    <td><?= $r->email ?></td>
                                    <td><img src="<?php echo base_url() . './gambar/profilrpl/' . $r->image ?>" width="100"></td>
                                    <td><?= $r->date_created ?></td>
                                    <td>
                                        <button type="button" class="badge badge-primary mb-3" data-toggle="modal" data-target="#lexamplesubModal<?php echo $r->id ?>">Edit</button>

                                        <a href="<?= base_url(); ?>jurusan/deleteAkunRpl/<?= $r->id ?>" class="badge badge-danger" onclick="return confirm('Are you sure?');">delete</a>
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

<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal Tambah Data-->
<div class="modal fade" id="examplesubModal" tabindex="-1" aria-labelledby="examplesubModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="examplesubModalLabel">Tambah Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php echo form_open_multipart('jurusan/tambahAkunRpl'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="excampleFormControlFile1">Masukkan Gambar</label>
                    <input type="file" class="form-control-file" name="userfile" id="userfile">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">--Pilih--</option>
                        <?php foreach ($role  as $r) : ?>
                            <option value="<?= $r->id ?>"><?= $r->role ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select name="kelasrpl" id="kelasrpl" class="form-control">
                        <option value="">--Pilih--</option>
                        <?php foreach ($kelasRpl  as $r) : ?>
                            <option value="<?= $r['id_kelasrpl'] ?>"><?= $r['keju'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" id="password1" name="password1" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input type="text" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Password" required>
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
<?php foreach ($akunRpl as $r) : ?>
    <div class="modal fade" id="lexamplesubModal<?php echo $r->id ?>" tabindex="-1" aria-labelledby="lexamplesubModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lexamplesubModalLabel">Edit Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo form_open_multipart('jurusan/editAkunRpl'); ?>
                <div class="modal-body">

                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $r->id ?>">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $r->name ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $r->email ?>">
                    </div>
                    <div class="form-group">
                        <label for="excampleFormControlFile1">Masukkan Gambar</label>
                        <input type="file" class="form-control-file" name="userfile" id="userfile" size="20">
                    </div>
                    <img src="<?php echo base_url() . './gambar/profilrpl/' . $r->image ?>" width="100">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" id="password1" name="password1" placeholder="Password" value="<?php echo $r->password ?>">
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