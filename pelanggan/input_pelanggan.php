<?php 
   
        if (isset($_POST['simpan'])) {
        $id_pelanggan = $_POST['id_pelanggan'];
        $plat_mobil = $_POST['plat_mobil'];
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $no_hp = $_POST['no_hp'];
        $keperluan = $_POST['keperluan'];
    
        $sql = pg_query($conn, "insert into pelanggan (id_pelanggan,plat_mobil,nama_pelanggan,no_hp, keperluan) values ('$id_pelanggan','$plat_mobil','$nama_pelanggan', '$no_hp', '$keperluan')");
    
        if ($sql) {
        
            echo "<script>alert('Data berhasil ditambah');window.location='../admin/index_admin.php'</script>";
      

        }
        }
        
        ?>