<?php
include "../config.php";

$no_faktur = $_GET['no_faktur'];
$sql = pg_query($conn, "SELECT * from transaksi where no_faktur = '$no_faktur'");
$row = pg_fetch_array($sql);
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Input Transaksi - Bima Motor</title>
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
          <a class="nav-link collapsed" href="../kasir/index_kasir.php">
            <i class="bi bi-house"></i>
            <span>Beranda</span>
          </a>
        </li><!-- End Dashboard Nav -->
  
      <ul class="sidebar-nav" id="sidebar-nav">
  
      <li class="nav-item">
          <a class="nav-link collapsed" href="../kasir/view_pelanggan.php">
            <i class="bi bi-person-fill"></i>
            <span>Pelanggan</span>
          </a>
        </li>

          <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-cash-stack"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="laporan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="../kasir/view_transaksi.php">
                <i class="bi bi-circle"></i><span>Transaksi</span>
              </a>
            </li>
            <li>
              <a href="../kasir/view_pembayaran-kasir.php">
                <i class="bi bi-circle"></i><span>Pembayaran</span>
              </a>
            </li>
          </ul>
          </li>
        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="../login.php">
            <i class="bi bi-door-open-fill"></i>
            <span>Logout</span>
          </a>
        </li><!-- End F.A.Q Page Nav -->
  
    </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Transaksi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../kasir/index_kasir.php">Home</a></li>
          <li class="breadcrumb-item">Transaksi</li>
          <li class="breadcrumb-item active">Tambah Transaksi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    include "../config.php";

    ?>


    <section class="main-panel d-flex">
      <div class="container card">
        <div class="section-title">
          <h3 class="fw-bolder mb-4">Tambah Transaksi</h3>

        </div>


        <form method="POST" class="d-flex">
          <div class="col-sm-6">
            <label for="">No Faktur</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="no_faktur" class="form-control" value ="<?php echo $row['no_faktur']?>" readonly />
              </div>
            </div>

            <label for="">Id Pelanggan</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="id_pelanggan" class="form-control" value="<?php echo $row['id_pelanggan'] ?>" readonly />
              </div>
            </div>

            <label for="">Id Barang</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="id_barang" class="form-control" value="<?php echo $row['id_barang'] ?>" readonly />
              </div>
            </div>

        

            <label for="">Harga Barang</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="harga_barang" class="form-control" id="harga_barang" value ="<?php echo $row['harga_barang']?>" readonly />
              </div>
            </div>


            <label for="">Jumlah Barang</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="jumlah_barang" class="form-control" id="jml_brg" value ="<?php echo $row['jumlah_barang']?>" readonly />
              </div>
            </div>
            

            <label for="">Total Harga</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="harga_total" class="form-control" id="total" value ="<?php echo $row['harga_total']?>" readonly />
              </div>
            </div>

            

            <!-- <label for="">Status</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="status" class="form-control" required />
              </div>
            </div> -->
            <label for="">Status Barang : </label>
            <div class="form-group">
                <div class="form-line">
                <input type="radio" name="status" value="Selesai" required />
                <label >Selesai</label>  
                </div>
                <div class="form-line">
                <input type="radio" name="status" value="Belum" required />
                <label >Belum</label>  
                </div>

            </div>

            <label for="">Tanggal</label>
            <div class="form-group">
              <div class="form-line">
                <input type="date" name="tanggal" class="form-control" required />
              </div>
            </div>

            <br>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary bi bi-save-fill mb-2">
            

          </div>
          <div class="col-sm-6">

          </div>


      </div>

      </form>
      <?php


        if (isset($_POST['simpan'])) {
            $no_faktur = $_POST['no_faktur'];
            $id_pelanggan = $_POST['id_pelanggan'];
            $id_barang = $_POST['id_barang'];
            $harga_barang = $_POST['harga_barang'];
            $jumlah_barang = $_POST['jumlah_barang'];
            $harga_total = $_POST['harga_total'];
            $status = $_POST['status'];
            $tanggal = $_POST['tanggal'];
    
            $sql = pg_query($conn, "UPDATE transaksi set no_faktur='$no_faktur', id_pelanggan='$id_pelanggan', id_barang='$id_barang', harga_barang='$harga_barang', jumlah_barang='$jumlah_barang', harga_total='$harga_total', status='$status', tanggal='$tanggal' where no_faktur='$no_faktur'");
        if($sql){
        echo "<script>alert('Data berhasil diedit');window.location='../kasir/view_transaksi.php';</script>";
        } else {
        echo pg_last_error($conn);
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