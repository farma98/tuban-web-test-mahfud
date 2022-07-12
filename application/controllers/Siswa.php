<?php

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables'); //load library ignited-dataTable
        $this->load->model('SiswaModel'); //load model SiswaModel
    }

    function index()
    {   // function ini hanya boleh diakses oleh admin
        if ($this->session->userdata('session_access') == 1) {
            $this->load->view('pages/v_master_siswa');
        } else {
            redirect('Page403'); // Redirect ke halaman error custom
        }
    }

    function getSiswaJson()
    { // data data siswa page admin by JSON object
        header('Content-Type: application/json');
        echo $this->SiswaModel->getSiswa();
    }

    function getSiswaJsonRead()
    { // data data siswa page siswa by JSON object
        header('Content-Type: application/json');
        echo $this->SiswaModel->getSiswaRead();
    }

    function simpan()
    { // Menyimpan data siswa ke tbl_siswa
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $password = password_hash('pass' . $nim, PASSWORD_DEFAULT);
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');
        $data = $this->SiswaModel->simpanSiswa($nim, $nama, $password, $ttl, $alamat);
        echo json_encode($data);
    }

    function update()
    { // Melakukan update data siswa tbl_siswa
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');
        $data = $this->SiswaModel->updateSiswa($nim, $nama, $password, $ttl, $alamat);
        echo json_encode($data);
    }

    function delete()
    { //function hapus data siswa tbl_siswa
        $nim = $this->input->post('nim');
        $data = $this->SiswaModel->deleteSiswa($nim);
        echo json_encode($data);
    }

    function cetakSiswaAdmin()
    { // function ini hanya boleh diakses oleh admin
        if ($this->session->userdata('session_access') == 1) {
            $this->load->view('pages/v_cetak_master_siswa');
        } else {
            redirect('Page403'); // Redirect ke halaman error custom
        }
    }

    function dataSiswa()
    { // function ini hanya boleh diakses oleh siswa
        if ($this->session->userdata('session_access') == 2) {
            $this->load->view('pages/v_siswa');
        } else {
            redirect('Page403'); // Redirect ke halaman error custom
        }
    }
}
