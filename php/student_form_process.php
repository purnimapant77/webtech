<?php
$conn = mysqli_connect("localhost", "root", "", "student");

if(!$conn){
    die("Connection failed");
}

$name = $_POST['name'];
$address= $_POST['address'];
$phone= $_POST['phone'];
$age= $_POST['age'];
$gender=$_POST['gender'];

$sql = "INSERT INTO student_info(name, address, phone, age, gender)
        VALUES ('$name', '$address', '$phone', '$age', '$gender')";

if(mysqli_query($conn, $sql)){
    echo "Data inserted successfully";
}else{
    echo "Error";
}

mysqli_close($conn);
?>