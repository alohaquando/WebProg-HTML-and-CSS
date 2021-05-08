// -----------------------------
// LOAD MALL HEADER AND FOOTER
// -----------------------------

// Mall header
document.getElementById(
  "nav_header"
).innerHTML = `<nav class="nav_mall_background">
<div class="nav_wrapper">
  <div class="nav_elements_left">
	<div class="nav_logo_h1">
	  <h1>Marché! Mall</h1>
	</div>
	<div class="nav_logo_h2">
	  <h2>Marché! Mall</h2>
	</div>
	<div class="nav_links">
	  <ul class="nav_links">
		<li><a href="index.html">Home</a></li>
		<li>
		  <div class="dropdown">
			<button class="dropbtn">
			  <h5>Browse <i class="fa fa-caret-down"></i></h5>
			</button>
			<div class="dropdown-content">
			  <a href="5.1.1-BrowseStoreByName.html"
				>‎Browse Stores by Name</a
			  >
			  <a href="5.1.1-BrowseStoreByCategory.html"
				>Browse Stores by Category</a
			  >
			</div>
		  </div>
		</li>
		<li><a href="5.1.2-Aboutus.html">About us</a></li>
		<li><a href="5.1.5-FAQs.html">FAQs</a></li>
		<li><a href="5.1.6-Contact.html">Contact</a></li>
	  </ul>
	</div>
  </div>
  <div class="nav_menu_icon" id="sidenav">
	<ul>
	  <li><a href="index.html">Home</a></li>
	  <li>
		<a>Browse</a>
	  </li>

	  <li class="nav_menu_link_extra_padding">
		<a href="5.1.1-BrowseStoreByName.html"
		  >‏‏‎‎Browse Stores by Name</a
		>
	  </li>
	  <li class="nav_menu_link_extra_padding">
		<a href="5.1.1-BrowseStoreByCategory.html"
		  >‏‏Browse Stores by Category</a
		>
	  </li>

	  <li><a href="5.1.2-Aboutus.html">About us</a></li>
	  <li><a href="5.1.5-FAQs.html">FAQs</a></li>
	  <li><a href="5.1.6-Contact.html">Contact</a></li>
	  <hr class="sidebar_hr" />
	  <li class="cart-access">
		<a href="5.2.3-Shopping-Cart.html"
		  ><i class="fa fa-shopping-cart"></i>‎‎‏‏‎ ‏‏‎ ‎‎Shopping cart</a
		>
	  </li>
	  <li>
		<a href="5.1.7-My-account-Logged-in.html" id="account-text"
		  ><i class="fa fa-user"></i>‎‎‏‏‎ ‏‏‎ ‎‎My account</a
		>
	  </li>
	</ul>

	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
	  >&times;
	</a>
  </div>
  <div>
	<span
	  class="closebtn"
	  style="font-size: 30px; color: black; cursor: pointer"
	  onclick="openNav()"
	  >&#9776;
	</span>
  </div>
  <div class="nav_elements_right">
	<h5 class="nav_cart_icon">
	  <a href="5.2.3-Shopping-Cart.html" class="cart-access">
		<i class="fas fa-shopping-cart"></i>
	  </a>
	</h5>
	<a href="5.1.7-My-account-Logged-in.html"
	  ><img id="account-img" src="Asset/avatar.jpg" class="avatar_logged_in"
	/></a>
  </div>
</div>
</nav>`;

// mall footer
document.getElementById("mall_footer").innerHTML = ` <div class="mall_footer">
  <div class="footer_wrapper">
	<div class="footer_elements_left">
	  <a href="5.1.3-Mall-Terms.html" class="BodyBlack15"
		>Term of Service</a
	  >
	  <a href="5.1.3-Mall-Copyright.html" class="BodyBlack15">Copyright</a>
	  <a href="5.1.3-Mall-Policy.html" class="BodyBlack15"
		>Privacy Policy</a
	  >
	</div>
	<div>
	  <hr />
	</div>
	<div class="footer_elements_right">
	  <p class="BodyLight-Black15">
		Copyright © 2021 Marché! Mall. All rights reserved.
	  </p>
	</div>
  </div>
</div>`;

// -----------------------------
// MOBILE NAV
// -----------------------------
function openNav() {
  document.getElementById("sidenav").style.width = "300px";
  document.body.style.backgroundColor = "white";
}

function closeNav() {
  document.getElementById("sidenav").style.width = "0";
  document.body.style.backgroundColor = "white";
}

// -----------------------------
// HIDE ITEMS BEFORE LOGGING IN
// -----------------------------

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
    document.querySelector("#account-img").src = "Asset/avatar-out.png";

    // Hide add to cart button on product page
    document.querySelector("#product-cart-button").style.display = "none";
    break;
}

// -----------------------------
// LOAD MALL HEADER AND FOOTER
// -----------------------------

// Load store header
document.getElementById("store_header").innerHTML = `<nav class="nav_store">
  <div class="nav_store_wrapper">
	<div class="nav_store_elements_left">
	  <div class="nav_store_logo"></div>
	  <div>
		<h4>Ziugei Tech Store</h4>
	  </div>
	</div>

	<div class="nav_store_elements_right">
	  <ul class="nav_store_links">
		<li><a href="5.2.1-Store-Home.html">Home</a></li>
		<li>
		  <div class="dropdown">
			<button class="dropbtn">
			  <h5>Products <i class="fa fa-caret-down"></i></h5>
			</button>
			<div class="dropdown-content">
			  <a href="5.2.2-BrowseProductCategory.html"
				>‎Products by Category</a
			  >
			  <a href="5.2.2-BrowseProductCreatedTime.html"
				>Products by Created Time</a
			  >
			</div>
		  </div>
		</li>
		<li><a href="5.2.1-Store-About-Us.html">About us</a></li>
		<li><a href="5.2.1-Store-Contact.html">Contact</a></li>
	  </ul>
	</div>
  </div>
</nav>`;

// Load store footer
document.getElementById("store_footer").innerHTML = `<div class="store_footer">
  <div class="footer_wrapper">
	<div class="footer_elements_left">
	  <a href="5.2.1-Store-Terms.html" class="BodyBlack15"
		>Term of Service</a
	  >
	  <a href="5.2.1-Store-Copyright.html" class="BodyBlack15">Copyright</a>
	  <a href="5.2.1-Store-Policy.html" class="BodyBlack15"
		>Privacy Policy</a
	  >
	</div>
	<div>
	  <hr class="footer-hr" />
	</div>
	<div class="footer_elements_right">
	  <p class="BodyLight-Black15">
		Copyright © 2021 Ziugei Tech Store. All rights reserved.
	  </p>
	</div>
  </div>
</div>`;
