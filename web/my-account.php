<?php include('head.php'); ?>
<?php include('header.php'); ?>
<div class="breadcrumb-area bg-image-3 ptb-150">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h3>MY ACCOUNT</h3>
        </div>
    </div>
</div>
<div class="container col-md-12">
    <div class="row">
        <form action="checkUser.php" method="post">
        <div class="col-md-12" style="padding-left: 100px;">
            <div class="billing-information-wrapper">
                <div class="account-info-wrapper" style="text-align: center;">
                    <h4 style="font-size: 35px;"> User Login Portal</h4>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="billing-info">
                            <label>Username</label>
                            <input type="text" name="username" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="billing-info">
                            <label>Password</label>
                            <input type="text" name="password" required>
                            <p style="text-align: right;"><a href="">Forgot password?</a></p>
                            <p style="text-align: center; padding-top: 30px;"><a href="" style="background:lightgrey; padding: 15px 35px; display: inline-block; margin-top: 0px; color: darkgreen; text-transform: uppercase; border-radius: 25px; text-align: center;">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <form action="checkUser.php" method="post">
        <div class="container col-md-12">
            <div class="billing-information-wrapper">
                <div class="account-info-wrapper" style="text-align: center;">
                    <h4 style="font-size: 35px;"> Admin Login Portal</h4>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="billing-info">
                            <label>Username</label>
                            <input type="text" name="username" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="billing-info">
                            <label>Password</label>
                            <input type="text"  name="password" required>
                            <p style="text-align: right;"><a href="">Forgot password?</a></p>
                            <p style="text-align: center; padding-top: 30px;"><a href="" style="background:lightgrey; padding: 15px 35px; display: inline-block; margin-top: 0px; color: darkgreen; text-transform: uppercase; border-radius: 25px; text-align: center;">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<div class="container" style="text-align: center; padding-top: 30px;">
    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Customer Registration Module</a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Farmer Registration Module</button>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Driver Registration Module</a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Password Reset Form</button>
    </p>
</div>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
                <div class="container col-md-12">
                    <div class="billing-information-wrapper">
                        <div class="account-info-wrapper" style="text-align: center;">
                            <h4>Customer Registration</h4>
                            <h5>Complete the form below to sign in as a customer.</h5>
                        </div>

                        <!-- customer registration form -->
                        <form action="database/customerRegCheck.php" method="post"enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info">
                                        <label>Name</label>
                                        <input type="text" name="customerName" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info">
                                        <label>Username</label>
                                         <input name="username" type="text" id="username" class="demoInputBox" onBlur="checkAvailability()"><span id="user-availability-status"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info">
                                        <label>Password</label>
                                        <input type="password" name="password" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info">
                                        <label>Retype Passowrd</label>
                                        <input type="password" name="re_password" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info">
                                        <label>Address</label>
                                        <input type="text" name="customerAddress" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info">
                                        <label for="district" style="padding-bottom: 12px;">District</label>
                                        <select name="district" id="district">
                                            <option value="colombo">Colombo</option>
                                            <option value="Nuwaraeliya">Nuwara eliya</option>
                                            <option value="kalutara">Kalutara</option>
                                            <option value="badulla">Badulla</option>
                                            <option value="moneragala">Moneragala</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info">
                                        <label>Telephone</label>
                                        <input type="text" name="customerPhone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info">
                                        <label for="img">profile picture</label>
                                        <input type="file" id="img" name="customerPhoto" accept="image/*" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info">
                                        <label>Email Address</label>
                                        <input type="email" name="customerEmail" required>
                                    </div>
                                </div>
                            </div>
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            <div class="billing-back-btn">
                                <div class="billing-back">
                                    <!-- <a href="#"><i class="ion-arrow-up-c"></i> back</a> -->
                                </div>
                                <!--
                            <div class="billing-btn">-->
                                <input type="submit"></button>
                                <!--
                            </div>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
                <div class="container col-md-12">
                    <div class="billing-information-wrapper">
                      
                        <div class="account-info-wrapper" style="text-align: center;">
                            <h4>Farmer Registration</h4>
                            <h5>Complete the form below to sign in as a farmer.</h5>
                        </div>
                        <form action="database/farmerRegCheck.php" method="POST" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Farmer Name</label>
                                    <input type="text" name="farmerName">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Farmer Username</label>
                                    <input type="text" name="farmerUsername">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Password</label>
                                    <input type="password" name="psw">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Re - Passowrd</label>
                                    <input type="password" name="repsw">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Farm Name</label>
                                    <input type="text" name="farmName">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Farm Username</label>
                                    <input type="text" name="farmUsername">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Farm Address</label>
                                    <input type="text" name="farmAddress">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label for="district" style="padding-bottom: 12px;">District</label>
                                    <select name="district" id="district">
                                        <option value="colombo">Colombo</option>
                                        <option value="Nuwaraeliya">Nuwara eliya</option>
                                        <option value="kalutara">Kalutara</option>
                                        <option value="badulla">Badulla</option>
                                        <option value="moneragala">Moneragala</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Farm Area(Square feet)</label>
                                    <input type="number" name="number">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Telephone</label>
                                    <input type="text" name="telephone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label for="img1">Farmer profile picture</label>
                                    <input type="file" id="farmerdp" name="farmerdp" accept="image/*" required>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label for="img2">Pictures of the farm</label>
                                    <input type="file[]" name="farmpic" multiple id="farmerPhoto"><br/> 
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info">
                                    <label>Email Address</label>
                                    <input type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="billing-back-btn">
                            <div class="billing-back">
                                <!-- <a href="#"><i class="ion-arrow-up-c"></i> back</a> -->
                            </div>
                            <div class="billing-btn">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="text-align: center; padding-top: 30px;">
    <!-- <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Driver Registration Module</a>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Password Reset Form</button>
        </p> -->
