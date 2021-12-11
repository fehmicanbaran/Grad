<?php
if (isset($_POST["submit"])) {
  $fullname= $_POST["fullname"];
  $email= $_POST["email"];
  $password= $_POST["password"];
  $repeatpassword= $_POST["repeatpassword"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';
 
  if (emptyInputSignup( $fullname,  $email,  $password , $repeatpassword)!==false) {
    header("Location: ../signup.php?error=emptyInput");
  exit();
  }
  if (invalidEmail($email)!==false) {
    header("Location: ../signup.php?error=InvalidEmail");
    exit();
  }
    if (pwdMatch($password,$repeatpassword)!==false) {
      header("Location: ../signup.php?error=pwdMatch");
        exit();
  }
  if (EmailExists($conn,$email)!==false) {
    header("Location: ../signup.php?error=EmailExists");
    exit();
}

  createUser($conn,$fullname,$email,$password,$repeatpassword);
}
else{
  header("Location: ../signup.php");
}
?>