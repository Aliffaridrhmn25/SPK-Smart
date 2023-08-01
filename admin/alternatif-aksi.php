<?php
$koneksi= mysqli_connect("localhost","root","","smart");
    if(mysqli_connect_errno()) {
        echo "Koneksi Gagal : " .mysqli_connect_errno();
    }

    if(isset($_POST['tambah_data'])) {
        $kode_alternatif = $_POST['kode_alternatif'];
        $nama_alternatif= $_POST['nama_alternatif'];
        $tambah = mysqli_query($koneksi, "INSERT INTO tb_alternatif VALUES ('','$kode_alternatif','$nama_alternatif')");

        if($tambah==true) {
            header('location:index.php?page=alternatif');
        } else {
            header('location:index.php?page=alternatif-tambah');
        }
    }

    if(isset($_POST['perbarui'])) {
        $kode_alternatif = $_POST['kode_alternatif'];
        $nama_alternatif = $_POST['nama_alternatif'];
        $perbarui = mysqli_query($koneksi, "UPDATE tb_alternatif SET nama_alternatif= '$nama_alternatif' WHERE kode_alternatif='$kode_alternatif'");
     
        if($perbarui==true) {
            header('location:index.php?page=alternatif');
        } 
    }

    if(isset($_POST['hapus'])) {
        $kode_alternatif = $_POST['kode_alternatif'];
        $nama_alternatif = $_POST['nama_alternatif'];
        $hapus = mysqli_query($koneksi, "DELETE FROM tb_alternatif WHERE kode_alternatif = '$kode_alternatif'");

        if($hapus==true) {
            header('location:index.php?page=alternatif');
        } 
    }
?>    