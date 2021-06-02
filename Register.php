<!DOCTYPE html>
<html lang="en">

<?php
session_start();

if (isset($_POST["submit"])) {
    $uid = rand();
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $zipcode = $_POST["zipcode"];
    $country = $_POST["country"];

    $user_detail = [
    $uid,
    $email,
    $phone,
    $password_hashed,
    $firstname,
    $lastname,
    $address,
    $city,
    $zipcode,
    $country,
  ];

    $file = "Data/users.csv";
    ($fp = fopen($file, "r+")) or die("unable open $file for writing");
    $contents = fread($fp, filesize($file));

    // check if email or phone already exist
    if (
    stripos($contents, $email) !== false or
    stripos($contents, $phone) !== false
  ) {
        echo '<script type="text/JavaScript">
                function display_toast() {
                document.querySelector("#toast-error").style.display = "flex";}
                </script>';
    } else {
        fputcsv($fp, $user_detail);
        echo '<script type="text/JavaScript">
        function display_toast() {
        document.querySelector("#toast-ok").style.display = "flex";}
        </script>';
        header("Location:MyAccount_Login.php");
    }

    fclose($fp);
}
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Account</title>
    <link href="CSS/main.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
</head>


<body>
    <header id="nav_header"></header>
    <div class="body_spacing">

        <!-- Display toast when detail already exist -->
        <div class="toast-large" id="toast-error">
            <div class="toast-large-elements-error">
                <?php echo "<p id=\"toast-large-message\">The email or phone number is already registered. Please try again or start a new session</p>"; ?>
            </div>
        </div>
        <div class="toast-large" id="toast-ok">
            <div class="toast-large-elements">
                <?php echo "<p id=\"toast-large-message\">Account registered</p>"; ?>
            </div>
        </div>

        <script>
        display_toast()
        </script>

        <div class="left">
            <form action="Register.php" method="post">
                <div id="left">
                    <h2>Welcome to Shop!</h2>
                    <p>Register now! Your vouchers are waiting for you!</p>
                    <!-- <div class="items"> -->
                    <h4>Account</h4>

                    <!-- Email -->
                    <div class="styled-input-text">
                        <label for="email">Email</label><br />
                        <input type="email" id="email" name="email" placeholder="example@email.com" required />
                        <!-- <small>Invalid email</small> -->
                    </div>

                    <!-- Phone -->
                    <div class="styled-input-text">
                        <label for="phone">Phone number</label>
                        <input type="tel" id="phone" name="phone" placeholder="123 456 789" pattern="^\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d?([ .-]?)\d?([ .-]?){9,11}$" required />
                    </div>

                    <!-- password -->
                    <div class="styled-input-text">
                        <!-- <h5>password</h5> -->
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^*])[a-zA-Z\d!@#$%^*]{8,20}$" required />
                    </div>

                    <!-- confirm passowrd -->
                    <div class="styled-input-text">
                        <label for="confirmPassword">Confirm password</label>
                        <input type="password" name="con_password" id="confirmpassword" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^*])[a-zA-Z\d!@#$%^*]{8,20}" required />
                    </div>

                    <!-- profile pic -->
                    <h4>Personal Information</h4>
                    <div class="upload_file">
                        <label for="profile_photo">Profile picture</label>
                        <input type="file" name="profile_photo" id="profile_photo" accept="image/png, image/jpeg, image/jpg" />
                    </div>
                    <!-- first name -->
                    <div class="styled-input-text">
                        <!-- <div class="name"> -->
                        <label for="fname">First name</label>
                        <input type="text" id="fname" placeholder="First name" name="fname" pattern="[\da-zA-Z\s]{3,}" required />
                    </div>

                    <!-- last name -->
                    <div class="styled-input-text">
                        <label for="lname">Last name</label>
                        <input type="text" id="lname" placeholder="Last name" name="lname" pattern="[a-zA-Z\s]{3,}" />
                        <p id="error" required></p>
                    </div>

                    <div class="styled-input-text">
                        <label for="Address">Address</label>
                        <input type="text" id="address" placeholder="123 Street" name="address" pattern="[a-zA-Z0-9\s]{3,}" required />
                    </div>
                    <div class="styled-input-text">
                        <label for="City">City</label>
                        <input type="text" id="city" placeholder="New York" name="city" pattern="[a-zA-Z\s]{3,}" required />
                    </div>
                    <div class="styled-input-text">
                        <label for="Zipcode">Zipcode</label>
                        <input type="text" id="zipcode" name="zipcode" placeholder="000000" pattern="[0-9]{4,6}" required />
                    </div>

                    <div class="styled-select">
                        <label for="country">Country</lab>
                            <select name="country" id="country" required>
                                <option value="0" disabled selected hidden>
                                    Select country... ▾
                                </option>

                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia, Plurinational State of</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">
                                    Congo, the Democratic Republic of the
                                </option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Côte d'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curaçao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">
                                    Korea, Democratic People's Republic of
                                </option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">
                                    Macedonia, the former Yugoslav Republic of
                                </option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Réunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">
                                    Saint Helena, Ascension and Tristan da Cunha
                                </option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin (French part)</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten (Dutch part)</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">
                                    South Georgia and the South Sandwich Islands
                                </option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.S.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                    </div>

                    <br />

                    <div class="styled-radio">
                        <p>I am a...</p>
                        <input type="radio" id="perf_phone" name="perf_contact" value="perf_phone" required />

                        <label for="perf_phone">Shopper</label>
                        <br />
                    </div>

                    <input type="radio" id="perf_email" name="perf_contact" value="perf_email" />
                    <label for="perf_email">Store owner</label>

                    <!-- additional fields for store owner -->
                    <div class="reveal-if-active">

                        <div class="styled-input-text">
                            <label for="bus_name">Business name</label>
                            <input type="text" id="bus_name" placeholder="Business name" name="bus_name" />
                            <p id="error"></p>
                        </div>

                        <div class="styled-input-text">
                            <label for="store_name">Store name</label>
                            <input type="text" id="store_name" placeholder="Business name" name="store_name" />
                            <p id="error"></p>
                        </div>

                        <div class="styled-select">
                            <label for="category-list">Category</label>
                            <select name="category-list" id="category-list">
                                <option value="0" disabled selected hidden>
                                    Select category... ▾
                                </option>
                                <option value="1">Fashion</option>
                                <option value="2">Toy, Hobby & DIY</option>
                                <option value="3">Home appliances</option>
                                <option value="4">Household product</option>
                                <option value="5">Funiture</option>
                                <option value="6">Beauty or personal care</option>
                                <option value="7">Groceries</option>
                                <option value="8">Food</option>
                                <option value="9">Electronics</option>
                            </select>
                        </div>
                    </div>
                </div>
        </div>

        <button input type="submit" id="register-submit" name="submit">
            Create account
        </button>
        <button type="reset" value="reset">Reset</button>

        </form>
    </div>

    <div id="cookie-consent-message"></div>
    <footer id="mall_footer"></footer>
    </div>
</body>
<script src="JS/input.js"></script>
<script src="JS/global-load-mall-header-and-footer.js"></script>
<script src="JS/global-mobile-nav.js"></script>
<script src="JS/global-logged-in-behavior.js"></script>
<script src="JS/1-cookie.js"></script>

</html>