<?php
include_once("koneksi.php")
?>

<?php
// include_once("koneksi.php");

$id =  $_GET['id'];
$sql = "SELECT * FROM customer WHERE id_customer=$id";
$result = mysqli_query($koneksi,$sql);
$resultCheck = mysqli_num_rows($result);

// echo $resultCheck;
$row = mysqli_fetch_assoc($result);

// echo $row['nm_customer'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="display:flex;justify-content:center;align-items:center;flex-direction:column" >
<form method="post" style="width:80%;margin-top:100px" >
<h5>FORM EDIT DATA CUSTOMER</h5>

  

  <div class="form-group">
  <?php
   $origin_name = $row['nm_customer'];
   if($origin_name === ""){
     echo "<input class='form-control' name='new_nama' value='Nama Belum Di Buat'>";
   }
   else{
     echo "<input class='form-control' name='new_nama' value='$origin_name'>";
   }
  ?>
  </div>
  <div class="form-group">
  <?php
    $origin_jenis = $row['jenis'];
    if($origin_jenis === ""){
      echo "<input class='form-control' name='new_jenis' value='Jenis Belum DI Buat'>";
    }
    else{
      echo "<input class='form-control' name='new_jenis' value='$origin_jenis'>";
    }
  ?>
  </div>
  <div class="form-group">
  <?php
    $origin_alamat = $row['alamat'];
    if($origin_alamat === ""){
      echo "<input class='form-control' name='new_alamat' value='Alamat Belum DI Buat'>";
    }
    else{
      echo "<input class='form-control' name='new_alamat' value='$origin_alamat'>";
    }
  ?>
  </div>
  <div class="form-group">
  <?php
    $origin_telp = $row['telp'];
    if($origin_telp === ""){
      echo "<input class='form-control' name='new_telp' value='Telephone Belum DI Buat'>";
    }
    else{
      echo "<input class='form-control' name='new_telp' value='$origin_telp'>";
    }
  ?>
  </div>
  <button type="submit" name="btn_edit" class="btn btn-primary">Edit</button>
</form>
</body>

<?php

if(isset($_POST['btn_edit'])){
  $new_name = $_POST['new_nama'];
  $new_jenis = $_POST['new_jenis'];
  $new_alamat = $_POST['new_alamat'];
  $new_telp = $_POST['new_telp'];

  $sql_syntax_update = "UPDATE customer SET nm_customer='$new_name' , jenis='$new_jenis' , alamat='$new_alamat' , telp='$new_telp' WHERE id_customer=$id";
  $action_edit = mysqli_query($koneksi,$sql_syntax_update);

  if($action_edit){
    header('Location:index.php');
  }
  else{
    echo "update has been failed";
  }
}

?>

</html>