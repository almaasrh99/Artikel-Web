<?php
session_start();
include('koneksi/koneksi.php');
if(isset($_SESSION['id_playlist'])){
$id_playlist=$_POST['id_playlist'];
$tanggal = $_POST['tanggal'];
$judul=$_POST['judul'];
$id_kategori=$_POST['kategori'];
$video = $_POST['video'];
$deskripsi=$_POST['deskripsi'];

$sql = "update `playlist` set `tanggal`='$tanggal',`judul`='$judul',`id_kategori`='$id_kategori',`video`='$video',`deskripsi`='$deskripsi'
 where `id_playlist` = '$id_playlist'";
$status = mysqli_query($koneksi,$sql);

if($status){
	header('location:index.php?include=data-playlist&status=sukses');
}else{
	header('location:index.php?include=edit-playlist&status=gagal');
}
}
?>