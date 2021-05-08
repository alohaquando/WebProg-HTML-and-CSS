// Hide shopping cart before logged in
switch (localStorage.getItem("account_state")) {
  case "in":
	break;
  default:
  
  
  // Hide cart in nav
	document.querySelectorAll(".cart-access")[0].style.display = "none";
	document.querySelectorAll(".cart-access")[1].style.display = "none";
	
	// Change text in mobile nav
	  document.querySelector("#account-text").textContent = "Log in";
	  
	  // Change avatar on desktop nav
	  document.querySelector("#account-img").src = "Asset/avatar-out.png"

	
	// Hide add to cart button on product page
	document.querySelector("#product-cart-button").style.display = "none";
		
	
	
	


	break;
}
