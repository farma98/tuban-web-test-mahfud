<?php
class LoginController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    function index()
    {
        $this->load->view('v_login');
    }

    function auth()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

        $checkAdmin = $this->LoginModel->authAdmin($username, $password);

        if ($checkAdmin->num_rows() > 0) { // Login Sebagai Admin
            $data = $checkAdmin->row_array();
            $this->session->set_userdata('login', TRUE);

            if ($data['a_level'] == 1) { //Akses Admin
                $this->session->set_userdata('session_access', 1);
                $this->session->set_userdata('session_id', $data['a_nip']);
                $this->session->set_userdata('session_name', $data['a_nama']);
                redirect('Dashboard');
            }
        } else { // Login Sebagai Siswa
            $checkSiswa = $this->LoginModel->authSiswa($username, $password);
            if ($checkSiswa->num_rows() > 0) {
                $data = $checkSiswa->row_array();
                $this->session->set_userdata('login', TRUE);
                $this->session->set_userdata('session_access', 2);
                $this->session->set_userdata('session_id', $data['s_nim']);
                $this->session->set_userdata('session_name', $data['s_nama']);
                redirect('Dashboard');
            } else {  // jika username dan password tidak ditemukan atau salah
                $url = base_url();
                echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
                redirect($url);
            }
        }
    }

    function logout()
    { // Melakukan logout
        $this->session->sess_destroy();
        $url = base_url();
        redirect($url);
    }
}
