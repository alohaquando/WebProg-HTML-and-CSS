//
  var nameRegExp = new RegExp(/^[a-zA-Z]{3,}$/);
  var emailRegExp = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,5}))$/);
  var phoneRegExp = new RegExp(/^\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d?([ .-]?)\d?([ .-]?){9,11}$/)
  var passwordRegExp = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$);
  var zipRegExp = new RegExp(/^\d{4,6}$);


  // const form = document.getElementById('form').value;

//for name validation
function nameValidation(){
  var name = document.getElementById('name'); //Find an element by element id
  var nameRegExp = new RegExp(/^[a-zA-Z]{3,}$/);

  if (nameRegExp.test(name)){
    return true;
  }
  else{
    document.myform.name.focus;
    return false;
  }
}
//
//for email validation
function emailValidation(){
  const email = document.getElementById('email');
  var emailRegExp = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,5}))$/);

  if (emailRegExp.test(email)) {
    return true;
  }
  else {
    document.myform.email.focus;
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

function passwordValidation(){
  var passwordRegExp = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$);
}

// name.addEventListener("input",function(event)
//Final
submit = document.querySelector("#submit");
submit.addEventListener("click",function(event){
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

  const form = document.getElementById('form');
  const name = document.getElementById('name');
  const email = document.getElementById('email');

  form.addEventListener('submit',(e) => {
    e.preventDefault()
  });

//additional fields for store owner
function owner(){
  
}
