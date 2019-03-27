<?php

if(isset($_POST['signinsubmit'])){
    require 'dbh.inc.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['pwdlogin']));

    $sql = "SELECT * FROM user WHERE username='{$username}' AND pwd='{$password}'";
    if($result = $conn->query($sql)) {
      if($result->num_rows > 0) {
          session_start();
        $_SESSION['username']= $username;
        header("Location: ../index.php?signin=success");
        exit();
      } else {
        header("Location: ../SignIn.php?error=nouser");
        exit();
      }
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 
/*

if(_SERVER['REQUEST_METHOD'] == 'POST'){
    //username and password send from form

    $myusername = mysqli_real_escape_string($dB, $_POST)
}
<?php
if(isset($_POST['signinsubmit'])){
    require 'dbh.inc.php';
    
    $emailsignin = $_POST['emailadress'];
    $password = $_POST['pwdlogin'];
    
    if(empty($emailsignin) || empty($password)){
        header("Location: ../SignIn.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM user WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../SignIn.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $emailsignin, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['password']);
                if($pwdCheck == false){
                    header("Location: ../SignIn.php?error=wrongpwd");
                    exit();
                }
                elseif($pwdCheck == true){
                    session_start();
                    $_SESSION['iduser'] = $row['userid']; 
                    $_SESSION['uiduser'] = $row['username']; 
                    
                    header("Location: ../index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../SignIn.php?error=wrongpwd");
                    exit();
                }
            }
            else{
                header("Location: ../SignIn.php?error=nouser");
                exit();
            }
        }
    }
    
}
else{
    header("Location: ../index.php");
    exit();
}
*/