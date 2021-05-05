
  // const form = document.getElementById('form').value;
const name = document.getElementById('name'); //Find an element by element id
const email = document.getElementById('email');
const phone = document.getElementById('phone');

var nameRegExp = new RegExp(/^[a-zA-Z]{3,}$/);
var emailRegExp = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,5}))$/);
var phoneRegExp = new RegExp(/^\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d?([ .-]?)\d?([ .-]?){9,11}$/)

//for name validation
function nameValidation(){
  if (nameRegExp.test(name)){
    return true;
  }
  else{
    document.myform.name.focus;
    return false;
  }
}

//for email validation
function emailValidation(){
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
