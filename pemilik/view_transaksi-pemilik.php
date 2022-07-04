<?php
include "../config.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pemilik - Bima Motor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/Logoo.PNG" rel="icon">
  <link href="../assets/img/Logoo.PNG" rel="icon">
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
      <a href="../pemilik/index_pemilik.php" class="logo d-flex align-items-center">
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
          <a class="nav-link collapsed" href="../pemilik/index_pemilik.php">
            <i class="bi bi-house"></i>
            <span>Beranda</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-file-text-fill"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="laporan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="../pemilik/view_pembelian-pemilik.php">
                <i class="bi bi-circle"></i><span>Pembelian</span>
              </a>
            </li>
            <li>
              <a href="../pemilik/view_pegawai-pemilik.php">
                <i class="bi bi-circle"></i><span>Pegawai</span>
              </a>
            </li>
            <li>
              <a href="../pemilik/view_transaksi-pemilik.php">
                <i class="bi bi-circle"></i><span>Penjualan</span>
              </a>
            </li>
            <li>
              <a href="../pemilik/view_barang-pemilik.php">
                <i class="bi bi-circle"></i><span>Barang</span>
              </a>
            </li>
          </ul>
          </li>
          <li class="nav-heading">Lainnya</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="../login.php">
            <i class="bi bi-door-open-fill"></i>
            <span>Logout</span>
          </a>
        </li><!-- End F.A.Q Page Nav -->

    </aside><!-- End Sidebar-->
  

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Laporan Penjualan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../pemilik/index_pemilik.php">Beranda</a></li>
          <li class="breadcrumb-item"><a href="">Laporan Penjualan</a></li>
        </ol>

      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Laporan Data Penjualan</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                <div>
                 <a  name="Print" class="bi bi-printer-fill btn btn-primary"  href = "./print_transaksi.php" style="float: left" > Print </a>
                </div>
                  <tr>
                    <td scope="col">No Faktur</td>
                    <td scope="col">ID Pelanggan</td>
                    <td scope="col">Kode Barang</td>
                    <td scope="col">Total Harga</td>
                    <td scope="col">Jumlah Barang</td>
                    <td scope="col">Status Barang</td>
                    <td scope="col">Tanggal</td>
                    
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $result = pg_query($conn,"SELECT *FROM transaksi ");
                  while ($row = pg_fetch_array($result)){
                    ?>
                  
                  <tr>
                    <td><?=$row['no_faktur']?></td>
                    <td><?=$row['id_pelanggan']?></td>
                    <td><?=$row['id_barang']?></td>
                    <td><?=$row['harga_total']?></td>
                    <td><?=$row['jumlah_barang']?></td>
                    <td><?=$row['status']?></td>
                    <td><?=$row['tanggal']?></td>
                    <td align = "center">
                    <!-- <a class="btn btn-primary" href="../kasir/edit_transaksi.php?id_barang=<?=$row['id_barang']?>">Edit</a> -->
                    <!-- <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="../admin/hapus_barang.php?id_barang=<?=$row['id_barang']?>">Hapus</a> -->
                  </td>
                  </tr>
                  <?php
                  }
                  ?>
                <!-- <a href="../admin/input_barang.php" class="button-link">add</a> -->
                <!-- <button class="btn btn-primary" href="../admin/input_barang.php" >Add</button> -->
                
                <!-- <button class="btn btn-primary" onclick="location.href='../inventoris/input_transaksi.php'" type="button" style="float: right" >Tambah</button> -->
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
      </div>
    </section>
  

  </main><!-- End main -->

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