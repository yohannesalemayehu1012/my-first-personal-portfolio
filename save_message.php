<?php
$connection = mysqli_connect("localhost", "root", "", "portfolio");

if (!$connection) {
    die("Connection Failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (name, email, phone, subject, message) 
        VALUES ('$name', '$email', '$phone', '$subject', '$message')";

if (mysqli_query($connection, $sql)) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
