function validateForm(){
  var emailAdress = document.forms["singup"]["emailadress"].value;
  var password = document.forms["singup"]["password"].value;
  var passwordRepeat = document.forms["singup"]["password1"].value;
  var username = document.forms["singup"]["username"].value;
  var name = document.forms["singup"]["name"].value;
  if (emailAdress == "") {
    alert("Email must be filled out");
    return false;
  }else if(password == ""){
    alert("Password must be filled out");
    return false;
  }else if(passwordRepeat == ""){
    alert("Password must be filled out");
    return false;
  }else if(username == ""){
      alert("Username must be filled out");
      return false;
  }else if(name == ""){
      alert("Name must be filled out");
      return false;
  }else if (password != passwordRepeat) {
    alert("Passwords are not maching!")
    return false;
}

}

function validateForm1() {
  var x = document.forms["signIn"]["emailadress"].value;
  var y = document.forms["signIn"]["password"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }else if(y == ""){
    alert("Password must be filled out");
    return false;
  }
  alert("Log-In was successful");
}


function validateForm2() {
  var x = document.forms["contactForm"]["Name"].value;
  var y = document.forms["contactForm"]["emailadress"].value;
  var z = document.forms["contactForm"]["message"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }else if(y == ""){
    alert("Email must be filled out");
    return false;
  }else if (z == ""){
    alert("Message must be filled out");
    return false;
  }
  
}
