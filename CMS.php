<?php
session_start();

if (file_exists("install.php")) {
    exit(
    "Create an admin account and remove the install.php file before using this website"
  );
}

require "PHP_functions/CSV.php";

$logged_in_admin = get_item("admins", $_COOKIE["aid"]);

if (!isset($_COOKIE["aid"])) {
    header("location: CMSLogin.php");
}

// Function to update photo
function update_photo()
{
    $photo = $_FILES["profile_photo"];
    $location = $_POST["photo_location"];
    switch ($location) {
    case "photo_1":
      $photo_name = "photo_1.jpg";
      break;
    case "photo_2":
      $photo_name = "photo_2.jpg";
      break;
    case "photo_3":
      $photo_name = "photo_3.jpg";
      break;
    case "photo_4":
      $photo_name = "photo_4.jpg";
      break;
  }
    move_uploaded_file(
        $photo["tmp_name"],
        $_SERVER["DOCUMENT_ROOT"] . "/Asset/about/" . $photo_name
    );
}

// Function to update Mall content
function mall_content()
{
    $content = $_POST["content"];
    $page = $_POST["content_page"];
    switch ($page) {
    case "policy":
      $page = "Data/policy.html";
      break;
    case "terms":
      $page = "Data/terms.html";
      break;
    case "copyright":
      $page = "Data/copyright.html";
      break;
  }
    file_put_contents($page, $content);
}

// Check which form was submitted -> Call the right function, display toast
if (isset($_POST["photo_location"])) {
    update_photo();
    echo '<script type="text/JavaScript">
        function display_toast() {
        document.querySelector("#toast").style.display = "flex";
        setTimeout(function(){
            document.querySelector("#toast").style.display = "none"
            }, 2000);
        }
        </script>';
}
if (isset($_POST["content_page"])) {
    mall_content();
    echo '<script type="text/JavaScript">
    function display_toast() {
    document.querySelector("#toast").style.display = "flex";
    setTimeout(function(){
        document.querySelector("#toast").style.display = "none"
        }, 2000);
    }
    </script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>CMS for admins</title>
    <meta name="description" content="CMS for admins" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="nav_header"></header>
    <div class="body_spacing">

        <!--Notification when cart is added  -->
        <div class="toast-large" id="toast">
            <div class="toast-large-elements">
                <p id="toast-large-message">Updated successfully!</p>
            </div>
        </div>
        <script>
        display_toast()
        </script>

        <!-- Page header -->
        <div class="HeaderH1_Left_With_Spacing">
            <h1>Content Management System</h1>
            <p>Welcome to the CMS for Marché! Mall!</p>
            <p>
                <?php echo "Your username is $logged_in_admin[username]"; ?>
            </p>
        </div>

        <!-- Edit Mall Content -->
        <div class="card">
            <h3>Manage Mall content</h3>
            <form action="CMS.php" method="post" enctype="application/x-www-form-urlencoded">

                <!-- Text area -->
                <div class="styled-textarea bottom-24">
                    <label for="content">Message</label><br />
                    <textarea name="content" id="content" placeholder="Write new content" required></textarea>
                </div>

                <!-- Member select radio -->
                <div class="styled-radio">
                    <p>Update section...</p>
                    <input type="radio" name="content_page" id="policy" value="policy" required checked />
                    <label for="policy">Privacy Policy</label>
                    <br />
                    <input type="radio" name="content_page" id="terms" value="terms" required />
                    <label for="terms">Terms of Service</label>
                    <br>
                    <input type="radio" name="content_page" id="copyright" value="copyright" required />
                    <label for="copyright">Copyright</label>
                </div>

                <!-- Submit button -->
                <input type="submit" />

                <!-- End form -->
            </form>

            <!-- Link -->
            <a href="Policy.php">View Privacy Policy</a><br />
            <a href="Terms.php">View Terms of Service</a><br />
            <a href="Copyright.php">View Copyright</a>

        </div>

        <!-- Upload new photo to About Us -->
        <div class="card">
            <h3>Upload new photo to About Us</h3>
            <form action="CMS.php" method="post" enctype="multipart/form-data">

                <!-- Photo file -->
                <div class="upload_file">
                    <label for="profile_photo">Click here to upload new photo</label>
                    <input type="file" name="profile_photo" id="profile_photo" required accept="image/png, image/jpeg, image/jpg" />
                </div>

                <!-- Member select radio -->
                <div class="styled-radio">
                    <p>New photo for...</p>
                    <input type="radio" name="photo_location" id="photo_1" value="photo_1" required checked />
                    <label for="photo_1">1st member (Quan)</label>
                    <br />
                    <input type="radio" name="photo_location" id="photo_2" value="photo_2" required />
                    <label for="photo_2">2nd member (Thinh)</label>
                    <br>
                    <input type="radio" name="photo_location" id="photo_3" value="photo_3" required />
                    <label for="photo_3">3rd member (Taehyeon)</label>
                    <br />
                    <input type="radio" name="photo_location" id="photo_4" value="photo_4" required />
                    <label for="photo_4">4th member (Duc Anh)</label>
                </div>

                <!-- Submit button -->
                <input type="submit" />

                <!-- End form -->
            </form>

            <!-- Link -->
            <a href="5.1.2-Aboutus.html">View About Us</a>

        </div>


    </div>
</body>

</html>