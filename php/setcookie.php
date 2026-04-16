<?php
// variable
$username = "Purnima";

// set cookie
setcookie("user", $username, time() + 3600);

echo "Cookie has been set";
?>