<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="image/logo.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Menu</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<style type="text/css">
	body {
		color: #fff;
		 background-image:url("image/login.jpg");
		 background-size:cover;
	}
	.form-control {
        min-height: 41px;
		background: #fff;
		box-shadow: none !important;
		border-color: #e3e3e3;
	}
	.form-control:focus {
		border-color: #70c5c0;
	}
    .form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 350px;
		margin: 0 auto;
		padding: 100px 0 30px;		
	}
	.login-form form {
		color: #7a7a7a;
		border-radius: 2px;
    	margin-bottom: 15px;
        font-size: 13px;
        background: #ececec;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;	
        position: relative;	
    }
	.login-form h2 {
		font-size: 22px;
        margin: 35px 0 25px;
    }
	.login-form .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -50px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #70c5c0;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.login-form .avatar img {
		width: 100%;
	}	
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #70c5c0;
		border: none;
		margin-bottom: 20px;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #50b8b3;
        outline: none !important;
	}    
	.login-form a {
		color: #fff;
		text-decoration: underline;
	}
	.login-form a:hover {
		text-decoration: none;
	}
	.login-form form a {
		color: #7a7a7a;
		text-decoration: none;
	}
	.login-form form a:hover {
		text-decoration: underline;
	}
</style>
 	<div class="login-form">
		<div align="left"><a href="index.php"><img src="image/home.png" widht="80px" height="80px" alt="Home"></a></div>
 	<center>
        <h2 class="text-center"><b>User Login</b></h2>  

			<div align="center"><img src="image/user.png" widht="150px" height="150px"alt="Avatar">
		</div><br>
 <div class="container">    
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div style="background: #66A2EE ; color:black"class ="panel-heading">Silahkan Login !</div>
        <div class="panel-footer"></div>
        <div class="form-group">
		<form action="index.php?include=konfirmasi-login" method="POST">
<?php if (!empty($_GET['gagal'])){?>
		<?php if($_GET['gagal']=="userpassSalah"){?>
		<label style="color:red";><center><?php echo "maaf username atau password salah";?>
		</center></label><br>
	<?php }?>
<?php }?>	<p><font color="black"><b>Username : </b></font></p>
        	<input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
		<p><font color="black"><b>Password :</b></p></font>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit"  name="login" value="login"class="btn btn-primary btn-lg btn-block">Login</button>
			<div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"><font color="blue">Remember me</font></label>
            <a href="#" class="pull-right"><font color="blue">Forgot Password?</font></a>
        </div>
        </div>
		</div>
		</div>
		</div>
		</div>
	</div>
    </form>
	<div class="row" style="background:#EC71BF ; color:white">
			<div class="col-md-12">
			    <p class="text-center small"><font color="black"><b>Don't have an account? <a href="#"><font color="white">Sign up here!</font></a></b></p>
				<br>
			</div>

</div>
</body>
</html>                            
 	</form>
   </body>
</html>

