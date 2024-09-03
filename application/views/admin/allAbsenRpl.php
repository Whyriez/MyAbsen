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
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($allAbsenRpl as $a) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $a->tanggal ?></td>
                                    <td><?= $a->id_siswarpl ?></td>
                                    <td><?= $a->gambar ?></td>
                                    <td><?= $a->keterangan ?></td>

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