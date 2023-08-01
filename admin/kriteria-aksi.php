<?php
$koneksi= mysqli_connect("localhost","root","","smart");
    if(mysqli_connect_errno()) {
        echo "Koneksi Gagal : " .mysqli_connect_errno();
    }

    if(isset($_POST['tambah_data'])) {
        $kode_kriteria = $_POST['kode_kriteria'];
        $nama_kriteria= $_POST['nama_kriteria'];
        $bobot = $_POST['bobot'];
        $tambah = mysqli_query($koneksi, "INSERT INTO tb_kriteria VALUES ('','$kode_kriteria','$nama_kriteria','$bobot')");

        if($tambah==true) {
            header('location:index.php?page=kriteria');
        } else {
            header('location:index.php?page=kriteria-tambah');
        }
    }
    if(isset($_POST['perbarui'])) {
        $kode_kriteria = $_POST['kode_kriteria'];
        $nama_kriteria = $_POST['nama_kriteria'];
        $bobot = $_POST['bobot'];
        $perbarui = mysqli_query($koneksi, "UPDATE tb_kriteria SET nama_kriteria= '$nama_kriteria' WHERE kode_kriteria='$kode_kriteria'");
     
        if($perbarui==true) {
            header('location:index.php?page=kriteria');
        } 
    }

if(isset($_POST['hapus'])) {
    $kode_kriteria = $_POST['kode_kriteria'];
    $nama_kriteria = $_POST['nama_kriteria'];
    $bobot = $_POST['bobot'];
    $hapus = mysqli_query($koneksi, "DELETE FROM tb_kriteria WHERE kode_kriteria = '$kode_kriteria'");

    if($hapus==true) {
        header('location:index.php?page=kriteria');
    } 
}

?>s







