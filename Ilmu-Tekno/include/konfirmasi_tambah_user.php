<?php
include('koneksi/koneksi.php');
$id_admin = $_POST['id_admin'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nim=$_POST['nim'];
$username = $_POST['username'];
$password = $_POST['password'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $id_admin.".jpg";
$direktori = 'foto/'.$nama_file;
$level = $_POST['level'];
$jurusan= $_POST['jurusan'];
$hobi= $_POST['hobi'];
$about = $_POST['about'];
if(move_uploaded_file($lokasi_file,$direktori)){
$sql = "insert into `admin` (`id_admin`, `nama`, `email`,`nim`,`username`,`password`,`foto`,`level`,`jurusan`,`hobi`,`about`)
values ('$id_admin', '$nama', '$email','$nim', '$username','$password','$nama_file','$level','$jurusan','$hobi','$about')";
mysqli_query($koneksi,$sql);
}else{
$sql =  "insert into `admin` (`id_admin`, `nama`, `email`,`nim`,`username`,`password`,`level`,`jurusan`,`hobi`,`about`)
values ('$id_admin', '$nama', '$email','$nim', '$username','$password','$level','$jurusan','$hobi','$about')";
}
$status =mysqli_query($koneksi,$sql);
if($status){
	header('location:index.php?include=user&status=sukses');
}else{
	header('location:index.php?include=tambah-user&status=gagal');
}
?>
