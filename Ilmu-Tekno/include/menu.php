<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Responsive Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#target-list">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
     
      </div>
<div class="container" style="background:#021D5F; color:black">
      <div class="collapse navbar-collapse" id="target-list">
        <ul class="nav navbar-nav">
		
  <li><a href="index.php?include=profil"><button type="button" class="btn btn-default btn-md">
  <span class="glyphicon glyphicon-th" aria-hidden="true"></span> Profil</a></li>
  <li><a></a></li>
  <li><a href="index.php?include=member1"><button type="button" class="btn btn-default btn-md">
  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Member</a></li>
  <?php if ($_SESSION['level']=="superadmin"){?>
 <li><a></a></li>
  <li><a href="index.php?include=artikel"><button type="button" class="btn btn-default btn-md">
  <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Artikel</a></li>
   <li><a></a></li>
   <li><a href="index.php?include=data-playlist"><button type="button" class="btn btn-default btn-md">
  <span class="glyphicon glyphicon-film" aria-hidden="true"></span> Playlist</a></li>
   <li><a></a></li>
<li><a href="index.php?include=user"><button type="button" class="btn btn-default btn-md">
  <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>Data User</a></li>
<?php }?>
   <li><a></a></li>
   <li><a href="index.php?include=kontak"><button type="button" class="btn btn-default btn-md">
  <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Kontak Masuk</a></li>
   <li><a></a></li>
   <li><a href="index.php?include=data-about"><button type="button" class="btn btn-default btn-md">
  <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>About</a></li>   
   <li><a></a></li>
          <li><a href="index.php?include=logout"><button type="button" class="btn btn-default btn-md">
  <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Logout</a></li><br><br>
        </ul><br>
		<div align="center"><img src="image/itech.png" width="160px" height="90px"></a></div>
          </div>
        </form>
      </div>
    </nav>
  </body>
</html>