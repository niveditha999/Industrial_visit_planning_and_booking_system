
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
            background-image: url(login1.jpg);
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
                <li><a href="bookingview.php">BOOKING VIEW</a></li> 
                
                <li><a href="adminview.php">BACK</a></li> 
             </ul>
        </nav>
               

        
        
        </div>
        <form method="post" action="bookingview.php">
       <table id="view" align='center'>
         
<tr>
<th>Booking ID</th>
<th>Customer ID</th>
<th>College Name</th>

<th>Number Of Person</th>
<th>Transport Type</th>

<!--<th>Action</th>-->
 </tr>
           
            
       
<?php
    $i=1;
$db_name='industrialvisits';
  
       
$con=mysqli_connect("localhost","root","","")or die($con);
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
$sql="SELECT * FROM booking";
$result=mysqli_query($con,$sql)or die($con);

   
    while($row=$result->fetch_array()) {
        $bid=$row["b_id"];
        $cid=$row["cust_id"];
        $clg=$row["college"];
        $p=$row["person"];
        $tr=$row["transport"];
       
        
    
    


?>     
        <tr id="pg1">
        <td><?php echo $bid; ?></td>
        <td><?php echo $cid; ?></td>
        <td><?php echo $clg; ?></td>
        <td><?php echo $p; ?></td>
        <td><?php echo $tr; ?></td>
        
        
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
 

        
