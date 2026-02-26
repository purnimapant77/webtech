<?php
$username = "Purnima";
setcookie("user", $username, time() + 60, "/"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Set Cookie</title>
</head>
<body>
    <h2>Cookie has been set!</h2>
    <a href="getcookie.php">Click here to get cookie value</a>
</body>
</html>