<html>
    <head>
        <title>user login</title>
        <link rel="stylesheet" type="text/css" href="user.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <style>
             body{
                background-image: url(images/back2.jpg);
            }
        </style>
        
    </head>
    <body>
         <div id="main">
         
        <nav>

            <ul>
                
               <li><a href="main.html">HOME</a></li> <li><a href="gallery.html">GALLERY</a></li> 
            </ul>
        </nav>
        </div>
        <div class="user">
            <img src="images/avatar.png" class="avatar">
            <h1>User Login</h1>
            <form method="post">
            <p>Username</p>
            <input type="text" name="uname" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password!!<br></a>
            <a href="reg.php">New register??</a>
            </form>
        </div>
        
         <?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="industrialvisits";
$tbl_name="customer";
$_SESSION['cust_id']=0;
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
if (isset($_POST['submit'])) {
    if(isset($_POST['uname'])&& isset($_POST['pass']))
{
$usrnm1=$_POST['uname'];
$pswd1=$_POST['pass'];
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
}


?>
        
    </body>
</html>
