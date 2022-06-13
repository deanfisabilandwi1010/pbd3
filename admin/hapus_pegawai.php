<?php
include '../config.php'; 

$id_pegawai = $_GET['id_pegawai'];
$sql = "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'";

$result = pg_query($conn, $sql);
if($result){
  echo "<script>alert('Data berhasil dihapus');window.location='../admin/view_pegawai.php';</script>";
} else {
  echo pg_last_error($conn);
}
?>