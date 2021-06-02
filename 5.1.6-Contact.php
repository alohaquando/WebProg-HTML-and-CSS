<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
  session_start();

  if (file_exists("install.php")) {
    exit(
      "Create an admin account and remove the install.php file before using this website"
    );
  }
  ?>
  <head>
    <meta charset="utf-8" />
    <title>Contact Mall</title>
    <link rel="stylesheet" href="CSS/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  </head>

  <body>
    <header id="nav_header"></header>
    <div class="body_spacing">
      <!-- Header -->
      <div class="HeaderH1_Left_With_Spacing">
        <h1>Contact Us • Marché! Mall</h1>
        <p>We're right here to help</p>
      </div>

      <!-- Begin form -->
      <form
        id="contact-form"
        action="action.php"
        method="get"
        class="form"
        id="form"
      >
        <!-- Contact purpose -->
        <div id="left">
          <div class="styled-select">
            <label for="purpose">Contact purpose</label>
            <select name="purpose" id="purpose">
              <option value="0" disabled selected hidden>
                Contact purpose... ▾
              </option>

              <option value="1">Your Account</option>
              <option value="2">Your order</option>
              <option value="3">Shipping & Delivery</option>
              <option value="4">Return & Refund</option>
              <option value="5">Payments</option>
              <option value="6">Product</option>
              <option value="7">Others</option>
            </select>
          </div>

          <!-- Name -->
          <div class="styled-input-text">
            <label for="name">Name</label><br />
            <input
              type="text"
              id="name"
              name="name"
              placeholder="Name"
              pattern="^[a-zA-Z]{3,}$"
              required
            />
            <!-- <small>Name must be at least 3 letters</small> -->
          </div>

          <!-- Email -->
          <div class="styled-input-text">
            <label for="email">Email</label><br />
            <input
              type="email"
              id="email"
              name="email"
              placeholder="example@email.com"
              required
            />
            <!-- <small>Invalid email</small> -->
          </div>

          <!-- Phone -->
          <div class="styled-input-text">
            <label for="phone">Phone number</label>
            <input
              type="tel"
              id="phone"
              name="phone"
              placeholder="123 456 789"
              pattern="^\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d?([ .-]?)\d?([ .-]?){9,11}$"
              required
            />
            <!-- <small>Invalid phone number</small> -->
          </div>

          <!-- Contact method -->
          <div class="styled-radio">
            <p>Preferred contact method</p>
            <input
              type="radio"
              id="perf_phone"
              name="perf_contact"
              value="perf_phone"
              required
            />
            <label for="perf_phone">Phone</label>
            <br />
            <input
              type="radio"
              id="perf_email"
              name="perf_contact"
              value="perf_email"
              required
            />
            <label for="perf_email">Email</label>
          </div>

          <!-- Contact days -->
          <div class="styled-checkbox">
            <p>Contact days</p>
            <label class="checkbox"
              >Monday
              <input
                type="checkbox"
                checked="checked"
                name="contact_day"
                id="mon"
                value="mon"
              />
              <span class="checkmark"></span>
            </label>

            <label class="checkbox"
              >Tuesday
              <input type="checkbox" name="contact_day" id="tue" value="tue" />
              <span class="checkmark"></span>
            </label>

            <label class="checkbox"
              >Wednesday
              <input type="checkbox" name="contact_day" id="wed" value="wed" />
              <span class="checkmark"></span>
            </label>

            <label class="checkbox"
              >Thursday
              <input type="checkbox" name="contact_day" id="thu" value="thu" />
              <span class="checkmark"></span>
            </label>

            <label class="checkbox"
              >Friday
              <input type="checkbox" name="contact_day" id="fri" value="fri" />
              <span class="checkmark"></span>
            </label>

            <label class="checkbox"
              >Saturday
              <input type="checkbox" name="contact_day" id="sat" value="sat" />
              <span class="checkmark"></span>
            </label>

            <label class="checkbox"
              >Sunday
              <input type="checkbox" name="contact_day" id="sun" value="sun" />
              <span class="checkmark"></span>
            </label>
          </div>

          <!-- Message -->
          <div class="styled-textarea">
            <label for="message">Message</label><br />
            <textarea
              name="Message"
              id="Message"
              placeholder="What's your message?"
              minlength="50"
              maxlength="500"
              required
            ></textarea>
            <div id="remaining-char"></div>
          </div>

          <!-- Buttons - Submit -->
          <div class="form-buttons">
            <button type="submit" value="Submit" id="contact-submit">
              Submit
            </button>
            <button type="reset" id="second-button" class="button-secondary">
              Reset
            </button>
          </div>
        </div>
      </form>
    </div>
    <div id="right"></div>
    <footer id="mall_footer"></footer>
    <div id="cookie-consent-message"></div>
    <script src="JS/input.js"></script>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
  </body>
</html>
