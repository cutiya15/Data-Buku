<?php
	if($_POST){
		$nama_buku = $_POST['nama_buku'];
		$pengarang = $_POST['pengarang'];
		if(empty($nama_buku)){
			echo "<script>alert('Nama Buku Tidak Boleh Kosong');location.href='tambah_buku.php';</script>";
		}
	elseif (empty($pengarang)){
		echo "<script>alert('Pengarang Tidak Boleh Kosong');location.href='tambah_buku.php';</script>";		
	}
	else {
		include "koneksi.php";
		$insert = mysqli_query($conn, "insert into buku (nama_buku, pengarang) value ('".$nama_buku."','".$pengarang."')");
		if($insert){
			echo "<script>alert('sukses menambahkan data buku');location.href='buku.php';</script>";
		}
		else {
			echo "<script>alert('gagal menambahkan data buku');location.href='tambah_buku.php';</script>";
		}
	}
	}
?>