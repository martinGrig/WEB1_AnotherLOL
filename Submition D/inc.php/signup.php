<?php
require 'Submition D/signup.php';
?>

<main>
    <div class = "details">
        <form name="singup"  action="inc.php/signup.inc.php" method="POST" onsubmit="return validateForm()">
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
</main>