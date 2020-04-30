<?php
session_start();
include('koneksi/koneksi.php');
if(isset($_SESSION['id_about'])){
$id_about = $_SESSION['id_about'];
$about= $_POST['about'];
$sql = "update `about` set `about`='$about'
where `id_about` = '$id_about'";
}
$status = mysqli_query($koneksi,$sql);
if($status){
	header('location:index.php?include=data-about&status=sukses');
}else{
	header('location:index.php?include=edit-about&status=gagal');
}
?>