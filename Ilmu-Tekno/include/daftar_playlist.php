<!doctype html>
<html lang="en">
<head>
<?php
include('koneksi/koneksi.php');
if (isset($_POST["keyword"])){
$_SESSION["keyword_playlist"] = $_POST["keyword"];
$keyword_playlist = $_SESSION["keyword_playlist"];
}else{
$keyword_playlist= $_SESSION["keyword_playlist"];
}
?>
<?php
include('koneksi/koneksi.php');
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
if($_GET['aksi']=='hapus'){
//hapus member
$id= $_GET['data'];
$sql_dm = "delete from `playlist` where `id_playlist` = '$id'";
mysqli_query($koneksi,$sql_dm);
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
<div class="col-md-12">
      <div class="panel panel-primary">
        <div style="background: #66A2EE ; color:black"class ="panel-heading"><b><h1> Data Playlist </b></h1></div>
        <div class="panel-footer"></div>
<div  align="center">
<table align="center" border="2" width="50%">
<tr align="center">
</tr>
<tr align="right"><td colspan="5"><div align="center"><b><h1>Playlist</b></h1><a href="index.php?include=tambah-playlist">
<input type="button" class="btn btn-primary btn-md" value="+ Tambah Playlist" /></a></td>
	</tr>
<tr>
<td colspan="8">
<form action="index.php?include=daftar-playlist" method="post">
<input type="text" class="form-control" name="keyword"/>&nbsp;&nbsp;
<input type="submit" class="btn btn-primary btn-md" name="cari" value="Cari"/>
</form>
</td>
</tr>
<table class="table table-bordered" "col-md-3">
	<thead>
<tr>
<th width="5%">No</th>
<th width="8%">ID Playlist</th>
<th width="10%">Tanggal</th>
<th width="10%">Judul</th>
<th width="10%">Kategori</th>
<th width="8%">Video</th>
<th width="30%">Deskripsi</th>
<th width="8%">Aksi</th>
</tr>
	</thead>
 <?php
include('koneksi/koneksi.php');
$sql_plg = "select `p`.`id_playlist`, `p`.`tanggal`,`p`.`judul`,`k`.`kategori`,`p`.`video`,`p`.`deskripsi` 
from `playlist` `p` inner join `kategori` `k` on `p`.`id_kategori` = `k`.`id_kategori`";

if($keyword_playlist !="") {
$sql_plg .= " where `p`.`id_playlist` LIKE '%$keyword_playlist%'
OR `p`.`judul` LIKE '%$keyword_playlist%' ";
}
$sql_plg .= " order by `p`.`id_playlist`";
$query_plg = mysqli_query($koneksi,$sql_plg);
$no = 1;
while($data_plg = mysqli_fetch_row($query_plg)){
$id = $data_plg[0];
$tanggal = $data_plg[1];
$judul= $data_plg[2];
$kategori=$data_plg[3];
$video=$data_plg[4];
$deskripsi=$data_plg[5];
?>
<tr>
<td><?php echo $no;?></td>
<td>X-PLY-<?php echo $id;?></td>
<td><?php echo $tanggal;?></td>
<td><?php echo $judul;?></td>
<td><?php echo $kategori;?></td>
<td><?php echo $video;?></td>
<td><?php echo $deskripsi;?></td>
<td><a href="index.php?include=edit-playlist&data=<?php echo $id;?>"> Edit </a> |
<a href="javascript:if(confirm('Anda yakin ingin menghapus data :<?php echo $id.' - '.$judul; ?>?')) window.location.href =
'index.php?include=data-playlist&aksi=hapus&data=<?php echo $id;?>'"> Hapus </a>
</td>
</tr>
<?php
$no++;
}?>
</tr>
</table><br>
</body>
<?php include('footer.php')?>
</html>