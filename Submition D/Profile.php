<?php
    session_start();
?>
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
        <!--  <a href = "Profile.html"> -->
        <img class="profpic" src="IMAGES/UnknownUser.png" alt = "User's profile picture">
         <?php
              if(isset($_SESSION['username']))
              {
                echo '<a href="inc.php/signout.inc.php" method="post" class="singin">Log out</a>';
                echo '<a href="Profile.php" class="singup" method="post">'.$_SESSION["username"].'</a>';
              }
              else 
              { 
                echo '<a href="SignIn.php" method="post" class="singin">Sign In</a>';
                echo '<a href="SignUp.php" class="singup"  method="post">Sign Up</a>';
              }
          ?>
             </div>
     
     
     
         <div class="lqvo">
             
             <h4><a href = "OldMemes_Page.php">Old</a></h4>
             <h4><a href = "MostLikedPage.php">Most liked</a></h4>
             <h4><a href = "People.php">People</a></h4>
             <h4><a href = "Animal.php">Animals related</a></h4>
             <h4><a href = "CarRelated.php">Cars</a></h4>
         </div>
         <div class = "details">
            <form name="singup"  action="inc.php/signout.inc.php" method="POST">
                <label class="contact">Our Contacts:</p>
                <label class="contact">E-mail:another_lol@gmail.com</p>
                <label class="contact">Phone Number:123 456 789</p>
                <br/>
                <br/>
                <label class="contact">Your Username:</p>
                <br/>
                <label class="contact">Username:</p>
                <?php
                    echo '<input type="text" readonly="readonly" value="'.$_SESSION["username"].'" />';
                ?>
                <br/>

                <button class="button" type="submit" name="logoutsubmit">Log Out</button>
            </form>
        </div>
        
       
        
    </body>
</html>