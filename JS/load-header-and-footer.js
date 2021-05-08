// Header and footer
// $(function () {
//   $("#nav_header").load("./nav_header.html");
// });

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

// Load mall footer
$(function () {
  $("#mall_footer").load("./footer.html");
});

// Load store header
$(function () {
  $("#store_header").load("./store_header.html");
});

// Load store footer
$(function () {
  $("#store_footer").load("./store_footer.html");
});

// Mobile nav open and close
function openNav() {
  document.getElementById("sidenav").style.width = "300px";
  document.body.style.backgroundColor = "white";
}

function closeNav() {
  document.getElementById("sidenav").style.width = "0";
  document.body.style.backgroundColor = "white";
}
