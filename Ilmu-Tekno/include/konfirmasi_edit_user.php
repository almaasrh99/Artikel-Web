<?php
if(isset($_SESSION['id_admin'])){
$id_admin=$_SESSION['id_admin'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$nim=$_POST['nim'];
$username=$_POST['username'];
$password=$_POST['password'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $id_admin.".jpg";
$direktori = 'foto/'.$nama_file;
$level=$_POST['level'];
$jurusan=$_POST['jurusan'];
$hobi=$_POST['hobi'];
$about=$_POST['about'];
$pass = md5($password);
if(empty($username)){
	echo "Data User harus dimasukkan 
	<a href='index.php?include=edit-user'>Klik Disini</a>Untuk Kembali";	
}else if(empty($password)){
	$sql="update `admin` set `nama`='$nama', `email`='$email',`nim`='$nim',`username`='$username',`level`='$level',
	`jurusan`='$jurusan',`hobi`='$hobi',`about`='$about' where `id_admin`='$id_admin'";
	mysqli_query($koneksi,$sql);
	echo "Data User Berhasil Diedit
	<a href='index.php?include=user'>Klik Disini</a>Untuk Kembali";
}else if (move_uploaded_file($lokasi_file,$direktori)){
	$sql="update `admin` set `nama`='$nama', `email`='$email',`nim`='$nim',`username`='$username',`foto`='$nama_file',`level`='$level',
	`jurusan`='$jurusan',`hobi`='$hobi',`about`='$about' where `id_admin`='$id_admin'";
	mysqli_query($koneksi,$sql);
	echo "Data User Berhasil Diedit
	<a href='index.php?include=user'>Klik Disini</a>Untuk Kembali";
}else{
	$sql="update `admin` set `nama`='$nama', `email`='$email',`nim`='$nim', `username`='$username',  `password`='$pass', 
	`level`='$level',`jurusan`='$jurusan',`hobi`='$hobi',`about`='$about'  where `id_admin`='$id_admin'";
	mysqli_query($koneksi,$sql);
	echo "Data User Berhasil Diedit
	<a href='index.php?include=user'>Klik Disini</a>Untuk Kembali";
}
}
?>
