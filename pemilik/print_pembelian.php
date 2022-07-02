<?php
include "../config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pegawai - Bima Motor</title>
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
  <!-- <header id="header" class="header fixed-top d-flex align-items-center">
  
    <div class="d-flex align-items-center justify-content-between">
      <a href="../admin/index_admin.php" class="logo d-flex align-items-center">
      <img src="../assets/img/Logoo.PNG" alt="">
        <span class="d-none d-lg-block">Bima Motor</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div> -->
    <!-- End Logo -->
  <!-- </header> -->
  <!-- End Header -->
  
  
    <!-- ======= Sidebar ======= -->

  <!-- <main id="main" class="main">

    <div class="pagetitle">
      <h1>Laporan Pegawai</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../pemilik/index_pemilik.php">Home</a></li>
          <li class="breadcrumb-item">Laporan Pegawai</li>
        </ol>
      </nav>
    </div> -->
    <!-- End Page Title -->

    <main id="main" class="main">

    <div class="pagetitle">
      <h1>Laporan Data Barang</h1>
      <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../montir/index_montir.php">Home</a></li>
          <li class="breadcrumb-item">Laporan Barang</li>
        </ol>
      </nav> -->
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Laporan Data Re-Stok Barang</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <td scope="col">Faktur Re-Stok</td>
                    <td scope="col">Kode Barang</td>
                    <td scope="col">Tanggal</td>
                    <td scope="col">Harga Total</td>
                    <td scope="col">Jumlah Pembelian</td>
                    
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $result = pg_query($conn,"SELECT *FROM detail_restok ");
                  while ($row = pg_fetch_array($result)){
                    ?>
                  
                  <tr>
                    <td><?=$row['faktur_restok']?></td>
                    <td><?=$row['id_barang']?></td>
                    <td><?=$row['tanggal']?></td>
                    <td><?=$row['harga_total']?></td>
                    <td><?=$row['jumlah_pembelian']?></td>
                    <td align = "center">
                    <!-- <a class="btn btn-primary" href="../inventoris/edit_barang-inventori.php?id_barang=<?=$row['faktur_restok']?>">Re-Stok Barang</a> -->
                    <!-- <a class="btn btn-primary" href="../inventoris/tambah_stok-inventori.php?id_barang=<?=$row['id_barang']?>">Tambah</a> -->
                  </td>
                  </tr>
                  <?php
                  }
                  ?>
                <!-- <a href="../admin/input_barang.php" class="button-link">add</a> -->
                <!-- <button class="btn btn-primary" href="../admin/input_barang.php" >Add</button> -->
                
                
                <!-- <button class="btn btn-primary" onclick="location.href= ' ../inventoris/index_restok-inventori.php'" type="button" style="float: right" >Add</button> -->
                <!-- <button class="btn btn-primary" onclick="location.href='../admin/input_barang.php'" type="button" style="float: right" >Add</button> -->
                
                  

                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
      </div>
    </section>


    <script> 
    window.print();  
  </script>

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
  <script src="assets/js/main.js"></script>

</body>

</html>