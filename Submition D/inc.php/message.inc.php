<?php

if(isset($_POST['contactsubmit'])){
    require 'dbh.inc.php';

    $name = $_POST['name'];
    $email = $_POST['emailadress'];
    $message = $_POST['message'];


    if(empty($message) || empty($email) || empty($name)){
        header("Location: ../Contacts.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT email from messages where email=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../Contacts.php?error=sqlerror");
        exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: ../Contacts.php");
                exit();
            }
            else{
                $sql = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../Contacts.php?error=sqlerror");
                exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php?message=success");
                    exit();
                }

            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../Contacts.php");
    exit();
}
?>