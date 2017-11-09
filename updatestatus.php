<?php  
if(isset($_GET['atn']))
{
    $atn=$_GET['atn'];
    if($atn=='uts')
    {
    $emp_id=$_GET['emp_id'];
	$date=$_GET['date'];
    $con=mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");

    //Check connection
    if(mysqli_connect_errno()) 
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // escape variables for security
    $sql="UPDATE `timesheet` SET `status`=1 WHERE emp_id='$emp_id' AND date='$date'";
    if(!mysqli_query($con,$sql)) 
    {
     die('Error: ' . mysqli_error($con));
    }
	else
	{
	echo 'Approved';
	}
    mysqli_close($con);
  }
} 
?>  