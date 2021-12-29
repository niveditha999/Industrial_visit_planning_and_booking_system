<?php include('server.php') ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="reg.css">
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
     <style>
             body{
                background-image: url(login3.jpg);
            }
        </style>
    <body>
         <div id="main">
         
        <nav>

            <ul>
                 <li><a href="gallery.html">GALLERY</a></li> 
                <li><a href="user.php">BACK</a></li>
            </ul>
        </nav>
        </div>
        <h1></h1>
        <div class="registration">
            <form id="reg" method="post">
              <h2>REGISTER HERE</h2>
    <lable>Name</lable><br>
    <input type="text" name="name" id="name" class="login"placeholder="Name" ><br><br>
<lable>College Name</lable><br>
<input type="text" name="cname" id="name" placeholder="College Name" ><br><br>
<lable>Email</lable><br>
<input type="email" name="email" id="name" placeholder="Enter your Email" ><br><br>
<lable>Password</lable><br>
<input type="password" name="pass" id="name" placeholder="Enter your password" ><br><br>
<lable>Mobile Number</lable><br>
<input type="number" name="num" id="name" placeholder="Enter your mobile no" ><br><br>
<lable>City</lable><br>
<input type="text" name="city" id="name" placeholder="Enter your city" ><br><br>

<input type="checkbox" id="ch" ><span id="ch">I Agree all the terms and conditions</span><br><br>

<button type="submit" id="sub" name="submit" href="user.php">Register</button>
            </form>
        </div>
</body>
</html>
