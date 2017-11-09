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
			<a href="http://www.keshavatech.com/hr-management/email_com.php?atn=lgt" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
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
  <h1>INTERNAL E-MAIL SYSTEM</h1></div>


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

        <fieldset style="background-color:#EEE;padding:30px;">	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
		<!-- start id-form -->
                <form name="email_form" action="" method="post">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
		<th valign="top">Date :</th>
		<td>
	        <input type="text" name="date" id="date" value="<?php echo date('d-m-y'); ?>" disabled="disabled" class="inp-form"  style="height:25px;"/>	
		</td>
                <td>
                </td>
	        </tr>	        
                <tr>
		<th valign="top">To:</th>
		<td>
                <select name="to" id="to" class="inp-form" style="color:black;">

                <?php
                $con=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");
                if (mysqli_connect_errno()) 
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $sql="SELECT * FROM `emp_details`";
                $result= mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)) 
                {
                  echo '<option value="'.$row['emp_email'].'">'.$row['emp_name'].'</option>';

                 $all=$row['emp_email'].','.$all;
                }
                echo '<option value="'.$all.'">ALL</option>';
               
                mysqli_close($con);
                ?>

                </select>
                </td>
		<td></td>
	        </tr>
		<tr>
		<th valign="top">Subject :</th>
		<td><input type="text" name="subject" id="subject" class="inp-form" /></td>
		<td></td>
		</tr>
	        <tr>
		<th valign="top">Body of the letter:</th>
		<td><textarea rows="" cols="" name="message" id="message" class="form-textarea"></textarea></td>
		<td></td>
	        </tr>
	        <tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input name="mail_submit" type="submit" value="Submit"  class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
        </table>
        </fieldset>
    </form>
    
<?php
if(isset($_POST['mail_submit']))
{
   $to = $_POST['to'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
   $header = "From:info@keshavatech.com \r\n";
   $retval = mail($to,$subject,$message,$header);
   if($retval == true)  
   {
       echo '<script type="text/javascript"> alert("Message sent successfully...");</script>';
   }
   else
   {
       echo '<script type="text/javascript"> alert("Message could not be sent...");</script>';
   }
}
?>
	<!-- end id-form  -->

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