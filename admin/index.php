<?php 
session_start();
include "../login/koneksi.php"; ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PELITA INDONESIA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<!-- Favicons -->
  <link href="../assets/img/favicon ibtpi.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/../assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Arsha - v2.2.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="?page=beranda"> <img src='images/LOGO IBTPI.png' width='250' height='150'></a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
           <li><a href="?page=beranda">Beranda</a></li>
           <li><a href="?page=kriteria">Kriteria</a></li>

           <li class="drop-down"><a href="#">Data</a>
            <ul>
              <li><a href="?page=alternatif">Alternatif</a></li>
              <li><a href="?page=nilai">Nilai Alternatif</a></li>
             </ul>       
            </li>	
       <li><a href="?page=hitung">Perhitungan</a></li>
     </ul>
      </nav><!-- .nav-menu -->

      <a href="logout.php" class="get-started-btn scrollto">Logout</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

       <?php
       if(isset($_GET['page'])) {
        switch($_GET['page']) {
        case 'beranda';
        include('beranda.php');
        break;
        case 'alternatif';
        include('alternatif.php');
        break;
        case 'alternatif-tambah';
        include('alternatif-tambah.php');
        break;
        case 'alternatif-edit';
        include('alternatif-edit.php');
        break;
        case 'alternatif-hapus';
        include('alternatif-hapus.php');
        break;
        case 'alternatif-aksi';
        include('alternatif-aksi.php');
        break;

        case 'kriteria';
        include('kriteria.php');
        break;
        case 'kriteria-tambah';
        include('kriteria-tambah.php');
        break;
        case 'kriteria-edit';
        include('kriteria-edit.php');
        break;
        case 'kriteria-hapus';
        include('kriteria-hapus.php');
        break;
        case 'kriteria-aksi';
        include('kriteria-aksi.php');
        break;

		case 'nilai';
        include('nilai.php');
        break;
        case 'nilai-tambah';
        include('nilai-tambah.php');
        break;
        case 'nilai-edit';
        include('nilai-edit.php');
        break;
        case 'nilai-hapus';
        include('nilai-hapus.php');
        break;
        case 'nilai-aksi';
        include('nilai-aksi.php');
        break;

        case 'hitung';
        include('hitung.php');
        break;
        case 'nilai-tambah';
        include('nilai-tambah.php');
        break;
        case 'nilai-edit';
        include('nilai-edit.php');
        break;
        case 'nilai-hapus';
        include('nilai-hapus.php');
        break;
        case 'nilai-aksi';
        include('nilai-aksi.php');
        break;
      }
    }
        ?>
                    

      </div>
    </section>

<div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; KELOMPOK 5<strong><span> | Metode SMART</span></strong> - Sistem Penunjang Keputusan
      </div>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>