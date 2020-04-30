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
        <div style="background: #66A2EE ; color:black"class ="panel-heading"><b><h1> Form Tambah Users</b></h1></div>
        <div class="panel-footer"></div>
<div  align="center">
<table align="center" border="2" width="50%">
<tr align="center">
</tr>
<form method="post" enctype="multipart/form-data" action="index.php?include=konfirmasi-tambah-user">
<table align="center" width="40%" border="1">
<tr align="left">
<table class="table table-bordered" "col-md-3">
	<thead>
</tr>
<tr>
<td width="20%">Nama</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="nama" value=""/></td>
</tr>
<tr>
<td width="20%">Email</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="email" value=""/></td>
</tr>
<tr>
<td width="20%">NIM</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="nim" value=""/></td>
</tr>
<tr>
<td width="20%">Username</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="username" value=""/></td>
</tr>
<tr>
<td width="20%">Password</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="password" class="form-control" name="password" value=""/></td>
</tr>
<tr>
<td width="20%">Foto</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="file" class="btn btn-info btn-md" class="form-control" name="foto" /></td>
</tr>
<tr>
<td width="20%">Level</td>
<td width="5%" align="center">:</td>
<td width="55%">
<select class="form-control" name="level">
  <option value="superadmin">superadmin</option>
  <option value="admin">admin</option>
</select>
</td>
</tr>
<tr>
<td width="20%">Jurusan</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="jurusan" value=""/></td>
</tr>
<tr>
<td width="20%">Hobi</td>
<td width="5%" align="center">:</td>
<td width="55%"><input type="text" class="form-control" name="hobi" value=""/></td>
</tr>
<tr>
<td width="20%">About</td>
<td width="5%" align="center">:</td>
<td width="55%"><textarea name="about" class="form-control" name="about" value=""></textarea></td>
</tr>
<tr>
<tr>
<td colspan="3"><input type="submit" class="btn btn-primary btn-md" value="Tambah" /></td>
</tr>
</table>
</form>
</body>
</html>