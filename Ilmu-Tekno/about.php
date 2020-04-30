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

</script>
<style>
body {
        background-image:url("image/bg.jpg");
		background-size:cover;
		background-attachment: fixed;
		}
		p{
			
} 
</style>
</head>
<body>
<div align="center"><a href="index.php "><img src="image/header.png" width="250px" height="250px"></a>
<div class="page-header">
  <div class="container text-center">
	<div class="container" style="background: #1A757C; color:black">
    <h1><font face="vivaldi"><font size="8"><font color="06E9F4">💻 Technology 💻</font></font></font></h1>      
    <p><font face="Agency FB"><font size="5"><font color="8ACE1A">Mission, Vission & Values</font></font></font></p>
	<p><font face="Agency FB"><font size="5"><font color="06F48B">Technology is a Magic in Future</font></font></font></p>
	<p><font face="Agency FB"><font size="5"><font color="F573F3">Enjoy yourself to watch and learning</font></font></font></p>
	</div>
  </div>
</div>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<div class="container">
<div class="col-md-15"style="background:#C9F0F7; color:black">
<div class="collapse navbar-collapse" id="myNavbar">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><button type="button" class="btn btn-default btn-md">
  <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home
</button></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
	<div class="row" style="background:#1A757C; color:black">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="contact.php"><button type="button" class="btn btn-default btn-md">
  <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact Us
</button></a></li>
 <li><a></a></li>
  <li><a></a></li>
   <li><a></a></li>
		
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Artikel,video">
        </div>
        <button type="submit" class="btn btn-default">Search</button>&emsp;&emsp;&emsp;&emsp;
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="#">
</button></a></li>
 <li><a></a></li>
  <li><a></a></li>
   <li><a></a></li>
<li><a href="login.php"><button type="button" class="btn btn-default btn-md">
  <span class="glyphicon  glyphicon-log-in" aria-hidden="true"></span> Login
</button></a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>  
<div class="row">
  <div class="col-md-3"><ul class="nav nav-pills nav-stacked" style="background: #1A757C; color:black"><br>
        <li><button type="button" class="btn btn-default btn-lg"><font color="0A0D0E">Menu</a></li></font>
        <li><a href="about.php"><font color="04275D"><span class="glyphicon  glyphicon-info-sign" aria-hidden="true"></span>About</a></li></font>
        <li><a href="member.php"><font color="04275D"><span class="glyphicon  glyphicon-user" aria-hidden="true"></span>Member</a></li></font>
        <li><a href="video.php"><font color="04275D"><span class="glyphicon  glyphicon-film" aria-hidden="true"></span>Playlist</a></li></font>
		<li><div><img src ="image/1E.jpg" width="170px" height="220px"></a></li><br>
		<li></a></li>
      </ul>
    </div>
	 <?php
include('koneksi/koneksi.php');
$sql_plg = "select `id_about`,`about` from `about` ";

$query_plg = mysqli_query($koneksi,$sql_plg);
while($data_plg = mysqli_fetch_row($query_plg)){
$id = $data_plg[0];
$about = $data_plg[1];
}
?>
<div class="container">    
  <div class="row">
    <div class="col-sm-8">
      <div class="panel panel-primary">
        <div style="background: #66A2EE ; color:black"class ="panel-heading"><h1>About us</h1></div>
        <div class="panel-footer"></div>
			<img src="image/it.png" width="250px" height="250px"></a>
			<p><?php echo $about?></p>
	  </div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
 <div class="row" style="background: #1A757C; color:white">
			<div class="col-md-12">
				<p>&copy; Almaas Rozikin H. 183140914111031</p>
			</div>
</div>
</html>