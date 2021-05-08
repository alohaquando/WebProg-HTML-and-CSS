// Header and footer
$(function () {
  $("#nav_header").load("./nav_header.html");
});

$(function () {
  $("#mall_footer").load("./footer.html");
});

$(function () {
  $("#store_footer").load("./store_footer.html");
});

$(function () {
  $("#store_header").load("./store_header.html");
});

// About Us Modal
var open_modal = document.querySelectorAll(".open_modal");
for (i = 0; i < open_modal.length; i++) {
  open_modal[i].onclick = function () {
    var modal_name = this.getAttribute("data-modal");
    document.getElementById(modal_name).style.display = "flex";
  };
}

const modal = document.querySelectorAll(".modal");

function close_modal() {
  for (i = 0; i < modal.length; i++) {
    modal[i].style.display = "none";
  }
}

// Hide shopping cart before logged in
switch (localStorage.getItem("account_state")) {
  case "in":
    break;
  default:
    document.querySelectorAll(".cart-access")[0].style.display = "none";
    document.querySelectorAll(".cart-access")[1].style.display = "none";

    break;
}
