<?php

include('koneksi/koneksi.php');
if(isset($_GET['data'])){
$id= $_GET['data'];
$sql_plg = "select `a`.`id`, `a`.`tanggal`,`a`.`judul`,`k`.`kategori`,`a`.`posting`,`a`.`foto` from 
`artikel` `a` inner join `kategori` `k` on `a`.`id_kategori` = `k`.`id_kategori` where `id`='$id'";

$query_plg = mysqli_query($koneksi,$sql_plg);
$no = 1;
while($data_plg = mysqli_fetch_row($query_plg)){
$id = $data_plg[0];
$tanggal = $data_plg[1];
$judul= $data_plg[2];
$kategori=$data_plg[3];
$posting=$data_plg[4];
$foto=$data_plg[5];
}
}
?>
<br>
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
        <div style="background: #66A2EE ; color:black"class ="panel-heading"><b><h1>Detail Artikel </b></h1></div>
        <div class="panel-footer"></div>
<table class="table table-bordered" "col-md-3">
	<thead>
</tr>
<td width="20%">ID Artikel</td>
<td width="3%" align="center">:</td>
<td width="55%"><?php echo $id; ?></td>
</tr>
<tr>
<td width="20%">Tanggal Posting</td>
<td width="3%" align="center">:</td>
<td width="55%"><?php echo $tanggal; ?></td>
</tr>
<tr>
<td width="20%">Judul</td>
<td width="3%" align="center">:</td>
<td width="55%"><?php echo $judul; ?></td>
</tr>
<tr>
<td width="20%">Kategori</td>
<td width="3%" align="center">:</td>
<td width="55%"><?php echo $kategori; ?></td>
</tr>
<tr>
<td width="20%">Posting</td>
<td width="3%" align="center">:</td>
<td width="70%"><?php echo $posting; ?></td>
</tr>
<tr>
<td width="20%">Foto</td>
<td width="5%" align="center">:</td>
<td width="55%"><img src="foto/<?php echo $foto;?>"
alt="<?php echo $judul;?>" width="500" height="250"/></td>
</tr>
</thead>
</td>
</tr>

