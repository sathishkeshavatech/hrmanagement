<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employee Details Form</title>

<style type="text/css">

.container
{
	clear:both;
	margin:0 auto;
	width:400px;
	height:auto;
	background-color:#C5C5C5;
}

.form_container
{	
	clear:both;
	width:400px;
	height:auto;
	background-color:#EEE;
}

table
{
	text-align:left;
}
</style>

<script type="text/javascript">
function validate()
{
	if(document.getElementById('emp_no').value=="")
	{
		alert("Please enter the Employee Number!");
		document.getElementById('emp_no').focus();
		return false;
	}
	else if(document.getElementById('emp_name').value=="")
	{
		alert("Please enter the Employee Name!");
		document.getElementById('emp_name').focus();
		return false;		
	}
	else if(document.getElementById('emp_doj').value=="")
	{
		alert("Please enter the Employee DOJ!");
		document.getElementById('emp_doj').focus();
		return false;			
	}
	else if(document.getElementById('emp_email').value=="")
	{
		alert("Please enter the Employee Email!");
		document.getElementById('emp_email').focus();	
		return false;		
	}
	else if(document.getElementById('emp_role').value=="")
	{
		alert("Please enter the Employee Role!");	
		document.getElementById('emp_role').focus();
		return false;
	}
	else if(document.getElementById('emp_address').value=="")
	{
		alert("Please enter the Employee Address!");
		document.getElementById('emp_address').focus();
		return false;	
	}
	else if(document.getElementById('emp_phone').value == "")
	{
		alert("Please enter the Employee Phone Number!");
		document.getElementById('emp_phone').focus();
		return false;	
	}
	else if(document.getElementById('emp_documents').value == "")
	{
		alert("Please select at least one .pdf file!");
		document.getElementById('emp_documents').focus();
		return false;	
	}
	else
	{
     return true;
	}
}

</script>
</head>

<body>
<div id="container">
<div id="form_container" class="form_container">
<center>
<form action="" method="post" enctype="multipart/form-data" name="emp_form" onsubmit="return validate();">
<table width="534" height="406" border="0">
  <tr>
    <th scope="row"><label>Employee No</label></th>
    <td>:</td>
    <td><input type="text" name="emp_no" id="emp_no" /></td>
  </tr>
  <tr>
    <th scope="row"><label>Employee Name</label></th>
    <td>:</td>
    <td><input type="text" name="emp_name" id="emp_name" />
      <label for="emp_name"></label></td>
  </tr>
  <tr>
    <th scope="row">Doj</th>
    <td>:</td>
    <td><input type="text" name="emp_doj" id="emp_doj" /></td>
  </tr>
  <tr>
    <th scope="row"><label>Email</label></th>
    <td>:</td>
    <td><input type="text" name="emp_email" id="emp_email" /></td>
  </tr>
  <tr>
    <th scope="row"><label>Role</label></th>
    <td>:</td>
    <td><input type="text" name="emp_role" id="emp_role" /></td>
  </tr>
  <tr>
    <th scope="row"><label>Address</label></th>
    <td>:</td>
    <td><textarea name="emp_address" id="emp_address" ></textarea></td>
  </tr>
  <tr>
    <th scope="row"><label>Phone</label></th>
    <td>:</td>
    <td><input type="text" name="emp_phone" id="emp_phone" /></td>
  </tr>
  <tr>
    <th scope="row"><label>Documents</label></th>
    <td>:</td>
    <td><input type="file" name="emp_documents[]" id="emp_documents" multiple="multiple" /></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td><input name="emp_submit" type="submit" value="Submit" /></td>
  </tr>
</table>
</form>
</center>

<?php
if(isset($_POST['emp_submit']))
{
$con=mysqli_connect("localhost","root","","keshava");

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
 $emp_doj=mysqli_real_escape_string($con,$_POST['emp_doj']);
 $emp_email=mysqli_real_escape_string($con,$_POST['emp_email']);
 $emp_role=mysqli_real_escape_string($con,$_POST['emp_role']);
 $emp_address=mysqli_real_escape_string($con,$_POST['emp_address']);
 $emp_phone=mysqli_real_escape_string($con,$_POST['emp_phone']);
 $emp_documents=$documents;


$sql="INSERT INTO emp_details (id,emp_no,emp_name,emp_doj,emp_email,emp_role,emp_address,emp_phone,emp_documents)
VALUES ('', '$emp_no', '$emp_name','$emp_doj','$emp_email','$emp_role','$emp_address','$emp_phone','$emp_documents')";

if(!mysqli_query($con,$sql)) 
{
  die('Error: ' . mysqli_error($con));
}

echo '<script type="application/javascript">alert("Employee Details Successfully Submitted!");</script>';
mysqli_close($con);
}
else
{
echo '<script type="application/javascript">alert("Failed to submit employee details!");</script>';
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

</div>
</div>
</body>
</html>
