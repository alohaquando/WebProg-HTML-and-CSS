//
  var nameRegExp = new RegExp(/^[a-zA-Z]{3,}$/);
  var emailRegExp = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,5}))$/);
  var phoneRegExp = new RegExp(/^\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d?([ .-]?)\d?([ .-]?){9,11}$/);
  // var passwordRegExp = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$);
  // var zipRegExp = new RegExp(/^\d{4,6}$);


  // const form = document.getElementById('form').value;

//for name validation
function nameValidation(){
  var name = document.getElementById('name').value;
  // console.log(name) //Find an element by element id
  var nameRegExp = /^[a-zA-Z]{3,}$/;

  if (nameRegExp.test(name)){
    // console.log("Correct");
    return true;
  } else{
    // console.log("Not correct");
    // document.getElementById("name").focus;
    return false;
  }
}


// Step 1: Get the element you want to listen
var nameInput = document.getElementById('name');
// console.log(nameInput.value);
nameInput.addEventListener('input', nameValidation);
//
//for email validation
function emailValidation(){
  const email = document.getElementById('email');
  var emailRegExp = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,5}))$/);

  if (emailRegExp.test(email)) {
    return true;
  }

  else {
    // document.myform.email.focus;
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

//for radio validation
function radioValidation(){
var valid = false;
var x = document.myform.perf_contact;

for(var i=0;i<x.length;i++){
  if(x[i].checked){
    valid = true; //valid when only one option is selected
    break;
  }
  else{
    // alert("Please select a contact option");
    return false;
  }
 }
};

// function passwordValidation(){
//   var passwordRegExp = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$);
// }

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
// name.addEventListener("input",function(event)
//Final
var submit = document.getElementById("submit");
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
