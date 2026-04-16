<?php
// get value from URL
if(isset($_GET['user'])) {
    echo "Value received from URL: " . $_GET['user'];
} else {
    echo "No data received";
}
?>