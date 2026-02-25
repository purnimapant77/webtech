<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form value</title>
</head>
<body>
    <h3>Information submitted by user:</h3>
    <?php
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $country=$_POST["country"];

    echo "Name: ". $name ."<br>";
    echo "Gender:". $gender ."<br>";
    echo "Country: " . $country ."<br>";
    echo "Subject: ";
    if(!empty($_POST["subject"])){
        foreach ($_POST["subject"] as $subject){
            echo $subject . "<br>";
        }
    }
    else{
        echo "No subject selected";
    }
    ?>
</body>
</html>
