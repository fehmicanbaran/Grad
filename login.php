<link rel="stylesheet" href="css/loginandsignup.css">
<link rel="icon" href="img/gau.png" sizes="16x16" />


<section class= "login-form"> 
<div class="center">
    <h2>Login</h2>
    <form action="include/login.include.php" method="post">
    <div class="txt_field">
            <input type="text" name="email" required>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password"required>
            <label>Password</label>
        </div>
        <div class="pass">Forgot Password</div>
        <input type="submit" name="submit" value="Login">
        <div class ="signup_link">
            Not a member? <a href="signup.php">Sign up</a>
        </div>
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] =="emptyInputLogin") {
            echo "<p>Fill in an fields! </p>";
        }
       else if ($_GET["error"] =="wrongLogin") {
        echo "<p>Incorrect Login Information</p>";
        }
        
     
    }
   ?>
    </div>
</section>

 