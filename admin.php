
<html>
    <head>
        <title>admin login</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <style>
            body{
                background-image: url(images/login1.jpg);
            }
        </style>
        
    </head>
    <body>
        <div id="main">
         
        <nav>
            <a id="pk"></a>

            <ul>
                
               <li><a href="main.html">HOME</a></li> 
                <li><a href="gallery.html">GALLERY</a></li>  
            </ul>
        </nav>
        </div>
        <form method="post" >
        <div class="admin">
            <img src="images/avatar.png" class="avatar">
            <h1>Admin Login</h1>
            <form>
            <p>Username</p>
            <input type="text" name="uname" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
               <input type="submit" name="submit" value="Login">
            
            <a href="#">Forget Password!!</a>
            </form>
        </div>
       
            </form>
        
         <?php
        if(isset($_POST['uname']) and isset($_POST['pass'])){
        if($_POST['uname']=='admin'and $_POST['pass']=='admin'){
           header('location:adminview.php');
        }}
        ?>

       

    </body>
</html>