  <?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="industrialvisits";
$tbl_name="customer";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");

if (isset($_POST['submit'])) {
    echo 'submitted';

    $usrnm=$_POST['name'];
    $pswd=$_POST['pass'];
    $email=$_POST['email'];
    $cit=$_POST['city'];
    $ph=$_POST['num'];
    
    
       
    $ab= "INSERT INTO customer(cust_name,password,email,address,phone)
          VALUES('$usrnm', '$pswd', '$email' ,'$cit', '$ph')";
            

    mysqli_query($con,$ab) or die(mysqli_error($con));
    
  header('location:user.php');
/*$abc="select * from customer where cust_name='$usrnm'";
    $row=mysqli_query($con,$abc)or die($con);
        
   $row1=$row->fetch_assoc(); 

    $_SESSION['cust_id']=$row1['cust_id'];*/

}
/*if (isset($_POST['login_user'])) {
    if(isset($_POST['myusername'])&& isset($_POST['mypassword']))
{
$usrnm1=$_POST['myusername'];
$pswd1=$_POST['mypassword'];
$ab="SELECT * FROM customer WHERE cust_name='$usrnm1' and password='$pswd1'";
$result=mysqli_query($con,$ab)or die(mysqli_error($con));

$cnt=mysqli_num_rows($result);
if($cnt==true)
{
  
    $_SESSION['username']=$usrnm1;
   header('location:eventform.html');
    $abc="select * from customer where cust_name='$usrnm1'";
    $row=mysqli_query($con,$abc)or die($con);
     $row1=$row->fetch_assoc();
    $_SESSION['cust_id']=$row1['cust_id'];

}
else
{
echo"<center><h2 style='color:red'>Your Login Name or Password is invalid</h2></center>";
   
}
}
}*/
?>
        
