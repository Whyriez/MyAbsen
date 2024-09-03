<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validation success
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'id_jurusan' => $user['id_jurusan'],
                        'id_kelasrpl' => $user['id_kelasrpl'],
                        'id_kelastkj' => $user['id_kelastkj'],
                        'id_kelasmm' => $user['id_kelasmm'],
                    ];
                    $this->session->set_userdata($data);
                    if ($user['id_jurusan'] == 1) {
                        redirect('jurusan/indexRpl');
                    } else if ($user['id_jurusan'] == 2) {
                        redirect('jurusan/indexTkj');
                    } else if ($user['id_jurusan'] == 3) {
                        redirect('jurusan/indexMm');
                    } else if ($user['id_jurusan'] == 4) {
                        redirect('jurusan');
                    } else if ($user['id_jurusan'] == 5) {
                        redirect('jurusan');
                    } else if ($user['id_jurusan'] == 6) {
                        redirect('jurusan');
                    } else if ($user['id_jurusan'] == 7) {
                        redirect('jurusan');
                    } else if ($user['id_jurusan'] == 8) {
                        redirect('jurusan');
                    } else if ($user['id_jurusan'] == 9) {
                        redirect('jurusan');
                    } else if ($user['id_jurusan'] == 10) {
                        redirect('jurusan');
                    } else if ($user['id_kelasrpl'] == 1) {
                        redirect('siswa/index12Rpl1');
                    } else if ($user['id_kelasrpl'] == 2) {
                        redirect('siswa/index12Rpl2');
                    }else if ($user['id_kelasrpl'] == 3) {
                        redirect('siswa/index11Rpl1');
                    } else if ($user['id_kelasrpl'] == 4) {
                        redirect('siswa/index11Rpl2');
                    }else if ($user['id_kelasrpl'] == 5) {
                        redirect('siswa/index11Rpl3');
                    } else if ($user['id_kelasrpl'] == 6) {
                        redirect('siswa/index10Rpl1');
                    }else if ($user['id_kelasrpl'] == 7) {
                        redirect('siswa/index10Rpl2');
                    } else if ($user['id_kelasrpl'] == 8) {
                        redirect('siswa/index10Rpl3');
                    } else if ($user['id_kelastkj'] == 1) {
                        redirect('siswa/indexTkj');
                    } else if ($user['id_kelasmm'] == 1) {
                        redirect('siswa/indexMm');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }


    public function registrasion()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        };

        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registrasion';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasion');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! your account has been created. Please Login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
