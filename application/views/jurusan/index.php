  
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Selamat Datang Di Jurusan :<?php if($title == '1'){ ?>
                        Rekayasa Perangkat Lunak
                   <?php } else if ($title == '2') { ?>
                        Teknik Kompter Dan Jaringan
                   <?php } else if ($title == '3') { ?>
                        Multimedia
                    <?php } else if ($title == '4') { ?>
                    <?php } else if ($title == '5') { ?>
                    <?php } else if ($title == '6') { ?>
                    <?php } else if ($title == '7') { ?>
                    <?php } else if ($title == '8') { ?>
                    <?php } else if ($title == '9') { ?>
                    <?php } else if ($title == '10'){ ?>
                    <?php } ?></h1>

                    <div class="row">
                             <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Siswa</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $total ?></div>
                                         
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Kelas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kelas ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Siswa Rpl</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rpl ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
           