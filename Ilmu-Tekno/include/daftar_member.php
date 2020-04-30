<!doctype html>
<html lang="en">
<head>
<?php
include('koneksi/koneksi.php');
if (isset($_POST["keyword"])){
$_SESSION["keyword_member"] = $_POST["keyword"];
$keyword_member = $_SESSION["keyword_member"];
}else{
$keyword_member= $_SESSION["keyword_member"];
}
?>
<?php
include('koneksi/koneksi.php');
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
if($_GET['aksi']=='hapus'){
//hapus member
$id= $_GET['data'];
$sql_dm = "delete from `member` where `id_member` = '$id'";
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
        <div style="background: #66A2EE ; color:black"class ="panel-heading"><b><h1> Daftar Member </b></h1></div>
        <div class="panel-footer"></div>
<div  align="center">
<table align="center" border="2" width="50%">
<tr align="center">
</tr>
<tr align="right"><td colspan="5"><div align="center"><b><h1>MEMBER</b></h1><a href="index.php?include=tambah-member">
<input type="button" class="btn btn-primary btn-md" value="+ Tambah member" /></a></td>
	</tr>
<tr>
<td colspan="8">
<form action="index.php?include=daftar-member" method="post">
<input type="text" class="form-control" name="keyword"/>&nbsp;&nbsp;
<input type="submit" class="btn btn-primary btn-md" name="cari" value="Cari"/>
</form>
</td>
</tr>
<table class="table table-bordered" "col-md-3">
	<thead>
<tr>
<th width="5%">No</th>
<th width="10%">ID Member</th>
<th width="15%">Nama</th>
<th width="10%">Email</th>
<th width="10%">Alamat</th>
<th width="10%">Status</th>
<th width="10%">Telepon</th>
<th width="8%">Aksi</th>
</tr>
	</thead>
<?php
include('koneksi/koneksi.php');
$sql_m = "select `m`.`id_member`, `m`.`nama`,`m`.`email`,`m`.`alamat`,`s`.`status` ,`m`.`no_telp`
from `member` `m` inner join `status` `s` on `m`.`id_status` = `s`.`id_status` ";

if($keyword_member !="") {
$sql_m .= " where `m`.`id_member` LIKE '%$keyword_member%'
OR `m`.`nama` LIKE '%$keyword_member%' ";
}
$sql_m .= " order by `m`.`id_member`";
$query_m = mysqli_query($koneksi,$sql_m);
$no = 1;
while($data_m = mysqli_fetch_row($query_m)){
$id = $data_m[0];
$nama = $data_m[1];
$email= $data_m[2];
$alamat=$data_m[3];
$status=$data_m[4];
$telp=$data_m[5];
?>
<tr>
<td><?php echo $no;?></td>
<td>X-MBR-<?php echo $id;?></td>
<td><?php echo $nama;?></td>
<td><?php echo $email;?></td>
<td><?php echo $alamat;?></td>
<td><?php echo $status;?></td>
<td><?php echo $telp;?></td>
<td><a href="index.php?include=edit-member&data=<?php echo $id;?>"> Edit </a> |
<a href="javascript:if(confirm('Anda yakin ingin menghapus data :<?php echo $id.' - '.$nama; ?>?')) window.location.href =
'index.php?include=member1&aksi=hapus&data=<?php echo $id;?>'"> Hapus </a>
</td>
</tr>
<?php
$no++;
}?>
</tr><br>
</table><br>
</body>
<?php include('footer.php')?>
</html>




