<?php
// check cookie
if(isset($_COOKIE["user"])) {
    echo "Value from cookie: " . $_COOKIE["user"];
} else {
    echo "Cookie not found";
}
?>