<html>
<head>

    <title>Industrial visit</title>
         
        <link rel="stylesheet" type="text/css" href="main.css">
        
   <!-- <link rel="stylesheet" type="text/css" href="view.css"> -->
<link rel="stylesheet" type="text/css" href="custeventview.css">

    </head>
    <body>
        <div id="main">
        <nav><a id="pk"></a>

            <ul>
              
               <!-- <li><a href="regform.php">Event reg</a></li> -->
                <li><a href="viewin.php">View industry</a></li> 
                <li><a href="feedback.php">Feedback</a></li> 
                <li><a href="viewin.php">Back</a></li> 
             </ul>
        </nav>
        </div>
       <table id="view" align='center'>
         
<tr>
<th>Industry ID</th>
<th>Industry Name</th>
<th>City</th>
<th>Amount(Rs) per person</th>
<th>Image</th>
<th>To Book</th>
            </tr>
           <?php
           $i=1;
$db_name='industrialvisits';
  
$con=mysqli_connect("localhost","root","","")or die($con);
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
$cat=$_GET['catnm'];          
$sql="SELECT * FROM industry where cat_id= ".$_GET['cat'];
$result=mysqli_query($con,$sql)or die($con);
           
          while($row=$result->fetch_array()) {
        $eid=$row["int_id"];
        $enm=$row["ind_name"];
        $eloc=$row["city"];
        $np=$row["amount"];
        $img=$row["imgpath"];
?>     
        <tr id="pg1">
        <td><?php echo $eid; ?></td>
        <td><?php echo $enm; ?></td>
        <td><?php echo $eloc; ?></td>
        <td><?php echo $np; ?></td>
         <td><?php echo '<img src="' .$img.'"width="200px" height="200px"'; ?></td>
       <td> <a href="booking.php">Click here</a></td>
        </tr>
           
  
    <?php } ?>
        </table>
    </body>
</html>
            
