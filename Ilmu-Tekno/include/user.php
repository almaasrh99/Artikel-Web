<!doctype html>
<html lang="en">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Ilmu-Tekno (Admin)</title>
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
<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel="icon" type="image/png" href="image/logo.png">
    <title>Ilmu-Tekno</title>
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
<div align="center"><img src="image/header.png" width="250px" height="250px"></a>
<div class="page-header">
  <div class="container text-center">
	<div class="container" style="background:#021D5F; color:black">
    <h1><font face="vivaldi"><font size="8"><font color="#174AC8">💻  Technology 💻 </font></font></font></h1>      
    <p><font face="Agency FB"><font size="5"><font color="8ACE1A">Mission, Vission & Values</font></font></font></p>
	<p><font face="Agency FB"><font size="5"><font color="06F48B">Technology is a Magic in Future</font></font></font></p>
	<p><font face="Agency FB"><font size="5"><font color="F573F3">Enjoy yourself to watch and learning</font></font></font></p>
	</div>
  </div>
</div> 
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
<html>
<body>
<br>
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
<td width="5%">No</td>
<td width="20%">Nama</td>
<td width="20%">Email</td>
<td width="20%">Username</td>
<td width="15%">Level</td>
<td width="20%">Aksi</td>
</tr>
</thead>
 <?php
//atur paging
$batas = 2;
if(!isset($_GET['halaman'])){
$posisi = 0;
$halaman = 1;
}else{
$halaman = $_GET['halaman'];
$posisi = ($halaman-1) * $batas;
}
?>
<?php
include('koneksi/koneksi.php');
$sql_u = "select `id_admin`,`nama`,`email`,`username`,`level` from `admin` limit $posisi, $batas";
$query_u = mysqli_query($koneksi,$sql_u);
$no = $posisi+1;
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
<?php $sql_jum = "select `nama`,`email`,`username`,`level` from `admin`";
$query_jum = mysqli_query($koneksi,$sql_jum);
$jum_data = mysqli_num_rows($query_jum);
$jum_halaman = ceil($jum_data/$batas); ?>
<tr align="left">
<td colspan="5">
<?php echo "Halaman : ";
for($i=1; $i<=$jum_halaman; $i++){
if($i!=$halaman){
echo "<a href=index.php?include=user&halaman=$i>".$i."</a> | ";
}else{
echo "<strong>".$i."</strong> | ";
}
}?><br>
</body>
</table><br>
</body>
<?php include('footer.php')?>
</html>