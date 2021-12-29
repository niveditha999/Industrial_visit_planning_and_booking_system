<?php include 'server.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>Industrial visit</title>
    
    
    <link rel="stylesheet" type="text/css" href="main.css">
      <!--  <link rel="stylesheet" type="text/css" href="about.css">
     <link rel="stylesheet" type="text/css" href="feedback.css">
     <link rel="stylesheet" type="text/css" href="gallary.css">
     <link rel="stylesheet" type="text/css" href="feedback.css">-->
    <link rel="stylesheet" type="text/css" href="custeventview.css">
     </head>
     <style>
             body{
                background-image: url(login1.jpg);
            }
        </style>
    <body>
       <div id="main">
         
        <nav><a id="pk"></a>

            <ul>
               
                <li><a href="viewin.html">view details</a></li> 
                <li><a href="feedback.php">feedback</a></li>
                <li><a href="viewin.php">Logout</a></li> 
                  
            </ul>
            
        </nav>
       </div>
        
        <form method="post" action="compind.php">
       <table id="view" align='center'>
         
<tr>
<th>Industry ID</th>
<th>Industry Name</th>

<th>City</th>
<th>Amount(Rs) per person</th>
<th>To Book</th>
            </tr>
           
            
       
        <?php
    $i=1;

$db_name='industrialvisits';
  
       
$con=mysqli_connect("localhost","root","","")or die($con);
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
$sql="SELECT int_id,ind_name,city,amount FROM industry";
$result=mysqli_query($con,$sql)or die($con);

    
  
   

   
    while($row=$result->fetch_array()) {
        $eid=$row["int_id"];
        $enm=$row["ind_name"];
        $eloc=$row["city"];
        $np=$row["amount"];
?>     
        <tr id="pg1">
        <td><?php echo $eid; ?></td>
        <td><?php echo $enm; ?></td>
        <td><?php echo $eloc; ?></td>
        <td><?php echo $np; ?></td>
       <td> <a href="booking.php">Click here</a></td>
        </tr>
           
  
    <?php } ?>
            </table>   
        </form>
            
        
    
</body>
</html>
 
