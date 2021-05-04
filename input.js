btn = document.querySelector(#submit);
btn.addEventListener("click",function(ev)){
  const form = document.getElementById('form').value;
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;

  var nameRegExp = /^[a-zA-Z]{3,}$/;
  var emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if (nameRegExp.test(name)){
    // setSuccessFor(name)
    alert("valid");
  }
  else {
    // setErrorFor(name)
    alert("invaid");
  }
}
//
// function setErrorFor(input, message) {
// const formControl = input.parentElement;
// const small = formControl.querySelector('small');
// formControl.className = 'form error';
// small.innerText = message;
// }
//
// function setSuccessFor(input) {
// const formControl = input.parentElement;
// formControl.className = 'form success';
// }
//
// function validate(){
//   const form = document.getElementById('form').value;
//   const name = document.getElementById('name').value;
//   const email = document.getElementById('email').value;
//   const phone = document.getElementById('phone').value;
//
//   var nameRegExp = /^[a-zA-Z]{3,}$/;
//   var emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
//
//   if (nameRegExp.test(name)){
//     // setSuccessFor(name)
//     alert("valid");
//   }
//   else {
//     // setErrorFor(name)
//     alert("invaid");
//   }
//
//   if (email===emailRegExp){
//     setSuccessFor(email);
//   }
//   else {
//     setErrorFor(email);
//   }
// }
