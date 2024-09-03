<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon mr-3">
           <img src="<?= base_url('assets/logo/smea.png'); ?>" alt="" width="85px" height="85px">
        </div>
        <div class="sidebar-brand-text">My Absen</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <!-- Ini Halaman Rpl -->
    <?php
    if ($this->session->userdata('id_jurusan') == '1') {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/indexRpl') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/indexRpl'); ?>"><i class="fas fa-fw fa-home"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/dataKelasRpl') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/dataKelasRpl'); ?>"><i class="fas fa-fw fa-plus"></i><span>Tambah Kelas</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/allDAtaRpl') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/allDAtaRpl'); ?>"><i class="fas fa-fw fa-user-plus"></i><span>Tambah Siswa</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/laporAbsenRpl') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/dataAkunRpl'); ?>"><i class="fas fa-fw fa-user-plus"></i><span>Tambah Akun Siswa Rpl</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/dataAbsen11Rpl1') {
								echo "active";
							} ?>">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities3">
            <i class="fas fa-fw far fa-file-alt"></i>
				<span>Data Siswa</span>
            </a>
            <?php $dataKelas = $this->Model_siswa->getDatakelas(); ?>
			<div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities3" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kelas</h6>
                    <?php foreach ($dataKelas as $key => $value) { ?>
                        <a class="collapse-item" href="<?= base_url('jurusan/dataSiswaRpl/' . $value->id_kelasrpl) ?>"><span><?= $value->keju ?></span></a>
                    <?php }; ?>
				</div>
			</div>
        </li>
        <hr class="sidebar-divider my-0">
        
        
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/dataAbsen10Rpl1') {
								echo "active";
							} ?>">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw far fa-file-alt"></i>
				<span>Data Absen Kelas X</span>
			</a>
			<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Data Absen Kelas X</h6>
                        <a class="collapse-item" href="<?= base_url('jurusan/dataAbsen10Rpl1'); ?>"><span>Data Absen X RPL 1</span></a>
                        <a class="collapse-item" href="<?= base_url('jurusan/dataAbsen10Rpl2'); ?>"><span>Data Absen X RPL 2</span></a>
                        <a class="collapse-item" href="<?= base_url('jurusan/dataAbsen10Rpl3'); ?>"><span>Data Absen X RPL 3</span></a>
				</div>
			</div>
		</li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/dataAbsen11Rpl1') {
								echo "active";
							} ?>">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1">
            <i class="fas fa-fw far fa-file-alt"></i>
				<span>Data Absen Kelas XI</span>
			</a>
			<div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities1" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Data Absen Kelas XI</h6>
                        <a class="collapse-item" href="<?= base_url('jurusan/dataAbsen11Rpl1'); ?>"><span>Data Absen XI RPL 1</span></a>
                        <a class="collapse-item" href="<?= base_url('jurusan/dataAbsen11Rpl2'); ?>"><span>Data Absen XI RPL 2</span></a>
                        <a class="collapse-item" href="<?= base_url('jurusan/dataAbsen11Rpl3'); ?>"><span>Data Absen XI RPL 3</span></a>
				</div>
			</div>
		</li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/dataAbsen12Rpl1') {
								echo "active";
							} ?>">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-fw far fa-file-alt"></i>
				<span>Data Absen Kelas XII</span>
			</a>
			<div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities2" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Data Absen Kelas XII</h6>
                        <a class="collapse-item" href="<?= base_url('jurusan/dataAbsen12Rpl1'); ?>"><span>Data Absen XII RPL 1</span></a>
                        <a class="collapse-item" href="<?= base_url('jurusan/dataAbsen12Rpl2'); ?>"><span>Data Absen XII RPL 2</span></a>
				</div>
			</div>
		</li>
        <hr class="sidebar-divider my-0">
        




    <?php
    }
    ?>

    <!-- 12 rpl 1 -->
    <?php
    if ($this->session->userdata('id_kelasrpl') == 1) {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/index12Rpl1') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/index12Rpl1');
                                        ?>"><i class="fas fa-fw fa-home"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/inputAbsen12Rpl1') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/inputAbsen12Rpl1'); ?>"><i class="fas fa-fw fa-user-edit"></i><span>Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/dataAbsen12Rpl1') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/dataAbsen12Rpl1'); ?>"><i class="far fa-fw fa-file-alt"></i><span>Data Absen</span></a>
        </li>


    <?php
    }
    ?>
    <!-- 12 rpl 2 -->
    <?php
    if ($this->session->userdata('id_kelasrpl') == 2) {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/index12Rpl2') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/index12Rpl2');
                                        ?>"><i class="fas fa-home"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/inputAbsen12Rpl2') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/inputAbsen12Rpl2'); ?>"><i class="fas fa-user-edit"></i><span>Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/dataAbsen12Rpl2') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/dataAbsen12Rpl2'); ?>"><i class="far fa-file-alt"></i><span>Data Absen</span></a>
        </li>


    <?php
    }
    ?>

    <!-- 11 rpl 1 -->
    <?php
    if ($this->session->userdata('id_kelasrpl') == 3) {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/index11Rpl1') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/index11Rpl1');
                                        ?>"><i class="fas fa-home"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/inputAbsen11Rpl1') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/inputAbsen11Rpl1'); ?>"><i class="fas fa-user-edit"></i><span>Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/dataAbsen11Rpl1') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/dataAbsen11Rpl1'); ?>"><i class="far fa-file-alt"></i><span>Data Absen</span></a>
        </li>


    <?php
    }
    ?>

    <!-- 11 rpl 2 -->
    <?php
    if ($this->session->userdata('id_kelasrpl') == 4) {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/index11Rpl2') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/index11Rpl2');
                                        ?>"><i class="fas fa-home"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/inputAbsen11Rpl2') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/inputAbsen11Rpl2'); ?>"><i class="fas fa-user-edit"></i><span>Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/dataAbsen11Rpl2') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/dataAbsen11Rpl2'); ?>"><i class="far fa-file-alt"></i><span>Data Absen</span></a>
        </li>


    <?php
    }
    ?>

    <!-- 11 rpl 3 -->
    <?php
    if ($this->session->userdata('id_kelasrpl') == 5) {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/index11Rpl3') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/index11Rpl3');
                                        ?>"><i class="fas fa-home"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/inputAbsen11Rpl3') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/inputAbsen11Rpl3'); ?>"><i class="fas fa-user-edit"></i><span>Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/dataAbsen11Rpl3') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/dataAbsen11Rpl3'); ?>"><i class="far fa-file-alt"></i><span>Data Absen</span></a>
        </li>


    <?php
    }
    ?>

    <!-- 10 rpl 1 -->
    <?php
    if ($this->session->userdata('id_kelasrpl') == 6) {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/index10Rpl1') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/index10Rpl1');
                                        ?>"><i class="fas fa-home"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/inputAbsen10Rpl1') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/inputAbsen10Rpl1'); ?>"><i class="fas fa-user-edit"></i><span>Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/dataAbsen10Rpl1') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/dataAbsen10Rpl1'); ?>"><i class="far fa-file-alt"></i><span>Data Absen</span></a>
        </li>


    <?php
    }
    ?>

    <!-- 10 rpl 2 -->
    <?php
    if ($this->session->userdata('id_kelasrpl') == 7) {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/index10Rpl2') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/index10Rpl2');
                                        ?>"><i class="fas fa-home"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/inputAbsen10Rpl2') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/inputAbsen10Rpl2'); ?>"><i class="fas fa-user-edit"></i><span>Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/dataAbsen10Rpl2') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/dataAbsen10Rpl2'); ?>"><i class="far fa-file-alt"></i><span>Data Absen</span></a>
        </li>


    <?php
    }
    ?>

    <!-- 10 rpl 3 -->
    <?php
    if ($this->session->userdata('id_kelasrpl') == 8) {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/index10Rpl3') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/index10Rpl3');
                                        ?>"><i class="fas fa-home"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/inputAbsen10Rpl3') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/inputAbsen10Rpl3'); ?>"><i class="fas fa-user-edit"></i><span>Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/dataAbsen10Rpl3') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/dataAbsen10Rpl3'); ?>"><i class="far fa-file-alt"></i><span>Data Absen</span></a>
        </li>


    <?php
    }
    ?>

    <?php
    if ($this->session->userdata('id_kelastkj') == 1) {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/indexTkj') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/indexTkj');
                                        ?>"><i class="fas fa-fw fa-tachometer-alt"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">


    <?php
    }
    ?>
    <?php
    if ($this->session->userdata('id_kelasmm') == 1) {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/indexMm') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/indexMm');
                                        ?>"><i class="fas fa-fw fa-tachometer-alt"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">


    <?php
    }
    ?>





    <!-- Ini Halaman Tkj -->
    <?php
    if ($this->session->userdata('id_jurusan') == '2') {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/indexTkj') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/indexTkj');
                                        ?>"><i class="fas fa-fw fa-tachometer-alt"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/dataKelasTkj') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/dataKelasTkj'); ?>"><i class="fas fa-fw far fa-utensils"></i><span>Tambah Kelas</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/dataSiswaTkj') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/dataSiswaTkj'); ?>"><i class="fas fa-fw far fa-receipt"></i><span>Tambah Siswa</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/dataAbsenTkj') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/dataAbsenTkj'); ?>"><i class="fas fa-fw far fa-receipt"></i><span>Data Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/laporAbsenTkj') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/laporAbsenTkj'); ?>"><i class="fas fa-fw far fa-hand-holding-usd"></i><span>Laporan Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">

    <?php
    }
    ?>
    <!-- Ini Halaman Mm -->
    <?php
    if ($this->session->userdata('id_jurusan') == '3') {
    ?>

        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/indexMm') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/indexMm');
                                        if ($user['role_id'] == 2) {
                                        } ?>"><i class="fas fa-fw fa-tachometer-alt"></i><span>Beranda</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/dataKelasMm') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/dataKelasMm'); ?>"><i class="fas fa-fw far fa-utensils"></i><span>Tambah Kelas</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/dataSiswaMm') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/dataSiswaMm'); ?>"><i class="fas fa-fw far fa-receipt"></i><span>Tambah Siswa</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/dataAbsenMm') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/dataAbsenMm'); ?>"><i class="fas fa-fw far fa-receipt"></i><span>Data Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'jurusan/laporAbsenMm') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('jurusan/laporAbsenMm'); ?>"><i class="fas fa-fw far fa-hand-holding-usd"></i><span>Laporan Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">

    <?php
    }
    ?>

    <?php
    if ($this->session->userdata('role_id') == '3') {
    ?>
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/index') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/index'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i><span>Beranda</span></a>
        </li>

        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/inputAbsen') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/inputAbsen'); ?>"><i class="fas fa-fw far fa-receipt"></i><span>Absen</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?php if ($this->uri->uri_string() == 'siswa/dataAbsen') {
                                echo "active";
                            } ?>">
            <a class="nav-link" href="<?= base_url('siswa/dataAbsen'); ?>"><i class="fas fa-fw far fa-receipt"></i><span>Data Absen</span></a>
        </li>


    <?php
    }
    ?>




    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
            <span>Keluar</span></a>
    </li>

</ul>