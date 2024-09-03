<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_kelas');
        $this->load->model('Model_siswa');
        $this->load->model('Model_absen');
    }
    public function indexRpl()
    {
        $data['title'] = $this->session->userdata('id_jurusan');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['total'] = $this->Model_siswa->totalSiswa();
        $data['kelas'] = $this->Model_siswa->totalKelasRpl();
        $data['rpl'] = $this->Model_siswa->totalSiswaRpl();
       

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/index', $data);
        $this->load->view('templates/footer');
    }
    public function indexTkj()
    {
        $data['title'] = $this->session->userdata('id_jurusan');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/index', $data);
        $this->load->view('templates/footer');
    }
    public function indexMm()
    {
        $data['title'] = $this->session->userdata('id_jurusan');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/index', $data);
        $this->load->view('templates/footer');
    }
    public function dataKelasRpl()
    {
        $data['title'] = 'Data KElas Rpl';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelasRpl'] = $this->Model_kelas->getKelasRpl();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataKelasRpl', $data);
        $this->load->view('templates/footer');
    }
    public function tambahKelasRpl()
    {
        $data['kelasRpl'] = $this->Model_kelas->getKelasRpl();
        $keju = $this->input->post('keju', TRUE);

        $data = array(
            'keju' => $keju,
        );

        $this->db->insert('tb_kelas_rpl', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas Telah Ditambahkan</div>');
        redirect('jurusan/dataKelasRpl');
    }
    public function editKelasRpl($id)
    {

        $id = $this->input->post('id_kelasrpl');
        $$data['kelasRpl'] = $this->db->get('tb_kelas_rpl')->result_array();
        $keju = $this->input->post('keju', TRUE);

        $data = array(
            'keju' => $keju,
        );

        $this->db->where('id_kelasrpl', $id);
        $this->db->update('tb_kelas_rpl', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas Berhasil Di Ubah</div>');
        redirect('jurusan/dataKelasRpl');
    }
    public function deleteKelasRpl($id)
    {
        $this->Model_kelas->deleteKelasRpl($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data has been Diahapus!</div>');
        redirect('jurusan/dataKelasRpl');
    }
    public function dataSiswaRpl($id)
    {
        $kelas = $this->Model_siswa->kelas($id);
        $data['title'] = 'Data Siswa Kelas : ' . $kelas->keju;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswaRpl'] = $this->Model_siswa->getSiswa12Rpl1();
        $data['kelasRpl'] = $this->Model_kelas->getKelasRpl();
        $kelas = $this->Model_siswa->kelas($id);
        $data['dataRpl'] = $this->Model_siswa->get_all_kelas($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataSiswaRpl', $data);
        $this->load->view('templates/footer');
    }
    public function allDAtaRpl(){
        $data['title'] = 'Data Siswa Rpl';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelasRpl'] = $this->Model_kelas->getKelasRpl();
        $data['datasiswaRpl'] = $this->Model_siswa->get_all_siswa();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/tambahSiswaRpl', $data);
        $this->load->view('templates/footer');
    }
    public function tambahSiswaRpl()
    {
        
        $data['kelasRpl'] = $this->Model_kelas->getKelasRpl();
        $nama = $this->input->post('nama', TRUE);
        $keju_siswa = $this->input->post('keju', TRUE);

        $data = array(
            'nama' => $nama,
            'kelas' => $keju_siswa,
        );

        $this->db->insert('tb_siswa_rpl', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Telah Ditambahkan</div>');
        redirect('jurusan/allDAtaRpl');
    }
    public function editSiswaRpl()
    {
        $id = $this->input->post('id');
        $$data['siswaRpl'] = $this->db->get('tb_siswa_rpl')->result_array();
        $nama = $this->input->post('nama', TRUE);
        $keju_siswa = $this->input->post('keju', TRUE);

        $data = array(
            'nama' => $nama,
            'kelas' => $keju_siswa,
        );

        $this->db->where('id', $id);
        $this->db->update('tb_siswa_rpl', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Berhasil Di Ubah</div>');
        redirect('jurusan/allDAtaRpl');
    }
    public function deleteSiswaRpl($id)
    {
        $this->Model_siswa->deleteSiswaRpl($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Telah Dihapus</div>');
        redirect('jurusan/allDAtaRpl');
    }
    public function dataAkunRpl()
    {
        $data['title'] = 'Data Akun Rpl';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['akunRpl'] = $this->Model_siswa->getAkunSiswaRpl();
        $data['kelasRpl'] = $this->Model_kelas->getKelasRpl();
        $data['role'] = $this->Model_kelas->tampilRole();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('akunJurusan/akunRpl', $data);
        $this->load->view('templates/footer');
    }
    public function tambahAkunRpl()
    {
        $data['akunRpl'] = $this->Model_siswa->getAkunSiswaRpl();
        $data['kelasRpl'] = $this->Model_kelas->getKelasRpl();

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        $config['upload_path']          = './gambar/profilrpl/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1080;
        $config['max_height']           = 1080;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('userfile')) {
            echo $this->upload->display_errors();
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $name = $this->input->post('name', TRUE);
            $email = $this->input->post('email', TRUE);
            $role = $this->input->post('role', TRUE);
            $kelasrpl = $this->input->post('kelasrpl', TRUE);

            $data = array(
                'name' => $name,
                'email' => $email,
                'image' => $gambar,
                'id_kelasrpl' => $kelasrpl,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $role,
                'is_active' => 1,
                'date_created' => time()
            );

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Telah Ditambahkan</div>');
            redirect('jurusan/dataAkunRpl');
        }
    }
    public function editAkunRpl()
    {
        $data['akunRpl'] = $this->Model_siswa->getAkunSiswaRpl();
        $data['kelasRpl'] = $this->Model_kelas->getKelasRpl();

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        $id = $this->input->post('id');

        $gambar = $_FILES['userfile']['name'];
        $name = $this->input->post('name', TRUE);
        $email = $this->input->post('email', TRUE);


        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '2048';
        $config['upload_path']   = './gambar/profilrpl/';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('userfile')) {
            $cek = $this->db->get_where('user', array("id" => $id))->row_array();
            $old_image =  $cek['image'];
            if ($old_image != 'default.jpg') {
                unlink(FCPATH . 'gambar/profilrpl/' . $old_image);
            }

            $new_image = $this->upload->data('file_name');
            $this->db->set('image', $new_image);
        } else {
            echo $this->upload->display_errors();
        }


        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        );

        $this->db->where('id', $id);
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil Diubah</div>');
        redirect('jurusan/dataAkunRpl');
    }
    public function deleteAkunRpl($id)
    {
        $gambar = $this->Model_siswa->getAkunSiswaRplById($id);
        unlink(FCPATH . 'gambar/profilrpl/' . $gambar['image']);
        $this->Model_siswa->deleteAkunSiswaRpl($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil Dihapus</div>');
        redirect('jurusan/dataAkunRpl');
    }
    public function dataAbsenRpl()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['allAbsenRpl'] = $this->Model_absen->getAbsenAllRpl();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/allAbsenRpl', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen10Rpl1(){
        $data['title'] = 'Data Absen X RPL 1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen10Rpl1();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataAbsen10Rpl1', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen10Rpl2(){
        $data['title'] = 'Data Absen X RPL 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen10Rpl2();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataAbsen10Rpl2', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen10Rpl3(){
        $data['title'] = 'Data Absen X RPL 3';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen10Rpl3();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataAbsen10Rpl1', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen11Rpl1(){
        $data['title'] = 'Data Absen XI RPL 1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen11Rpl1();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataAbsen11Rpl1', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen11Rpl2(){
        $data['title'] = 'Data Absen XI RPL 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen11Rpl2();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataAbsen11Rpl2', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen11Rpl3(){
        $data['title'] = 'Data Absen XI RPL 3';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen11Rpl3();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataAbsen11Rpl3', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen12Rpl1(){
        $data['title'] = 'Data Absen XII RPL 1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen12Rpl1();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataAbsen12Rpl1', $data);
        $this->load->view('templates/footer');
    }
    public function dataAbsen12Rpl2(){
        $data['title'] = 'Data Absen XII RPL 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['absen'] = $this->Model_absen->getAbsen12Rpl2();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataAbsen12Rpl2', $data);
        $this->load->view('templates/footer');
    }
    public function dataKelasTkj()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelasTkj'] = $this->Model_kelas->getKelasTkj();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataKelasTkj', $data);
        $this->load->view('templates/footer');
    }
    public function tambahKelasTkj()
    {
        $data['kelasTkj'] = $this->Model_kelas->getKelasTkj();
        $keju = $this->input->post('keju', TRUE);

        $data = array(
            'keju' => $keju,
        );

        $this->db->insert('tb_kelas_tkj', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas Telah Ditambahkan</div>');
        redirect('jurusan/dataKelasTkj');
    }
    public function editKelasTkj($id)
    {
        $id = $this->input->post('id_kelastkj');
        $$data['kelasTkj'] = $this->db->get('tb_kelas_tkj')->result_array();
        $keju = $this->input->post('keju', TRUE);

        $data = array(
            'keju' => $keju,
        );

        $this->db->where('id_kelastkj', $id);
        $this->db->update('tb_kelas_tkj', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas Berhasil Di Ubah</div>');
        redirect('jurusan/dataKelasTkj');
    }
    public function deleteKelasTkj($id)
    {
        $this->Model_kelas->deleteKelasTkj($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data has been Diahapus!</div>');
        redirect('jurusan/dataKelasTkj');
    }
    public function dataSiswaTkj()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswaTkj'] = $this->Model_siswa->getSiswaTkj();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataSiswaTkj', $data);
        $this->load->view('templates/footer');
    }
    public function tambahSiswaTkj()
    {
        $data['siswaTkj'] = $this->Model_siswa->getSiswaTkj();
        $nama = $this->input->post('nama', TRUE);
        $keju_siswa = $this->input->post('keju', TRUE);

        $data = array(
            'nama' => $nama,
            'kelas' => $keju_siswa,
        );

        $this->db->insert('tb_siswa_tkj', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Telah Ditambahkan</div>');
        redirect('jurusan/dataSiswaTkj');
    }
    public function editSiswaTkj()
    {
        $id = $this->input->post('id_tkj');
        $$data['siswaTkj'] = $this->db->get('tb_siswa_tkj')->result_array();
        $nama = $this->input->post('nama', TRUE);
        $keju_siswa = $this->input->post('keju', TRUE);

        $data = array(
            'nama' => $nama,
            'kelas' => $keju_siswa,
        );

        $this->db->where('id_tkj', $id);
        $this->db->update('tb_siswa_tkj', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Berhasil Di Ubah</div>');
        redirect('jurusan/dataSiswaTkj');
    }
    public function deleteSiswaTkj($id)
    {
        $this->Model_siswa->deleteSiswaTkj($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Telah Dihapus</div>');
        redirect('jurusan/dataSiswaTkj');
    }
    public function dataKelasMm()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelasMm'] = $this->Model_kelas->getKelasMm();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataKelasMm', $data);
        $this->load->view('templates/footer');
    }
    public function tambahKelasMm()
    {
        $data['kelasMm'] = $this->Model_kelas->getKelasMm();
        $keju = $this->input->post('keju', TRUE);

        $data = array(
            'keju' => $keju,
        );

        $this->db->insert('tb_kelas_mm', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas Telah Ditambahkan</div>');
        redirect('jurusan/dataKelasMm');
    }
    public function editKelasMm($id)
    {
        $id = $this->input->post('id_kelasmm');
        $$data['kelasMm'] = $this->db->get('tb_kelas_mm')->result_array();
        $keju = $this->input->post('keju', TRUE);

        $data = array(
            'keju' => $keju,
        );

        $this->db->where('id_kelasmm', $id);
        $this->db->update('tb_kelas_mm', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas Berhasil Di Ubah</div>');
        redirect('jurusan/dataKelasMm');
    }
    public function deleteKelasMm($id)
    {
        $this->Model_kelas->deleteKelasMm($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data has been Diahapus!</div>');
        redirect('jurusan/dataKelasMm');
    }
    public function dataSiswaMm()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswaMm'] = $this->Model_siswa->getSiswaMm();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jurusan/dataSiswaMm', $data);
        $this->load->view('templates/footer');
    }
    public function tambahSiswaMm()
    {
        $data['siswaMm'] = $this->Model_siswa->getSiswaMm();
        $nama = $this->input->post('nama', TRUE);
        $keju_siswa = $this->input->post('keju', TRUE);

        $data = array(
            'nama' => $nama,
            'kelas' => $keju_siswa,
        );

        $this->db->insert('tb_siswa_mm', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Telah Ditambahkan</div>');
        redirect('jurusan/dataSiswaMm');
    }
    public function editSiswaMm()
    {
        $id = $this->input->post('id_mm');
        $$data['siswaMm'] = $this->db->get('tb_siswa_mm')->result_array();
        $nama = $this->input->post('nama', TRUE);
        $keju_siswa = $this->input->post('keju', TRUE);

        $data = array(
            'nama' => $nama,
            'kelas' => $keju_siswa,
        );

        $this->db->where('id_mm', $id);
        $this->db->update('tb_siswa_mm', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Berhasil Di Ubah</div>');
        redirect('jurusan/dataSiswaMm');
    }
    public function deleteSiswaMm($id)
    {
        $this->Model_siswa->deleteSiswaMm($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Telah Dihapus</div>');
        redirect('jurusan/dataSiswaMm');
    }
}
