<!DOCTYPE html>
<html>
    <head>
            <title class="title">ANOTHER LOL</title>
            <link rel="stylesheet"  type="text/css" href="CSS/style.css">
            <script src="JAVASCRIPT/main.js"></script>
           
    </head>

    <body>
        <div class="container-1">
        <a href = "index.html"><img class="logo1" src = "IMAGES/logo.png" alt = "logo"></a>
        <p><a href = "index.html">ANOTHERLOL</a></p>
        
        <ul class="titles">
            <li><h3><a href = "ArticlesPage.html">ARTICLES</a></h3></li>
            <li><h3><a href = "NewMemes.html">NEW MEMES</a></h3></li>
            <li><h3><a href = "MerchPage.html">MERCH</a></h3></li>
            <li><h3><a href = "Contacts.html">CONTACT</a></h3></li>
         </ul>

    <img class="profpic" src="IMAGES/UnknownUser.png" alt = "User's profile picture">
    <h4 class="singin"><a href = "SignIn.html">Sign in</a></h4>
    <h4 class="singup"><a href = "Sign Up.html">Sign up</a></h4>
        </div>



        <div class="lqvo">
             
            <h4><a href = "OldMemes_Page.html">Old</a></h4>
            <h4><a href = "MostLikedPage.html">Most liked</a></h4>
            <h4><a href = "People.html">People</a></h4>
            <h4><a href = "Animal.html">Animals related</a></h4>
            <h4><a href = "CarRelated.html">Cars</a></h4>
        </div>
        <div class = "details">
            <form name="singup"  action="inc.php/signup.inc.php" method="POST">
                <p></p>
                <label class="contact">E-mail:</p>
                <input class="textbox" type= "email" name= "emailadress" placeholder = "Enter e-mail"/>
                <p></p>
                <label class="contact">Password:</p>
                <input class="textbox" type="password"  name = "password" placeholder="Create password" />
                <p></p>
                <label class="contact">Repeat password:</p>
                <input class="textbox"type="password"  name ="password1" placeholder="Repeat password"/>
                <p></p>
                <label class="contact"> Username:</p>
                <input class="textbox" type= "text" name= "username" placeholder="Username"/>
                <p></p>
                <label class="contact">Full Name:</p>
                <input class="textbox" type= "text" name= "name" placeholder="Enter FullName"/>
                <button class="button" type="submit" name="signupsubmit">Create account</button>
            </form>
            </div>
        
    </body>
</html>