</div>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample3">
            <div class="card card-body">
                <div class="container col-md-12">
                    <div class="billing-information-wrapper">
                        <div class="account-info-wrapper" style="text-align: center;">
                            <h4>Driver Registration</h4>
                            <h5>Complete the form below to sign in as a Driver.</h5>
                        </div>
                        <form action="database/deliverRegCheck.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Delivery-person Name</label>
                                    <input type="text" name="personName" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Delivery-person Username</label>
                                    <input type="text" name="userName" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Password</label>
                                    <input type="password" name="psw" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Re-Password</label>
                                    <input type="password" name="repsw" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Driver-liscense Number</label>
                                    <input type="text" name="lisceneNum" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label for="img">Driver-liscense Photo</label>
                                    <input type="file" id="img" name="liscenseimg" accept="image/*" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Driver Telephone</label>
                                    <input type="text" name="telephone" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Farm Username</label>
                                    <input type="text" name="farmUsername" >
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info">
                                    <label>Driver-Email Address</label>
                                    <input type="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Vehicle-registration Number</label>
                                    <input type="text" name="vehicleReg" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Vehicle-type</label>
                                    <input type="text" name="vehicleType" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Vehicle-model</label>
                                    <input type="text" name="vehicleModel" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label for="img">Vehicle-book Photo</label>
                                    <input type="file" id="img" name="bookimg" accept="image/*" required>
                                </div>
                            </div>
                        </div>
                        <div class="billing-back-btn">
                            <div class="billing-back">
                                <!-- <a href="#"><i class="ion-arrow-up-c"></i> back</a> -->
                            </div>
                            <div class="billing-btn">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample4">
            <div class="card card-body">
                <div class="container col-md-12">
                    <div class="billing-information-wrapper">
                        <div class="account-info-wrapper" style="text-align: center;">
                            <h4>Reset password</h4>
                            <h5>Complete the form below to reset password.</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info">
                                    <label>Username</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info">
                                    <label>New Password</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info">
                                    <label>Retype New password</label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="billing-back-btn">
                            <div class="billing-back">
                                <!-- <a href="#"><i class="ion-arrow-up-c"></i> back</a> -->
                            </div>
                            <div class="billing-btn">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        function checkAvailability() {
            $("#loaderIcon").show();

            $.ajax({
                type: "POST",
                url: "check/check_customer.php",
                cache: false,
                data: {
                    type: 1,
                    username: $("#username").val(),
                },
                success: function(data) {
                    $("#user-availability-status").html(data);
                    $("#loaderIcon").hide(1000);
                }
            });
        }
    </script>
<?php include('footer.php'); ?>