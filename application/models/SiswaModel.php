<?php
class SiswaModel extends CI_Model
{
    function getSiswa()
    { //  Ambil data siswa dari table Siswa yang akan di generate ke datatable
        $this->load->library('datatables');

        $this->datatables->select('s_nim, s_nama, s_password, s_ttl, s_alamat');
        $this->datatables->from('tbl_siswa');
        $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-s_nim="$1" data-s_nama="$2" data-s_password="$3" data-s_ttl="$4" data-s_alamat="$5">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-s_nim="$1">Hapus</a>', 's_nim, s_nama, s_password, s_ttl, s_alamat');
        return $this->datatables->generate();
    }

    function getSiswaRead()
    { //  Ambil data siswa dari table Siswa yang akan di generate ke datatable
        $this->load->library('datatables');

        $this->datatables->select('s_nim, s_nama, s_password, s_ttl, s_alamat');
        $this->datatables->from('tbl_siswa');
        return $this->datatables->generate();
    }

    function simpanSiswa($nim, $nama, $password, $ttl, $alamat)
    {
        $hasil = $this->db->query("INSERT INTO tbl_siswa (s_nim, s_nama, s_password, s_ttl, s_alamat)VALUES('$nim','$nama','$password','$ttl','$alamat')");
        return $hasil;
    }

    function getSiswaById($nim)
    {
        $result = $this->db->query("SELECT * FROM tbl_siswa WHERE s_nim='$nim'");
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $data) {
                $hasil = array(
                    's_nim' => $data->nim,
                    's_nama' => $data->nama,
                    's_password' => $data->password,
                    's_ttl' => $data->ttl,
                    's_alamat' => $data->alamat,
                );
            }
        }
        return $hasil;
    }

    function updateSiswa($nim, $nama, $password, $ttl, $alamat)
    {
        $hasil = $this->db->query("UPDATE tbl_siswa SET s_nama='$nama',s_password='$password',s_ttl='$ttl',s_alamat='$alamat' WHERE s_nim='$nim'");
        return $hasil;
    }

    function deleteSiswa($nim)
    {
        $result = $this->db->query("DELETE FROM tbl_siswa WHERE s_nim='$nim'");
        return $result;
    }
    public function view()
    {
        return $this->db->get('tbl_siswa')->result(); // Tampilkan semua data yang ada di tabel siswa
    }
}
