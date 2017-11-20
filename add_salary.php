<?php
// Start the session
session_start();

if(!isset($_SESSION['uname']))
{
echo '<script>window.location.assign("http://www.keshavatech.com/hr-management/");</script>';		
}
?>
<?php
if(isset($_GET['atn']))
{
if($_GET['atn']=='lgt')
{
if(isset($_SESSION['uname']))
{
unset($_SESSION['uname']);
unset($_SESSION['pwd']);
}
$_SESSION = array();
session_destroy();
echo '<script>window.location.replace("http://www.keshavatech.com/hr-management/")</script>';
exit();
}
}
?>
<?php
if(isset($_POST['emp_submit']))
{
$con=mysqli_connect("localhost","root","root","sumaka_hr");

// Check connection
if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


// escape variables for security
$emp_no=mysqli_real_escape_string($con,$_POST['emp_no']);
$basic=mysqli_real_escape_string($con,$_POST['emp_basic']);
$hra=mysqli_real_escape_string($con,$_POST['emp_hra']);
$ca=mysqli_real_escape_string($con,$_POST['emp_ca']);
$ma=mysqli_real_escape_string($con,$_POST['emp_ma']);
$ta=mysqli_real_escape_string($con,$_POST['emp_ta']);
$spa=mysqli_real_escape_string($con,$_POST['emp_spa']);
$ded =mysqli_real_escape_string($con,$_POST['emp_ded']);
$gross=mysqli_real_escape_string($con,$_POST['emp_gross']);
$ctc=mysqli_real_escape_string($con,$_POST['emp_ctc']);
$annual_gross = $gross * 12;
$annual_ctc = round(($ctc * 12), -1);
$created_at = date("Y-m-d H:i:s");

$sql = "SELECT * FROM emp_details WHERE emp_no = '$emp_no'";
$row = mysqli_query($con, $sql);
$result = mysqli_fetch_array($row);
if(!empty($result))
{
	$sql2 = "SELECT emp_no AS emp_id FROM emp_salary_list WHERE emp_no = '$emp_no'";
	$row2 = mysqli_query($con, $sql2);
	$result2 = mysqli_fetch_array($row2);
	if(!empty($result['emp_id']))
	{
		
		echo '<script type="application/javascript">alert("Employee salary with employee number '.$emp_no.' already exist!");</script>';
	} else {
		$emp_name = $result['emp_name'];
		$emp_email = $result['emp_email'];
		$emp_status = $result['status'];
		$sql3 = "INSERT INTO emp_salary_list (emp_no,emp_name,emp_email,status,basic,house_rent_allowance,conveyance_allowance,medical_allowance,telephone_allowance,special_allowance,deduction,monthly_gross,annual_gross,monthly_total_ctc,annual_total_ctc,created_at) VALUES ('$emp_no','$emp_name','$emp_email','$emp_status','$basic','$hra','$ca','$ma','$ta','$spa','$ded','$gross','$annual_gross','$ctc','$annual_ctc','$created_at')";
		
		if(	mysqli_query($con,$sql3)) 
		{
			echo '<script type="application/javascript">alert("New Employee Salary Added!");window.location="employee_salary.php";</script>';
		}
		else {
			die('Error: ' . mysqli_error($con));
		}
	}
} else {
	echo '<script type="application/javascript">alert("Employee with employee number '.$emp_no.' does not exist!");</script>';
}
mysqli_close($con);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Keshava Technologies Admin</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->


<script type="text/javascript">
// function validate()
// {
// 	if(document.getElementById('emp_no').value=="")
// 	{
// 		alert("Please enter the Employee Number!");
// 		document.getElementById('emp_no').focus();
// 		return false;
// 	}
// 	else if(document.getElementById('emp_name').value=="")
// 	{
// 		alert("Please enter the Employee Name!");
// 		document.getElementById('emp_name').focus();
// 		return false;		
// 	}
// 	else if(document.getElementById('emp_email').value=="")
// 	{
// 		alert("Please enter the Employee Email!");
// 		document.getElementById('emp_email').focus();	
// 		return false;		
// 	}
// 	else if(document.getElementById('emp_role').value=="")
// 	{
// 		alert("Please enter the Employee Role!");	
// 		document.getElementById('emp_role').focus();
// 		return false;
// 	}
// 	else if(document.getElementById('emp_address').value=="")
// 	{
// 		alert("Please enter the Employee Address!");
// 		document.getElementById('emp_address').focus();
// 		return false;	
// 	}
// 	else if(document.getElementById('emp_phone').value == "")
// 	{
// 		alert("Please enter the Employee Phone Number!");
// 		document.getElementById('emp_phone').focus();
// 		return false;	
// 	}
// 	else
// 	{
//      return true;
// 	}
// }
</script>




<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 
<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  


<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>


<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
	$("input.file_1").filestyle({ 
	image: "images/forms/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 

<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href=""><img src="images/logo.png" width="197" height="48" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<!--  start top-search --><!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<a href="http://www.keshavatech.com/hr-management/employee_details.php?atn=lgt" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
		  <div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="" id="acc-settings">Settings</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-details">Personal details </a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-project">Project details</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-inbox">Inbox</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-stats">Statistics</a> 
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		<ul class="current"><li><a href="http://www.keshavatech.com/hr-management/dashboard.php"><b>Dashboard</b><!--[if IE 7]><!--></a><!--<![endif]-->

		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select">
		<li><a href="http://www.keshavatech.com/hr-management/employee_details.php"><b>Add Employee Details</b><!--[if IE 7]><!--></a><!--<![endif]-->
		</li>
		</ul>
  		<div class="nav-divider">&nbsp;</div> 
              
 		<ul class="select"><li><a href="http://www.keshavatech.com/hr-management/addprojects.php"><b>Add new projects</b><!--[if IE 7]><!--></a><!--<![endif]-->

		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>    
        
   		<ul class="select"><li><a href="http://www.keshavatech.com/hr-management/manageprojects.php"><b>Manage projects</b><!--[if IE 7]><!--></a><!--<![endif]-->
		</li>
		</ul> 
		<div class="nav-divider">&nbsp;</div>

   		<ul class="select"><li><a href="http://www.keshavatech.com/hr-management/att_view.php"><b>Attendance</b><!--[if IE 7]><!--></a><!--<![endif]-->
		</li>
		</ul>

		<div class="nav-divider">&nbsp;</div>
   		<ul class="select"><li><a href="http://www.keshavatech.com/hr-management/time_view.php"><b>Timesheet</b><!--[if IE 7]><!--></a><!--<![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
   		<ul class="select"><li><a href="http://www.keshavatech.com/hr-management/email_com.php"><b>E-Mail</b><!--[if IE 7]><!--></a><!--<![endif]-->
		</li>
		</ul>
		
		<ul class="select"><li><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="#nogo">Categories Details 1</a></li>
				<li><a href="#nogo">Categories Details 2</a></li>
				<li><a href="#nogo">Categories Details 3</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
 
 <div class="clear"></div>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading">
  <h1>Add Employee Salary</h1></div>
<div style="float: right; margin-bottom: 10px; margin-right: 25px;">
		<a href="employee_salary.php"><button type="button">Back</button></a>
	</div>

<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
		<!-- start id-form -->
        <form name="emp_salary_form" enctype="multipart/form-data" action="" method="post">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<div><th valign="top">Emp No:</th></div>
			<div><td><input type="text" name="emp_no" id="emp_no" value="<?php echo isset($_POST['emp_no'])?$_POST['emp_no']:'';?>" required class="inp-form" /></td></div>
			<td></td>
		</tr>
		<tr>
			<div><th valign="top">Basic Pay:</th></div>
			<div><td><input type="text" name="emp_basic" id="emp_basic" value="<?php echo isset($_POST['emp_basic'])?$_POST['emp_basic']:'';?>" required class="inp-form" /></td></div>
			<td></td>
		</tr>
		<tr>
			<div><th valign="top">House Rent Allowance (HRA):</th></div>
			<div><td><input type="text" name="emp_hra" id="emp_hra" value="<?php echo isset($_POST['emp_hra'])?$_POST['emp_hra']:'';?>" required class="inp-form" /></td></div>
			<td>
			</td>
		</tr>
		<tr>
			<div><th valign="top">Conveyance Allowance (CA):</th></div>
			<div><td><input type="text" name="emp_ca" id="emp_ca" value="<?php echo isset($_POST['emp_ca'])?$_POST['emp_ca']:'';?>" required class="inp-form" /></td></div>
			<td></td>
		</tr>
		<tr>
			<div><th valign="top">Medical Allowance (MA):</th></div>
			<div><td><input type="text" name="emp_ma" id="emp_ma" value="<?php echo isset($_POST['emp_ma'])?$_POST['emp_ma']:'';?>" required class="inp-form" /></td></div>
			<td>
			</td>
		</tr>
		<tr>
			<div><th valign="top">Telephone Allowance (TA):</th></div>
			<div><td><input type="text" name="emp_ta" id="emp_ta" value="<?php echo isset($_POST['emp_ta'])?$_POST['emp_ta']:'';?>" required class="inp-form" /></td></div>
			<td></td>
		</tr>
		<tr>
			<div><th valign="top">Special Allowance (SA):</th></div>
			<div><td><input type="text" name="emp_spa" id="emp_spa" value="<?php echo isset($_POST['emp_spa'])?$_POST['emp_spa']:'';?>" required class="inp-form" /></td></div>
			<td>
			</td>
		</tr>
		<tr>
			<div><th valign="top">Deduction:</th></div>
			<div><td><input type="text" name="emp_ded" id="emp_ded" value="<?php echo isset($_POST['emp_ded'])?$_POST['emp_ded']:'';?>" required class="inp-form" /></td></div>
			<td></td>
		</tr>
		<tr>
			<div><th valign="top">Monthly Gross:</th></div>
			<div><td><input type="text" name="emp_gross" id="emp_gross" value="<?php echo isset($_POST['emp_gross'])?$_POST['emp_gross']:'';?>" required class="inp-form" /></td></div>
			<td>
			</td>
		</tr>
		<tr>
			<div><th valign="top">Monthly Total CTC:</th></div>
			<div><td><input type="text" name="emp_ctc" id="emp_ctc" value="<?php echo isset($_POST['emp_ctc'])?$_POST['emp_ctc']:'';?>" required class="inp-form" /></td></div>
			<td>
			</td>
		</tr>
		<tr>
			<div><th>&nbsp;</th></div>
			<td valign="top">
				<input name="emp_submit" type="submit" value="Submit"  class="form-submit" />
				<!-- <input type="reset" value="" class="form-reset"  /> -->
			</td>
			<td></td>
		</tr>
	</table>
    </form>

<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
	<!--  start footer-left -->
	<div id="footer-left">
	&copy;All rights reserved Keshava Technologies Inc.,</div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>