
<? include ('server.php') ?>
<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="industrialvisits";
$tbl_name="feedback";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
//echo $_SESSION['cust_id'];
if (isset($_POST['feed'])) {
if(isset($_POST['rating'])&& isset($_POST['message']))
{
    
    $rat=$_POST['rating'];
    $msg=$_POST['message'];

    
    $cid=$_SESSION['cust_id'];
     //echo $cid;
    
    $ab= "INSERT INTO feedback(cust_id,rating,comment)
          VALUES('$cid','$rat','$msg')";
            
 mysqli_query($con,$ab) or die(mysqli_error($con));
 echo '<script type="text/javascript"> alert("Submitted") </script>';
    
 //echo"<center><h2 style='color:green'>Submitted</h2></center>";//
}

else

{
 echo '<script type="text/javascript"> alert("Something went wrong") </script>';
//echo"<center><h2 style='color:red'>Something went wrong</h2></center>";//
}
}

?>
