<!doctype html>
<html lang="en">

<head>
							
<?php
include('koneksi/koneksi.php');
$id_admin=$_SESSION['id_admin'];
$_SESSION['id_admin']=$id_admin;
//get profil
$sql="select `nama` ,`email`,`nim`,`jurusan`,`hobi` ,`foto`,`about` from `admin` where
`id_admin`='$id_admin'";
$query=mysqli_query($koneksi,$sql);
while($data=mysqli_fetch_row($query)){
		$nama=$data[0];
		$email=$data[1];
		$nim=$data[2];
		$jurusan=$data[3];
		$hobi=$data[4];
		$foto=$data[5];
		$about=$data[6];
		
}
?>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Ilmu Tekno(Admin)</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
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
<div align="center"><a href="index.php "><img src="image/header.png" width="250px" height="250px"></a>
<div class="page-header">
  <div class="container text-center">
	<div class="container" style="background:#021D5F; color:black">
    <h1><font face="vivaldi"><font size="8"><font color="#174AC8">💻 Technology 💻</font></font></font></h1>      
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
</head>

<body>

							<?php include('menu.php');?>
							<ul class="nav navbar-nav navbar-right">
						</ul>
<body>
<style>
body {
        background-image:url("image/profil.jpg");
		background-size:cover;
		background-attachment: fixed;
		}
		p{
			
} 
</style>
<br><br><br>
<div class="col-md-12">
      <div class="panel panel-primary">
        <div style="background: #2116C4; color:black"class ="panel-heading"><b><h1>Profil </b></h1></div>
<form method="post" enctype="multipart/form-data" action="index.php?include=konfirmasi-edit-profil" >
<table align="center" width="40%" border="1">
<tr align="left">
<td colspan="3"><b><h1>Form Edit Profil</h1></b></td>
</tr>
<table class="table table-bordered" "col-md-3">
	<thead>
<tr>
<td width="20%">Nama</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="nama"
value="<?php echo ($nama); ?>"/></td>
</tr>
<tr>
<td width="20%">Email</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="email"
value="<?php echo ($email); ?>"/></td>
</tr>
<tr>
<td width="20%">NIM</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="nim"
value="<?php echo ($nim); ?>"/></td>
</tr>
<tr>
<td width="20%">Jurusan</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="jurusan"
value="<?php echo ($jurusan); ?>"/></td>
</tr>
<tr>
<td width="20%">Hobi</td>
<td width="5%" align="center">:</td>
<td width="70%"><input type="text"class="form-control" name="hobi"
value="<?php echo ($hobi); ?>"/></td>
</tr>

<tr>
<td width="20%">Foto</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type ="file" class="btn btn-info btn-md" class="form-control"  name="foto" /></td>
</tr>
<tr>
<td width="30%">About me</td>
<td width="5%" align="center">:</td>
<td width="70%"><textarea name="about" class="form-control" ><?php echo $about; ?></textarea></td>
</tr>
</thead>
<tr align="left">
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3"><input type="submit"  class="btn btn-primary btn-md" value="Simpan" /></td>
</tr>
</table>
</form>
</body>
</html>