

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Account</title>
    <link href="CSS/main.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
        src="https://kit.fontawesome.com/f43db195aa.js"
        crossorigin="anonymous"
    ></script>
</head>

<body>
<header id="nav_header"></header>
<div class="body_spacing">
    <div class="right"></div>
    <div class="left">
        <form action="register-lite.php" method="post">
            <div id="left">
                <h2>Welcome to Shop!</h2>
                <p>Register now! Your vouchers are waiting for you!</p>

                <!-- <div class="items"> -->
                <h4>Account</h4>

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
                </div>

                <!-- passowrd -->
                <div class="styled-input-text">
                    <!-- <h5>password</h5> -->
                    <label for="password">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                        pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^*])[a-zA-Z\d!@#$%^*]{8,20}$"
                        required
                    />
                </div>

                <!-- confirm passowrd -->
                <div class="styled-input-text">
                    <label for="confirmPassword">Confirm password</label>
                    <input
                        type="password"
                        name="con_password"
                        id="confirmpassword"
                        placeholder="Confirm Password"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^*])[a-zA-Z\d!@#$%^*]{8,20}"
                        required
                    />
<!--                </div>-->
            </div>
            <button input type="submit" id="register-submit" name="submit">
                Create account
            </button>
            <button type="reset" value="reset">Reset</button>
        </form>
    </div>

    <div id="right"></div>
    <footer id="mall_footer"></footer>
</div>
</body>

<?php
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    $password_hashed = password_hash( $password, PASSWORD_DEFAULT);

    $user_detail = array($email, $phone, $password_hashed);


    $fp = fopen('Data/users.csv', 'a');
        fputcsv($fp, $user_detail);
        fclose($fp);


};



?>