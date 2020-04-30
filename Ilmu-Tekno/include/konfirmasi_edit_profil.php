<?php
session_start();
include('koneksi/koneksi.php');
if(isset($_SESSION['id_admin'])){
$id_admin = $_SESSION['id_admin'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$hobi = $_POST['hobi'];
$about= $_POST['about'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $id_admin.".jpg";
$direktori = 'foto/'.$nama_file;
if(move_uploaded_file($lokasi_file,$direktori)){
$sql = "update `admin` set `nama`='$nama',
`email`='$email',`nim`='$nim',`jurusan`='$jurusan',`hobi`='$hobi',`foto`='$nama_file' ,`about`='$about'
where `id_admin` = '$id_admin'";
mysqli_query($koneksi,$sql);
}else{
$sql = "update `admin` set `nama`='$nama',
`email`='$email',`nim`='$nim',`jurusan`='$jurusan',`hobi`='$hobi ,`about`='$about' where `id_admin` = '$id_admin'";
}
$status = mysqli_query($koneksi,$sql);
if($status){
	header('location:index.php?include=profil.php&status=sukses');
}else{
	header('location:index.php?include=edit_profil.php&status=gagal');
}
}
?>