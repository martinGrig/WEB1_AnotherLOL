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
                <label class="contact">E-mail:another_lol@gmail.com</p>
                <label class="contact">Phone Number:123 456 789</p>
                <br>
                    <div>
                        <form name="contactForm" action="index.html" method="POST" onsubmit="return validateForm2()">
                            <label class="contact">Name</label>
                            <input class="textbox" type="text" name="Name" placeholder="Enter Name">
                            <br>
                            <label class="contact">Email</label>
                            <input id="username" class="textbox" type="email" name="emailadress" placeholder = "Enter e-mail"/>
                            <br>
                            <label class="contact">Message</label>
                            <textarea class="textbox" name="message" id="" cols="30" rows="10" 
                            placeholder="Add a message"></textarea>
                            <button class="button" type="submit">Send</button>
                        </form>
                    </div>
                </div>
        
    </body>
</html>