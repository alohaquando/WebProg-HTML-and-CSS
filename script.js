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
// Add item to cart with noti
// let addcart = document.querySelectorAll(".button-secondary");
//
// for (let i = 0; i < addcart.length; i++) {
//   addcart[i].addEventListener("click", () => {
//     console.log("pls ra di, im so tired :((");
//     alert("Add dc roi thg loz dung bam nua ");
//   });
// }

let prodbtn = $(".button-secondary");
prodbtn.click(function () {
  $(".prod_list_modal").fadeIn("slow");
  console.log("Work, please!");
  setTimeout(function () {
    $(".prod_list_modal").fadeOut("slow");
  }, 2000);
});
$(".choice").click(function () {
  $(".prod_list_modal").fadeOut("slow");
});
