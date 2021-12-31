<?php

$errorName = $errorEmail = $errorPhone = $errorPassword = $errorConfirmPassword = $errorSelect = $errorAddress = $passwordMismatch = $checkPasswordLength = "";
if (isset($_POST['btnEmployeeRegister'])) {

    if ($_POST['name'] == null) { // ||$_POST['name']=='' || empty($_POST['name'])
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

    if ($_POST['select'] == 'empty') {
        $errorSelect = 'Need to filled ur selescted box';
    } else {
        $select = $_POST['select'];
    }

    if ($_POST['address'] == null) {
        $errorAddress = 'Need to filled ur address';
    } else {
        $address = $_POST['address'];
    }

    if (@$name != null && @$email != null && @$phone != null && @$address != null && @$password != null && @$confirmPassword != null && @$select != 'empty') {
        if (strlen($password) > 6 && strlen($confirmPassword) > 6) {
            if ($password == $confirmPassword) {
                $selctDuplicate = mysqli_query($conn, "SELECT * FROM  employee_table WHERE email = '" . $email . "'");
                $checkDuplicate = mysqli_num_rows($selctDuplicate);
                if ($checkDuplicate == 1) {
                    @$errorDuplicate = "Email Already Exists!";

                } else {
                    $admin_id = 1;
                    $insertEmployee = mysqli_query($conn, "INSERT INTO employee_table(name , email , phone , password , role_id , address,admin_id) VALUES('" . $name . "','" . $email . "','" . $phone . "','" . $password . "','" . $select . "','" . $address . "', '" . $admin_id . "')");
                    if ($insertEmployee) {
                        echo "<script>alert('Success');</script>";
                        echo "<script>window.location.href='index.php?page=employee_page'</script>";

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

// function checkStrongPassword($password)
// {
//     $upperStatus = false;
//     $lowerStatus = false;
//     $numberStatus = false;

//     if (preg_match('/[A-Z]/', $password)) {
//         $upperStatus = true;
//     }
//     if (preg_match('/[a-z]/', $password)) {
//         $lowerStatus = true;
//     }
//     if (preg_match('/[0-9]/', $password)) {
//         $numberStatus = true;
//     }

//     if ($upperStatus && $lowerStatus && $numberStatus) {
//         return true;
//     } else {
//         return false;
//     }
// }

// $errorName = $errorEmail = $errorPhone = $errorPassword = $errorConfirmPassword = $errorSelect = $errorAddress = $passwordMismatch = $weakPassword = $checkPasswordLength = "";
// if (isset($_POST['btnEmployeeRegister'])) {

//     if ($_POST['name'] == null) { // ||$_POST['name']=='' || empty($_POST['name'])
//         $errorName = 'Need to filled ur name';
//     } else {
//         $name = $_POST['name'];
//     }

//     if ($_POST['email'] == null) {
//         $errorEmail = 'Need to filled ur email';
//     } else {
//         $email = $_POST['email'];
//     }

//     if ($_POST['phone'] == null) {
//         $errorPhone = 'Need to filled ur phone';
//     } else {
//         $phone = $_POST['phone'];
//     }

//     if ($_POST['password'] == null) {
//         $errorPassword = 'Need to filled ur password';
//     } else {
//         $password = $_POST['password'];
//     }

//     if ($_POST['confirmPassword'] == null) {
//         $errorConfirmPassword = 'Need to filled ur password';
//     } else {
//         $confirmPassword = $_POST['confirmPassword'];
//     }

//     if ($_POST['select'] == 'empty') {
//         $errorSelect = 'Need to filled ur selescted box';
//     } else {
//         $select = $_POST['select'];
//     }

//     if ($_POST['address'] == null) {
//         $errorAddress = 'Need to filled ur address';
//     } else {
//         $address = $_POST['address'];
//     }

//     if (@$name != null && @$email != null && @$phone != null && @$address != null && $password != null && $confirmPassword != null) {
//         if (strlen($password) > 6 && strlen($confirmPassword) > 6) {
//             if ($password == $confirmPassword) {
//                 $status = checkStrongPassword($password);
//                 if ($status) {
//                     echo $email . '<br>';
//                     echo $name . '<br>';
//                     echo $password . '<br>';

//                     echo $select . '<br>';
//                     echo $phone . '<br>';
//                     echo $address . '<br>';
//                 } else {
//                     $weakPassword = 'password is Weak';
//                 }
//             } else {
//                 $passwordMismatch = " Password Doesn't Match";
//             }

//         } else {
//             $checkPasswordLength = 'password is too short';
//         }

//     }

// }