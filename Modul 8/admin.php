<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <?php 
         session_start();
         include 'koneksi.php';
         if (!isset($_SESSION['login'])) {
      echo "<script> alert('Anda harus login terlebih dahulu')</script>";
      echo "<script> location='index.php'</script>";
      exit;
    }
         ?>

         <?php 

         $students = $koneksi->query("SELECT * FROM mahasiswa ORDER BY nim DESC");

          //searching
     ?>
     <br>
     <br>
     <div class="col mt-5 text-center">
       <h1>Daftar Mahasiswa</h1>
     </div>

     <div class="col mb-2 ml-3 mt-3">
    <a href="create.php" class="btn btn-success">Tambah Mahasiswa</a>
     <a href="logout.php" class="btn btn-danger">Logout</a>
   </div>

      <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">NAMA</th>
      <th scope="col">Alamat</th>
      <th scope="col">IPK</th>
    </tr>
  </thead>
  <tbody>
   <?php  
   
   while($mhs = $students->fetch_assoc()): 
    ?> 
    <tr>
      
      <td><?=$mhs['nim']?></td>
      <td><?=$mhs['nama']?></td>
      <td><?=$mhs['alamat']?></td>
      <td><?=$mhs['ipk']?></td>
      <!-- Fitur admin dan pegawai dibedakan menggunakan if else agar dapat menggunakan halaman yang sama -->
      <?php if ($_SESSION['login']['jabatan']=="admin"):?>
        <td><a href="delete.php?id=<?=$mhs['nim']?>" class="btn btn-danger" onclick="return confirm('Hapus Data ?')">Delete</a></td>
      <?php endif; ?>
        <td><a href="edit.php?id=<?=$mhs['nim']?>" class="btn btn-warning">Edit</a></td>
    </tr>
    
    
  <?php endwhile  ?>
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
    -->
  </body>
</html>