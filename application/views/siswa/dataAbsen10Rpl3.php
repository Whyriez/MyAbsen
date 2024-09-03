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
                <h6 class="m-0 font-weight-bold text-primary">Data Absen
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($absen as $a) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $a->tanggal ?></td>
                                    <td><?= $a->nama ?></td>
                                    <td><?php if($a->kelas=='1') { ?>
                                    XII RPL 1
                                <?php }else if($a->kelas=='2') { ?>
                                    XII RPL 2
                                <?php }else if($a->kelas=='3') { ?>
                                    XI RPL 1
                                <?php }else if($a->kelas=='4') { ?>
                                    XI RPL 2
                                <?php }else if($a->kelas=='5') { ?>
                                    XI RPL 3
                                <?php }else if($a->kelas=='6') { ?>
                                    X RPL 1
                                <?php }else if($a->kelas=='7') { ?>
                                    X RPL 2
                                <?php }else{ if($a->kelas=='8') ?>
                                    X RPL 3
                                <?php }; ?></td>
                                    <td><img src="<?php echo base_url() . './gambar/Rpl/' . $a->gambar ?>" width="100"></td>
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

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500,0).slideUp(500, function(){
            $(this).remove();
        });
    }, 4000);
</script>