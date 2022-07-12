<?php

class LoginModel extends CI_Model
{
    // Untuk Cek Nip dan Password Admin
    function authAdmin($username, $password)
    {
        $query = $this->db->query("SELECT * FROM tbl_admin WHERE a_nama='$username' LIMIT 1");
        $user = $query->row();
        if (!password_verify($password, $user->password)) {
            return $query;
        }
    }

    // Untuk Cek Nim dan Password Siswa
    function authSiswa($username, $password)
    {
        $query = $this->db->query("SELECT * FROM tbl_siswa WHERE s_nama='$username' LIMIT 1");
        $user = $query->row();
        if (!password_verify($password, $user->password)) {
            return $query;
        }
    }
}
