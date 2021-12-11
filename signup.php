<link rel="stylesheet" href=css/loginandsignup.css>

<section class= "signup-form"> 
<div class="center">
 
    <h2>Sign Up</h2>
    <form action="include/signup.include.php" method="post">
        <div class="txt_field">
            <input type="text" name="fullname" required >
            <label>Full name</label>
        </div>
        <div class="txt_field">
            <input type="text" name="email"required>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password"required>
            <label>Password</label>
        </div>
        <div class="txt_field">
            <input type="password" name="repeatpassword"required>
            <label>Repeat Password</label>
        </div>
        <div class="pass"> Forgot Password </div>
        <input type="submit" name="submit" value="Sign Up">
        <div class ="signup_link">
            Are you a member? <a href="login.php">Login</a>
            
        </div>
    
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] =="emptyInputSignup") {
            echo "<p>Fill in an fields! </p>";
        }
       else if ($_GET["error"] =="EmailExists") {
        echo "<p>Choose a proper email</p>";
        }
        else if ($_GET["error"] =="pwdMatch") {
            echo "<p>Password doesnt match </p>";
        }
        else if ($_GET["error"] =="stmtfailed") {
            echo "<p>STMT FAILED TRY AGAIN </p>";
        }   
        else if ($_GET["error"] =="errornone") {
            echo "<p>You Have Signed Up </p>";
        } 
     
    }
   ?>
    </div>

    </section>
    