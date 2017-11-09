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
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>


<script type="text/javascript">
function validate()
{
	if(document.getElementById('pro_code').value=="")
	{
		alert("Please enter the Project Code!");
		document.getElementById('pro_code').focus();
		return false;
	}
	else if(document.getElementById('pro_name').value=="")
	{
		alert("Please enter the Project Name!");
		document.getElementById('pro_name').focus();
		return false;		
	}
	else if(document.getElementById('pro_exp_duration').value=="")
	{
		alert("Please enter the project's expected duration!");
		document.getElementById('pro_exp_duration').focus();	
		return false;		
	}
	else if(document.getElementById('pro_com_duration').value=="")
	{
		alert("Please enter the project completion duration!");	
		document.getElementById('pro_com_duration').focus();
		return false;
	}
	else if(document.getElementById('pro_reporting_person').value=="")
	{
		alert("Please enter the reporting person!");
		document.getElementById('pro_reporting_person').focus();
		return false;	
	}
	else
	{
     return true;
	}
}
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
			<a href="http://www.keshavatech.com/hr-management/att_view.php?atn=lgt" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
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
              
 		<ul class="select"><li><a href="http://www.keshavatech.com/hr-management/addprojects.php"><b>Add new projects</b><!--[if IE 7]><!--></a><!--<!

[endif]-->

		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>    
        
   		<ul class="select"><li><a href="http://www.keshavatech.com/hr-management/manageprojects.php"><b>Manage projects</b><!--[if IE 7]><!--></a><!--<!

