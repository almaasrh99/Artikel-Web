<!doctype html>
<html lang="en">
<head>
<title>Ilmu-Tekno (Admin)</title>
<?php
include('koneksi/koneksi.php');
if(isset($_GET['data'])){
$id= $_GET['data'];
$_SESSION['id']=$id;
//get data artikel
$sql_p = "select `tanggal`,`judul`,`id_kategori`,`posting` ,`foto`
from `artikel` where `id` = '$id'";
$query_p = mysqli_query($koneksi,$sql_p);
while($data_p = mysqli_fetch_row($query_p)){
$tanggal = $data_p[0];
$judul= $data_p[1];
$ktg=$data_p[2];
$posting=$data_p[3];
$foto=$data_p[4];
}
}
?>
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
        <div style="background: #66A2EE ; color:black"class ="panel-heading"><b><h1> Form Edit Artikel </b></h1></div>
        <div class="panel-footer"></div>
<div  align="center">
<table align="center" border="2" width="50%">
<tr align="center">
</tr>
<form method="post" enctype="multipart/form-data" action="index.php?include=konfirmasi-edit-artikel">
<table align="center" width="40%" border="1">
<tr align="left">
<table class="table table-bordered" "col-md-3">
	<thead>
</tr>
<tr>
<td width="20%">ID Artikel</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="id"
value="<?php echo $id; ?>" readonly="readonly"/></td>
</tr>
<tr>
<td width="20%">Tanggal</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="date"  class="form-control" name="tanggal" required 
value="<?php echo $tanggal; ?>"/></td>
</tr>
<tr>
<td width="20%">Judul</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="judul"
value="<?php echo $judul; ?>"/></td>
</tr>
<tr>
<td width="20%">Kategori</td>
<td width="5%" align="center">:</td>
<td width="55%">
<select class="form-control" name="kategori">
<?php $sql_pk = "select `id_kategori`,`kategori` from `kategori` order by `id_kategori`";
$query_pk = mysqli_query($koneksi,$sql_pk);
while($data_pk = mysqli_fetch_row($query_pk)){
$id_kategori= $data_pk[0];
$kategori= $data_pk[1];
?>
<option class="form-control" value="<?php echo $id_kategori;?>"
<?php if($id_kategori==$ktg){?>selected="selected"<?php }?>>
<?php echo $kategori;?></option>
<?php }?>
</select>
</td>
</tr>
<tr>
<td width="20%">Posting</td>
<td width="5%" align="center">:</td>
<td width="55%"><textarea name="posting" class="form-control" ><?php echo $posting; ?></textarea></td>
</tr>
<tr>
<td width="20%">Foto</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type ="file" class="btn btn-info btn-md" class="form-control"  name="foto" /></td>
</tr>
<tr>
<td colspan="3"><input type="submit" class="btn btn-primary btn-md" value="Simpan" /></td>
</tr>
</thead>
</table>
</form>