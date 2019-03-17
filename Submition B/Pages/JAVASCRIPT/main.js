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
}

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
  }

}











/*var userLogOut = getElementById("logOut");
var btn = getElementById("btnSignIn");
btn.addEventListener("click", function(){
  var request = new XMLHttpRequest();
  request.open('GET','')
  request.onload = function(){
    var user = JSON.parse(request.responseText);
  };
  request.send();
});
function showUser(){
  userLogOut.insertAdjacentHTML('beforeend', "LogOut")
}


var objPeople = [
  {
    username: "sam",
    password: "codify"
  },
  {
    username: "matt",
    password: "academy"
  },
  {
    username:"chris",
    password:"forever"
  }
]
function getInfo(){
  var username = document.getElementById("username").value
  var password = document.getElementById("password").value
  for(i = 0;i < objPeople.length;i++){
    if(username == objPeople[i].username && password == objPeople[i].password){
      console.log(username + " is logged in")
      return
    }
  }
  console.log("incorrect  username  or password")
}

function SignUp()                                    
  { 
    var name = document.forms["signup"]["name"];             
    var email = document.forms["signup"]["emailadress"];    
    var username = document.forms["signup"]["username"];  
    var what =  document.forms["signup"]["message"];  
    var password = document.forms["signup"]["password"];  
    var repeatPassword = document.forms["signup"]["password"];
  
    if (name.value == "")                                  
    { 
      window.alert("Please enter your name."); 
      name.focus(); 
      return false; 
    } 
  
    if (address.value == "")                               
    { 
        window.alert("Please enter your address."); 
        name.focus(); 
        return false; 
    } 
      
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address.");
        email.focus(); 
        return false; 
    } 
  
    if (email.value.indexOf("@", 0) > 0)        
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
  
    if (email.value.indexOf(".", 0) > 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
  
    if (phone.value == "")                           
    { 
        window.alert("Please enter your telephone number.");
        phone.focus(); 
        return false; 
    } 
  
    if (password.value == "")                        
    { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return flase; 
    } 
  
    if (what.selectedIndex > 1)                  
    { 
        alert("Please enter your course."); 
        what.focus(); 
        return false; 
    } 
  
    return true; 
}*/
