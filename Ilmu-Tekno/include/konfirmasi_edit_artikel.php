<?php
session_start();
include('koneksi/koneksi.php');
if(isset($_SESSION['id'])){
$id = $_SESSION['id'];
$tanggal = $_POST['tanggal'];
$judul=$_POST['judul'];
$id_kategori=$_POST['kategori'];
$posting=$_POST['posting'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $id.".jpg";
$direktori = 'foto/'.$nama_file;
if(move_uploaded_file($lokasi_file,$direktori)){
$sql = "update `artikel` set `tanggal`='$tanggal',`judul`='$judul',`id_kategori`='$id_kategori',`posting`='$posting',
 `foto`='$nama_file' where `id` = '$id'";
mysqli_query($koneksi,$sql);
header('location:index.php?include=artikel&status=sukses');
}else{
$sql = "update `artikel` set `tanggal`='$tanggal',`judul`='$judul',`id_kategori`='$id_kategori',
`posting`='$posting' where `id` = '$id'";
$status = mysqli_query($koneksi,$sql);
header('location:index.php?include=artikel&status=sukses');

}
}
?>