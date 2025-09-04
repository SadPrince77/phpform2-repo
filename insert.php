<?php
$servername = "localhost";
$username = "root";   // default in XAMPP
$password = "";       // default in XAMPP
$dbname = "student_db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Insert into database
$sql = "INSERT INTO students1 (name, email, course,gender,birthdate,phone,address)
        VALUES ('$name', '$email', '$course','$gender','$birthdate','$phone','$address')";

if ($conn->query($sql) === TRUE) {
    echo "New student registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
