<html>
<head>

    <title>Industrial Visit</title>
         
        <link rel="stylesheet" type="text/css" href="main.css">
        
    <link rel="stylesheet" type="text/css" href="view.css"> 


    </head>
    <style>
        body{
            background-image: url(about1.jpg);
        }
        h1{
            color: aliceblue;
        }
    </style>
    <body>
        <div id="main">
        <nav><a id="pk"></a>

            <ul>
              
               <!-- <li><a href="regform.php">Event reg</a></li> -->
                <li><a href="viewin.php">VIEW INDUSTRY</a></li> 
                <li><a href="feedback.php">FEEDBACK</a></li> 
                <li><a href="eventform.html">BACK</a></li> 
             </ul>
        </nav>
        </div>
       
      <h1> Categories</h1>
      <table border class="center"> 
             <?php
    $i=1;
$db_name='industrialvisits';
  
$con=mysqli_connect("localhost","root","","")or die($con);
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
$sql="SELECT * FROM category";
$result=mysqli_query($con,$sql)or die($con);
            
            
            
while($row=$result->fetch_array()){
        echo '<tr><td "width="50%" height="100"><a class="lf" href="industry.php?cat='.$row['cat_id'].'&catnm='.$row["cat_name"].'">'.$row["cat_name"].'</a></td></tr>';
												//pass catid not catnm
											}
             ?>
     <!--  <tr>   <td><a class="lf" href="compind.php">Computer Industry</a> </td></tr>-->
           <!--<tr> <td><a class="lf" href="consind.php">Construction Industry</a></td></tr>
            <tr><td><a class="lf" href=" ">Electronics Industry</a></td></tr>
          <tr> <td><a class="lf" href=" ">Food Industry</a></td></tr>
           <tr> <td><a class="lf" href=" ">Manufacturing Industry</a></td></tr>
         <tr>   <td><a class="lf" href=" ">Telecommunication Industry</a></td></tr>
            <tr><td> <a class="lf" href=" ">Transport Industry</a></td></tr>
            <tr><td><a class="lf" href=" ">Energy Industry</a> </td></tr>
            <tr><td> <a class="lf" href=" ">Aerospace Industry</a></td></tr>
            <tr><td><a class="lf" href=" ">Chemical Industry</a> </td></tr> -->   
         </table>
    
    </body>
</html>
