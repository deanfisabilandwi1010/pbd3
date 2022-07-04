<?php
include '../config.php'; 

$id_barang = $_GET['id_barang'];
$sql = pg_query($conn, "SELECT * from detail_restok where id_barang='$id_barang'");
$row = pg_fetch_array($sql);

?>


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Barang - Bima Motor</title>
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
      <a href="../inventoris/index_inventori.php" class="logo d-flex align-items-center">
        <img src="../assets/img/Logoo.PNG" alt="">
        <span class="d-none d-lg-block">Bima Motor</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
  </header><!-- End Header -->
  
  
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
  
    <div class="d-flex align-items-center justify-content-between">
      <a href="../inventoris/index_inventori.php" class="logo d-flex align-items-center">
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
          <a class="nav-link collapsed" href="../inventoris/index_inventori.php">
            <i class="bi bi-house"></i>
            <span>Beranda</span>
          </a>
        </li><!-- End Dashboard Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="../inventoris/view_barang-inventori.php">
          <i class="bi bi-nut-fill"></i><span>Barang</span>
          </a>
        </li>
        <!-- End Components Nav -->
  
        

          <li class="nav-item">
          <a class="nav-link collapsed"  href="../inventoris/view_transaksi_restok-inventori.php">
            <i class="bi bi-cash-stack "></i><span>Transaksi Re-Stok</span>
          </a>          
          </li>
          
        <li class="nav-heading">Lainnya</li>
  
        
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="../login.php">
            <i class="bi bi-door-open-fill"></i>
            <span>Log Out</span>
          </a>
        </li><!-- End F.A.Q Page Nav -->
  
    </aside><!-- End Sidebar-->

    <main id="main" class="main">

<div class="pagetitle">
  <h1>Data Barang</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../admin/index_admin.php">Home</a></li>
      <li class="breadcrumb-item">Sparepart</li>
      <li class="breadcrumb-item">Edit Barang</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<?php
include "../config.php";

?>


<section class="main-panel d-flex">
<div class="container card">
    <div class="section-title">
        <h3 class="fw-bolder mb-4">Edit Barang</h3>

    </div>
   

    <form method="POST" class="d-flex">
        <div class="col-sm-6">
            <label for="">Id Barang</label>
            <div class="form-group">
                <div class="form-line">
                <input type="text" class="form-control" readonly name="id_barang" value="<?php echo $row['id_barang']?>" required>
                </div>
            </div>

            <label for="">Nama Barang</label>
            <div class="form-group">
                <div class="form-line">
                <input type="text" class="form-control" name="nama_barang" value="<?php echo $row['nama_barang']?>" required>
                </div>
            </div>

            <label for="">Harga Jual</label>
            <div class="form-group">
                <div class="form-line">
                <input type="integer" class="form-control" name="harga_jual" value="<?php echo $row['harga_jual']?>" required>
                </div>
            </div>

            <label for="">Harga Beli</label>
            <div class="form-group">
                <div class="form-line">
                <input type="integer" class="form-control" name="harga_beli" value="<?php echo $row['harga_beli']?>" required>
                </div>
            </div>

            <label for="">Jumlah Barang</label>
            <div class="form-group">
                <div class="form-line">
                <input type="integer" class="form-control" readonly name="total_barang" value="<?php echo $row['total_barang']?>" required>
                </div>
            </div>


            <input type="submit" name="simpan" value="Simpan" class="but mb-4 w-50 mt-2">

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

    $sql =  pg_query($conn,"UPDATE barang SET nama_barang='$nama_barang',  harga_jual='$harga_jual', harga_beli='$harga_beli', total_barang ='$total_barang' WHERE id_barang='$id_barang'");

    if($sql){
    echo "<script>alert('Data berhasil diedit');window.location='../inventoris/view_barang-inventori.php';</script>";
    } else {
    echo pg_last_error($conn);
    }
    }
    
    
    ?>


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