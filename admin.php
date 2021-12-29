
        
         <?php
        if(isset($_POST['uname']) and isset($_POST['pass'])){
        if($_POST['uname']=='admin'and $_POST['pass']=='admin'){
           header('location:adminview.php');
        }}
        ?>

      
