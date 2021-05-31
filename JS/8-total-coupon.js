var total_result = parseFloat(document.querySelector("#total").value);

// Coupon validate and calculate total function
function couponValidation() {
  let status = document.getElementById("coupon_status");
  let coupon = document.getElementById("coupon");

  switch (coupon.value) {
    case "COSC2430-HD":
      status.textContent = `COSC2430-HD applied! 20% off!`;
      coupon.style.border = "2px solid green";
      discounted = total_result - (total_result * 20) / 100;
      document.querySelector(
        "#total_shown"
      ).innerHTML = `${discounted.toLocaleString("en-US")}`;
      break;
    case "COSC2430-DI":
      status.textContent = `COSC2430-DI applied! 10% off!`;
      coupon.style.border = "2px solid green";
      discounted = total_result - (total_result * 10) / 100;
      document.querySelector(
        "#total_shown"
      ).innerHTML = `${discounted.toLocaleString("en-US")}`;
      break;
    case "":
      coupon.style.border = "solid 2px rgba(240, 240, 240, 1)";
      status.textContent = ``;
      document.querySelector(
        "#total_shown"
      ).innerHTML = `${total_result.toLocaleString("en-US")}`;
      break;
    default:
      status.textContent = `Invalid coupon`;
      coupon.style.border = "2px solid red";
      document.querySelector(
        "#total_shown"
      ).innerHTML = `${total_result.toLocaleString("en-US")}`;
      break;
  }
}

// Validate coupon on "Enter"
document.getElementById("coupon").addEventListener("keypress", function (e) {
  if (e.key === "Enter") {
    couponValidation();
  }
});

// Adding coupon validation function to the button
document.getElementById("coupon_button").addEventListener("click", function () {
  couponValidation();
});
