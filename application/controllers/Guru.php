<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kelas');
        $this->load->model('Model_siswa');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer');
    }
    public function dataKelas()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Model_kelas->getKelas();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guru/dataKelas', $data);
        $this->load->view('templates/footer');
    }
    public function tambahKelas()
    {
        $data['kelas'] = $this->Model_kelas->getKelas();
        $keju = $this->input->post('keju', TRUE);

        $data = array(
            'keju' => $keju,
        );

        $this->db->insert('tb_kelas', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas Telah Ditambahkan</div>');
        redirect('guru/dataKelas');
    }
    public function editKelas($id)
    {
        $data['title'] = 'Edit Menu Makanan';

        $id = $this->input->post('id_kelas');
        $$data['kelas'] = $this->db->get('tb_kelas')->result_array();
        $keju = $this->input->post('keju', TRUE);

        $data = array(
            'keju' => $keju,
        );

        $this->db->where('id_kelas', $id);
        $this->db->update('tb_kelas', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas Berhasil Di Ubah</div>');
        redirect('guru/dataKelas');
    }
    public function deleteKelas($id)
    {
        $this->Model_kelas->deleteKelas($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data has been Diahapus!</div>');
        redirect('guru/dataKelas');
    }
    public function dataSiswa()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getSiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guru/dataSiswa', $data);
        $this->load->view('templates/footer');
    }
    public function tambahSiswa()
    {
        $data['siswa'] = $this->Model_siswa->getSiswa();
        $nama = $this->input->post('nama', TRUE);
        $keju_siswa = $this->input->post('keju', TRUE);

        $data = array(
            'nama_siswa' => $nama,
            'keju_siswa' => $keju_siswa,
        );

        $this->db->insert('tb_siswa', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Telah Ditambahkan</div>');
        redirect('guru/dataSiswa');
    }
    public function editSiswa()
    {
        $data['title'] = 'Edit Siswa';

        $id = $this->input->post('id_siswa');
        $$data['siswa'] = $this->db->get('tb_siswa')->result_array();
        $nama = $this->input->post('nama', TRUE);
        $keju_siswa = $this->input->post('keju', TRUE);

        $data = array(
            'nama_siswa' => $nama,
            'keju_siswa' => $keju_siswa,
        );

        $this->db->where('id_siswa', $id);
        $this->db->update('tb_siswa', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Berhasil Di Ubah</div>');
        redirect('guru/dataSiswa');
    }
    public function deleteSiswa($id)
    {
        $this->Model_siswa->deleteSiswa($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Siswa Telah Dihapus</div>');
        redirect('guru/dataSiswa');
    }
}
