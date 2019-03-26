<?php
    session_start();
?>
<?php// include 'inc.php/signin.inc.php'?>
<!DOCTYPE html>
<html>
    <head>
            <title class="title">ANOTHER LOL</title>
            <link rel="stylesheet"  type="text/css" href="CSS/style.css">
           
    </head>

    <body>
        <div class="container-1">
        <a href = "index.php"><img class="logo1" src = "IMAGES/logo.png" alt = "logo"></a>
        <p><a href = "index.php">ANOTHERLOL</a></p>
        
        <ul class="titles">
            <li><h3><a href = "ArticlesPage.php">ARTICLES</a></h3></li>
            <li><h3><a href = "NewMemes.php">NEW MEMES</a></h3></li>
            <li><h3><a href = "MerchPage.php">MERCH</a></h3></li>
            <li><h3><a href = "Contacts.php">CONTACT</a></h3></li>
         </ul>
     
         <img class="profpic" src="IMAGES/UnknownUser.png" alt = "User's profile picture">
         <h4 class="singin"><a href = "SignIn.php">Sign in</a></h4>
         <h4 class="singup"><a href = "SignUp.php">Sign up</a></h4>
             </div>
     
     
     
         <div class="lqvo">
             
             <h4><a href = "OldMemes_Page.php">Old</a></h4>
             <h4><a href = "MostLikedPage.php">Most liked</a></h4>
             <h4><a href = "People.php">People</a></h4>
             <h4><a href = "Animal.php">Animals related</a></h4>
             <h4><a href = "CarRelated.php">Cars</a></h4>
         </div>
        <div class = "details">
            <form name="signIn" action="inc.php/signin.inc.php" method="POST" onsubmit="return validateForm1()">
                <label class="contact">E-mail:</p>
                <input id="username" class="textbox" type= "email" name="emailadress" placeholder = "Enter e-mail"/>
                <label class="contact">Password:</p>
                <input id="password" class="textbox" type="password" name ="pwdlogin" placeholder="Enter password" />
    
                <button class="button" id="btnSignIn" name="signinsubmit"  type="submit">Sign In</button>
            </form>
        </div>
    </body>
</html>
