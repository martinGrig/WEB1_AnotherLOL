<?php

if(isset($_POST['signupsubmit'])){
    require 'dbh.inc.php';

    $username = $_POST['username'];
    $email = $_POST['emailadress'];
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
    $passwordRepeat = md5(mysqli_real_escape_string($conn, $_POST['password1']));
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
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror");
        exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: ../signup.php?error=userTaken&email=".$email);
                exit();
            }
            else{
                $sql = "INSERT INTO user (username, email, pwd) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signup.php?error=sqlerror");
                exit();
                }
                else{
                    //$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
                    mysqli_stmt_execute($stmt);
                    session_start();
                    $_SESSION['username']= $username;
                    header("Location: ../index.php?signup=success");
                    exit();
                }

            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../index.php");
    exit();
}
?>