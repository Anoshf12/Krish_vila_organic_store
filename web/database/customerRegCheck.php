<?php

//$_POST empty check

if(empty($_POST)){
    header('Location:../my-account.php');
}else{
    // Password and Retype check
    if($_POST['password'] == $_POST['re_password']){

        // Start the session and redirest to the CustomerReg.php
        session_start();
        foreach ($_POST as $key => $value) {
            ${$key} = $value;
            $_SESSION[$key] = $value;
        }
            // Customer photo
        $banner=$_FILES['customerPhoto']['name']; 
        $expbanner=explode('.',$banner);
        $bannerexptype=$expbanner[1];
        date_default_timezone_set('Asia/Colombo');
        $date = date('m_d_Y_h_i_sa', time());
        $rand=rand(10000,99999);
        $encname=$date.'_'.$rand;
        $bannername=$encname.'.'.$bannerexptype;
        $bannerpathCustomerPhoto="uploads/customers/".$bannername;
        move_uploaded_file($_FILES["customerPhoto"]["tmp_name"],$bannerpathCustomerPhoto);     

        $_SESSION['customerDp'] = $bannerpathCustomerPhoto;

        header('Location:customerReg.php');
    }else{
        header('Location:../my-account.php');
    }
}

?>