<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
require_once 'registerStyle.php';
?>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <?php
require_once 'function/customer_insert_process.php';
?>



    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="images/loader.gif" alt="" style=width:50%;>
                <h3>Welcome</h3>

                <div class="div">
                    <p>Already Have an account!Login Here</p>
                </div>
                <a href="index.php?page=login">
                    <input type="submit" name="" value="Login" /><br />
                </a>
                <a href="index.php?page=back">
                    <input type="submit" name="" value=" < Back to Wesbsite" /><br />
                </a>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Customer Register Here</h3>
                        <form action="" method='POST'>
                            <div class="row register-form">
                                <!-- name------------------------------------------------------------ -->
                                <div class="form-group mb-1">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name"
                                        value="<?php echo htmlspecialchars(@$name); ?>" />
                                    <small class="text-danger"><?php echo $errorName; ?></small>
                                </div>

                                <!-- email------------------------------------------------------------ -->
                                <div class="form-group mb-1">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email"
                                        value="<?php echo htmlspecialchars(@$email); ?>" />
                                    <small class="text-danger"><?php echo $errorEmail; ?></small>
                                    <small class="text-danger"><?php echo @$errorDuplicate; ?></small>
                                </div>

                                <!-- phone------------------------------------------------------------ -->
                                <div class="form-group mb-1">
                                    <label for="">Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Enter Your Phone"
                                        name="phone" value="<?php echo htmlspecialchars(@$phone); ?>" />
                                    <small class="text-danger"><?php echo $errorPhone; ?></small>
                                </div>

                                <!-- password ---------------------------------------------------------------->
                                <div class="form-group mb-1">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Your Password"
                                        name="password" value="<?php echo htmlspecialchars(@$password); ?>" />
                                    <small class="text-danger"><?php echo $errorPassword; ?></small>
                                    <small class="text-danger"><?php echo $passwordMismatch; ?></small>
                                    <small class="text-danger"><?php echo $checkPasswordLength; ?></small>
                                </div>
                                <div class="form-group mb-1">
                                    <label for="">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        name="confirmPassword" value="<?php echo htmlspecialchars(@$password); ?>" />
                                    <small class="text-danger"><?php echo $errorConfirmPassword; ?></small>
                                    <small class="text-danger"><?php echo $passwordMismatch; ?></small>
                                    <small class="text-danger"><?php echo $checkPasswordLength; ?></small>
                                </div>

                                <!-- Address------------------------------------------------------------ -->
                                <div class="form-group mb-3">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" cols="30" rows="5"
                                        placeholder="Enter Address" name="address"
                                        value="<?php echo htmlspecialchars(@$address); ?>" />
                                    <small class="text-danger"><?php echo $errorAddress; ?></small>
                                </div>

                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="submit"
                                        name="btnCustomerRegister">Register</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

</body>

</html>