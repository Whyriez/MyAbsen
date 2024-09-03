<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_absen');
        $this->load->model('Model_siswa');
    }
    public function index12Rpl1()
    {
        $data['title'] = 'Selamat Datang Di Kelas XII RPL 1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rpl'] = $this->Model_siswa->totalSiswa12Rpl1();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function index12Rpl2()
    {
        $data['title'] = 'Selamat Datang Di Kelas XII RPL 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rpl'] = $this->Model_siswa->totalSiswa12Rpl2();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function index11Rpl1()
    {
        $data['title'] = 'Selamat Datang Di Kelas XI RPL 1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rpl'] = $this->Model_siswa->totalSiswa11Rpl1();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function index11Rpl2()
    {
        $data['title'] = 'Selamat Datang Di Kelas XI RPL 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rpl'] = $this->Model_siswa->totalSiswa11Rpl2();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function index11Rpl3()
    {
        $data['title'] = 'Selamat Datang Di Kelas XI RPL 3';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rpl'] = $this->Model_siswa->totalSiswa11Rpl3();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function index10Rpl1()
    {
        $data['title'] = 'Selamat Datang Di Kelas X RPL 1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rpl'] = $this->Model_siswa->totalSiswa10Rpl1();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function index10Rpl2()
    {
        $data['title'] = 'Selamat Datang Di Kelas X RPL 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rpl'] = $this->Model_siswa->totalSiswa10Rpl2();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function index10Rpl3()
    {
        $data['title'] = 'Selamat Datang Di Kelas X RPL 3';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rpl'] = $this->Model_siswa->totalSiswa10Rpl3();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function indexTkj()
    {
        $data['title'] = 'Selamat Datang Di Kelas XII Tkj 1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function indexMm()
    {
        $data['title'] = 'Selamat Datang Di Kelas XII MM 3';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen12Rpl1()
    {
        $data['title'] = 'Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen12Rpl1();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/dataAbsen12Rpl1', $data);
        $this->load->view('templates/footer');
    }
    public function inputAbsen12Rpl1()
    {
        $data['title'] = 'Input Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getSiswa12Rpl1();


        $waktu = date_default_timezone_set("ASIA/Makassar");
        $waktu = date("Y-m-d H:i:s");
        $waktu_awal = "06:00:00";
        $waktu_akhir = "00:00:00";

        if ($waktu < $waktu_awal) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Anda Belum bisa absen. Absen Dibuka jam 6 pagi</div>');
        } else {
            if ($waktu > $waktu_akhir) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Absensi Sudah Ditutup</div>');
            } else {
                $config['upload_path']          = './gambar/Rpl/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {

                    $gambar = $this->upload->data();
                    $gambar = $gambar['file_name'];
                    $tanggal = date_default_timezone_set("ASIA/Makassar");
                    $tanggal = date("Y-m-d H:i:s");
                    $name = $this->input->post('name', TRUE);
                    $keterangan = $this->input->post('keterangan', TRUE);

                    $data = array(
                        'tanggal' => $tanggal,
                        'id_siswarpl' => $name,
                        'gambar' => $gambar,
                        'keterangan' => $keterangan,
                    );

                    $this->db->insert('data_absen12rpl1', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih Sudah Absen Hari Ini</div>');
                    redirect('siswa/dataAbsen12Rpl1');
                }
            }
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/inputAbsen12Rpl1', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen12Rpl2()
    {
        $data['title'] = 'Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen12Rpl2();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/dataAbsen12Rpl2', $data);
        $this->load->view('templates/footer');
    }
    public function inputAbsen12Rpl2()
    {
        $data['title'] = 'Input Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getSiswa12Rpl2();


        $waktu = date_default_timezone_set("ASIA/Makassar");
        $waktu = date("Y-m-d H:i:s");
        $waktu_awal = "06:00:00";
        $waktu_akhir = "22:00:00";

        if ($waktu < $waktu_awal) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Anda Belum bisa absen. Absen Dibuka jam 6 pagi</div>');
        } else {
            if ($waktu > $waktu_akhir) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Absensi Sudah Ditutup</div>');
            } else {
                $config['upload_path']          = './gambar/Rpl/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {

                    $gambar = $this->upload->data();
                    $gambar = $gambar['file_name'];
                    $tanggal = date_default_timezone_set("ASIA/Makassar");
                    $tanggal = date("Y-m-d H:i:s");
                    $name = $this->input->post('name', TRUE);
                    $keterangan = $this->input->post('keterangan', TRUE);

                    $data = array(
                        'tanggal' => $tanggal,
                        'id_siswarpl' => $name,
                        'gambar' => $gambar,
                        'keterangan' => $keterangan,
                    );

                    $this->db->insert('data_absen12rpl2', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih Sudah Absen Hari Ini</div>');
                    redirect('siswa/dataAbsen12Rpl2');
                }
            }
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/inputAbsen12Rpl2', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen11Rpl1()
    {
        $data['title'] = 'Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen11Rpl1();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/dataAbsen11Rpl1', $data);
        $this->load->view('templates/footer');
    }
    public function inputAbsen11Rpl1()
    {
        $data['title'] = 'Input Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getSiswa11Rpl1();


        $waktu = date_default_timezone_set("ASIA/Makassar");
        $waktu = date("Y-m-d H:i:s");
        $waktu_awal = "06:00:00";
        $waktu_akhir = "22:00:00";

        if ($waktu < $waktu_awal) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Anda Belum bisa absen. Absen Dibuka jam 6 pagi</div>');
        } else {
            if ($waktu > $waktu_akhir) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Absensi Sudah Ditutup</div>');
            } else {
                $config['upload_path']          = './gambar/Rpl/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {

                    $gambar = $this->upload->data();
                    $gambar = $gambar['file_name'];
                    $tanggal = date_default_timezone_set("ASIA/Makassar");
                    $tanggal = date("Y-m-d H:i:s");
                    $name = $this->input->post('name', TRUE);
                    $keterangan = $this->input->post('keterangan', TRUE);

                    $data = array(
                        'tanggal' => $tanggal,
                        'id_siswarpl' => $name,
                        'gambar' => $gambar,
                        'keterangan' => $keterangan,
                    );

                    $this->db->insert('data_absen11rpl1', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih Sudah Absen Hari Ini</div>');
                    redirect('siswa/dataAbsen11Rpl1');
                }
            }
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/inputAbsen11Rpl1', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen11Rpl2()
    {
        $data['title'] = 'Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen11Rpl2();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/dataAbsen11Rpl2', $data);
        $this->load->view('templates/footer');
    }
    public function inputAbsen11Rpl2()
    {
        $data['title'] = 'Input Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getSiswa11Rpl2();


        $waktu = date_default_timezone_set("ASIA/Makassar");
        $waktu = date("Y-m-d H:i:s");
        $waktu_awal = "06:00:00";
        $waktu_akhir = "22:00:00";

        if ($waktu < $waktu_awal) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Anda Belum bisa absen. Absen Dibuka jam 6 pagi</div>');
        } else {
            if ($waktu > $waktu_akhir) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Absensi Sudah Ditutup</div>');
            } else {
                $config['upload_path']          = './gambar/Rpl/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {

                    $gambar = $this->upload->data();
                    $gambar = $gambar['file_name'];
                    $tanggal = date_default_timezone_set("ASIA/Makassar");
                    $tanggal = date("Y-m-d H:i:s");
                    $name = $this->input->post('name', TRUE);
                    $keterangan = $this->input->post('keterangan', TRUE);

                    $data = array(
                        'tanggal' => $tanggal,
                        'id_siswarpl' => $name,
                        'gambar' => $gambar,
                        'keterangan' => $keterangan,
                    );

                    $this->db->insert('data_absen11rpl2', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih Sudah Absen Hari Ini</div>');
                    redirect('siswa/dataAbsen11Rpl2');
                }
            }
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/inputAbsen11Rpl2', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen11Rpl3()
    {
        $data['title'] = 'Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen11Rpl3();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/dataAbsen11Rpl3', $data);
        $this->load->view('templates/footer');
    }
    public function inputAbsen11Rpl3()
    {
        $data['title'] = 'Input Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getSiswa11Rpl3();


        $waktu = date_default_timezone_set("ASIA/Makassar");
        $waktu = date("Y-m-d H:i:s");
        $waktu_awal = "06:00:00";
        $waktu_akhir = "22:00:00";

        if ($waktu < $waktu_awal) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Anda Belum bisa absen. Absen Dibuka jam 6 pagi</div>');
        } else {
            if ($waktu > $waktu_akhir) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Absensi Sudah Ditutup</div>');
            } else {
                $config['upload_path']          = './gambar/Rpl/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {

                    $gambar = $this->upload->data();
                    $gambar = $gambar['file_name'];
                    $tanggal = date_default_timezone_set("ASIA/Makassar");
                    $tanggal = date("Y-m-d H:i:s");
                    $name = $this->input->post('name', TRUE);
                    $keterangan = $this->input->post('keterangan', TRUE);

                    $data = array(
                        'tanggal' => $tanggal,
                        'id_siswarpl' => $name,
                        'gambar' => $gambar,
                        'keterangan' => $keterangan,
                    );

                    $this->db->insert('data_absen11rpl3', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih Sudah Absen Hari Ini</div>');
                    redirect('siswa/dataAbsen11Rpl3');
                }
            }
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/inputAbsen11Rpl3', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen10Rpl1()
    {
        $data['title'] = 'Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen10Rpl1();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/dataAbsen10Rpl1', $data);
        $this->load->view('templates/footer');
    }
    public function inputAbsen10Rpl1()
    {
        $data['title'] = 'Input Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getSiswa10Rpl1();


        $waktu = date_default_timezone_set("ASIA/Makassar");
        $waktu = date("Y-m-d H:i:s");
        $waktu_awal = "06:00:00";
        $waktu_akhir = "22:00:00";

        if ($waktu < $waktu_awal) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Anda Belum bisa absen. Absen Dibuka jam 6 pagi</div>');
        } else {
            if ($waktu > $waktu_akhir) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Absensi Sudah Ditutup</div>');
            } else {
                $config['upload_path']          = './gambar/Rpl/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {

                    $gambar = $this->upload->data();
                    $gambar = $gambar['file_name'];
                    $tanggal = date_default_timezone_set("ASIA/Makassar");
                    $tanggal = date("Y-m-d H:i:s");
                    $name = $this->input->post('name', TRUE);
                    $keterangan = $this->input->post('keterangan', TRUE);

                    $data = array(
                        'tanggal' => $tanggal,
                        'id_siswarpl' => $name,
                        'gambar' => $gambar,
                        'keterangan' => $keterangan,
                    );

                    $this->db->insert('data_absen10rpl1', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih Sudah Absen Hari Ini</div>');
                    redirect('siswa/dataAbsen10Rpl1');
                }
            }
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/inputAbsen10Rpl1', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen10Rpl2()
    {
        $data['title'] = 'Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen10Rpl2();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/dataAbsen10Rpl2', $data);
        $this->load->view('templates/footer');
    }
    public function inputAbsen10Rpl2()
    {
        $data['title'] = 'Input Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getSiswa10Rpl2();


        $waktu = date_default_timezone_set("ASIA/Makassar");
        $waktu = date("Y-m-d H:i:s");
        $waktu_awal = "06:00:00";
        $waktu_akhir = "22:00:00";

        if ($waktu < $waktu_awal) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Anda Belum bisa absen. Absen Dibuka jam 6 pagi</div>');
        } else {
            if ($waktu > $waktu_akhir) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Absensi Sudah Ditutup</div>');
            } else {
                $config['upload_path']          = './gambar/Rpl/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {

                    $gambar = $this->upload->data();
                    $gambar = $gambar['file_name'];
                    $tanggal = date_default_timezone_set("ASIA/Makassar");
                    $tanggal = date("Y-m-d H:i:s");
                    $name = $this->input->post('name', TRUE);
                    $keterangan = $this->input->post('keterangan', TRUE);

                    $data = array(
                        'tanggal' => $tanggal,
                        'id_siswarpl' => $name,
                        'gambar' => $gambar,
                        'keterangan' => $keterangan,
                    );

                    $this->db->insert('data_absen10rpl2', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih Sudah Absen Hari Ini</div>');
                    redirect('siswa/dataAbsen10Rpl2');
                }
            }
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/inputAbsen10Rpl2', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen10Rpl3()
    {
        $data['title'] = 'Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen10Rpl3();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/dataAbsen10Rpl3', $data);
        $this->load->view('templates/footer');
    }
    public function inputAbsen10Rpl3()
    {
        $data['title'] = 'Input Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getSiswa10Rpl3();


        $waktu = date_default_timezone_set("ASIA/Makassar");
        $waktu = date("Y-m-d H:i:s");
        $waktu_awal = "06:00:00";
        $waktu_akhir = "22:00:00";

        if ($waktu < $waktu_awal) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Anda Belum bisa absen. Absen Dibuka jam 6 pagi</div>');
        } else {
            if ($waktu > $waktu_akhir) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Absensi Sudah Ditutup</div>');
            } else {
                $config['upload_path']          = './gambar/Rpl/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;

                $this->load->library('upload');
                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {

                    $gambar = $this->upload->data();
                    $gambar = $gambar['file_name'];
                    $tanggal = date_default_timezone_set("ASIA/Makassar");
                    $tanggal = date("Y-m-d H:i:s");
                    $name = $this->input->post('name', TRUE);
                    $keterangan = $this->input->post('keterangan', TRUE);

                    $data = array(
                        'tanggal' => $tanggal,
                        'id_siswarpl' => $name,
                        'gambar' => $gambar,
                        'keterangan' => $keterangan,
                    );

                    $this->db->insert('data_absen10rpl3', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih Sudah Absen Hari Ini</div>');
                    redirect('siswa/dataAbsen10Rpl3');
                }
            }
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/inputAbsen10Rpl3', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsenTkj()
    {
        $data['title'] = 'Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsenTkj();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/dataAbsenTkj', $data);
        $this->load->view('templates/footer');
    }
    public function inputAbsenTkj()
    {
        $data['title'] = 'Input Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getSiswaRpl();

        $config['upload_path']          = './gambar/Tkj/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1080;
        $config['max_height']           = 1080;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {

            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $name = $this->input->post('name', TRUE);
            $keterangan = $this->input->post('keterangan', TRUE);

            $data = array(
                'tanggal' => date('Ymd'),
                'id_siswatkj' => $name,
                'gambar' => $gambar,
                'keterangan' => $keterangan,
            );

            $this->db->insert('data_absentkj', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih Sudah Absen Hari Ini</div>');
            redirect('siswa/dataAbsenTkj');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/inputAbsenTkj', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsenMm()
    {
        $data['title'] = 'Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsenMm();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/dataAbsenMm', $data);
        $this->load->view('templates/footer');
    }
    public function inputAbsenMm()
    {
        $data['title'] = 'Input Absen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getSiswaMm();

        $config['upload_path']          = './gambar/Mm/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1080;
        $config['max_height']           = 1080;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {

            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $name = $this->input->post('name', TRUE);
            $keterangan = $this->input->post('keterangan', TRUE);

            $data = array(
                'tanggal' => date('Ymd'),
                'id_siswamm' => $name,
                'gambar' => $gambar,
                'keterangan' => $keterangan,
            );

            $this->db->insert('data_absentkj', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih Sudah Absen Hari Ini</div>');
            redirect('siswa/dataAbsenMm');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/inputAbsenMm', $data);
        $this->load->view('templates/footer');
    }
}
