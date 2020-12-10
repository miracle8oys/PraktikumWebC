
 <?php 

    session_start();
    include 'koneksi.php';
    if (!isset($_SESSION['login'])) {
      echo "<script> alert('Anda harus login terlebih dahulu')</script>";
      echo "<script> location='login.php'</script>";
      exit;
    }
    

    if (isset($_POST['tambah'])) {



      $nim=$_POST['nim'];
      $nama=$_POST['nama'];
      $alamat=$_POST['alamat'];
      $ipk=$_POST['ipk'];


     
     $ambil = $koneksi->query("INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `ipk`) VALUES ('$nim', '$nama', '$alamat', '$ipk');");


      echo "<script> alert('Data Berhasil Ditambahkan')</script>";
      echo "<script> location='admin.php'</script>";
    }

    

     ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Tambah Mahasiswa</title>
    
  </head>
  <body>

    

    <form action="" method="POST" enctype="multipart/form-data">
<div class="form-row ml-2">
  <div class="form-group col-md-3">
    <label for="exampleFormControlInput1">NIM</label>
    <input type="number" class="form-control" name="nim" placeholder="1808561xxx" autofocus="">
  </div>

  <div class="form-group col-md-3">
    <label for="exampleFormControlInput1">Nama
    <input type="text" class="form-control" name="nama"  autocomplete="off">
    </label>
  </div>
</div>
<div class="form-row ml-2">
  <div class="form-group col-md-3">
    <label for="exampleFormControlInput1">Alamat
    <input type="text" class="form-control" name="alamat" autocomplete="off">
    </label>
  </div>

  <div class="form-group col-md-3">
    <label for="exampleFormControlInput1">IPK
    <input type="text" class="form-control" name="ipk" >
    </label>
  </div>
</div>

  
    <br />
    
  </div>

  
<div class="col mb-2 ml-3">
   <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
</div>


</form>
    



<script type="text/javascript" src="js/script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>