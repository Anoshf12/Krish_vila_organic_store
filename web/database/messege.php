<?php 
include ("connection.php");


    $fullName   = $_POST['name']; 
    $email      = $_POST['email'];
    $subject    = $_POST['subject'];
    $message    = $_POST['message'];


$sql = "INSERT INTO messenger (fullName, email, subject, message) 
VALUES ('$fullName', '$email', '$subject' ,'$message')";

if ($conn->query($sql) === TRUE) {
  echo "Message sent";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>