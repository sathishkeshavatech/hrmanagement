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
			<a href="http://www.keshavatech.com/hr-management/view.php?atn=lgt" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
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
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

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
  <h1>Employee Details</h1></div>

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
           <?php
		   if(isset($_GET['atn']))
		   {
			if(isset($_GET['atn'])=="v")
			{
		       $id=$_GET['id'];
               $con=mysqli_connect("localhost","root","root","sumaka_hr");

               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql="SELECT * FROM emp_salary_list WHERE emp_no ='$id'";
               $result= mysqli_query($con,$sql);
               while($row = mysqli_fetch_array($result)) 
               { //echo '<pre>row '; print_r($row); exit;
            ?>
        <form name="emp_form" enctype="multipart/form-data" action="" method="post">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
			<tr>
				<th valign="top">Emp No:</th>
				<td><input type="text" name="emp_no" id="emp_no" class="inp-form" value="<?php echo $row['emp_no']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">Basic Pay:</th>
				<td><input type="text" name="emp_basic" id="emp_basic" class="inp-form" value="<?php echo $row['basic']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">House Rent Allowance (HRA):</th>
				<td><input type="text" name="emp_hra" id="emp_hra" class="inp-form" value="<?php echo $row['house_rent_allowance']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">Conveyance Allowance (CA):</th>
				<td><input type="text" name="emp_ca" id="emp_ca" class="inp-form" value="<?php echo $row['conveyance_allowance']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">Medical Allowance (MA):</th>
				<td><input type="text" name="emp_ma" id="emp_ma" class="inp-form" value="<?php echo $row['medical_allowance']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">Telephone Allowance (TA):</th>
				<td><input type="text" name="emp_ta" id="emp_ta" class="inp-form" value="<?php echo $row['telephone_allowance']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">Special Allowance (SA):</th>
				<td><input type="text" name="emp_spa" id="emp_spa" class="inp-form" value="<?php echo $row['special_allowance']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">Deduction:</th>
				<td><input type="text" name="emp_ded" id="emp_ded" class="inp-form" value="<?php echo $row['deduction']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">Monthly Gross:</th>
				<td><input type="text" name="emp_mg" id="emp_mg" class="inp-form" value="<?php echo $row['monthly_gross']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">Annual Gross:</th>
				<td><input type="text" name="emp_ag" id="emp_ag" class="inp-form" value="<?php echo $row['annual_gross']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">Monthly CTC:</th>
				<td><input type="text" name="emp_ctc" id="emp_ctc" class="inp-form" value="<?php echo $row['monthly_total_ctc']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">Annual CTC:</th>
				<td><input type="text" name="emp_actc" id="emp_actc" class="inp-form" value="<?php echo $row['annual_total_ctc']; ?>" readonly="readonly" /></td>
				<td></td>
			</tr>
			
	</table>
    </form>
    
 <?php 
  }
  mysqli_close($con);
  }
}
 ?> 

	<!-- end id-form  -->

	</td>
	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="images/forms/header_related_act.gif" width="271" height="43" alt="" />
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<div id="related-act-inner">
			
				<div class="left"><a href=""><img src="images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>View</h5>
			       In this page you can view employee details based on employee Id! 

				</div>
				
				<div class="clear"></div>

				
			</div>
			<!-- end related-act-inner -->
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>



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