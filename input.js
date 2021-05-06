var nameRegExp = /^[a-zA-Z]{3,}$/;
var emailRegExp = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,5}))$/);
var phoneRegExp = new RegExp(/^\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d?([ .-]?)\d?([ .-]?){9,11}$/)
var passwordRegExp = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$/);

var atleast3charRegExp = new RegExp(/^[a-zA-Z]{3,}$/);


//for name validation
function nameValidation(){
  var name = document.getElementById('name').value;
  var nameRegExp = new RegExp(/^[a-zA-Z]{3,}$/);

  if (nameRegExp.test(name)){
    return true;
  } else{
    return false;
  }
}

// Step 1: Get the element you want to listen
// var nameInput = document.getElementById('name').value;
// console.log(nameInput.value);
// nameInput.addEventListener('input', nameValidation);
//

//for email validation
function emailValidation(){
  const email = document.getElementById('email');
  var emailRegExp = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,5}))$/);

  if (emailRegExp.test(email)) {
    console.log("no")
    return true;
  }

  else {
    console.log("yes")
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
  return false;
}

// for radio validation
function radioValidation(){
var valid = false;

for(var i=0;i<x.length;i++){
  if(x[i].checked){
    valid = true; //valid when only one option is selected
    console.log("yesss")
    break;
  }
  else{
    return false;
  }
 }
};

const textarea = document.getElementById('Message');
const remainingCharsText = document.getElementById('remaining-char');
const Max_Chars = 500;
const Min_Chars = 50;

textarea.addEventListener('input',() => {
    const remaining500 = Max_Chars - textarea.value.length;
    const remaining50 = Min_Chars - textarea.value.length;
    let x = textarea.value.length;
    if (x < 50) {
        remainingCharsText.textContent = ` ${50 - x} more lettrs are needed.`;
    }
    else if (50 < x && x < 500) {
        remainingCharsText.textContent = `You can type ${500 - x} more letters.`;
    }
    else if (x > 500) {
        remainingCharsText.textContent = `Deleting ${x - 500} letters is needed.`;
    }
});

//for password validation
function passwordValidation(){
  var passwordRegExp = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$/);
  var password = document.getElementById("password");

  if (passwordRegExp.test(password)){
    return true;
  }
  return false;
}

function conPassword(){
  var password = document.getElementById("password");
  var confirmPassword = document.getElementById("confirmpassword");

  if (password != confirmpassword){
    return false;
  }
  return true;
}

//for 3 char
function atleast3char(){
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var address = document.getElementById("address").value;
  var city = document.getElementById("city").value;

  var atleast3charRegExp = new RegExp(/^[a-zA-Z]{3,}$/);

  if (atleast3charRegExp.test(fname)){
    return true;
  }
  if (atleast3charRegExp.test(lname)){
    return true;
  }
  if (atleast3charRegExp.test(address)){
    return true;
  }
  if (atleast3charRegExp.test(city)){
    return true;
  }
  else {
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
  return false;
}

// name.addEventListener("input",function(event)
//Final
var submit = document.getElementById("contact-submit");
// console.log(submit);
// var contactForm = document.getElementById("contact-form");

submit.addEventListener("click", function(e){
  e.preventDefault()
  console.log(nameValidation());
  console.log(emailValidation());
  console.log(radioValidation());
  if (
    nameValidation()
    && emailValidation()
    && phoneValidation()
    && radioValidation()
  ) {
    alert("valid");
  }
  else {
    alert("invalid");
  }
});

// document.getElementById('test-button').addEventListener("click",function(event){
//   console.log(nameValidation());
//   if (
//     nameValidation()
//     // && emailValidation()
//     // && phoneValidation()
//     // && radioValidation()
//   ) {
//     alert("valid");
//   }
//   else {
//     alert("invalid");
//   }
// })

//   const form = document.getElementById('form');
//   const name = document.getElementById('name');
//   const email = document.getElementById('email');

//   form.addEventListener('submit',(e) => {
//     e.preventDefault()
//   });

//additional fields for store owner
// function owner(){
//
// }
