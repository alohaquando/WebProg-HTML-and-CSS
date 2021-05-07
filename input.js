// var nameRegExp = new RegExp(/^[a-zA-Z]{3,}$/);
// var emailRegExp = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,5}))$/);
// var phoneRegExp = new RegExp(/^\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d?([ .-]?)\d?([ .-]?){9,11}$/)
// var passwordRegExp = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$/);
// var atleast3charRegExp = new RegExp(/^[a-zA-Z]{3,}$/);

//for name validation
function nameValidation() {
  var name = document.getElementById('name').value;
  var nameRegExp = new RegExp(/^[a-zA-Z]{3,}$/);

  if (nameRegExp.test(name)) {
    return true;
  } else {
    return false;
  }
}

//for email validation
function emailValidation() {
  const email = document.getElementById('email').value;
  var emailRegExp = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,5}))$/);

  if (emailRegExp.test(email)) {
    console.log("no")
    return true;
  } else {
    console.log("yes")
    return false;
  }
}

//for phone Validation
function phoneValidation() {
  const phone = document.getElementById('phone');
  var phoneRegExp = new RegExp(/^\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d?([ .-]?)\d?([ .-]?){9,11}$/)

  if (phoneRegExp.test(phone)) {
    return true;
  }
  return false;
}

//for textarea Validation
var textarea = document.getElementById('Message');
var remainingCharsText = document.getElementById('remaining-char');
var Max_Chars = 500;
var Min_Chars = 50;

textarea.addEventListener('input', textareaValidation)

function textareaValidation() {
  var remaining500 = Max_Chars - textarea.value.length;
  var remaining50 = Min_Chars - textarea.value.length;
  let x = textarea.value.length;
  if (x < 50) {
    remainingCharsText.textContent = ` ${50 - x} more lettrs are needed.`;
  } else if (50 < x && x < 500) {
    remainingCharsText.textContent = `You can type ${500 - x} more letters.`;
  } else if (x > 500) {
    remainingCharsText.textContent = `Deleting ${x - 500} letters is needed.`;
  }
}

//contact page submit
document.getElementById('contact-submit').addEventListener("click", submit)

function submit(e) {
  if (
    nameValidation() &&
    emailValidation() &&
    phoneValidation() &&
    textareaValidation()
  ) {
    alert("valid");
  } else {
    alert("invalid");
  }
}

//for password validation
function passwordValidation() {
  var passwordRegExp = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$/);
  var password = document.getElementById("password");

  if (passwordRegExp.test(password)) {
    return true;
  }
  return false;
}

function conPassword() {
  var password = document.getElementById("password");
  var confirmPassword = document.getElementById("confirmpassword");

  if (password != confirmpassword) {
    return false;
  }
  return true;
}

//for 3 char
function atleast3char() {
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var address = document.getElementById("address").value;
  var city = document.getElementById("city").value;

  var atleast3charRegExp = new RegExp(/^[a-zA-Z]{3,}$/);

  if (atleast3charRegExp.test(fname)) {
    return true;
  }
  if (atleast3charRegExp.test(lname)) {
    return true;
  }
  if (atleast3charRegExp.test(address)) {
    return true;
  }
  if (atleast3charRegExp.test(city)) {
    return true;
  } else {
    return false;
  }
}

//for zipcode
function zipcodevalidation() {
  var zipcode = document.getElementById("zipcode").value;
  var zipRegExp = new RegExp(/^\d{4,6}$/);

  if (zipRegExp.test(zipcode)) {
    return true;
  }
  return false;
}

//for profile image
var imageAvatar = document.querySelector('#oval-img');

function check_img_input(input) {
  if (input.files.length == 0) {
    return 0;
  } else {
    return 1;
  }
}

function change_img(input) {
  if (check_img_input(input)) {
    const file = document.querySelector('input[type=file]').files[0];
    const reader = new FileReader();
    reader.addEventListener("load", function() {
      // convert image file to base64 string
      imageAvatar.src = reader.result;
    }, false);

    if (file) {
      reader.readAsDataURL(file);
    }
  }
}

//for exposing additional fields
var shopper = document.getElementById("store_owener");

shopper.click(function radio() {
      (".reveal-if-active").show();
    }
