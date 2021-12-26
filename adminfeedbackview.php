<html>
<head>

    <title>Industrial visit</title>
    
    <link rel="stylesheet" type="text/css" href="signin.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <!--<link rel="stylesheet" type="text/css" href="gallary.css">
     <link rel="stylesheet" type="text/css" href="about.css">
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
         <!--     <li><a href="admineventview.php">Event view</a></li> -->
                <li><a href="adminfeedbackview.php">FEEDBACK VIEW</a></li>  
                
                <li><a href="adminview.php">BACK</a></li> 
             </ul>
        </nav>
               

        
        
        </div>
        <form method="post" action="adminfeedbackview.php">
       <table id="view" align='center'>
         
<tr>
    <th>Customer ID</th>
<th>Feedback ID</th>
<th>Rating</th>
<th>Message</th>


            </tr>

           
            
       
        <?php
    $i=1;
$db_name='industrialvisits';
  
       
$con=mysqli_connect("localhost","root","","")or die($con);
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
$sql="SELECT * FROM feedback";
$result=mysqli_query($con,$sql)or die($con);
        while($row=$result->fetch_array()){
        $cid=$row["cust_id"];
        $fid=$row["feedback-id"];
        $rating=$row["rating"];
        $notes=$row["comment"];
?>     
        <tr id="pg1">
        <td><?php echo $cid; ?></td>
        <td><?php echo $fid; ?></td>
        <td><?php echo $rating; ?></td>
        <td><?php echo $notes; ?></td>
        
  
        </tr>
           
  
    <?php } ?>
            </table>   
        </form>
            
        
        </div>
</body>
</html>
 

        