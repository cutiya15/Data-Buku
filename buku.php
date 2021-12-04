<?php
    include "header.php";    
?>
<a href="tambah_buku.php" class="btn btn-success">Tambah Buku</a> 
<h2>Daftar Buku</h2>
<div class="row">

    <?php
    include "koneksi.php";
    $qry_buku = mysqli_query($conn, "select * from buku");
    while ($data_buku = mysqli_fetch_array($qry_buku)){    
    ?>
    <div class="col-md-3">
        <div class="card">
            <img src="buku/th.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-little"><?=$data_buku['nama_buku']?></h5>
                <p class="card-text"><?=substr($data_buku['pengarang'], 0,20)?></p>
                <a href="pinjam_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
            </div>    
        </div>
    </div>
    <?php
    }
    ?>
</div>
<?php
    include "footer.php";
?>    
          