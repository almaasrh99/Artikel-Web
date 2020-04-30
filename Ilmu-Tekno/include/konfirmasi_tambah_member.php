<?php
include('koneksi/koneksi.php');
$id_member=$_POST['id_member'];
$nama = $_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$id_status = $_POST['status'];
$telp=$_POST['telepon'];

$sql = "insert into `member` (`id_member`, `nama`,`email`,`alamat`,`id_status`,`no_telp`)
values ('$id_member', '$nama','$email','$alamat','$id_status','$telp')";
$status = mysqli_query($koneksi,$sql);
if($status){
	header('location:index.php?include=member1&status=sukses');
}else{
	header('location:index.php?include=tambah-member&status=gagal');
}
?>