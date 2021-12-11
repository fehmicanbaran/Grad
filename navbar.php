<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Gr Pr</title>

      
</head>
<body>
<nav>
  <div class="navbar">
   <ul> 
   <?php 
if(isset($_SESSION["email"]))
{
   echo "<li> <a href='profile.php'> Profile</a></li>";
   echo "<li> <a href='logout.php'> Log out</a></li>";
}
else{
   echo "<li> <a href='login.php'> Login</a></li>";
   echo "<li> <a href='signup.php'> Sign up</a></li>";
  
}


   ?>
   </ul>
      </div>
</nav>
</body>
</html>