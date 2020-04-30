<!doctype html>
<html lang="en">
<head>
<title>Ilmu-Tekno (Admin)</title>
<?php
include('koneksi/koneksi.php');
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
if($_GET['aksi']=='hapus'){
//hapus kontak masuk
$code= $_GET['data'];
$sql_k = "delete from `kontak` where `code` = '$code'";
mysqli_query($koneksi,$sql_k);
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
      <div class="panel panel-primary"></div>
        <div style="background: #66A2EE ; color:black"class ="panel-heading"><b><h1> Kontak Masuk </b></h1></div>
        <div class="panel-footer">
<td colspan="8">
</td>
</tr>
<table class="table table-bordered" "col-md-3">
	<thead>
<tr>
<th width="5%">No</th>
<th width="5%">Code</th>
<th width="15%">Nama</th>
<th width="10%">Email</th>
<th width="10%">Subjek</th>
<th width="20%">Pesan</th>
<th width="5%">Aksi</th>
</tr>
	</thead>
<?php
include('koneksi/koneksi.php');
$sql_plg = "select `code`,`nama`,`email`,`subjek`,`pesan` from `kontak` order by `code`";
$query_plg = mysqli_query($koneksi,$sql_plg);
$no = 1;
while($data_plg = mysqli_fetch_row($query_plg)){
$code = $data_plg[0];
$nama = $data_plg[1];
$email= $data_plg[2];
$subjek=$data_plg[3];
$pesan=$data_plg[4];
?>
<tr>
<td><?php echo $no;?></td>
<td>X-CON-<?php echo $code;?></td>
<td><?php echo $nama;?></td>
<td><?php echo $email;?></td>
<td><?php echo $subjek;?></td>
<td><?php echo $pesan;?></td>
<td><a href="javascript:if(confirm('Anda yakin ingin menghapus data :<?php echo $code.' - '.$nama; ?>?')) window.location.href =
'index.php?include=kontak&aksi=hapus&data=<?php echo $code;?>'"> Hapus </a></td>
</tr>
<?php
$no++;
}?>
</tr>
</table>

<?php include('footer.php')?>
</html>