var objPeople = [
	{ // Object @ 0 index
		username: "hoang.phamducanh@gmail.com",
		password: "password"
}
]

function getInfo() {
	var username = document.getElementById('username').value
	var password = document.getElementById('password').value

	for(var i = 0; i < objPeople.length; i++) {
		// check is user input matches username and password of a current index of the objPeople array
		if(username == objPeople[i].username && password == objPeople[i].password) {
			console.log(username + " is logged in!!!")
			// stop the function if this is found to be true
			return
		}
	}
	console.log("incorrect username or password")
}

localStorage.setItem("account_state", "in")


/* CART - Example
//// Hide buttons if user not logged in
switch (localStorage.getItem("account_state")) {
    case "in":
      break;
    default:
      document.getElementsByClassName(
        "button-primary-and-secondary"
      )[0].style.display = "none";
      break;
  }
  
  // Add product to localStorage
  function add_to_cart(pName) {
    // Define amount
    let amount = parseFloat(localStorage.getItem(`${pName}`));
    // Switch cases
    switch (localStorage.getItem(`${pName}`)) {
      case null:
        localStorage.setItem(`${pName}`, "1");
        break;
      default:
        amount++;
  
        localStorage.setItem(`${pName}`, `${String(amount)}`);
        break;
    }
  }
  
  function hide_toast() {
    document.getElementById("toast").style.display = "none";
  }
  
  function show_toast(pName) {
    document.getElementById("toast").style.display = "flex";
    document.getElementById("toast-message").innerHTML = `Added!
    ${localStorage.getItem(pName)} ${pName} in cart`;
    setTimeout(hide_toast, 5000);
  }
  
  // Toast on add to cart
  // let prodbtn = $(".button-secondary");
  // prodbtn.click(function () {
  //   $(".toast").fadeIn("0.1s");
  //   setTimeout(function () {
  //     $(".toast").fadeOut("0.1s");
  //   }, 2000);
  // });
  // $(".choice").click(function () {
  //   $(".toast").fadeOut("0.1s");
  // });
*/