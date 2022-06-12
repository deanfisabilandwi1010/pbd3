<?php
include "../config.php";

?>


<section class="main-panel d-flex">
    <div class="container card">
        <div class="section-title">
            <h3 class="fw-bolder mb-4">Tambah Barang</h3>

        </div>
       

        <form method="POST" class="d-flex">
            <div class="col-sm-6">
                <label for="">Id Barang</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="id_barang" class="form-control" maxlength="5" required />
                    </div>
                </div>

                <label for="">Nama Barang</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="nama_barang" class="form-control" required />
                    </div>
                </div>

                <label for="">Harga Jual</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="harga_jual" class="form-control" required />
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
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $harga_jual = $_POST['harga_jual'];
    
        $sql = pg_query($conn, "insert into barang (id_barang,nama_barang,harga_jual) values ('$id_barang','$nama_barang','$harga_jual')");
    
        if ($sql) {
        ?>
            echo "<script>alert('Data berhasil ditambah');window.location='../transaksi-stok.php';</script>";
        <?php
        }
        }
        
        ?>


?>

    </div>
</section>