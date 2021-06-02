 <!DOCTYPE html>
 <html lang="en">

 <?php
 session_start();

 if (isset($_POST["submit"])) {
     $aid = rand();
     $username = $_POST["username"];
     $password = $_POST["password"];
     $password_hashed = password_hash($password, PASSWORD_DEFAULT);

     $admin_detail = [$aid, $username, $password_hashed];
     $csv_1st_row = ["aid", "username", "password"];

     $file = "../admin.csv";

     if (file_exists("../admin.csv")) {
         ($fp = fopen($file, "a+")) or die("unable open $file for writing");
         $contents = fread($fp, filesize($file));

         // check if email or phone already exist
         if (stripos($contents, $username) !== false) {
             echo '<script type="text/JavaScript">
                               function display_toast() {
                               document.querySelector("#toast-error").style.display = "flex";}
                               </script>';
         } else {
             fputcsv($fp, $admin_detail);
             echo '<script type="text/JavaScript">
                  function display_toast() {
                  document.querySelector("#toast-ok").style.display = "flex";}
                  </script>';
         }
     } else {
         ($fp = fopen($file, "a+")) or die("unable open $file for writing");
         fputcsv($fp, $csv_1st_row);
         fputcsv($fp, $admin_detail);
         echo '<script type="text/JavaScript">
               function display_toast() {
               document.querySelector("#toast-ok").style.display = "flex";}
               </script>';
     }
     fclose($fp);
 }
 ?>

 <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>install script</title>
     <link href="CSS/main.css" rel="stylesheet" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
 </head>


 <body>
     <div class="body_spacing">
         <form action="install.php" method="post">
             <h2>Register admin account</h2>

             <!-- Display toast when detail already exist -->
             <div class="toast-large" id="toast-error">
                 <div class="toast-large-elements-error">
                     <?php echo "<p id=\"toast-large-message\">The email or phone number is already registered. Please try again or start a new session</p>"; ?>
                 </div>
             </div>
             <div class="toast-large" id="toast-ok">
                 <div class="toast-large-elements">
                     <?php echo "<p id=\"toast-large-message\">Admin registered</p>"; ?>
                 </div>
             </div>
             <script>
             display_toast()
             </script>

             <!-- Email -->
             <div class="styled-input-text">
                 <label for="email">Username</label><br />
                 <input type="text" id="username" name="username" placeholder="username" required />
                 <!-- <small>Invalid email</small> -->
             </div>

             <!-- Password -->
             <div class="styled-input-text">
                 <!-- <h5>password</h5> -->
                 <label for="password">Password</label>
                 <input type="password" name="password" id="password" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^*])[a-zA-Z\d!@#$%^*]{8,20}$" required />
             </div>

             <!-- confirm password -->
             <div class="styled-input-text">
                 <label for="confirmPassword">Confirm password</label>
                 <input type="password" name="con_password" id="confirmpassword" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^*])[a-zA-Z\d!@#$%^*]{8,20}" required />
             </div>

             <button input type="submit" id="register-submit" name="submit">
                 Create account
             </button>
             <button type="reset" value="reset">Reset</button>
         </form>
     </div>
     </div>
 </body>
 <script src="JS/input.js"></script>

 </html>