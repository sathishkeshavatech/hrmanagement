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
  <h1>Edit Employee Details</h1></div>


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
			if(isset($_GET['atn'])=="e")
			{
		       $id=$_GET['id'];
               $con=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");

               // Check connection
               if (mysqli_connect_errno()) 
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               $sql="SELECT * FROM `emp_details` WHERE id='$id'";
               $result= mysqli_query($con,$sql);
               while($row = mysqli_fetch_array($result)) 
               {
            ?>
        <form name="emp_form" enctype="multipart/form-data" action="" method="post">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Emp No:</th>
			<td><input type="text" name="emp_no" id="emp_no" class="inp-form" value="<?php echo $row['emp_no']; ?>" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Emp Name:</th>
			<td><input type="text" name="emp_name" id="emp_name" class="inp-form" value="<?php echo $row['emp_name']; ?>"/></td>
			<td>
			</td>
		</tr>
		<tr>
		<th valign="top">Date of Joining:</th>
		<td class="noheight">
		
			<table border="0" cellpadding="0" cellspacing="0">
			<tr  valign="top">
				<td>
                <?php
				$doj[]=(explode("/",$row['emp_doj']));
				?>
				<form id="chooseDateForm" action="#">
				
				<select id="date" name="date" class="styledselect-day">
                <?php
				$day=$doj[0][0];
				  for($it=1;$it<=31;$it++)
				  {
			     ?>
                 <option value="<?php echo $it; ?>" <?php if($day==$it){ echo 'selected="selected"'; } ?>><?php echo $it; ?></option>
				  
				<?php
                  }
                ?>
				</td>
				<td>
					<select id="month" name="month" class="styledselect-month">
                                    <?php 
					     $month=$doj[0][1];
					      for($m=1 ; $m<=12 ; $m++ )
					      {
				    ?>
                    
                    <option value="<?php echo $m; ?>" <?php if($month == $m){ echo 'selected="selected"'; } ?>><?php echo $m; ?></option>
					
					<?php
                          }
                    ?>
					</select>
				</td>
				<td>


					<select  id="year" name="year" class="styledselect-year">
                    <?php 
						  $year=$doj[0][2];
					      for($n=2009 ; $n<= 2020 ; $n++ )
					      {
				    ?>
                    
                    <option value="<?php echo $n; ?>" <?php if($year == $n){ echo 'selected="selected"'; } ?>><?php echo $n; ?></option>
					
					<?php
                          }
                    ?>
					</select>
					</form>

				</td>
				<td></td>
			</tr>
			</table>
		
		</td>
		<td></td>
	</tr>
           <tr>
			<th valign="top">Country :</th>
			<td>
					<select  id="" name="country" id="country" class="styledselect-year" style="width:200px;">                                   

						<option value="Canada" 
<?php
if($row['country']=="Canada")
{
  echo "selected";
}  
?> >Canada</option>


						<option value="India" 
<?php
if($row['country']=="India")
{
  echo "selected";
}  
?>>India</option>



						<option value="Singapore" 
<?php
if($row['country']=="Singapore")
{
  echo "selected";
}  
?>>Singapore</option>



						<option value="United Kingdom" 
<?php
if($row['country']=="United Kingdom")
{
  echo "selected";
}  
?>>United Kingdom</option>

					

                                                <option value="United States" 
<?php
if($row['country']=="United States")
{
  echo "selected";
}  
?>>United States</option>


					</select>
                         </td>
			<td></td>
	  </tr>
           <tr>
			<th valign="top">City :</th>
			<td>
					<select  id="" name="city" id="city" class="styledselect-year" style="width:200px;">
						
<option value="Chennai" selected="
<?php
if($row['city']=="Chennai")
{
  echo "selected";
}  
?>">Chennai</option>
		
				
<option value="Bangalore" 
<?php
if($row['city']=="Bangalore")
{
  echo 'selected="selected"';
}  
?>>Bangalore</option>
		
				
<option value="Coimbatore" 
<?php
if($row['city']=="Coimbatore")
{
  echo 'selected="selected"';
}  
?>>Coimbatore</option>
		
				
<option value="Madurai" 
<?php
if($row['city']=="Madurai")
{
  echo 'selected="selected"';
}  
?>>Madurai</option>
	
					
<option value="Toronto"
<?php
if($row['city']=="Toronto")
{
  echo 'selected="selected"';
}  
?>>Toronto</option>
	
					
<option value="Missisauga" 
<?php
if($row['city']=="Missisauga")
{
  echo 'selected="selected"';
}  
?>
>Missisauga</option>
		
				
<option value="Brampton"
<?php
if($row['city']=="Brampton")
{
  echo 'selected="selected"';
}  
?>>Brampton</option>

						
<option value="London" <?php
if($row['city']=="London")
{
  echo 'selected="selected"';
}  
?>>London</option>
			
			
<option value="Singapore" <?php 
if($row['city']=="Singapore")
{
  echo 'selected="selected"';
}  
?>>Singapore</option>
			
			
<option value="Newyork" <?php 
if($row['city']=="Newyork")
{
  echo 'selected="selected"';
}  
?>>Newyork</option>
					</select>
                        </td>
			<td></td>
	  </tr>
           <tr>
			<th valign="top">Probation Period :</th>
			<td><input type="text" name="prob_period" id="prob_period" class="inp-form" value="<?php echo $row['prob_period']; ?>" /></td>
			<td></td>
	  </tr>
           <tr>
	 <th valign="top">Time Zone :</th>
        <td>
        <select name="timezone" id="timezone" class="styledselect-year" style="width:200px;">

	<option  value="1"
<?php
if($row['timezone']==1) 
{
echo 'selected';
}
?>>(GMT-05:00) US & Canada </option>


	<option  value="2"  
<?php
if($row['timezone']==2)
{
echo 'selected';
}
?>>(GMT+00:00)  London </option>


	<option  value="3"  
<?php
if($row['timezone']==3)
{
echo 'selected';
}
?>>(GMT+05:30) Chennai</option>

	<option  value="4" 
<?php
if($row['timezone']==4)
{
echo 'selected';
}
?>>(GMT+08:00) Singapore</option>

        </select>
        </td>												
	<td></td>
	</tr>

        <tr>
        <th valign="top">Time slot:</th>
        <td>
        <select name="timeslot" id="timeslot" class="styledselect-year" style="width:200px;">

	<option  value="1" 
<?php
if($row['timeslot']==1)
{
echo 'selected';
}
?>>9.30 AM - 6.30 PM</option>

	<option  value="2" 
<?php
if($row['timeslot']==2)
{
echo 'selected';
}
?>>10.00 AM - 7.00 PM </option>

        </select>
        </td>											
	<td></td>
	</tr>
      <tr>
			<th valign="top">Email :</th>
			<td><input type="text" name="emp_email" id="emp_email" class="inp-form" value="<?php echo $row['emp_email']; ?>"/></td>
			<td></td>
	  </tr>
		<tr>
			<th valign="top">Role :</th>
			<td><input type="text" name="emp_role" id="emp_role" class="inp-form" value="<?php echo $row['emp_role']; ?>"/></td>
			<td></td>
		</tr>
	<tr>
		<th valign="top">Address:</th>
		<td><textarea rows="" cols="" name="emp_address" id="emp_address" class="form-textarea"><?php echo $row['emp_address']; ?></textarea></td>
		<td></td>
	</tr>
    <tr>
			<th valign="top">Phone :</th>
			<td><input type="text" name="emp_phone" id="emp_phone" class="inp-form" value="<?php echo $row['emp_phone']; ?>"/></td>
			<td></td>
    </tr> 
   	<tr>
	<th>Image 1:</th>
	<td><input type="file" name="emp_documents[]" id="emp_documents" multiple="multiple" class="file_1" value="<?php echo $row['emp_documents']; ?>"/></td>
	<td>
	<div class="bubble-left"></div>
	<div class="bubble-inner">.pdf files only allowed </div>
	<div class="bubble-right"></div>
	</td>
	</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input name="emp_submit" type="submit" value="Update"  class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
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
  
<?php
if(isset($_POST['emp_submit']))
{
$id=$_GET['id'];
$con=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");

// Check connection
if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if(isset($_FILES['emp_documents']["tmp_name"]))
{
$documents="";
$j=0;
  foreach ($_FILES['emp_documents']['name'] as $filename) 
   {
	$target_dir = "upload/";
    $document = $target_dir.$filename;
	if($j!=0)
	{
    $documents = $documents.','.$document;
	}
	else
	{
    $documents = $documents.$document;
	}
	$j++;
  }
 $j=0;
}

// escape variables for security
 $emp_no=mysqli_real_escape_string($con,$_POST['emp_no']);
 $emp_name=mysqli_real_escape_string($con,$_POST['emp_name']);
 $emp_doj=mysqli_real_escape_string($con,$_POST['date']).'/'.mysqli_real_escape_string($con,$_POST['month']).'/'.mysqli_real_escape_string($con,$_POST['year']);
 $emp_email=mysqli_real_escape_string($con,$_POST['emp_email']);
 $country=mysqli_real_escape_string($con,$_POST['country']);
 $city=mysqli_real_escape_string($con,$_POST['city']);
 $timezone=mysqli_real_escape_string($con,$_POST['timezone']);
 $timeslot=mysqli_real_escape_string($con,$_POST['timeslot']);
 $prob_period=mysqli_real_escape_string($con,$_POST['prob_period']);
 $emp_role=mysqli_real_escape_string($con,$_POST['emp_role']);
 $emp_address=mysqli_real_escape_string($con,$_POST['emp_address']);
 $emp_phone=mysqli_real_escape_string($con,$_POST['emp_phone']);
 $emp_documents=$documents;


$sql="UPDATE `emp_details` SET `emp_no`='$emp_no',`emp_name`='$emp_name',`emp_doj`='$emp_doj',`country`='$country',`city`='$city',`timezone`='$timezone',`timeslot`='$timeslot',`prob_period`='$prob_period',`emp_email`='$emp_email',`emp_role`='$emp_role',`emp_address`='$emp_address',`emp_phone`='$emp_phone',`emp_documents`='$emp_documents' WHERE id='$id'";


if(!mysqli_query($con,$sql)) 
{
  die('Error: ' . mysqli_error($con));
}

echo '<script type="application/javascript">alert("Employee Details Successfully Updated!");</script>';
mysqli_close($con);
}
?>

<?php
if(isset($_FILES['emp_documents']["tmp_name"]))
{
   $i=0;
   
   foreach ($_FILES['emp_documents']['name'] as $filename) 
   {
	$target_dir = "upload/";
    $target_dir = $target_dir.$filename;
	
     if(move_uploaded_file($_FILES["emp_documents"]["tmp_name"][$i], $target_dir)) 
     {
     echo '<span style="color:green;">File '.($i+1).' : The file '.$filename.' has been uploaded successfully!'.'</span><br><br>';
     } 
     else 
     {
    echo '<span style="color:green;">File '.($i+1).' : Sorry, there was an error while uploading '.$filename.' file !</span><br><br>';
     }
	 
   $i++;
  }
  
 $_FILES["emp_documents"]["tmp_name"]=NULL;
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
					<h5>Add Employee Details</h5>
			       In this Employee Details form you can add new employees details and their scanned documents! 

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