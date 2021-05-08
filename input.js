var submit_contact = document.getElementById("contact-submit");
submit.addEventListener("click", function(e) {
  e.preventDefault()

  if (
    nameValidation() &&
    emailValidation() &&
    phoneValidation() &&
  ) {
    return true;
  } else {
    alert("Please check your information");
    return false;
  }
});

var submit_register = document.getElementById("register-submit");
submit.addEventListener("click", function(e) {
  e.preventDefault()

  if (
    nameValidation() &&
    emailValidation() &&
    phoneValidation() &&
  ) {
    return true;
  } else {
    alert("no");
    return false;
  }
});

var errorMessage = "Please check your information again";

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

//for email validation
function emailValidation(){
  const email = document.getElementById('email').value;
  var emailRegExp = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,5}))$/);

  if (emailRegExp.test(email)) {
    return true;
  }

  else {
    document.getElementById("error").innerHTML = name.errorMessage;
    return false;
  }
}

//for phone Validation
function phoneValidation(){
  const phone = document.getElementById('phone');
  var phoneRegExp = new RegExp(/^\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d?([ .-]?)\d?([ .-]?){9,11}$/)

  if (phoneRegExp.test(phone)) {
    return true;
  }
  document.getElementById("error").innerHTML = name.errorMessage;
  return false;
}

var textarea = document.getElementById('Message');
var remainingCharsText = document.getElementById('remaining-char');
var Max_Chars = 500;
var Min_Chars = 50;

textarea.addEventListener('input',()=>{

function textvalid(){
    var remaining500 = Max_Chars - textarea.value.length;
    var remaining50 = Min_Chars - textarea.value.length;
    let x = textarea.value.length;
    if (x < 50) {
        remainingCharsText.textContent = ` ${50 - x} more letters are needed.`;
    }
    else if (50 < x && x < 500) {
        remainingCharsText.textContent = `You can type ${500 - x} more letters.`;
    }
    else if (x > 500) {
        remainingCharsText.textContent = `Deleting ${x - 500} letters is needed.`;
    }
});

var password = document.getElementById("password").value;
var confirmPassword = document.getElementById("confirmpassword").value;

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

//for 3 char
function atleast3char(){
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var city = document.getElementById("city").value;

  var atleast3charRegExp = new RegExp(/^[a-zA-Z\s]{3,}$/);

  if (atleast3charRegExp.test(fname)){
    return true;
  }
  if (atleast3charRegExp.test(lname)){
    return true;
  }
  if (atleast3charRegExp.test(city)){
    return true;
  }
  else {
    document.getElementById("error").innerHTML = name.errorMessage;
    return false;
  }
}

//for Address
function addressvalidation(){
  var address = document.getElementById("address").value;
  var addressValid = new RegExp(/^[a-zA-Z0-9\s]{3,}$/)

  if (addressValid.test(address)){
    return true;
  }
  else {
    document.getElementById("error").innerHTML = name.errorMessage;
    return false;
  }
}

//for zipcode
function zipcodevalidation(){
  var zipcode = document.getElementById("zipcode");
  var zipRegExp = new RegExp(/^\d{4,6}$/);

  if(zipRegExp.test(zipcode)){
    return true;
  }
  else{
    document.getElementById("error").innerHTML = name.errorMessage;
    return false;
  }
}

//for the additional fields
var hiddenfields = document.getElementByClassName("reveal-if-active");

function hiddenfield(){
  if (document.getElementById("perf_email").checked){
    document.getElementById("perf_email").innerHTML = hiddenfields;
  }
}
