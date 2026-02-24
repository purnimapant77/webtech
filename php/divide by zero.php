<?php
$a = 10;
$b = 0;

try {
    if ($b == 0) {
        throw new Exception("Cannot divide by zero!");
    }

    $result = $a / $b;
    echo "Result: " . $result;

} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>
