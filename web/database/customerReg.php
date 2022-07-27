<?php 

    include('functions/password.php');
    include ("connection.php");
    
    session_start();
    // echo"<pre>";
    // var_dump($_SESSION);
    
    // echo"</pre>";

    if(empty($_SESSION)){
        header('Location:../my-account.php');
        session_destroy();
    }

    $customerName     = $_SESSION['customerName']; 
    $customerUserName = $_SESSION['username'];
    $password         = $_SESSION['re_password'];
    $customerAddress  = $_SESSION['customerAddress'];
    $customerDistrict = $_SESSION['district'];
    $customerPhone    = $_SESSION['customerPhone'];
    $customerEmail    = $_SESSION['customerEmail'];
    $customerPhoto    = $_SESSION['customerDp'];

    passwordEncrypter($password);
    $password         = $encryptedPassword;

    $sql = "INSERT INTO customer (customerName, customerUsername, customerPassword, customerAddress, customerDistrict, customerPhone, customerProfile, customerEmail) 
    VALUES ('$customerName', '$customerUserName', '$password', '$customerAddress', '$customerDistrict', '$customerPhone', '$customerEmail', '$customerPhoto')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

session_destroy();
?>