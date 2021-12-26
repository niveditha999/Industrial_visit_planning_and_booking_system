
<html>
<head>

    <title>Industrial Visit</title>
    
   <!-- <link rel="stylesheet" type="text/css" href="reg.css">-->
    <link rel="stylesheet" type="text/css" href="main.css">
    <!--<link rel="stylesheet" type="text/css" href="gallary.css">
    <link rel="stylesheet" type="text/css" href="contact.css">-->
    <link rel="stylesheet" type="text/css" href="custeventview.css">
    
    </head>
    <style>
        body{
            background-image: url(images/login1.jpg);
        }
    </style>
    <body>
         <div id="main">
         
        <div id="main">
        <nav><a id="pk"></a>

            <ul>
               <li><a href="admincustview.php">CUSTOMER VIEW</a></li>  
              <!--  <li><a href="admineventview.php">Event view</a></li> -->
                <li><a href="adminfeedbackview.php">FEEDBACK VIEW</a></li> 
                
                <li><a href="adminview.php">BACK</a></li> 
             </ul>
        </nav>
               

        
        
        </div>
        <form method="post" action="admincustview.php">
       <table id="view" align='center'>
         
<tr>
<th>Customer ID</th>
<th>Customer Name</th>

<th>Address</th>
<th>phone no</th>
<th>Email ID</th>

<!--<th>Action</th>-->
 </tr>
           
            
       
<?php
    $i=1;
$db_name='industrialvisits';
  
       
$con=mysqli_connect("localhost","root","","")or die($con);
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
$sql="SELECT * FROM customer";
$result=mysqli_query($con,$sql)or die($con);

   
    while($row=$result->fetch_array()) {
        $cid=$row["cust_id"];
        $cnm=$row["cust_name"];
        $add=$row["address"];
        $ph=$row["phone"];
        $em=$row["email"];
       
        
    
    


?>     
        <tr id="pg1">
        <td><?php echo $cid; ?></td>
        <td><?php echo $cnm; ?></td>
        <td><?php echo $add; ?></td>
        <td><?php echo $ph; ?></td>
        <td><?php echo $em; ?></td>
        
        
 <!--<td>  <a href="delet.php?Delete=<?php echo $eid; ?>" onclick="return confirm('Are you sure you wanna delete this?');"><img src="images/delete1.png" width="30"></a>
 </td>-->
        </tr>
           
  
    <?php 
             
    }?>
           
           
           
           
            </table>   
        </form>
            
        
        </div>
</body>
</html>
 

        