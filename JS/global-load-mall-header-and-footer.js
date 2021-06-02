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
		<li><a href="index.php">Home</a></li>
		<li>
		  <div class="dropdown">
			<button class="dropbtn">
			  <h5>Browse <i class="fa fa-caret-down"></i></h5>
			</button>
			<div class="dropdown-content">
			  <a href="StoreByName.php"
				>‎Browse Stores by Name</a
			  >
			  <a href="StoreByCat.php"
				>Browse Stores by Category</a
			  >
			</div>
		  </div>
		</li>
		<li><a href="5.1.2-Aboutus.html">About us</a></li>
		<li><a href="5.1.4-Fees.html">Fees</a></li>
		<li><a href="5.1.5-FAQs.html">FAQs</a></li>
		<li><a href="5.1.6-Contact.html">Contact</a></li>
	  </ul>
	</div>
  </div>
  <div class="nav_menu_icon" id="sidenav">
	<ul>
	  <li><a href="index.php">Home</a></li>
	  <li>
		<a>Browse</a>
	  </li>

	  <li class="nav_menu_link_extra_padding">
		<a href="StoreByName.php"
		  >‏‏‎‎Browse Stores by Name</a
		>
	  </li>
	  <li class="nav_menu_link_extra_padding">
		<a href="StoreByCat.php"
		  >‏‏Browse Stores by Category</a
		>
	  </li>

	  <li><a href="5.1.2-Aboutus.html">About us</a></li>
	  <li><a href="5.1.4-Fees.html">Fees</a></li>
	  <li><a href="5.1.5-FAQs.html">FAQs</a></li>
	  <li><a href="5.1.6-Contact.html">Contact</a></li>
	  <hr class="sidebar_hr" />
	  <li class="cart-access">
		<a href="Cart.php"
		  ><i class="fa fa-shopping-cart"></i>‎‎‏‏‎ ‏‏‎ ‎‎Shopping cart</a
		>
	  </li>
	  <li>
		<a href="MyAccount_Login.php" id="account-text"
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
	  <a href="Cart.php" class="cart-access">
		<i class="fas fa-shopping-cart"></i>
	  </a>
	</h5>
	<a href="MyAccount_Login.php" id="account-access-desktop"
	  ><img id="account-img" src="Asset/avatar.jpg" class="avatar_logged_in"
	/></a>
  </div>
</div>
</nav>`;

// mall footer
document.getElementById("mall_footer").innerHTML = ` <div class="mall_footer">
  <div class="footer_wrapper">
	<div class="footer_elements_left">
	  <a href="Terms.php" class="BodyBlack15"
		>Term of Service</a
	  >
	  <a href="Copyright.php" class="BodyBlack15">Copyright</a>
	  <a href="Policy.php" class="BodyBlack15"
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
