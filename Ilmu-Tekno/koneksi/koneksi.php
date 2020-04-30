<?php
$koneksi=mysqli_connect("localhost","root","","ilmutekno");
//check connection
if(! $koneksi){
	die("Error koneksi :".mysqli_connect_errno());
}
?>