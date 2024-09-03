<div class="row">
    <div class="col-lg">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>

        <?= $this->session->flashdata('message'); ?>
        </div>
        </div>


<div class="col-xl-9 col-xxl-11">
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('siswa/index11Rpl2'); ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fa fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
        </div>

        <div class="card-body">
        <?php echo form_open_multipart('siswa/inputAbsen11Rpl2'); ?>
                <div class="form-group">
                    <label for="tgl">Nama Siswa</label>
                    <select name="name" id="name" class="form-control">
                        <option value="">--Pilih--</option>
                        <?php foreach ($siswa  as $s) : ?>
                            <option value="<?= $s->id ?>"><?= $s->nama ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="excampleFormControlFile1">Masukkan Gambar</label>
                    <input type="file" class="form-control-file" name="gambar" id="gambar">
                </div>
                <div class="form-group">
                    <label for="tgl">Keterangan</label>
                    <select name="keterangan" id="keterangan" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="Sakit">Sakit</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                    <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i>Kosongkan</button>
                </div>
                <?= form_close(); ?>
        </div>
    </div>

</div>
</div>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500,0).slideUp(500, function(){
            $(this).remove();
        });
    }, 4000);
</script>