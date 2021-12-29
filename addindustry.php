<html>
    <head>
        <title></title>
            
    <link rel="stylesheet" type="text/css" href="signin.css">
    <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="addindustry.css">
        <link rel="stylesheet" type="text/css" href="addindustry.css">
         <style>
        body{
            background-image: url(iimage2.jpg);
            background-size: cover;
            
            
        }
    </style>
    </head>
    <body>

         
        <div id="main">
        <nav><a id="pk"></a>

            <ul>
             <!-- <li><a href="admincustview.php">CUSTOMER VIEW</a></li>  
             <li><a href="admineventview.php">Event view</a></li> 
                <li><a href="adminfeedbackview.php">FEEDBACK VIEW</a></li> 
                 <li><a href="addindustry.php">ADD INDUSTRY</a></li> -->
                <li><a href="adminview.php">BACK</a></li> 
                
             </ul>
        </nav>
        </div>
        <h1></h1>
<div class="add">
        <form id="addi" method="POST" enctype="multipart/form-data">
            <h2>ADD INDUSTRY</h2>
            <lable>Category id</lable><br>
            <input type="text" name="category" id="cat" placeholder="Enter the appropriate category id">
            <br><br>
            <label>Industry Name</label><br>
            <input type="text" name="indname" id="ind" placeholder="Enter the industry name">
            <br><br>
            <label>City</label><br>
            <input type="text" name="icity" id="city" placeholder="Enter the location of industry">
            <br><br>
            <label>Amount</label><br>
            <input type="text" name="amount" id="amt" placeholder="Enter the amount of industry per person">
            <br><br>
            <label>Choose image</label><br>
            <input type="text" name="image" id="image" placeholder="Browse for image">
            <br><br>
            <input type="submit" name="upload" id="upload">
            <br><br>
        </form>
        </div>
    </body>
</html>

<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="industrialvisits";
$tbl_name="industry";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");

if (isset($_POST['upload']))
{
    $cat=$_POST['category'];
    $ind=$_POST['indname'];
    $city=$_POST['icity'];
    $amt=$_POST['amount'];
    $file=$_POST['image'];
    
    $add="INSERT INTO industry(cat_id,ind_name,city,amount,imgpath)VALUES('$cat','$ind','$city','$amt','$file')";
    $query_run=mysqli_query($con,$add);
    
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("New industry added sucessfully") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("New industry not added sucessfully") </script>';
    }
}

?>
