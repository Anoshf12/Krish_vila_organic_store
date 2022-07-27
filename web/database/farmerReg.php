<?php 
    include ("connection.php");
    include("functions/password.php");
    session_start();
    // echo"<pre>";
    // var_dump($_SESSION);
    
    // echo"</pre>";
   
    if(empty($_SESSION)){
        header('Location:../my-account.php');
        session_destroy();
    }

    $farmerName     = $_SESSION['farmerName']; 
    $farmerUserName = $_SESSION['farmerUsername'];
    $password       = $_SESSION['repsw'];
    $farmName       = $_SESSION['farmName'];
    $farmUserName   = $_SESSION['farmUsername'];
    $farmAddress    = $_SESSION['farmAddress'];
    $district       = $_SESSION['district'];
    $farmArea       = $_SESSION['number'];
    $telephone      = $_SESSION['telephone'];
    $email          = $_SESSION['email'];    
    $farmerDp       = $_SESSION['farmerdp'];
    $farmDp         = $_SESSION['farmpic'];
    $farmerStatus   = 0;

    passwordEncrypter($password);
    $password         = $encryptedPassword;

    //Farmer Table
    $sql = "INSERT INTO farmer(farmerUsername, farmerName, farmerPassword, farmerPhone, farmerPhoto, farmerEmail,farmerStatus) 
    VALUES ('$farmerUserName', '$farmerName', '$password', '$telephone', '$farmerDp', '$email','$farmerStatus')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //Farm Table
    $sql2 = "INSERT INTO farm (farmerUsername, farmName, farmUsername, farmAddress, farmDistrict, farmArea) 
    VALUES ('$farmerUserName', '$farmName', '$farmUserName', '$farmAddress', '$district', '$farmArea')";

    if ($conn->query($sql2) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }

    //Farmphoto Table
    $sql3 = "INSERT INTO farmphoto(farmDp) VALUES ('$farmDp')";

    if ($conn->query($sql3) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql3 . "<br>" . $conn->error;
    }

    
    session_destroy();    
    $conn->close();



?>