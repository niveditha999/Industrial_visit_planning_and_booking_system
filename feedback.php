<?php include('feedbackform.php') ?>

<html>
<head>

    <title>Industrial Visit</title>
   <link rel="stylesheet" type="text/css" href="main.css">
   <link rel="stylesheet" type="text/css" href="feedback.css">


    </head>
    <style>
        body{
            background-image: url(image4.jpg);
            background-attachment: fixed;
            background-position: center;
        }
    </style>
    <body>
        <div id="main">
        <nav><a id="pk"></a>

            <ul>
                <li><a href="viewin.php">VIEW INDUSTRY</a></li> 
                <li><a href="feedback.php">FEEDBACK</a></li> 
                <li><a href="eventform.html">BACK</a></li> 
             </ul>
        </nav>
        </div>
          
 <h1>Your Feedback</h1>
        
        <div class="feed-page">
    <div class="form">
      
        <form class="admin-form" method="post">
            
    

            
            <p>Rating</p>
             <select  name="rating" style="padding-right: 166px;
    padding-bottom: 18px;"  id="eve">
                    <option value="select">--Rating--</option>
                    <option value="excellent">Excellent</option>
                    <option value="good">Good</option>
                    <option value="average">Average</option>
                    <option value="bad">Bad</option>
                    <option value="poor">Poor</option>
                    
                </select><br><br>
            
            <p>Feedback</p>
          <input type="text" name="message" placeholder="Enter your feedback here" id="name1"><br><br>

            
            <!--<input type="submit" value="submit" name="feed" onclick="alert();"/>-->
        <button name="feed" id="sub"><a href="feedbackform.php"></a>Submit</button>
            
        </form>
        
        </div>    
        </div>
    
    </body>
