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
         <div>
            <a href="https://git-scm.com" target="_blank"><img class="add1" src = "IMAGES/git.jpg" alt = "Add"></a>
            <a href="https://fontys.edu" target="_blank">   <img class="add2" src = "IMAGES/fontys.jpg" alt = "Add"></a>

        </div>
       
        <div class = "content">
                <h4>Animal Realated:</h4>
                <p>Not Funny Mr.Rabbit</p>
                <img class="card" src = "IMAGES/CatRabbit.jpg" alt = "Meme">
                <p>Corgiii</p>
                <img class="card" src = "IMAGES/DogoMeme.jpg" alt = "Meme">
                <p>This my place now!</p>
                <img class="card" src = "IMAGES/CatDommination.jpg" alt = "Meme">
                <p>At least he is funny</p>
                <img class="card" src = "IMAGES/IdioticCat.png" alt = "Meme">
                <p>He even has a password now</p>
                <img class="card" src = "IMAGES/WhatsThePassword.jpg" alt = "Meme">
        </div>
        
    </body>
</html>