<?php
include "../config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Input Barang - Bima Motor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/Logoo.PNG" rel="icon">
  <link href="../assets/img/Logoo.PNG" rel="Logoo">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../assets/img/Logoo.PNG" alt="">
        <span class="d-none d-lg-block">Bima Motor</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
  </header><!-- End Header -->


    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
  
      <ul class="sidebar-nav" id="sidebar-nav">
  
        <li class="nav-item">
          <a class="nav-link " href="../inventoris/index_inventori.php">
            <i class="bi bi-grid"></i>
            <span>Beranda</span>
          </a>
        </li><!-- End Dashboard Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Sparepart</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="../inventoris/view_barang-inventori.php">
                <i class="bi bi-circle"></i><span>Barang</span>
              </a>
            </li>
            <li>
              <a href="../inventoris/view_restok-inventori.php">
                <i class="bi bi-circle"></i><span>Re-Stok Barang</span>
              </a>
            </li>
          </ul>
        </li><!-- End Components Nav -->
  
        

          <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-eval-wide"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="laporan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="../inventoris/view_transaksi_restok-inventori.php">
                <i class="bi bi-circle"></i><span>Re-Stok</span>
              </a>
            </li>
           
    </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Re-Stok</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../inventoris/index_inventori.php">Home</a></li>
          <li class="breadcrumb-item">Sparepart</li>
          <li class="breadcrumb-item active">Re-Stok</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    include "../config.php";

    ?>


    <section class="main-panel d-flex">
      <div class="container card">
        <div class="section-title">
          <h3 class="fw-bolder mb-4">Re-Stok Barang</h3>

        </div>


        <form method="POST" class="d-flex">
          <div class="col-sm-6">
            <label for="">Faktur Re-Stok</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="faktur_restok" class="form-control" maxlength="5" required />
              </div>
            </div>

            <label for="">Kode Barang</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="id_barang" class="form-control" required />
              </div>
            </div>

            <label for="">Tanggal</label>
            <div class="form-group">
              <div class="form-line">
                <input type="date" name="tanggal" class="form-control" required />
              </div>
            </div>

            <label for="">Harga Total</label>
            <div class="form-group">
              <div class="form-line">
                <input type="integer" name="harga_total" class="form-control" required />
              </div>
            </div>

            <label for="">Jumlah Pembelian</label>
            <div class="form-group">
              <div class="form-line">
                <input type="integer" name="jumlah_pembelian" class="form-control" required />
              </div>
            </div>


            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

          </div>
          <div class="col-sm-6">

          </div>


      </div>

      </form>
      <?php

      if (isset($_POST['simpan'])) {
        $faktur_restok = $_POST['faktur_restok'];
        $id_barang = $_POST['id_barang'];
        $tanggal = $_POST['tanggal'];
        $harga_total = $_POST['harga_total'];
        $jumlah_pembelian = $_POST['jumlah_pembelian'];

        $sql = pg_query($conn, "insert into detail_restok (faktur_restok,id_barang,tanggal,harga_total,jumlah_pembelian) values ('$faktur_restok','$id_barang','$tanggal', '$harga_total', '$jumlah_pembelian')");

        if ($sql) {
      ?>
          echo "<script>
            alert('Data berhasil ditambah');
            window.location = '../inventoris/view_barang-inventori.php';
          </script>";
      <?php
        }
      }

      


      ?>

      </div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Bima Motor</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Bima Motor</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>