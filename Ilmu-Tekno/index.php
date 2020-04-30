<?php 
session_start();
include("koneksi/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" type="image/png" href="image/logo.png">
    <title>Ilmu-Tekno</title>

<body>
	<?php 
	//unset($_SESSION['id_admin']);
	if (isset($_SESSION['id_admin'])){
		
	}
	if(isset($_GET["include"])){
			$include = $_GET["include"];
			if(isset($_SESSION['id_admin'])){ //jika ada session
				if($include=="login"){
					include("include/login.php");
				}else if($include=="profil"){
					include("include/profil.php");
				}else if($include=="edit-profil"){
					include("include/edit_profil.php");
				}else if($include=="konfirmasi-edit-profil"){
					include("include/konfirmasi_edit_profil.php");
				}else if($include=="member1"){
					include("include/member1.php");
				}else if($include=="tambah-member"){
					include("include/tambah_member.php");
				}else if($include=="konfirmasi-tambah-member"){
					include("include/konfirmasi_tambah_member.php");
				}else if($include=="edit-member"){
					include("include/edit_member.php");
				}else if($include=="konfirmasi-edit-member"){
					include("include/konfirmasi_edit_member.php");
				}else if($include=="daftar-member"){
					include("include/daftar_member.php");
				}else if($include=="artikel"){
					include("include/artikel.php");
				}else if($include=="tambah-artikel"){
					include("include/tambah_artikel.php");
				}else if($include=="konfirmasi-tambah-artikel"){
					include("include/konfirmasi_tambah_artikel.php");
				}else if($include=="edit-artikel"){
					include("include/edit_artikel.php");
				}else if($include=="konfirmasi-edit-artikel"){
					include("include/konfirmasi_edit_artikel.php");
				}else if($include=="daftar-artikel"){
					include("include/daftar_artikel.php");
				}else if($include=="detail-artikel"){
					include("include/detail_artikel.php");
				}else if($include=="data-playlist"){
					include("include/data_playlist.php");
				}else if($include=="tambah-playlist"){
					include("include/tambah_playlist.php");
				}else if($include=="konfirmasi-tambah-playlist"){
					include("include/konfirmasi_tambah_playlist.php");
				}else if($include=="edit-playlist"){
					include("include/edit_playlist.php");
				}else if($include=="konfirmasi-edit-playlist"){
					include("include/konfirmasi_edit_playlist.php");
				}else if($include=="daftar-playlist"){
					include("include/daftar_playlist.php");
				}else if($include=="user"){
					include("include/user.php");
				}else if($include=="tambah-user"){
					include("include/tambah_user.php");
				}else if($include=="konfirmasi-tambah-user"){
					include("include/konfirmasi_tambah_user.php");
				}else if($include=="daftar-user"){
					include("include/daftar_user.php");
				}else if($include=="edit-user"){
					include("include/edit_user.php");
				}else if($include=="konfirmasi-edit-user"){
					include("include/konfirmasi_edit_user.php");
				}else if($include=="kontak"){
					include("include/kontak.php");
				}else if($include=="data-about"){
					include("include/data_about.php");
				}else if($include=="edit-about"){
					include("include/edit_about.php");
				}else if($include=="konfirmasi-edit-about"){
					include("include/konfirmasi_edit_about.php");
				}else if($include=="logout"){
					include("include/logout.php");
				}else {
					include("include/profil.php");
				}	
			}else{
				
				if($include=="konfirmasi-login"){
					include("include/konfirmasi_login.php");
				}else {
					include("include/login.php"); //jika tidak ada sesion
				}
			}
		}else {
			include("include/index.php");
			}

		
	
?>
<br><br><br>
</body>
</html>