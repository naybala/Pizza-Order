<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
require_once 'employeeRegisterStyle.php';
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
require_once 'function/employee_insert_process.php';
?>



    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="images/loader.gif" alt="" style=width:50%;>
                <h3 class="mb-5">Welcome</h3>

                <div class="div">
                    <!-- <p>Already Have an account!Login Here</p> -->
                </div>
                <a href="index.php?page=home_page">
                    <input type="submit" name="" value=" <Back" /><br />
                </a>
            </div>
            <div class="col-md-9 register-right">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register Here</h3>
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
                                <div class="form-group mb-2">
                                    <label for="">Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Enter Your Phone"
                                        name="phone" value="<?php echo htmlspecialchars(@$phone); ?>" />
                                    <small class="text-danger"><?php echo $errorPhone; ?></small>
                                </div>

                                <!-- password ---------------------------------------------------------------->
                                <div class="form-group mb-1">
                                    <label for="">Password(Password Length Must be Greater Than 6)</label>
                                    <input type="password" class="form-control" placeholder="Enter Your Password"
                                        name="password" value="<?php echo htmlspecialchars(@$password); ?>" />
                                    <small class="text-danger"><?php echo $errorPassword; ?></small>
                                    <small class="text-danger"><?php echo $passwordMismatch; ?></small>
                                    <!-- <small class="text-danger"><?php echo $weakPassword; ?></small> -->
                                    <small class="text-danger"><?php echo $checkPasswordLength; ?></small>
                                </div>
                                <div class="form-group mb-1">
                                    <label for="">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        name="confirmPassword"
                                        value="<?php echo htmlspecialchars(@$confirmPassword); ?>" />
                                    <small class="text-danger"><?php echo $errorConfirmPassword; ?></small>
                                    <small class="text-danger"><?php echo $passwordMismatch; ?></small>
                                    <!-- <small class="text-danger"><?php echo $weakPassword; ?></small> -->
                                    <small class="text-danger"><?php echo $checkPasswordLength; ?></small>
                                </div>

                                <!-- selected box ---------------------------------------------------------->
                                <div class="form-group mb-1">
                                    <label for="">Select Position</label>
                                    <select class="form-select" aria-label="Default select example" name="select">
                                        <option selected value="empty">Open this select menu</option>
                                        <?php $selectRole = mysqli_query($conn, "SELECT * FROM role_table");
while ($role = mysqli_fetch_assoc($selectRole)) {
    ?>
                                        <option value="<?php echo $role['role_id']; ?>">
                                            <?php echo $role['role_name']; ?>
                                        </option>
                                        <?php
}
?>
                                        <!-- <option value="1">Mananger</option>
                                        <option value="2">Secretary</option>
                                        <option value="3">Staff</option>
                                        <option value="4">worker</option> -->
                                    </select>
                                    <small class="text-danger"><?php echo $errorSelect; ?></small>
                                </div>

                                <!-- Address------------------------------------------------------------ -->
                                <div class="form-group mb-3">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" cols="30" rows="5"
                                        placeholder="Enter Address" name="address"
                                        value="<?php echo htmlspecialchars(@$address); ?>" />
                                    <!-- <textarea class="form-control" cols="30" rows="5" placeholder="Enter Address" name="address" value="<?php echo htmlspecialchars(@$address); ?>"></textarea> -->

                                    <small class="text-danger"><?php echo $errorAddress; ?></small>
                                </div>


                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="submit"
                                        name="btnEmployeeRegister">Register</button>
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