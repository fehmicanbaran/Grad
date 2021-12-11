<?php
session_start();
session_unset();    
session_destroy();
header("Location: ../Grad/index.php");
exit();
?>
