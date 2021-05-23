<?php

// -----------------------------
// LOAD MALL HEADER AND FOOTER
// -----------------------------

// Load store header

function load_dynamic_store_header($store_id)
{
    $store_name = get_item_field("stores", $store_id, "name");

    echo "<nav class=\"nav_store\">
  <div class=\"nav_store_wrapper\">
	<div class=\"nav_store_elements_left\">
	 <div class=\"nav_store_logo\"></div>
	  <div>
		<h4 id=\"store_name\">$store_name</h4>
	  </div>
	</div>

	<div class=\"nav_store_elements_right\">
	  <ul class=\"nav_store_links\">
		<li><a href=\"5.2.1-Store-Home.html\">Home</a></li>
		<li>
		  <div class=\"dropdown\">
			<button class=\"dropbtn\">
			  <h5>Products <i class=\"fa fa-caret-down\"></i></h5>
			</button>
			<div class=\"dropdown-content\">
			  <a href=\"5.2.2-BrowseProductCategory.html\"
				>‎Products by Category</a
			  >
			  <a href=\"ProductByTime.php?store_id=$store_id\"
				>Products by Created Time</a
			  >
			</div>
		  </div>
		</li>
		<li><a href=\"5.2.1-Store-About-Us.html\">About us</a></li>
		<li><a href=\"5.2.1-Store-Contact.html\">Contact</a></li>
	  </ul>
	</div>
  </div>
</nav>";
} ?>

<script>
function openProduct() {
    document.querySelector(\"#openprod\").style.display = \"block\";
</script>