<?php
include ("web/database/connection.php");
include("web/database/functions/password.php");
$inUserName     =$_POST['username'];
$inPassword     =$_POST['password'];
passwordEncrypter($inPassword);
$inPassword = $encryptedPassword;

//echo "$inPassword";

// Block url in address bar
if(empty($_POST)){   
    header('Location:index.php');
// Check the customer table
}else{

    //Customer Table Check
    $sql1 = "SELECT customerUsername, customerPassword FROM customer";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        if($inUserName == $row["customerUsername"] && $inPassword == $row["customerPassword"]){

            header('Location:web/index.php');
        }
    }
    } 


    //Farmer table check

    $sql2 = "SELECT farmerUsername, farmerPassword, farmerStatus FROM farmer";
    $result2 = $conn->query($sql2);


    if ($result2->num_rows > 0) {
        // output data of each row
        while($row = $result2->fetch_assoc()) {
            if(($inUserName == $row["farmerUsername"] && $inPassword == $row["farmerPassword"]) && $row["farmerStatus"] == 1){

                header('Location:web/index.php');
            }
    }
    } 

    //Deliver table Check

    //Farmer table check

    $sql3 = "SELECT deliverUsername, deliverPassword, deliverStatus FROM deliver";
    $result3 = $conn->query($sql3);


    if ($result3->num_rows > 0) {
        // output data of each row
        while($row = $result3->fetch_assoc()) {
            if(($inUserName == $row["deliverUsername"] && $inPassword == $row["deliverPassword"]) && $row["deliverStatus"] == 1){

                header('Location:web/index.php');
            }
    }
    }
    
    if($inUserName == 'admin' && $inPassword == 'admin'){
        header('Location:web/index.php');
    }

}

?>