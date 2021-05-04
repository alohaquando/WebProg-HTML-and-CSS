form.addEventListener('submit', e => {
  e.preventDefault();

  checkInputs();
});

function validateName(){

  // const form = document.getElementById('form');
  const name = document.getElementById('name');
  // const email = document.getElementById('email');
  // const phone = document.getElementById('phone');

  const name = document.getElementsById("name");
  var nameRegExp = /^[a-zA-Z]{3,}$/;
//===는 value뿐만아니라 형태까지 같은것
  if (name===nameRegExp){
    setSuccessFor(name)
  }
  else {
    setErrorFor(name)
  }
}



function checkInputs() {
// trim to remove the whitespaces
 const nameValue = name.value.trim();
 const emailValue = email.value.trim();

 var wordCount = document.getElementById("name").trim().split(/\s+/).length;
 if( wordCount < 3 ) {
     setErrorFor(name,'Name must be at least 3 letters')
 }
else{
  setSuccessFor(name);}

if (){

}
}

function setErrorFor(input, message) {
const formControl = input.parentElement;
const small = formControl.querySelector('small');
formControl.className = 'form-control error';
small.innerText = message;
}

function setSuccessFor(input) {
const formControl = input.parentElement;
formControl.className = 'form-control success';
}

function isEmail(email) {
return /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email);
}
