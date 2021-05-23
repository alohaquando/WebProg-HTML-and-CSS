<?php

// -----------------------------
// LOAD Store HEADER AND FOOTER
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
		<li><a href=\"StoreHome.php?store_id=$store_id\">Home</a></li>
		<li>
		  <div class=\"dropdown\">
			<button class=\"dropbtn\">
			  <h5>Products <i class=\"fa fa-caret-down\"></i></h5>
			</button>
			<div class=\"dropdown-content\">
			  <a href=\"ProductByCat.php?store_id=$store_id\"
				>‎Products by Category</a
			  >
			  <a href=\"ProductByTime.php?store_id=$store_id\"
				>Products by Created Time</a
			  >
			</div>
		  </div>
		</li>
		<li><a href=\"StoreAboutUs.php?store_id=$store_id\">About us</a></li>
		<li><a href=\"StoreContact.php?store_id=$store_id\">Contact</a></li>
	  </ul>
	</div>
  </div>
</nav>";
}

function load_dynamic_store_footer($store_id)
{
    echo "<div class=\"store_footer\">
  <div class=\"footer_wrapper\">
    <div class=\"footer_elements_left\">
      <a href=\"StoreTerms.php?store_id=$store_id\" class=\"BodyBlack15\"
        >Term of Service</a
      >
      <a href=\"StoreCopyright.php?store_id=$store_id\" class=\"BodyBlack15\">Copyright</a>
      <a href=\"StorePolicy.php?store_id=$store_id\" class=\"BodyBlack15\"
        >Privacy Policy</a
      >
    </div>
    <div>
      <hr class=\"footer-hr\" />
    </div>
    <div class=\"footer_elements_right\">
      <p class=\"BodyLight-Black15\">
        Copyright © All rights reserved.
      </p>
    </div>
  </div>
</div>";
}
?>

<script>
function openProduct() {
    document.querySelector(\"#openprod\").style.display = \"block\";
</script>