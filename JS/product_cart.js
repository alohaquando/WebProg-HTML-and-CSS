// Hide buttons if user not logged in
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
