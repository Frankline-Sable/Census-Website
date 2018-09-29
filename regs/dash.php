<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['home'])) { 

        require 'home.php';
        
    }
    
    elseif (isset($_POST['clearance'])) { 
        
        require 'trial.php';
        
    }
    
    
    
    
    
}
?>
<body>
    
    
    
 <div class="nav">
  <a class="active" href="home.php">Home</a>
  <a href="trial.php">clearance</a>
  
</div>

    
    



</body>
</html>
    