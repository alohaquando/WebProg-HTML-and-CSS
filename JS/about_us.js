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
