<?php
include '../config.php'; 

$id_barang = $_GET['id_barang'];
$sql = "DELETE FROM barang WHERE id_barang='$id_barang'";

$result = pg_query($conn, $sql);
if($result){
  echo "<script>alert('Data berhasil dihapus');window.location='../admin/view_barang.php';</script>";
} else {
  echo pg_last_error($conn);
}
?>