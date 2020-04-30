<?php
include('koneksi/koneksi.php');
if (isset($_POST["keyword"])){
$_SESSION["keyword_user"] = $_POST["keyword"];
$keyword_user= $_SESSION["keyword_user"];
}else{
$keyword_user = $_SESSION["keyword_user"];
}
?>
<?php
include('koneksi/koneksi.php');
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
if($_GET['aksi']=='hapus'){
$id_admin= $_GET['data'];
//hapus data user
$sql_dm = "delete from `admin` where `id_admin` = '$id_admin'";
mysqli_query($koneksi,$sql_dm);
}
}
?>
<!doctype html>
<html lang="en">
<head>
<title>Ilmu-Tekno (Admin)</title>
<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Ilmu-Tekno</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
	<!-- main css -->
	<style>
body {
        background-image:url("image/profil.jpg");
		background-size:cover;
		background-attachment: fixed;
		}
		p{
			
} 
</style>
	<link rel="icon" type="image/png" href="image/logo.png">
    <title>Ilmu-Tekno (Admin)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
  </style>
  <form name = "formwaktu">
<div align="left"><img src ="image/clock.png" width="100px" height="100px"> :
<input type = "text"
                   name = "tekswaktu"
       value = ""
       size = "22">
</form>
<?php include('header.php')?>
<script language= "JavaScript">
<!--
                function aturwaktu () {
                                var sekarang = new Date ();
                                var waktusekarang = sekarang.toLocaleString();
                               
                                document.formwaktu.tekswaktu.value = waktusekarang;
                               
                                setTimeOut ('aturwaktu()', 1000);
                               
                                return(true);
                }
               
                aturwaktu();
//-->

</script><br>
     
    <!-- Collect the nav links, forms, and other content for toggling -->
<?php include('menu.php')?>
</nav>  
</head>
<div class="col-md-12">
      <div class="panel panel-primary">
        <div style="background: #66A2EE ; color:black"class ="panel-heading"><b><h1>Data User</b></h1></div>
        <div class="panel-footer"></div>
		<tr align="right"><td colspan="5"><a href="index.php?include=tambah-user">
<input type="button" class="btn btn-primary btn-md" value="+ Tambah User" /></a></td><br>
<div  align="center">
<table align="center" border="2" width="50%">
<tr align="center">
</tr>
<tr>
<td colspan="15">
<form action="index.php?include=daftar-user" method="post">
<input type="text" class="form-control" name="keyword"/>&nbsp;&nbsp;
<input type="submit" class="btn btn-primary btn-md" name="cari" value="Cari"/>
</form><br>
<tr>
<table class="table table-bordered" "col-md-5">
	<thead>
</tr>
<tr>
<td width="5%">No</td>
<td width="25%">Nama</td>
<td width="10%">Email</td>
<td width="20%">Username</td>
<td width="20%">Level</td>
<td width="20%">Aksi</td>
</tr>
<?php
include('koneksi/koneksi.php');
$sql_u = "select `id_admin`,`nama`,`email`,`username`,`level` from `admin`";
if($keyword_user !="") {
$sql_u .= " where `id_admin` LIKE '%$keyword_user%'
OR `nama` LIKE '%$keyword_user%' ";
}
$sql_u .= " order by `id_admin`";
$query_u = mysqli_query($koneksi,$sql_u);
$no = 1;
while($data_u = mysqli_fetch_row($query_u)){
$id_admin=$data_u[0];
$nama = $data_u[1];
$email = $data_u[2];
$username = $data_u[3];
$level = $data_u[4];

?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $nama;?></td>
<td><?php echo $email;?></td>
<td><?php echo $username;?></td>
<td><?php echo $level;?></td>
<td><a href="index.php?include=edit-user&data=<?php echo $id_admin;?>"> Edit </a> |
<a href="javascript:if(confirm('Anda yakin ingin menghapus data : <?php echo $id_admin.' - '.$nama; ?>?')) window.location.href =
'index.php?include=user&aksi=hapus&data=<?php echo $id_admin;?>'"> Hapus </a>
</td>
</tr>
<?php
$no++;
}?>
</table><br><br>
</body>
<?php include('footer.php')?>
</html>