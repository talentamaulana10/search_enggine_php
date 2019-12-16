<?php
    include_once("koneksi.php");

$id =  $_GET['id'];
$sql_remove = "DELETE FROM customer WHERE id_customer=$id";
$result_removing = mysqli_query($koneksi,$sql_remove);
if($result_removing){
  header('location:index.php');
}
else{
  echo "hapus data gagal";
}
?>