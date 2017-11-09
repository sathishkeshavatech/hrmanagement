<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Keshava Technologies Inc.,</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
    <form name="login_form" action="index.php" method="post">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td><input name="uname" type="text"  class="login-inp" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input name="pwd" type="password" value=""  onfocus="this.value=''" class="login-inp"  /></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="admin_submit" class="submit-login"  /></td>
		</tr>
		</table>
        </form>
       
    <?php
    if(isset($_POST['admin_submit']))
    {

		 if(isset($_POST['uname']) && isset($_POST['pwd']))
		 {
          $host="localhost"; // Host name 
          $username="sumaka_hr"; // Mysql username 
		  $password="keshava04"; // Mysql password 
		  $db_name="sumaka_hr"; // Database name 
		  $tbl_name="admin"; // Table name 

		// Connect to server and select databse.
		  $con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
		  mysqli_select_db($con,"$db_name")or die("cannot select DB");



       // To protect MySQL injection (more detail about MySQL injection)
         $uname = stripslashes($_POST['uname']);
         $pwd = stripslashes($_POST['pwd']);
         $uname = mysqli_real_escape_string($con,$uname);
         $pwd = mysqli_real_escape_string($con,$pwd);
         $sql="SELECT * FROM $tbl_name WHERE uname='$uname' AND pwd='$pwd'";
         $result=mysqli_query($con,$sql);

		// Mysql_num_row is counting table row
		$count=mysqli_fetch_row($result);
//$count=1;
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count)
		{
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		// username and password sent from form  
        $_SESSION['uname']=$uname;
        $_SESSION['pwd']=$pwd; 
		
		echo '<script type="text/javascript"> window.location.assign("http://www.keshavatech.com/hr-management/dashboard.php") </script>';
		exit();
		}
		else 
		{
		echo '<script type="text/javascript">alert("Wrong username / Password!");</script>';
		}
		}
		else
		{
			echo '<script type="text/javascript">alert("Username / Password should not be blank!");</script>';		
		}
	}
    ?>
        
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><input type="text" value=""   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="button" class="submit-login"  /></td>
		</tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>