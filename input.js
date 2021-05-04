const form = document.getElementById('form');
const name = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');

function setErrorFor(input, message) {
const formControl = input.parentElement;
const small = formControl.querySelector('small');
formControl.className = 'form error';
small.innerText = message;
}

function setSuccessFor(input) {
const formControl = input.parentElement;
formControl.className = 'form success';
}

function validateName(){

  var nameRegExp = /^[a-zA-Z]{3,}$/;
  var emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if (name===nameRegExp){
    setSuccessFor(name)
  }
  else {
    setErrorFor(name)
  }

  if (email===emailRegExp){
    setSuccessFor(email);
  }
  else {
    setErrorFor(email);
  }
}
