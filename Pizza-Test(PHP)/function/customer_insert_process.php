<?php

$errorName = $errorEmail = $errorPhone = $errorPassword = $errorConfirmPassword = $errorAddress = $passwordMismatch = $checkPasswordLength = "";
if (isset($_POST['btnCustomerRegister'])) {

    if ($_POST['name'] == null) {
        $errorName = 'Need to filled ur name';
    } else {
        $name = $_POST['name'];
    }

    if ($_POST['email'] == null) {
        $errorEmail = 'Need to filled ur email';
    } else {
        $email = $_POST['email'];
    }

    if ($_POST['phone'] == null) {
        $errorPhone = 'Need to filled ur phone';
    } else {
        $phone = $_POST['phone'];
    }

    if ($_POST['password'] == null) {
        $errorPassword = 'Need to filled ur password';
    } else {
        $password = $_POST['password'];
    }

    if ($_POST['confirmPassword'] == null) {
        $errorConfirmPassword = 'Need to filled ur password';
    } else {
        $confirmPassword = $_POST['confirmPassword'];
    }

    if ($_POST['address'] == null) {
        $errorAddress = 'Need to filled ur address';
    } else {
        $address = $_POST['address'];
    }

    if (@$name != null && @$email != null && @$phone != null && @$address != null && @$password != null && @$confirmPassword != null) {
        if (strlen($password) > 6 && strlen($confirmPassword) > 6) {
            if ($password == $confirmPassword) {
                $selctDuplicate = mysqli_query($conn, "SELECT * FROM customer_table WHERE email = '" . $email . "'");
                $checkDuplicate = mysqli_num_rows($selctDuplicate);
                if ($checkDuplicate == 1) {
                    @$errorDuplicate = "Email Already Exists!";

                } else {
                    $insertCustomer = mysqli_query($conn, "INSERT INTO customer_table ( name , email , phone , password , address) VALUES('" . $name . "','" . $email . "','" . $phone . "','" . $password . "','" . $address . "')");

                    if ($insertCustomer) {
                        $_SESSION['customer_success)'] = $insertCustomer['name'];
                        echo "<script>alert('Success');</script>";
                        echo "<script>window.location.href='index.php?page=login'</script>";

                    }

                }

            } else {
                $passwordMismatch = " Password Doesn't Match";
            }

        } else {
            $checkPasswordLength = 'password is too short';
        }
    }
}