<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Validasi Jika User Belum Login
        if ($this->session->userdata('login') != TRUE) {
            $url = base_url();
            redirect($url);
        }
    }

    function index()
    {
        $this->load->view('pages/v_dashboard');
    }

    function dataSiswaAdmin()
    {
        // function ini hanya boleh diakses oleh admin
        if ($this->session->userdata('session_access') == 1) {
            $this->load->view('pages/v_master_siswa');
        } else {
            redirect('Page403');
        }
    }

    function cetakSiswaAdmin()
    {
        // function ini hanya boleh diakses oleh admin
        if ($this->session->userdata('session_access') == 1) {
            $this->load->view('pages/v_cetak_master_siswa');
        } else {
            redirect('Page403');
        }
    }

    function dataSiswa()
    {
        // function ini hanya boleh diakses oleh siswa
        if ($this->session->userdata('session_access') == 2) {
            $this->load->view('pages/v_siswa');
        } else {
            redirect('Page403');
        }
    }
}
