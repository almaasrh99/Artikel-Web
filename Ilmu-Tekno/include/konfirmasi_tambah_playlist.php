<?php
include('koneksi/koneksi.php');
$id_playlist=$_POST['id_playlist'];
$tanggal = $_POST['tanggal'];
$judul=$_POST['judul'];
$id_kategori=$_POST['kategori'];
$video = $_POST['video'];
$deskripsi=$_POST['deskripsi'];

$sql = "insert into `playlist` (`id_playlist`, `tanggal`,`judul`,`id_kategori`,`video`,`deskripsi`)
values ('$id_playlist', '$tanggal','$judul','$id_kategori','$video','$deskripsi')";
$status = mysqli_query($koneksi,$sql);
if($status){
	header('location:index.php?include=data-playlist&status=sukses');
}else{
	header('location:index.php?include=tambah-playlist&status=gagal');
}
?>