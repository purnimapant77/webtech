<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Get Cookie</title>
</head>
<body>
<?php
if(isset($_COOKIE["user"])) {
    echo "Welcome " . $_COOKIE["user"];
} else {
    echo "Cookie is not set!";
}
?>
</body>
</html>