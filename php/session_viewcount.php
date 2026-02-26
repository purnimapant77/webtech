<?php
session_start();
if(isset($_SESSION['count'])) {
    $_SESSION['count']++;  
} else {
    $_SESSION['count'] = 1;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page view count</title>
</head>
<body>
    <h2>page view count using session</h2>
    <p>
        You have visited this page 
        <strong><?php echo $_SESSION['count']; ?></strong> 
        times in this session.
    </p>
    <p>Refresh the page to see the counter increase.</p>
</body>
</html>