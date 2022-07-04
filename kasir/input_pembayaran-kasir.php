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
      <h1>Pembayaran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../kasir/index_kasir.php">Beranda</a></li>
          <li class="breadcrumb-item">Pembayaran</li>
          <li class="breadcrumb-item active">Form Pembayaran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    include "../config.php";

    ?>


    <section class="main-panel d-flex">
      <div class="container card">
        <div class="section-title">
          <h3 class="fw-bolder mb-4">Pembayaran</h3>

        </div>


        <form method="POST" class="d-flex">
          <div class="col-sm-6">
            <label for="">No Faktur</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="no_faktur" class="form-control" value ="<?php echo $row['no_faktur']?>" readonly />
              </div>
            </div>

            <div class="form-group" style="margin-bottom:20px">
              <label for="id_pegawai" style="margin-bottom:10px">ID Pegawai</label>
              <select style="padding:5px 10px; width:100%;"  class="chosen-select" data-placeholder="Pilih Pegawai :" name="id_pegawai" required>
                <option value="<?php ?>" disabled selected>Pilih pegawai</option>
                <?php
                include '../connect.php';
                $pegawai = pg_query($conn, "SELECT * FROM pegawai order by id_pegawai ASC");
                while ($row2 = pg_fetch_assoc($pegawai)) {
                  echo "<option value='$row2[id_pegawai]'>$row2[nama_pegawai] - $row2[jabatan] </option>";
                }
                ?>
              </select>
            </div>

            <form method="POST" class="d-flex">
          <div class="col-sm-6">
            <label for="">Id Pelanggan</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="id_pelanggan" class="form-control" value ="<?php echo $row['id_pelanggan']?>" readonly />
              </div>
            </div>

            <form method="POST" class="d-flex">
          <div class="col-sm-6">
            <label for="">Id Barang</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="id_barang" class="form-control" value ="<?php echo $row['id_barang']?>" readonly />
              </div>
            </div>

            <label for="">Harga Barang</label>
            <div class="form-group">
              <div class="form-line">
              <input type="text" name="harga_barang" class="form-control" value ="<?php echo $row['harga_barang']?>" readonly />
              </div>
            </div>


            <label for="">Total Harga</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="harga_total" class="form-control" id="total" value = "<?php echo $row['harga_total']?>" readonly />
              </div>
            </div>


            <label for="">Tanggal</label>
            <div class="form-group">
              <div class="form-line">
                <input type="date" name="tanggal" class="form-control" required />
              </div>
            </div>

            <label for="">Uang Pelanggan</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="harga_total" class="form-control" id="uang"  required />
              </div>
            </div>

            <label for="">Kembalian</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="kembalian" class="form-control" id="kembalian"  readonly />
              </div>
            </div>

            <script>
              function doMath() {
                var numOne = document.getElementById('uang').value;
                var numTwo = document.getElementById('total').value;
                var theProduct = parseInt(numOne) - parseInt(numTwo);
                document.getElementById("kembalian").value = theProduct;

              }
            </script>

            <br>
            <a href="#" class="btn btn-primary bi bi-calculator mb-2" name="hitung" onclick="doMath()">Hitung</a>
            <input type="submit" name="bayar" value="bayar" class="btn btn-primary bi bi-save-fill mb-2">
            

          </div>
          <div class="col-sm-6">

          </div>


      </div>

      </form>
      <?php

      if (isset($_POST['bayar'])) {
        $no_faktur = $_POST['no_faktur'];
        $id_barang = $_POST['id_barang'];
        $id_pegawai = $_POST['id_pegawai'];
        $id_pelanggan = $_POST['id_pelanggan'];
        $harga_total = $_POST['harga_total'];
        $tanggal = $_POST['tanggal'];

        
        $sql = pg_query($conn, "INSERT INTO pembayaran (no_faktur ,id_pegawai ,id_barang, id_pelanggan, harga_total, tanggal) values ('$no_faktur','$id_pegawai','$id_barang','$id_pelanggan','$harga_total', '$tanggal')");
        if ($sql ) {
      ?>
          echo "<script>
            alert('Data berhasil ditambah');
            window.location = '../kasir/view_pembayaran-kasir.php';
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