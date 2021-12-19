<?php
    function  createUser($conn,$fullname,$email,$password){
        $sql="INSERT INTO users(usersFullName,usersEmail,usersPassword)VALUES(?,?,?);";
        
        $stmt =mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../signup.php?error=createUserStmtFailed");
            exit();
        }
    
    
        mysqli_set_charset($conn,"utf8");
        mysqli_stmt_bind_param($stmt,"sss", $fullname,$email,$password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: ../signup.php?error=errornone");
        exit();
         }

            function loginUser($conn,$email,$password){
              
                $email= $_POST["email"];
                $password= $_POST["password"];
                include "dbh.inc.php";
                $sql="select * from users where userEmail='".$email."'AND userPassword ='".$password ."'";
               
                 $result=mysqli_query($conn,$sql);
                 $row=mysqli_fetch_array($result);
                if($row["userType"]=="admin")
                {
                    
                    header("Location: ../admin.php");
                }
                else if($row["userType"]=="advisor")
                {
                    header("Location: ../advisor.php");
                }
                else{
                   
                    header("Location: ../login.php?error=wrongmailorpassword");
                    echo" Wrong Mail or password";

                }

            }
?>