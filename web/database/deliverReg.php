<?php 
    include ("connection.php");
    include('functions/password.php');

    session_start();

    // echo"<pre>";
    // var_dump($_SESSION);
    
    // echo"</pre>";

    if(empty($_SESSION)){
        header('Location:../my-account.php');
        session_destroy();
    }


    $deliverPersonName      = $_SESSION['personName'];
    $deliverUsername        = $_SESSION['userName'];
    $password               = $_SESSION['repsw'];
    $driverLisceneNum       = $_SESSION['lisceneNum'];
    $driverTelephone        = $_SESSION['telephone'];
    $farmUserName           = $_SESSION['farmUsername'];
    $email                  = $_SESSION['email'];
    $vehicleRegNum          = $_SESSION['vehicleReg'];
    $vehicleType            = $_SESSION['vehicleType'];
    $vehicleModel           = $_SESSION['vehicleModel'];
    $deliverStatus          = 0;
    $deliverPhoto           = $_SESSION['deliverDp'];
    $vehicleBook            = $_SESSION['vehiclebook'];

    passwordEncrypter($password);
    $password         = $encryptedPassword;

    //Deliver Table
    $sql4 = "INSERT INTO deliver(deliverUsername, deliverName, deliverStatus, deliverPassword, deliverLicenseNo, deliverLicensePhoto, deliverPhone, farmUserName, deliverEmail, deliverVehicleRegNo, deliverVehicleType, deliverVehicleModel, deliverVehicalBookPhoto) 
    VALUES ('$deliverUsername', '$deliverPersonName', '$deliverStatus', '$password', '$driverLisceneNum ', '$deliverPhoto', '$driverTelephone', '$farmUserName', '$email', '$vehicleRegNum', '$vehicleType', '$vehicleModel', '$vehicleBook')";

    if ($conn->query($sql4) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql4 . "<br>" . $conn->error;
    }

    session_destroy();
 
?> 