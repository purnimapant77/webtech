<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading from file</title>
</head>
<body>
    <h3>My friends data</h3>
    <table border="2px">
        <tr>
            <th>Name</th>
            <th>Roll No</th>
            <th>Address</th>
        </tr>
    
    <?php
    $file=fopen("file.txt","r");
    while(($line = fgets($file)) !== false) {
    $data = explode(",", $line);
    echo "<tr>";
    echo "<td>" . $data[0] . "</td>";
    echo "<td>" . $data[1] . "</td>";
    echo "<td>" . $data[2] . "</td>";
    echo "</tr>";
    }
    fclose($file);

    ?>
    </table>
</body>
</html>
