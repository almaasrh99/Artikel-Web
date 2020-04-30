<?php
include('koneksi/koneksi.php');
$id=$_POST['id'];
$tanggal = $_POST['tanggal'];
$judul=$_POST['judul'];
$id_kategori=$_POST['kategori'];
$posting=$_POST['posting'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $id.".jpg";
$direktori = 'foto/'.$nama_file;
if(move_uploaded_file($lokasi_file,$direktori)){
$sql = "insert into `artikel` (`id`, `tanggal`,`judul`,`id_kategori`,`posting`,`foto`)
values ('$id', '$tanggal','$judul','$id_kategori','$posting','$nama_file')";
mysqli_query($koneksi,$sql);
}else{
$sql =  "insert into `artikel` (`id`, `tanggal`,`judul`,`id_kategori`,`posting`)
values ('$id', '$tanggal','$judul','$id_kategori','$posting')";
}
$status = mysqli_query($koneksi,$sql);
if($status){
	header('location:index.php?include=artikel&status=sukses');
}else{
	header('location:index.php?include=tambah-artikel&status=sukses');
}
?>