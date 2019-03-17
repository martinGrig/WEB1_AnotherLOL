var userLogOut = getElementById("logOut";)
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

<script> 
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
}</script>