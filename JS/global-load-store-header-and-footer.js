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
