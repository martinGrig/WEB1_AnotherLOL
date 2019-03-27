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
                <h4>Cars Related:</h4>
            <p>Can't trust a BMW driver</p>
            <img class="card" src = "IMAGES/BMW.jpg" alt = "Meme">
            <p>When you tighten that damn bolt!!</p>
            <img class="card" src = "IMAGES/BoltMeme.jpg" alt = "Meme">
            <p>Sorry lades, you cant have him!!</p>
            <img class="card" src = "IMAGES/EngineFix.jpg" alt = "Meme">
            <p>Yall FWDs aint good at all</p>
            <img class="card" src = "IMAGES/RWDvsFWD.jpg" alt = "Meme">
            <p>For all the racers</p>
            <img class="card" src = "IMAGES/RaceMode.jpg" alt = "Meme">
            <p>Proud owner of the system myself</p>
            <img class="card" src = "IMAGES/AntiSteal.jpg" alt = "Meme">
            <p>You gotta test it</p>
            <img class="card" src = "IMAGES/YouGottaTestIt.jpg" alt = "Meme">
            <p>Damn that girl</p>
            <img class="card" src = "IMAGES/snow.jpg" alt = "Meme">
        </div>
        
    </body>
</html>