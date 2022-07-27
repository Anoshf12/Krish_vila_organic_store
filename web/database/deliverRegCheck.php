<?php

//$_POST empty check
if(empty($_POST)){
    header('Location:../my-account.php');
}else{
    // Password and Retype check
    if($_POST['psw'] == $_POST['repsw']){

        // Start the session and redirest to the CustomerReg.php
        session_start();
        foreach ($_POST as $key => $value) {
            ${$key} = $value;
            $_SESSION[$key] = $value;
        }

        //Driver-liscense Photo
        $banner=$_FILES['liscenseimg']['name']; 
        $expbanner=explode('.',$banner);
        $bannerexptype=$expbanner[1];
        date_default_timezone_set('Asia/Colombo');
        $date = date('m_d_Y_h_i_sa', time());
        $rand=rand(10000,99999);
        $encname=$date.'_'.$rand;
        $bannername=$encname.'.'.$bannerexptype;
        $bannerpathDeliverPhoto="uploads/deliver/liscense/".$bannername;
        move_uploaded_file($_FILES["liscenseimg"]["tmp_name"],$bannerpathDeliverPhoto);     

        $_SESSION['deliverDp'] = $bannerpathDeliverPhoto;

             // vehicle photo
        $banner1=$_FILES['bookimg']['name']; 
        $expbanner1=explode('.',$banner1);
        $bannerexptype1=$expbanner1[1];
        date_default_timezone_set('Asia/Colombo');
        $date1 = date('m_d_Y_h_i_sa', time());
        $rand1=rand(10000,99999);
        $encname1=$date1.'_'.$rand1;
        $bannername1=$encname1.'.'.$bannerexptype1;
        $vehicalBook="uploads/deliver/vehiclebook/".$bannername1;
        move_uploaded_file($_FILES["bookimg"]["tmp_name"],$vehicalBook);
    
        $_SESSION['vehiclebook'] = $vehicalBook;

        header('Location:deliverReg.php');
    }else{
        header('Location:../my-account.php');
    }
}


?>