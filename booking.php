<?php include('book.php') ?>
<html>
<head>
    <title>Industrial Visit</title>
    
<style>
    .mode{
        color:white;
        padding: 1px;
    }
    </style>
    
    <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="about.css">
     <link rel="stylesheet" type="text/css" href="feedback.css">
     <link rel="stylesheet" type="text/css" href="gallary.css">
     
     </head>
    <style>
        body{
            background-image: url(back2.jpg);
        }
    </style>
    <body>
       <div id="main">
         
        <nav><a id="pk"></a>

            <ul>
                
           <!--    <li><a href="regform.php">event reg</a></li>  -->
                <li><a href="viewin.php">VIEW INDUSTRY</a></li> 
                <li><a href="feedback.php">FEEDBACK</a></li>
                <li><a href="eventform.html">BACK</a></li> 
                  
            </ul>
            
        </nav>
           <div class="reg-page">
    <div class="form">
      <form class="register-form" method="post">
         
          
          
          <p>College Name:</p>
          <input type="text" name="college" placeholder="Enter college name"/>
          <p>Date:</p>
                  <input type="date" name="date" placeholder="select date"/>
          
          <div class="mode">
          <p>Mode of transport:</p>
          <input type="radio" name="transport" value="Bus" checked/>Bus
          <input type="radio" name="transport" value="Train"/ >Train 
          <input type="radio" name="transport" value="Aeroplane"/>Aeroplane </div>
          <p>Number of person:</p>
          <input type="number" name="num" placeholder="Enter number of people"><br><br>
          
    <button name="add" href="booking.php">Submit</button>

        </form> 
        
        </div>    
        </div>
         
        </div>
    

        </body>
</html>
