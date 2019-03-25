<?php
if(isset($_POST['signup-submit'])){


    require 'dbh.inc.php';
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];


     if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../singup.php?errorfields&uid=".$username."&email=".$email)  
        exit();   


    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$",$username) ) {
        header("Location: ../signup.php?error=invalidmail&uid");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    }else if (!preg_match("/^[a-zA-Z0-9]*$",$username)) {
        header("Location: ../signup.php?error=invaliduid&email=".$username);
        exit();
    }
    else if ($password !== $passwordRepeat){
        header("Location: ../signup.php?error=passwordcheck&email=".$username."&email=".$email);
        exit();
    }
    else {
         $sql = "SELECT uidUsers FROM user WHERE uidUsers=?";
         $stmt = mysqli_stmt_init($conn);

         if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
         }
         else {
              
         }
    }

}


/*
 NE E GOTOVO
  */