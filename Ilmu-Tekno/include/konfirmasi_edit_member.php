<?php
session_start();
include('koneksi/koneksi.php');
if(isset($_SESSION['id_member'])){
$id_member=$_POST['id_member'];
$nama = $_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$id_status = $_POST['status'];
$telp=$_POST['telepon'];

$sql = "update `member` set `nama`='$nama',`email`='$email',`alamat`='$alamat',`id_status`='$id_status',`no_telp`='$telp'
 where `id_member` = '$id_member'";
$status = mysqli_query($koneksi,$sql);

if($status){
	header('location:index.php?include=member1&status=sukses');
}else{
	header('location:index.php?include=edit-member&status=gagal');
}
}
?>