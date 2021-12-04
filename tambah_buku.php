<?php
    include "header.php";
?>
<!doctype html>
<html >
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <h3>Tambah Buku</h3>
    <form action="proses_tambah_buku.php" method="post">
      Nama Buku :
      <input type="text" name="nama_buku" value="" class="form-control">
      Pengarang :
      <input type="text" name="pengarang" value="" class="form-control"><br>
      <input type="submit" name="simpan" value="Tambah" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
