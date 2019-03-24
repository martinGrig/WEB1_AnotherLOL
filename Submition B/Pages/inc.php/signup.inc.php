<?php

if(isset($_POST['signupsubmit'])){
    require 'dbh.inc.php';

    $username = $_POST['username'];
    $email = $_POST['emailadress'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['password1'];
    $name = $_POST['name'];


    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat) || empty($name)){
        header("Location: ../signup.php?error=emptyfields&username=".$username);
        exit();
    }
    elseif($password !== $passwordRepeat){
        header("Location: ../signup.php?error=emptyfields&username=".$username);
        exit();
    }
    else{
        $sql = "SELECT username from user where username=?";
        $stmt = mysql_stmt_init($conn);
        if(!mysql_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror");
        exit();
        }
        else{
            mysql_stmt_bind_param($stmt, "s", $username);
            mysql_stmt_execute($stmt);
            mysql_stmt_store_result($stmt);
            $resultCheck = mysql_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: ../signup.php?error=userTaken&email=".$email);
                exit();
            }
            else{
                $sql = "INSERT INTO user (username, email, pwd) VALUES (?, ?, ?)";
                $stmt = mysql_stmt_init($conn);
                if(!mysql_stmt_prepare($stmt, $sql)){
                    header("Location: ../signup.php?error=sqlerror");
                exit();
                }
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysql_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysql_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }

            }
        }
    }
    mysql_stmt_close($stmt);
    mysql_close($conn);
}
else{
    header("Location: ../signup.php");
    exit();
}
?>