[endif]-->
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
		<ul class="select">
		  <li><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="#nogo">Clients Details 1</a></li>
				<li><a href="#nogo">Clients Details 2</a></li>
				<li><a href="#nogo">Clients Details 3</a></li>
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<ul class="select">
		  <li><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="#nogo">News details 1</a></li>
				<li><a href="#nogo">News details 2</a></li>
				<li><a href="#nogo">News details 3</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
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
  <h1>Attendance Reports:</h1></div>


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
    <fieldset style="padding:20px;background-color:#F3FAFC;border-color:#248893; border-style:solid;margin:20px;">
     <legend style="background-color:#248893;color:white;padding-left:5px;padding-right:5px;"><h2 style="color:white;">Daily Report for (<?php date_default_timezone_set('Asia/Kolkata'); echo date('d-m-Y'); ?>)</h2></legend>
	
    <br />
		<!-- start id-form -->
        <form name="pro_form" action="" method="post" onsubmit="return validate();">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top" >Total Strength :</th>
			<td>					
               <?php
               $con1=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql1="SELECT COUNT(id) AS emp_tot FROM `emp_details`";
               $result1= mysqli_query($con1,$sql1);
			   $i=0;
               if($row1 = mysqli_fetch_row($result1)) 
               {
               ?>
              <input type="text" id="pro_name" name="pro_name" class="styledselect-year" value="<?php echo $row1[0];?>" style=" width:200px;" readonly="readonly">      

            
               <?php 
                $i++;
                }
				mysqli_close($con1);
                ?>
                
            </td>
			<td>
			</td>
		</tr>
		<tr>
			<th valign="top" >No of Present :</th>
			<td>					
               <?php
               $con2=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               $cur_day=date('Y-m-d');
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql2="SELECT COUNT('date') AS no_of_pre FROM `attendance` WHERE date='$cur_day'";
               $result2= mysqli_query($con2,$sql2);
			   $i=0;
               if($row2 = mysqli_fetch_array($result2)) 
               {
               ?>
              <input type="text" id="pro_name" name="pro_name" class="styledselect-year" value="<?php echo $row2[0];?>" style=" width:200px;"  readonly="readonly">     

           
               <?php 
                $i++;
                }
				mysqli_close($con2);
                ?>
                
            </td>
			<td>
			</td>
		</tr>
		<tr>
			<th valign="top" >No of Absentees :</th>
			<td>				

               <?php
               $con3=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               $today3=date('Y-m-d');
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql3="SELECT COUNT(emp_name) FROM `emp_details` WHERE emp_name NOT IN (SELECT emp_name FROM `attendance` WHERE date='$today3')";
               $result3= mysqli_query($con3,$sql3);
               if($row3 = mysqli_fetch_row($result3)) 
               {
               ?>
               <input type="text" id="pro_name" name="pro_name" class="styledselect-year" value="<?php echo $row3[0]; ?>" style=" width:200px;"  readonly="readonly">                 
               <?php 
                }
                mysqli_close($con3);
                ?>
            </td>
			<td>
			</td>
		</tr>
	<tr>
		<th>&nbsp;</th>
		<td></td>
	</tr>
	</table>
    </form>
    
    <h2>Present List (<?php echo " ".date('d-M-Y');?>)</h2>
    <table border="1" width="500">
  <tr><td style="padding-left:10px;background-color:#248893;color:white;height:20px;"> No </td><td style="padding-left:10px;background-color:#248893;color:white;"> Name </td><td style="padding-left:10px;background-color:#248893;color:white;">Time-in </td><td style="padding-left:10px;background-color:#248893;color:white;">Time-out </td></tr>
               <?php
               $con5=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               $today5=date('Y-m-d');
			   $i=1;
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql5="SELECT * FROM `attendance` WHERE date='$today5'";
               $result5= mysqli_query($con5,$sql5);
               while($row5 = mysqli_fetch_array($result5)) 
               {
               ?>
                 <tr><td style="padding-left:10px;height:20px;"> <?php echo $i;?> </td><td style="padding-left:10px; text-transform:uppercase;"> <?php echo $row5['emp_name']; ?></td><td style="padding-left:10px;"> <?php echo $row5['time_in']; ?> </td><td style="padding-left:10px;"> <?php echo $row5['time_out']; ?> </td></tr>
      
               <?php 
			   $i++;
                }
                mysqli_close($con5);
                ?>
                </table>  
   <br>
   <br>             
  <h2>Absentees List (<?php echo " ".date('d-M-Y');?>)</h2>
    <table border="1" width="500">
  <tr><td style="padding-left:10px;background-color:#248893;height:20px;color:white;"> No </td><td style="padding-left:10px;background-color:#248893;color:white;"> Name </td></tr>
               <?php
               $con4=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               $today4=date('Y-m-d');
			   $i=1;
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql4="SELECT emp_name FROM `emp_details` WHERE emp_name NOT IN (SELECT emp_name FROM `attendance` WHERE date='$today3')";
               $result4= mysqli_query($con4,$sql4);
               while($row4 = mysqli_fetch_row($result4)) 
               {
               ?>
                 <tr><td style="padding-left:10px;height:20px;text-transform:uppercase;"> <?php echo $i;?> </td><td style="padding-left:10px;"> <?php echo $row4[0]; ?></td></tr>
      
               <?php 
			   $i++;
                }
                mysqli_close($con4);
                ?>
                </table>
  </fieldset>
                <br><br>
   
    <fieldset style="padding:20px;background-color:#F3FAFC;border-color:#248893; border-style:solid;margin:20px;">
     <legend style="background-color:#248893;color:white;padding-left:5px;padding-right:5px;"><h2 style="color:white;">Monthly Report</h2></legend>
	
    <br />
		<!-- start id-form -->
        <form name="pro_form" action="" method="post" onsubmit="return validate();">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top" >Month :</th>
			<td>				
               <input type="text" id="pro_name" name="pro_name" class="styledselect-year" value="<?php echo date('M'); ?>" style=" width:200px;"  readonly="readonly">                 
            </td>
			<td>
			</td>
		</tr>
		<tr>
			<th valign="top" >Year :</th>
			<td>					
              <input type="text" id="pro_name" name="pro_name" class="styledselect-year" value="<?php echo date('Y');?>" style=" width:200px;"  readonly="readonly">            
            </td>
			<td>
			</td>
		</tr>
		<tr>
			<th valign="top" >Total Strength :</th>
			<td>					
               <?php
               $con1=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql1="SELECT COUNT(id) AS emp_tot FROM `emp_details`";
               $result1= mysqli_query($con1,$sql1);
			   $i=0;
               if($row1 = mysqli_fetch_row($result1)) 
               {
               ?>
              <input type="text" id="pro_name" name="pro_name" class="styledselect-year" value="<?php echo $row1[0];?>" style=" width:200px;" readonly="readonly">      

            
               <?php 
                $i++;
                }
				mysqli_close($con1);
                ?>
                
            </td>
			<td>
			</td>
		</tr>
	<tr>
		<th>&nbsp;</th>
		<td></td>
	</tr>
	</table>
    </form>
    
    <table border="1" width="500">
  <tr><td style="padding-left:10px;background-color:#248893;color:white;height:20px;"> No </td><td style="padding-left:10px;background-color:#248893;color:white;"> Name </td><td style="padding-left:10px;background-color:#248893;color:white;">Total Present </td><td style="padding-left:10px;background-color:#248893;color:white;">Total Leave </td><td style="padding-left:10px;background-color:#248893;color:white;">Leave Days </td></tr>
               <?php
               $con5=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               $today5=date('Y-m-d');
			   $i=1;
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql5="SELECT * FROM `emp_details`";
               $result5= mysqli_query($con5,$sql5);
               while($row5 = mysqli_fetch_array($result5)) 
               {
               ?>
                 <tr><td style="padding-left:10px;height:20px;"> <?php echo $i;?> </td><td style="padding-left:10px; text-transform:uppercase;"> <?php echo $row5['emp_name']; $ename=$row5['emp_name'];?></td><td style="padding-left:10px;"> 
                 
               <?php
               $con6=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               $cur_month=date('Y-m-d');
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql6="SELECT COUNT('date') AS emp_no_of_pre FROM `attendance` WHERE emp_name='$ename' AND YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = MONTH(CURDATE()) ";

               $result6= mysqli_query($con6,$sql6);
			   $j=0;
               if($row6 = mysqli_fetch_array($result6)) 
               {
               echo $row6[0];   
               $j++;
                }
				mysqli_close($con6);
                ?>
                 
                  </td><td style="padding-left:10px;">
              
               <?php
               $con8=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               $cur_month=date('Y-m-d');
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               } 
               $sqlt="SELECT COUNT('date') AS emp_no_of_pre FROM `attendance` WHERE emp_name='$ename' AND YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = MONTH(CURDATE()) ";
			   $resultt= mysqli_query($con8,$sqlt);
			   if($resultt)
			   {
               if($rowt = mysqli_fetch_array($resultt))
			   {
			   $emp_pre_days =$rowt[0];
			   $sql8="SELECT COUNT(DISTINCT DATE(date))-'$emp_pre_days' AS workingdays FROM `attendance` WHERE YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = MONTH(CURDATE())";               
			   $result8= mysqli_query($con8,$sql8);
			   $l=1;
               while($row8 = mysqli_fetch_array($result8)) 
               {
				if($l==1)
				{
			    echo $row8[0];
				}
				else
				{
			    echo ",".$row8[0];
				}
			   $l++;
			     }
                }
			   }
				mysqli_close($con8);
                ?>
               
               </td>
               <td style="padding-left:10px;">      
               <?php
               $con9=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               $cur_month=date('Y-m-d');
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql9="SELECT DISTINCT DAY(date) AS leavedays FROM `attendance` WHERE YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = MONTH(CURDATE()) AND DAY(date) NOT IN(SELECT DAY(date) FROM `attendance` WHERE emp_name='$ename' AND YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = MONTH(CURDATE())) ORDER BY DAY(date)";

               $result9= mysqli_query($con9,$sql9);
			   $n=1;
               while($row9 = mysqli_fetch_array($result9)) 
               {
			    if($n==1)
				{
                echo $row9[0];
				}
				else
				{
                echo ",".$row9[0];
				}
               $n++;
                }
				mysqli_close($con9);
                ?>             
                </td></tr>
      
               <?php 
			   $i++;
                }
               // mysqli_close($con);
                ?>
                </table>            
  </fieldset>
 


                <br><br>
   
    <fieldset style="padding:20px;background-color:#F3FAFC;border-color:#248893; border-style:solid;margin:20px;">
     <legend style="background-color:#248893;color:white;padding-left:5px;padding-right:5px;"><h2 style="color:white;">Last Month Report</h2></legend>
	
    <br />
		
    <table border="1" width="500">
  <tr><td style="padding-left:10px;background-color:#248893;color:white;height:20px;"> No </td><td style="padding-left:10px;background-color:#248893;color:white;"> Name </td><td style="padding-left:10px;background-color:#248893;color:white;">Total Present </td><td style="padding-left:10px;background-color:#248893;color:white;">Total Leave </td><td style="padding-left:10px;background-color:#248893;color:white;">Leave Days </td></tr>
               <?php
               $con5=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
               date_default_timezone_set('Asia/Kolkata');
               $today5=date('Y-m-d');
			   $i=1;
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql5="SELECT * FROM `emp_details`";
               $result5= mysqli_query($con5,$sql5);
               while($row5 = mysqli_fetch_array($result5)) 
               {
               ?>
                 <tr><td style="padding-left:10px;height:20px;"> <?php echo $i;?> </td><td style="padding-left:10px; text-transform:uppercase;"> <?php echo $row5['emp_name']; $ename=$row5['emp_name'];?></td><td style="padding-left:10px;"> 
                 
               <?php
               $con6=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               $cur_month=date('Y-m-d');
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql6="SELECT COUNT('date') AS emp_no_of_pre FROM `attendance` WHERE emp_name='$ename' AND YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = (MONTH(CURDATE())-1) ";

               $result6= mysqli_query($con6,$sql6);
			   $j=0;
               if($row6 = mysqli_fetch_array($result6)) 
               {
               echo $row6[0];   
               $j++;
                }
				mysqli_close($con6);
                ?>
                 
                  </td><td style="padding-left:10px;">
              
               <?php
               $con8=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               $cur_month=date('Y-m-d');
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               } 
               $sqlt="SELECT COUNT('date') AS emp_no_of_pre FROM `attendance` WHERE emp_name='$ename' AND YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = (MONTH(CURDATE())-1) ";
			   $resultt= mysqli_query($con8,$sqlt);
			   if($resultt)
			   {
               if($rowt = mysqli_fetch_array($resultt))
			   {
			   $emp_pre_days =$rowt[0];
			   $sql8="SELECT COUNT(DISTINCT DATE(date))-'$emp_pre_days' AS workingdays FROM `attendance` WHERE YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = (MONTH(CURDATE())-1)";               
			   $result8= mysqli_query($con8,$sql8);
			   $l=1;
               while($row8 = mysqli_fetch_array($result8)) 
               {
				if($l==1)
				{
			    echo $row8[0];
				}
				else
				{
			    echo ",".$row8[0];
				}
			   $l++;
			     }
                }
			   }
				mysqli_close($con8);
                ?>
               
               </td>
               <td style="padding-left:10px;">      
               <?php
               $con9=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
			   date_default_timezone_set('Asia/Kolkata');
               $cur_month=date('Y-m-d');
               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql9="SELECT DISTINCT DAY(date) AS leavedays FROM `attendance` WHERE YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = (MONTH(CURDATE()))-1 AND DAY(date) NOT IN(SELECT DAY(date) FROM `attendance` WHERE emp_name='$ename' AND YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = (MONTH(CURDATE())-1)) ORDER BY DAY(date)";

               $result9= mysqli_query($con9,$sql9);
			   $n=1;
               while($row9 = mysqli_fetch_array($result9)) 
               {
			    if($n==1)
				{
                echo $row9[0];
				}
				else
				{
                echo ",".$row9[0];
				}
               $n++;
                }
				mysqli_close($con9);
                ?>             
                </td></tr>
      
               <?php 
			   $i++;
                }
               // mysqli_close($con);
                ?>
                </table>            
  </fieldset>



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