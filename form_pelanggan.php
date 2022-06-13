<?php
include "config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Pelanggan - Bima Motor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logoo.PNG" rel="icon">
  <link href="assets/img/Logoo.PNG" rel="Logoo">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center" >

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/Logoo.PNG" alt="">
                  <span class="d-none d-lg-block">Bima Motor</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Selamat Datang Pelanggan Terhormat</h5>
                    <p class="text-center small">Silahkan Isi Data Anda</p>
                  </div>

                  <form class="row g-3 needs-validation" action="" method="post">

                  <label for="">ID Pelanggan</label>
                    <div class="form-group">
                    <div class="form-line">
                    <input type="text" name="id_pelanggan" class="form-control"  readonly />
                    </div>
                    </div>

                    <label for="">Plat Mobil</label>
                    <div class="form-group">
                    <div class="form-line">
                    <input type="text" name="plat_mobil" class="form-control" required />
                    </div>
                    </div>

                    <label for="">Jenis Mobil</label>
                    <div class="form-group">
                    <div class="form-line">
                    <input type="text" name="jenis_mobil" class="form-control"  required />
                    </div>
                    </div>

                    <label for="">Nama Pelanggan</label>
                    <div class="form-group">
                    <div class="form-line">
                    <input type="text" name="nama_pelanggan" class="form-control"  required />
                    </div>
                    </div>

                    <label for="">Nomor Telepon</label>
                    <div class="form-group">
                    <div class="form-line">
                    <input type="text" name="no_hp" class="form-control"  required />
                    </div>
                    </div>

                    <label for="">Keperluan</label>
                    <div class="form-group">
                    <div class="form-line">
                    <input type="text" name="keperluan" class="form-control"  required />
                    </div>
                    </div>



                    <div class="col-12">
                      <input class="btn btn-primary w-100" name="next" type="submit" value ="next">
                    </div>
                  </form>

                </div>
              </div>

              <?php
              
          if (isset($_POST['next'])) {
          $id_pelanggan = $_POST['id_pelanggan'];
          $jenis_mobil = $_POST['jenis_mobil'];
          $plat_mobil = $_POST['plat_mobil'];
          $nama_pelanggan = $_POST['nama_pelanggan'];
          $no_hp = $_POST['no_hp'];
          $keperluan = $_POST['keperluan'];
      
          $sql = pg_query($conn, "INSERT INTO mobil (id_pelanggan,plat_mobil,jenis_mobil,nama_pelanggan,no_hp,keperluan) VALUES ('$id_pelanggan','$plat_mobil','$jenis_mobil','$nama_pelanggan','$plat_mobil','$plat_mobil')");
      
          if ($sql) {
          ?>
              echo "<script>alert('Silahkan Isi Data Diri');window.location='form_data_pelanggan.php';</script>";
          <?php
          }
          }
          
          ?>

            


              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Bima Motor</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>