<?php

//$_POST empty check
if(empty($_POST)){
    header('Location:../my-account.php');
}else{
    // Password and Retype check
    if($_POST['psw'] == $_POST['repsw']){

        // Start the session and redirest to the farmerReg.php
        session_start();
        foreach ($_POST as $key => $value) {
            ${$key} = $value;
            $_SESSION[$key] = $value;
        }
            // Farmer photo
        $banner=$_FILES['farmerdp']['name']; 
        $expbanner=explode('.',$banner);
        $bannerexptype=$expbanner[1];
        date_default_timezone_set('Asia/Colombo');
        $date = date('m_d_Y_h_i_sa', time());
        $rand=rand(10000,99999);
        $encname=$date.'_'.$rand;
        $bannername=$encname.'.'.$bannerexptype;
        $bannerpathFarmerPhoto="uploads/farmers/".$bannername;
        move_uploaded_file($_FILES["farmerdp"]["tmp_name"],$bannerpathFarmerPhoto);

        // Farm photo
       $banner1=$_FILES['farmpic']['name']; 
       $expbanner1=explode('.',$banner1);
       $bannerexptype1=$expbanner1[1];
       date_default_timezone_set('Asia/Colombo');
       $date1 = date('m_d_Y_h_i_sa', time());
       $rand1=rand(10000,99999);
       $encname1=$date1.'_'.$rand1;
       $bannername1=$encname1.'.'.$bannerexptype1;
       $bannerpathFarmerPhoto1="uploads/farmers/farms/".$bannername1;
       move_uploaded_file($_FILES["farmpic"]["tmp_name"],$bannerpathFarmerPhoto1);

       $_SESSION['farmerdp'] = $bannerpathFarmerPhoto;
       $_SESSION['farmpic'] = $bannerpathFarmerPhoto1;


        header('Location:farmerReg.php');
    }else{
        header('Location:../my-account.php');
    }
}


?>