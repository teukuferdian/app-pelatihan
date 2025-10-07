<?php

class db
{
    private $koneksi;

    function __construct()
    {
        $this->koneksi = $koneksi = new mysqli("localhost", "root", "", "db_pelatihan");
    }

    function get_user($username, $password)
    {
        $data = $this->koneksi->query("select * from tbl_user where username='$username' and password='$password'");
        return $data;
    }

    // mahasiswa
    function get_allMhs()
    {
        $data = $this->koneksi->query("select * from tbl_mahasiswa");
        return $data;
    }

    function add_mhs($nim, $nama, $alamat)
    {
        $this->koneksi->query("insert into tbl_mahasiswa(nim,nama,alamat) values('$nim','$nama','$alamat')");
        return true;

    }

    function update_mhs($nim, $nama, $alamat)
    {
        $this->koneksi->query("UPDATE tbl_mahasiswa SET nama = '$nama', alamat = '$alamat' WHERE nim='$nim'");
        return true;
    }

    function get_MhdByNim($nim)
    {
        $data = $this->koneksi->query("select * from tbl_mahasiswa where nim='$nim'");
        return $data;
    }

    function del_mhs($nim)
    {
        $this->koneksi->query("delete from tbl_mahasiswa where nim='$nim'");
        return true;

    }

    // Dosen
    function get_allDosen()
    {
        $data = $this->koneksi->query("select * from tbl_dosen");
        return $data;
    }

    function add_dosen($kd_dosen, $nama, $alamat)
    {
        $this->koneksi->query("insert into tbl_dosen(kd_dosen,nama,alamat) values('$kd_dosen','$nama','$alamat')");
        return true;

    }

    function update_dosen($kd_dosen, $nama, $alamat)
    {
        $this->koneksi->query("UPDATE tbl_dosen SET nama = '$nama', alamat = '$alamat' WHERE kd_dosen='$kd_dosen'");
        return true;
    }

    function get_DosenByKode($kd_dosen)
    {
        $data = $this->koneksi->query("select * from tbl_dosen where kd_dosen ='$kd_dosen'");
        return $data;
    }

    function del_dosen($kd_dosen)
    {
        $this->koneksi->query("delete from tbl_dosen where kd_dosen='$kd_dosen'");
        return true;

    }

    function get_allMatkul()
    {
        $data = $this->koneksi->query("select * from tbl_matkul");
        return $data;
    }

    function add_matkul($kd_matkul, $nama, $sks)
    {
        $this->koneksi->query("insert into tbl_matkul(kd_matkul,nama,sks) values('$kd_matkul','$nama','$sks')");
        return true;

    }

    function update_matkul($kd_matkul, $nama, $sks)
    {
        $this->koneksi->query("UPDATE tbl_matkul SET nama = '$nama', sks = '$sks' WHERE kd_matkul='$kd_matkul'");
        return true;
    }

    function get_MatkulByKode($kd_matkul)
    {
        $data = $this->koneksi->query("select * from tbl_matkul where kd_matkul ='$kd_matkul'");
        return $data;
    }

    function del_matkul($kd_matkul)
    {
        $this->koneksi->query("delete from tbl_matkul where kd_matkul='$kd_matkul'");
        return true;

    }

//    semester

    function get_allSemester()
    {
        $data = $this->koneksi->query("select * from tbl_semester");
        return $data;
    }

    function add_semester($kd_semester, $semester)
    {
        $this->koneksi->query("insert into tbl_semester(kd_semester, semester) values('$kd_semester','$semester')");
        return true;
    }

    function update_semester($kd_semester, $semester)
    {
        $this->koneksi->query("UPDATE tbl_semester SET semester = '$semester' WHERE kd_semester='$kd_semester'");
        return true;
    }

    function get_SemesterByKode($kd_semester)
    {
        $data = $this->koneksi->query("select * from tbl_semester where kd_semester ='$kd_semester'");
        return $data;
    }

    function del_semester($kd_semester)
    {
        $this->koneksi->query("delete from tbl_semester where kd_semester='$kd_semester'");
        return true;
    }


    //    Jadwal

    function get_allJadwal()
    {
        $data = $this->koneksi->query("select * from tbl_jadwal");
        return $data;
    }

    function add_jadwal($kd_semester, $semester)
    {
        $this->koneksi->query("insert into tbl_jadwal(kd_semester, semester) values('$kd_semester','$semester')");
        return true;

    }

    function update_jadwal($kd_semester, $semester)
    {
        $this->koneksi->query("UPDATE tbl_jadwal SET semester = '$semester' WHERE kd_semester='$kd_semester'");
        return true;
    }

    function get_JadwalById($kd_semester)
    {
        $data = $this->koneksi->query("select * from tbl_jadwal where kd_semester ='$kd_semester'");
        return $data;
    }

    function del_jadwal($kd_semester)
    {
        $this->koneksi->query("delete from tbl_jadwal where kd_semester='$kd_semester'");
        return true;
    }

    function get_allKrs()
    {
        $data = $this->koneksi->query("select * from tbl_krs");
        return $data;
    }

    function add_krs($kd_semester, $semester)
    {
        $this->koneksi->query("insert into tbl_jadwal(kd_semester, semester) values('$kd_semester','$semester')");
        return true;

    }

    function update_krs($kd_semester, $semester)
    {
        $this->koneksi->query("UPDATE tbl_jadwal SET semester = '$semester' WHERE kd_semester='$kd_semester'");
        return true;
    }

    function get_krsById($kd_semester)
    {
        $data = $this->koneksi->query("select * from tbl_jadwal where kd_semester ='$kd_semester'");
        return $data;
    }

    function del_krs($kd_semester)
    {
        $this->koneksi->query("delete from tbl_jadwal where kd_semester='$kd_semester'");
        return true;
    }
}

?>


