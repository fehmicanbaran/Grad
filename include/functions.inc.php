<?php
function emptyInputSignup($fullname,$email,$password,$repeatpassword){
$result;
if (empty($fullname) || empty($email) || empty($password) || empty($repeatpassword) ) {
    $result=true;
}
else 
{
    $result=false;
}
return $result;
}

function invalidEmail($email){
$result;
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result=true;
}
else{
    $result=false;
}
return $result;
}
function pwdMatch($password,$repeatpassword){
    $result;
    if ($password !== $repeatpassword){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
    }

function EmailExists($conn,$email){
    $sql="SELECT * FROM users WHERE usersEmail = ?;";
    $stmt =mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../signup.php?error=emailStmtFailed");
        exit();
    }
    mysqli_set_charset($conn,"utf8");
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $resultData=mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result=false;
        return $result;
    }
  
    mysqli_stmt_close($stmt);
    }

    function  createUser($conn,$fullname,$email,$password){
        $sql="INSERT INTO users(usersFullName,usersEmail,usersPassword)VALUES(?,?,?);";
        
        $stmt =mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../signup.php?error=createUserStmtFailed");
            exit();
        }
    
        $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
        mysqli_set_charset($conn,"utf8");
        mysqli_stmt_bind_param($stmt,"sss", $fullname,$email,$hashedPassword);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../signup.php?error=errornone");
        exit();
         }


         
         function emptyInputLogin($email,$password){
            $result;
            if (empty($email) || empty($password)  ) {
                $result=true;
            }
            else 
            {
                $result=false;
            }
            return $result;
            }

            function loginUser($conn,$email,$password){
                $emailExist=EmailExists($conn,$email);
                if($emailExist===false)
                {
                    header("Location: ../login.php?error=wrongLogin");
                    exit();
                }
                $hashedPassword=$emailExist["usersPassword"];
                $checkpassword=password_verify($password,$hashedPassword);
                if ($checkpassword === false) {
                    header("Location: ../login.php?error=wrongLogin");
                    exit();
                }
                else if ($checkpassword === true){
                    session_start();
                    $_SESSION["email"]=$emailExist["usersEmail"];
                    $_SESSION["password"]=$emailExist["usersPassword"];
                    header("Location: ../index.php");
                    exit();
                }
            }
?>