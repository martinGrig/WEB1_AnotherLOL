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
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    }else if (!preg_match("/^[a-zA-Z0-9]*$",$username)) {
        header("Location: ../signuo.php?error=invaliduid&email=".$username);
        exit();
    }

}


/*
 NE E GOTOVO
  */