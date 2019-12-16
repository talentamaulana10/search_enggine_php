 
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
<style>
  td{
    font-size:"5px"
  }
 
</style>
<body>
<div style="width:90%;margin-top:100px" class="container" >
<form action="" method="post" >
<div class="input-group mb-3">
  <input type="text" name="query"  class="form-control" placeholder="Tuliskan Sesuatu Tentang Customer" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" name="btn_submit" id="button-addon2">Cari</button>
  </div>
</div>
</form>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <!-- <th scope="col">id</th> -->
      <th scope="col">nama</th>
      <th scope="col">jenis</th>
      <th scope="col">alamat</th>
      <!-- <th scope="col">email</th> -->
      <th scope="col">telephon</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  
  <?php

  

  if(isset($_POST['btn_submit'])){
    $query = $_POST['query'];
    $sql = "SELECT * FROM customer WHERE nm_customer LIKE '%$query%' OR jenis LIKE '%$query%' OR alamat LIKE '%$query%' OR telp LIKE '%$query%';";
    $result = mysqli_query($koneksi,$sql);
    $resultCheck = mysqli_num_rows($result);
 
    if($resultCheck > 0){
      while ($row = mysqli_fetch_assoc($result)){
       //  $id_customer = $row['id_customer'];
        $nama_customer = $row['nm_customer'];
        $jenis = $row['jenis'];
        $alamat = $row['alamat'];
        $telp = $row['telp'];
        $id = $row['id_customer'];
        
        echo "<tr>";
        echo "<td>$nama_customer</td>";
        echo "<td>$jenis</td>";
        echo "<td>$alamat</td>";
        echo "<td>$telp</td>";
        echo "<td><a href='remove.php?id=$id'>hapus</a></td>";
        echo "</tr>";
      }
      
    }
    else{
     

    }
  }

  
   ?>
  
   
  </tbody>
</table>


</div>
</body>
</html>