<?php
$filename = "/path/to/install.php";

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>

<!-- TODO 

CHECK files exists = die
CHECK files does not exist = other sites can run normally

-->