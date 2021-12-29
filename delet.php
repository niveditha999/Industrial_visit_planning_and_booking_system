<?php include('adminfeedbackview.php') ?>
<?php

$host="localhost";
$username="root";
$password="";
$db_name="industrialvisits";
$tbl_name="feedback";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");

 if(isset($_POST['Delete']))
 {
	$delete_id=$_POST['Delete'];
     $sql="DELETE FROM feedback  where feedback_id= '$delete_id'";
     
	    mysqli_query($con,$sql)or die($con);
 /* $sql2="DELETE FROM event  where event_id= '$delete_id'";
	mysqli_query($con,$sql2)or die($con); */
header('location:admineventview.php'); 
 }	
?> 
