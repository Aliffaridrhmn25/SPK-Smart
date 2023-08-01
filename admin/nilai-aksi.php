<?php
$koneksi= mysqli_connect("localhost","root","","smart");
    if(mysqli_connect_errno()) {
        echo "Koneksi Gagal : " .mysqli_connect_errno();
    }


    if (isset($_POST['tambah_data'])) {
        $kode_alternatif = $_POST['kode_alternatif'];
        $kriteria1 = $_POST['kriteria1'];
        $kriteria2 = $_POST['kriteria2'];
        $kriteria3 = $_POST['kriteria3'];
        $kriteria4 = $_POST['kriteria4'];
        $kriteria5 = $_POST['kriteria5'];
    
        $tambah = mysqli_query($koneksi, "INSERT INTO tb_hitung (kode_alternatif, kriteria1, kriteria2, kriteria3, kriteria4, kriteria5) VALUES ('$kode_alternatif', '$kriteria1', '$kriteria2', '$kriteria3', '$kriteria4', '$kriteria5')");
    
        if ($tambah == true) {
            header('location:index.php?page=nilai');
        } else {
            header('location:index.php?page=nilai-tambah');
        }
    }

    if (isset($_POST['perbarui'])) {
        $kode_alternatif = $_POST['kode_alternatif'];
        $kriteria1 = $_POST['kriteria1'];
        $kriteria2 = $_POST['kriteria2'];
        $kriteria3 = $_POST['kriteria3'];
        $kriteria4 = $_POST['kriteria4'];
        $kriteria5 = $_POST['kriteria5'];
    
        $perbarui = mysqli_query($koneksi, "UPDATE tb_hitung SET kriteria1 = '$kriteria1', kriteria2 = '$kriteria2', kriteria3 = '$kriteria3', kriteria4 = '$kriteria4', kriteria5 = '$kriteria5' WHERE kode_alternatif = '$kode_alternatif'");

        if($perbarui==true) {
            header('location:index.php?page=nilai');
        } 
    }
    if(isset($_POST['hapus'])) {
        $kode_alternatif = $_POST['kode_alternatif'];
        $kriteria1= $_POST['kriteria1'];
        $kriteria2= $_POST['kriteria2'];
        $kriteria3= $_POST['kriteria3'];
        $kriteria4= $_POST['kriteria4'];
        $kriteria5= $_POST['kriteria5'];

        $hapus = mysqli_query($koneksi, "DELETE FROM tb_hitung WHERE kode_alternatif = '$kode_alternatif'");

        if($hapus==true) {
            header('location:index.php?page=nilai');
        } 
    }
?>    