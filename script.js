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

// Shopping cart add and remove
function wcqib_refresh_quantity_increments() {
  jQuery(
    "div.quantity:not(.product-in-cart-buttons), td.quantity:not(.product-in-cart-buttons)"
  ).each(function (a, b) {
    var c = jQuery(b);
    c.addClass("product-in-cart-buttons"),
      c
        .children()
        .first()
        .before(
          '<input type="button" value="-" id="minus" class="value_adjust_button" />'
        ),
      c
        .children()
        .last()
        .after(
          '<input type="button" value="+" id="plus" class="value_adjust_button" />'
        );
  });
}

String.prototype.getDecimals ||
  (String.prototype.getDecimals = function () {
    var a = this,
      b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0;
  }),
  jQuery(document).ready(function () {
    wcqib_refresh_quantity_increments();
  }),
  jQuery(document).on("updated_wc_div", function () {
    wcqib_refresh_quantity_increments();
  }),
  jQuery(document).on("click", "#plus, #minus", function () {
    var a = jQuery(this).find("#product-in-cart-value"),
      b = parseFloat(a.val()),
      c = parseFloat(a.attr("max")),
      d = parseFloat(a.attr("min")),
      e = a.attr("step");
    (b && "" !== b && "NaN" !== b) || (b = 0),
      ("" !== c && "NaN" !== c) || (c = ""),
      ("" !== d && "NaN" !== d) || (d = 0),
      ("any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e)) ||
        (e = 1),
      jQuery(this).is("#plus")
        ? c && b >= c
          ? a.val(c)
          : a.val((b + parseFloat(e)).toFixed(e.getDecimals()))
        : d && b <= d
        ? a.val(d)
        : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())),
      a.trigger("change");
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
