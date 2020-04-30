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
      <div class="panel panel-primary"></div>
        <div style="background: #66A2EE ; color:black"class ="panel-heading"><b><h1> Edit About </b></h1></div>
        <div class="panel-footer">
<td colspan="12">
</td>
</tr>
<table class="table table-bordered" "col-md-5">

	<thead>
<tr>
<div align="center">
<th width="5%">No</th>
<th width="5%">ID About</th>
<th width="30%">About</th>
<th width="5%">Aksi</th>
</tr>
	</thead>
<?php
include('koneksi/koneksi.php');
$sql_plg = "select `id_about`,`about` from `about`";
$query_plg = mysqli_query($koneksi,$sql_plg);
$no = 1;
while($data_plg = mysqli_fetch_row($query_plg)){
$id_about = $data_plg[0];
$about = $data_plg[1];
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $id_about;?></td>
<td><?php echo $about;?></td>
<td><div align="center"><a href="index.php?include=edit-about&data=<?php echo $id_about;?>"> Edit </a> 
</tr>
<?php
$no++;
}?>
</tr>
</table>
<?php include('footer.php')?>