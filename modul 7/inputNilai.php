
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

<div class="container">
    
<?php $nama = $_POST['nama']; ?>
<h2>Selamat Datang <?=$nama?></h2>
<br>
    <form action="check.php" method="POST">
  <div class="form-group col-3">
    <label for="exampleInputEmail1">Nilai Tugas</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nTugas" required="">
    <small id="emailHelp" class="form-text text-muted">Bobot Nilai Tugas 40%.</small>
  </div>
  <div class="form-group col-3">
    <label for="exampleInputEmail1">Nilai UTS</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nUTS" required="">
    <small id="emailHelp" class="form-text text-muted">Bobot Nilai UTS 30%.</small>
  </div>
  <div class="form-group col-3">
    <label for="exampleInputEmail1">Nilai UAS</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nUAS" required="">
    <small id="emailHelp" class="form-text text-muted">Bobot Nilai UAS 30%.</small>
  </div>

  <input type="hidden" name="nama" value="$nama">

  <button type="submit" class="btn btn-primary tombol" onclick="return confirm('Pastikan nilai yang anda input sudah benar')" name="check">Check</button>

</form>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
