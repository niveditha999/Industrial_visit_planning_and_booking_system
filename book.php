<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="industrialvisits";
$tbl_name="customer";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
if (isset($_POST['add'])) {
    if(isset($_POST['college'])&& isset($_POST['date'])&& isset($_POST['transport'])&&isset($_POST['num']))
{
     $clg=$_POST['college'];
    $d=$_POST['date'];
   // $t=$_POST['time'];
    $tr=$_POST['transport'];
    $n=$_POST['num'];
    $cust_name=$_SESSION['username'];
    $retrieve="SELECT * FROM customer WHERE cust_name='$cust_name'";
    $res1=mysqli_query($con,$retrieve)or die(mysqli_error($con));
    $row=$res1->fetch_assoc();
     $cid=$row['cust_id'];
    $_SESSION['cust_id']=$cid;
        if($res1)
       {
           echo "<script>alert('Done')</script>";
            //echo $cid;
            //echo $cust_name;
     
       }
    
       
    $ab= "INSERT INTO booking(cust_id,college,date,person,transport)
          VALUES('$cid','$clg', '$d','$n', '$tr')";
            

    mysqli_query($con,$ab) or die(mysqli_error($con));
    
   // header('location:booking.php');
//echo "<script>alert('Invalid Details');</script>";

}
}
?>
