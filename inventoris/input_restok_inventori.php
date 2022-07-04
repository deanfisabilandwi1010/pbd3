<?php
include "../config.php";

$id_brg = 0;
$stok = 0;
if (isset($_POST['simpan'])) {
  $id_brg = $_POST['id_barang'];
  $stok = $_POST['total_barang'];
}

$sql1 = pg_query($conn, "SELECT * from barang ORDER BY id_barang ASC");
$row1 = pg_fetch_array($sql1);
$query2 = pg_query($conn, "SELECT max(faktur_restok) as faktur_restok FROM detail_restok");
$row4 = pg_fetch_array($query2);
$kode = $row4['faktur_restok'];
$urutan = (int) substr($kode, 3, 3);
$huruf = "FR";
$urutan=$urutan+1;
$id = $huruf.sprintf("%03s", $urutan);

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
        <a class="nav-link collapsed" href="../inventoris/view_transaksi_restok-inventori.php">
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
                <input type="text" name="faktur_restok" value="<?php echo $id?>" class="form-control" maxlength="5" readonly />
              </div>
            </div>

            <div class="form-group" style="margin-bottom:20px">
              <label for="id_barang" style="margin-bottom:10px">id_barang</label>
              <select style="padding:5px 10px; width:100%;" class="chosen-select" data-placeholder="Pilih ID Barang yang akan Di Restok" name="id_barang" required>
                <option value="<?php ?>" disabled selected>Pilih Barang</option>
                <?php
                include '../connect.php';
                $barang = pg_query($conn, "SELECT * FROM barang order by nama_barang ASC");
                while ($row = pg_fetch_assoc($barang)) {
                  echo "<option value='$row[id_barang]'>$row[nama_barang] - $row[harga_beli] </option>";
                }
                ?>
              </select>
            </div>

            <label for="">Harga Barang</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="harga_beli" class="form-control" id="harga" required />
              </div>
            </div>

            <label for="">Tanggal</label>
            <div class="form-group">
              <div class="form-line">
                <input type="date" name="tanggal" class="form-control" required />
              </div>
            </div>

            <label for="">Jumlah Pembelian</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="jumlah_pembelian" class="form-control" id="jumlah" value = 10 readonly />
              </div>
            </div>

            <script>
              function doMath() {
                var numOne = document.getElementById('harga').value;
                var numTwo = document.getElementById('jumlah').value;
                var theProduct = parseInt(numOne) * parseInt(numTwo);
                document.getElementById("hargaTotal").value = theProduct;

              }
            </script>

          
            <label for="">Harga Total</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="harga_total" id="hargaTotal" class="form-control" value="" readonly />
              </div>
            </div>




            <!-- <input type="submit" name="test" value="test" class="btn btn-primary">   -->
              <br>
              <a href="#" class="btn btn-primary bi bi-calculator mb-2" name="hitung" onclick="doMath()">Hitung</a>
            <input type="submit" name="simpan" value="simpan" onclick="domath()" class="btn btn-primary mb-2">
              
            <?php
            if (isset($_POST['simpan'])) {

              $detail = pg_query($conn, "SELECT harga_beli, total_barang from barang where id_barang='$id_brg'");
              while ($row3 = pg_fetch_assoc($detail))
              $tot = $row3['total_barang'];
              $qty = $_POST['jumlah_pembelian'];
              $harga_total = $harga_beli * $qty;
              $faktur_restok = $_POST['faktur_restok'];
              $id_barang = $_POST['id_barang'];
              $tanggal = $_POST['tanggal'];
              $harga_beli = $_POST['harga_beli'];
              $harga_total = $_POST['harga_total'];

              $Stok = $tot + $qty;
               
              $inputQuery2 =  pg_query($conn,"UPDATE barang SET total_barang='$Stok' WHERE id_barang='$id_brg'");
              $inputQuery = pg_query($conn, "insert into detail_restok (faktur_restok,id_barang,tanggal,harga_total,jumlah_pembelian,harga_beli) values('$faktur_restok','$id_brg','$tanggal','$harga_total','$qty','$harga_beli')");

              if ($inputQuery) {
             
                  echo "<script>
                  alert('Data berhasil ditambah!');
                  window.location = '../inventoris/view_transaksi_restok-inventori.php';
                </script>";
                }
               
              }
            ?>


          </div>
          <div class="col-sm-6">

          </div>


      </div>

      </form>


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