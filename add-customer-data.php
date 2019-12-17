<?php
include_once("koneksi.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="display:flex;justify-content:center;align-items:center;flex-direction:column" >
<form method="post" style="width:80%;margin-top:20px" >
<h5>FORM TAMBAH DATA CUSTOMER</h5>
  <div class="form-group">
  <label for="exampleInputEmail1">Nama Customer</label>
    <input class="form-control" name="nama_customer" >
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Jenis</label>
    <input class="form-control" name="jenis" >
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Kabkot</label>
    <input class="form-control" name="kabkot" >
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Alamat</label>
    <input class="form-control" name="alamat" >
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Kecamatan</label>
    <input class="form-control" name="kecamatan" >
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Email</label>
    <input class="form-control" name="email" >
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Telp</label>
    <input class="form-control"  name="telp"  >
  </div>
  <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

<?php



if(isset($_POST['btn_submit'])){
    $id = hexdec( uniqid() );
    $nama_customer = $_POST['nama_customer'];
    $jenis = $_POST['jenis'];
    $kabkot = $_POST['kabkot'];
    $alamat = $_POST['alamat'];
    $kecamatan = $_POST['kecamatan'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $syntax_create = "INSERT INTO customer (id_customer,nm_customer,jenis,id_kabkot,alamat,id_kec,email,telp) VALUES ('$id','$nama_customer','$jenis','$kabkot','$alamat','$kecamatan','$email','$telp')";
    $sql = mysqli_query($koneksi,$syntax_create);
    if($sql){
        echo '<script language="javascript">';
        echo 'alert(thanks for your data)'; 
        echo '</script>';
        header('location:index.php');
    }
    else{
        echo '<script language="javascript">';
        echo 'alert(please check your connection)'; 
        echo '</script>';
    }
}

?>