<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";

// connect to MySQL
$conn = new mysqli($servername, $username, $password);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully<br>";

// create database
$sql = "CREATE DATABASE IF NOT EXISTS mydb";
if ($conn->query($sql)) {
    echo "Database created successfully<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// select database
$conn->select_db("mydb");

// create table
$sql = "CREATE TABLE IF NOT EXISTS student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT
)";

if ($conn->query($sql)) {
    echo "Table created successfully<br>";
} else {
    die("Error creating table: " . $conn->error);
}

// add column
$check = $conn->query("SHOW COLUMNS FROM student LIKE 'email'");

if ($check->num_rows == 0) {
    $sql = "ALTER TABLE student ADD email VARCHAR(100)";
    if ($conn->query($sql)) {
        echo "Column added successfully<br>";
    } else {
        echo "Error adding column: " . $conn->error;
    }
} else {
    echo "Email column already exists<br>";
}

echo "<br>DONE ";

$conn->close();
?>