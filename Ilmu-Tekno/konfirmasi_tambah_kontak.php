<?php
include('koneksi/koneksi.php');
$nama = $_POST['nama'];
$email=$_POST['email'];
$subjek=$_POST['subjek'];
$pesan = $_POST['pesan'];

$sql = "insert into `kontak` (`nama`,`email`,`subjek`,`pesan`)
values  ('$nama','$email','$subjek','$pesan')";
$status = mysqli_query($koneksi,$sql);
if($status){
	header('location:contact.php?status=sukses');
}else{
	header('location:contact.php?status=gagal');
}
?>