<!doctype html>
<html lang="en">
<head>
<?php

include('koneksi/koneksi.php');
$id_admin=$_SESSION['id_admin'];
//get profil
$sql="select `nama` ,`email`,`nim`,`jurusan`,`hobi`,`foto`,`about` from `admin` where
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
     
    <!-- Collect the nav links, forms, and other content for toggling -->
<?php include('include/menu.php');?>
<body>
<br>
<div class="col-md-12">
      <div class="panel panel-primary">
        <div style="background: #66A2EE ; color:black"class ="panel-heading"><b><h1>Profil </b></h1></div>
		<div align="center"><img src="foto/<?php echo $foto?>" alt="<?php echo $nama;?>" width="220" height="300"/></td></div>
		<div align="center">
	<p><b><font size="3"><?php echo $about?></b></p></td></font>
        
<div  align="center">
<tr align="center">
</tr>
<tr>
<td colspan="8">

</td>
</tr>
<table class="table table-bordered" "col-sm-3">
	<thead>
<thead>
		<tr>
			<td widht="15%" align="left"><h3>Nama</h3></td>
			<td widht="5%" align="center">:</td>
			<td widht="20%"><h3><?php echo($nama); ?></h3></td>
		</tr>
		<tr>
			<td widht="15%" align="left"><h3>Email</h3></td>
			<td widht="5%" align="center">:</td>
			<td widht="20%"><h3><?php echo ($email); ?></h3></td>
		</tr>
		<tr>
			<td widht="15%" align="left"><h3>NIM</h3></td>
			<td widht="5%" align="center">:</td>
			<td widht="20%"><h3><?php echo ($nim); ?></h3></td>
		</tr>
		<tr>
			<td widht="15%" align="left"><h3>Jurusan</h3></td>
			<td widht="5%" align="center">:</td>
			<td widht="20%"><h3><?php echo ($jurusan); ?></h3></td>
		</tr>
		<tr>
			<td widht="15%" align="left"><h3>Hobi</h3></td>
			<td widht="5%" align="center">:</td>
			<td widht="20%"><h3><?php echo ($hobi); ?></h3></td>
		</tr>
		</thead>
		
		<tr>
			<td colspan="5" align="right">
			<a href="index.php?include=edit-profil"><input type="button" class="btn btn-primary btn-md"
			name="edit" value="Edit"/></a></td>
	</thead>
</table>
</body>
</html>
<!-- Footer -->
<?php include('footer.php')?>

			
			
