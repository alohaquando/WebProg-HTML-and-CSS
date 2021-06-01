var loginForm = document.querySelector("form");
loginForm.addEventListener("submit", LogIn);

function LogIn() {
  logged_in_email = document.querySelector("#login_username").value;
  localStorage.setItem("logged_in_username", logged_in_username);
  localStorage.setItem("account_state", "in");
}

//for name validation
function nameValidation(){
    var name = document.getElementById('name').value;
    var nameRegExp = new RegExp(/^[a-zA-Z]{3,}$/);
  
    if (nameRegExp.test(name)){
      return true;
    } else{
      document.getElementById("error").innerHTML = name.errorMessage;
      return false;
    }
  }

  //for password validation
function passwordValidation(){
    var passwordRegExp = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$/);
    var password = document.getElementById("password");
  
    if (passwordRegExp.test(password)){
      return true;
    }
    document.getElementById("error").innerHTML = name.errorMessage;
    return false;
  }
  
  function conPassword(){
  
    if (password != confirmpassword){
      document.getElementById("confirmpassword").style.border = "#fe6c6c";
      document.getElementById("error").innerHTML = name.errorMessage;
      return false;
    }
    return true;
  }