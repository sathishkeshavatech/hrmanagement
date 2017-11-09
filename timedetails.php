<?php
$ch=date('d');
if($ch>=1 && $ch<=7)
{
pre_fifth();
first();
}
else if($ch>=8 && $ch<=14)
{
first();
second();
}
else if($ch>=15 && $ch<=21)
{
second();
third();
}
else if($ch>=22 && $ch<=28)
{
third();
fourth();
}
else if($ch>=29 && $ch<=31)
{
fourth();
fifth();
}

function first()
{
//First week
$empid = $_GET['q'];
$i=1;
$con = mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");

if(!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sumaka_hr");
echo '<br>';
$sql1="SELECT *,DAY(date) AS day FROM timesheet WHERE MONTH(date)=MONTH(NOW()) AND (DAY(date) BETWEEN 1 AND 7)  AND emp_id='$empid'";
$result1 = mysqli_query($con,$sql1);

if($result1)
{
echo '<h2>WEEK 1( DAY 1-7 )</h2>';
echo '<table border="1" width="1100" style="border-color:#4C7E79;">
<tr style="background:#4C7E79;color:white;font-style:bold;">
<th style="height:15px;padding:10px;">NO</th>
<th style="height:15px;padding:10px;">EMP ID</th>
<th style="height:15px;padding:10px;">NAME</th>
<th style="height:15px;padding:10px;">DATE</th>
<th style="height:15px;padding:10px;">HOURS</th>
<th style="height:15px;padding:10px;">TASKS</th>
<th style="height:15px;padding:10px;">STATUS</th>
</tr>';
while($row1 = mysqli_fetch_array($result1)) 
{
  echo "<tr>";
  echo '<td  style="height:15px;padding:10px;">'. $i . "</td>";
  echo '<td style="height:15px;padding:10px;">' . $row1['emp_id'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">' . $row1['emp_name'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">'. $row1['date'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">'. $row1['hours'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">' . $row1['tasks'] . "</td>";
  echo '<td  style="height:15px;padding:10px;" id="status'.$row1['day'].'" name="status'.$row1['day'].'">';
  if($row1['status']!=1)
  {
  echo '<a href="javascript:void(0);" onclick="updateStatus(\''.$row1['emp_id'].'\',\''.$row1['date'].'\',\''.$row1[day].'\');" class="green-btn" >APPROVE</a>';
  }
  else
  {
  echo "Approved";
  }
  echo "</td></tr>";
  $i++;
}
echo "</table>";
}
else
{
 echo "No data Found!";
}
echo '<br>';
mysqli_close($con);
}



function second()
{
//Second Week 
$empid = $_GET['q'];
$i=1;
$con = mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");

if(!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sumaka_hr");
$j=1;
$sql2="SELECT *,DAY(date) AS day FROM timesheet WHERE MONTH(date)=MONTH(NOW()) AND (DAY(date) BETWEEN 8 AND 14)  AND emp_id='$empid'";
$result2 = mysqli_query($con,$sql2);

if($result2)
{
echo '<h2>WEEK 2( DAY 8-14 )</h2>';
echo '<table border="1" width="1100" style="border-color:#4C7E79;">
<tr style="background:#4C7E79;color:white;font-style:bold;">
<th style="height:15px;padding:10px;">NO</th>
<th style="height:15px;padding:10px;">EMP ID</th>
<th style="height:15px;padding:10px;width:150px;">NAME</th>
<th style="height:15px;padding:10px;width:70px;">DATE</th>
<th style="height:15px;padding:10px;">HOURS</th>
<th style="height:15px;padding:10px;">TASKS</th>
<th style="height:15px;padding:10px;">STATUS</th>
</tr>';
while($row2 = mysqli_fetch_array($result2)) 
{
$empid = $_GET['q'];
$i=1;
$con = mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");

if(!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sumaka_hr");
  echo "<tr>";
  echo '<td  style="height:15px;padding:10px;">'. $j . "</td>";
  echo '<td style="height:15px;padding:10px;">' . $row2['emp_id'] . "</td>";
  echo '<td  style="height:15px;padding:10px;width:150px;">' . $row2['emp_name'] . "</td>";
  echo '<td  style="height:15px;padding:10px;width:70px;">'. $row2['date'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">'. $row2['hours'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">' . $row2['tasks'] . "</td>";
  echo '<td  style="height:15px;padding:10px;" id="status'.$row2['day'].'" name="status'.$row2['day'].'">';
  if($row2['status']!=1)
  {
  echo '<a href="javascript:void(0);" onclick="updateStatus(\''.$row2['emp_id'].'\',\''.$row2['date'].'\',\''.$row2[day].'\');" class="green-btn" >APPROVE</a>';
  }
  else
  {
  echo "Approved";
  }
  echo "</td></tr>";
  $j++;
}
echo "</table>";
}
else
{
 echo "No data Found!";
}
echo '<br>';
mysqli_close($con);
}



function third()
{
//Third Week 
$empid = $_GET['q'];
$con = mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");

if(!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sumaka_hr");
$k=1;
$sql2="SELECT *,DAY(date) AS day FROM timesheet WHERE MONTH(date)=MONTH(NOW()) AND (DAY(date) BETWEEN 15 AND 21)  AND emp_id='$empid'";
$result2 = mysqli_query($con,$sql2);

if($result2)
{
echo '<h2>WEEK 3( DAY 15-21 )</h2>';
echo '<table border="1" width="1100" style="border-color:#4C7E79;">
<tr style="background:#4C7E79;color:white;font-style:bold;">
<th style="height:15px;padding:10px;">NO</th>
<th style="height:15px;padding:10px;">EMP ID</th>
<th style="height:15px;padding:10px;width:150px;">NAME</th>
<th style="height:15px;padding:10px;width:70px;">DATE</th>
<th style="height:15px;padding:10px;">HOURS</th>
<th style="height:15px;padding:10px;">TASKS</th>
<th style="height:15px;padding:10px;">STATUS</th>
</tr>';
while($row3 = mysqli_fetch_array($result2)) 
{
  echo "<tr>";
  echo '<td  style="height:15px;padding:10px;">'. $k . "</td>";
  echo '<td style="height:15px;padding:10px;">' . $row3['emp_id'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">' . $row3['emp_name'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">'. $row3['date'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">'. $row3['hours'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">' . $row3['tasks'] . "</td>";
  echo '<td  style="height:15px;padding:10px;" id="status'.$row3['day'].'" name="status'.$row3['day'].'">';
  if($row3['status']!=1)
  {
  echo '<a href="javascript:void(0);" onclick="updateStatus(\''.$row3['emp_id'].'\',\''.$row3['date'].'\',\''.$row3[day].'\');" class="green-btn" >APPROVE</a>';
  }
  else
  {
  echo "Approved"; 
  } 
  echo "</td></tr>";
  $k++;
}
echo "</table>"; 
}
else
{
 echo "No data Found!";
}
echo '<br>';
mysqli_close($con);
}


function fourth()
{
//Fourth Week 
$empid = $_GET['q'];
$i=1;
$con = mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");

if(!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sumaka_hr");
$l=1;
$sql4="SELECT *,DAY(date) AS day FROM timesheet WHERE MONTH(date)=MONTH(NOW()) AND (DAY(date) BETWEEN 22 AND 28)  AND emp_id='$empid'";
$result4 = mysqli_query($con,$sql4);

if($result4)
{
echo '<h2>WEEK 4( DAY 22-28 )</h2>';
echo '<table border="1" width="1100" style="border-color:#4C7E79;">
<tr style="background:#4C7E79;color:white;font-style:bold;">
<th style="height:15px;padding:10px;">NO</th>
<th style="height:15px;padding:10px;">EMP ID</th>
<th style="height:15px;padding:10px;width:150px;">NAME</th>
<th style="height:15px;padding:10px;width:70px;">DATE</th>
<th style="height:15px;padding:10px;">HOURS</th>
<th style="height:15px;padding:10px;">TASKS</th>
<th style="height:15px;padding:10px;">STATUS</th>
</tr>';
while($row4 = mysqli_fetch_array($result4)) 
{
  echo "<tr>";
  echo '<td  style="height:15px;padding:10px;">'. $l . "</td>";
  echo '<td style="height:15px;padding:10px;">' . $row4['emp_id'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">' . $row4['emp_name'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">'. $row4['date'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">'. $row4['hours'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">' . $row4['tasks'] . "</td>";
  echo '<td  style="height:15px;padding:10px;" id="status'.$row4['day'].'" name="status'.$row4['day'].'">';
  if($row4['status']!=1)
  {
  echo '<a href="javascript:void(0);" onclick="updateStatus(\''.$row4['emp_id'].'\',\''.$row4['date'].'\',\''.$row4[day].'\');" class="green-btn" >APPROVE</a>';
  }
  else
  {
  echo "Approved";
  }
  echo "</td></tr>";
  $l++;
}
echo "</table>";
}
else
{
 echo "No data Found!";
}
echo '<br>';
mysqli_close($con);
}


function fifth()
{
//Fifth Week
$empid = $_GET['q'];
$con = mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");

if(!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sumaka_hr"); 
$j=1;
$sql5="SELECT *,DAY(date) AS day FROM timesheet WHERE MONTH(date)=MONTH(NOW()) AND (DAY(date) BETWEEN 29 AND 31)  AND emp_id='$empid'";
$result5 = mysqli_query($con,$sql5);

if($result5)
{
echo '<h2>WEEK 5( DAY 29-31 )</h2>';
echo '<table border="1" width="1100" style="border-color:#4C7E79;">
<tr style="background:#4C7E79;color:white;font-style:bold;">
<th style="height:15px;padding:10px;">NO</th>
<th style="height:15px;padding:10px;">EMP ID</th>
<th style="height:15px;padding:10px;width:150px;">NAME</th>
<th style="height:15px;padding:10px;width:70px;">DATE</th>
<th style="height:15px;padding:10px;">HOURS</th>
<th style="height:15px;padding:10px;">TASKS</th>
<th style="height:15px;padding:10px;">STATUS</th>
</tr>';
while($row5 = mysqli_fetch_array($result5)) 
{
  echo "<tr>";
  echo '<td  style="height:15px;padding:10px;">'. $j . "</td>";
  echo '<td style="height:15px;padding:10px;">' . $row5['emp_id'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">' . $row5['emp_name'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">'. $row5['date'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">'. $row5['hours'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">' . $row5['tasks'] . "</td>";
  echo '<td  style="height:15px;padding:10px;" id="status'.$row5['day'].'" name="status'.$row5['day'].'">';
  if($row5['status']!=1)
  {
  echo '<a href="javascript:void(0);" onclick="updateStatus(\''.$row5['emp_id'].'\',\''.$row5['date'].'\',\''.$row5[day].'\');" class="green-btn" >APPROVE</a>';
  }
  else
  {
  echo "Approved";
  }
  echo "</td></tr>";
  $j++;
}
echo "</table>";
}
else
{
 echo "No data Found!";
}
echo '<br>';
mysqli_close($con);
}


function pre_forth()
{
//Fifth Week
$empid = $_GET['q'];
$con = mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");

if(!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sumaka_hr"); 
$k=1;
$sql6="SELECT *,DAY(date) AS day FROM timesheet WHERE MONTH(date)=(MONTH(NOW())-1) AND (DAY(date) BETWEEN 22 AND 28)  AND emp_id='$empid'";
$result6 = mysqli_query($con,$sql6);

if($result6)
{
echo '<h2>LAST MONTH WEEK 4( DAY 22-28 )</h2>';
echo '<table border="1" width="1100" style="border-color:#4C7E79;">
<tr style="background:#4C7E79;color:white;font-style:bold;">
<th style="height:15px;padding:10px;">NO</th>
<th style="height:15px;padding:10px;">EMP ID</th>
<th style="height:15px;padding:10px;">NAME</th>
<th style="height:15px;padding:10px;">DATE</th>
<th style="height:15px;padding:10px;">HOURS</th>
<th style="height:15px;padding:10px;">TASKS</th>
<th style="height:15px;padding:10px;">STATUS</th>
</tr>';
while($row6 = mysqli_fetch_array($result6)) 
{
  echo "<tr>";
  echo '<td  style="height:15px;padding:10px;">'. $j . "</td>";
  echo '<td style="height:15px;padding:10px;">' . $row6['emp_id'] . "</td>";
  echo '<td  style="height:15px;padding:10px;width:150px;">' . $row6['emp_name'] . "</td>";
  echo '<td  style="height:15px;padding:10px; width:70px;">'. $row6['date'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">'. $row6['hours'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">' . $row6['tasks'] . "</td>";
  echo '<td  style="height:15px;padding:10px;" id="status'.$row6['day'].'" name="status'.$row6['day'].'">';
  if($row6['status']!=1)
  {
  echo '<a href="javascript:void(0);" onclick="updateStatus(\''.$row6['emp_id'].'\',\''.$row6['date'].'\',\''.$row6[day].'\');" class="green-btn" >APPROVE</a>';
  }
  else
  {
  echo "Approved";
  }
  echo "</td></tr>";
  $k++;
}
echo "</table>";
}
else
{
 echo "No data Found!";
}
echo '<br>';
mysqli_close($con);
}

function pre_fifth()
{
//Fifth Week
$empid = $_GET['q'];
$con = mysqli_connect("localhost","sumaka_hr","keshava04","sumaka_hr");

if(!$con) 
{
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sumaka_hr"); 
$l=1;
$sql7="SELECT *,DAY(date) AS day FROM timesheet WHERE MONTH(date)=(MONTH(NOW())-1) AND (DAY(date) BETWEEN 29 AND 31)  AND emp_id='$empid'";
$result7 = mysqli_query($con,$sql7);

if($result7)
{
echo '<h2>LAST MONTH WEEK 5( DAY 29-31 )</h2>';
echo '<table border="1" width="1100" style="border-color:#4C7E79;">
<tr style="background:#4C7E79;color:white;font-style:bold;">
<th style="height:15px;padding:10px;">NO</th>
<th style="height:15px;padding:10px;">EMP ID</th>
<th style="height:15px;padding:10px;">NAME</th>
<th style="height:15px;padding:10px;">DATE</th>
<th style="height:15px;padding:10px;">HOURS</th>
<th style="height:15px;padding:10px;">TASKS</th>
<th style="height:15px;padding:10px;">STATUS</th>
</tr>';
while($row7 = mysqli_fetch_array($result7)) 
{
  echo "<tr>";
  echo '<td  style="height:15px;padding:10px;">'. $j . "</td>";
  echo '<td style="height:15px;padding:10px;">' . $row7['emp_id'] . "</td>";
  echo '<td  style="height:15px;padding:10px;width:150px;">' . $row7['emp_name'] . "</td>";
  echo '<td  style="height:15px;padding:10px;width:70px;">'. $row7['date'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">'. $row7['hours'] . "</td>";
  echo '<td  style="height:15px;padding:10px;">' . $row7['tasks'] . "</td>";
  echo '<td  style="height:15px;padding:10px;" id="status'.$row7['day'].'" name="status'.$row7['day'].'">';
  if($row7['status']!=1)
  {
  echo '<a href="javascript:void(0);" onclick="updateStatus(\''.$row7['emp_id'].'\',\''.$row7['date'].'\',\''.$row7[day].'\');" class="green-btn" >APPROVE</a>';
  }
  else
  {
  echo "Approved";
  }
  echo "</td></tr>";
  $l++;
}
echo "</table>";
}
else
{
 echo "No data Found!";
}
echo '<br>';
mysqli_close($con);
}

?>			


	
    
	
                