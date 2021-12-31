<?php

$errorEmail = $errorPassword = "";
if (isset($_POST['btnLogin'])) {
    if ($_POST['email'] == null) {
        $errorEmail = 'Need to filled ur email';
    } else {
        $email = $_POST['email'];
    }

    if ($_POST['password'] == null) {
        $errorPassword = 'Need to filled ur password';
    } else {
        $password = $_POST['password'];
    }

    if (@$email != null && @$password != null) {

        // customer-----------------------------------------------------------------------------------------------------
        $customer = mysqli_query($conn, "SELECT * FROM customer_table WHERE email= '" . $email . "' AND password='" . $password . "' ");
        $dtrowCustomer = mysqli_fetch_assoc($customer);
        $dtnumberCustomer = mysqli_num_rows($customer);

        //employee----------------------------------------------------------------------------------------------------------
        $employee = mysqli_query($conn, "SELECT * FROM employee_table WHERE email= '" . $email . "' AND password='" . $password . "' ");
        $dtrowEmployee = mysqli_fetch_assoc($employee);
        $dtnumberEmployee = mysqli_num_rows($employee);

        if ($dtnumberCustomer > 0 && $dtrowCustomer['email'] == $email && $dtrowCustomer['password'] == $password) {
            $_SESSION['customer_name'] = $dtrowCustomer['name'];
            $_SESSION['customer_email'] = $dtrowCustomer['email'];
            $_SESSION['customer_address'] = $dtrowCustomer['address'];
            $_SESSION['customer_id'] = $dtrowCustomer['customer_id'];
            header('location:index.php?page=customer');

        } elseif ($dtnumberEmployee > 0 && $dtrowEmployee['email'] == $email && $dtrowEmployee['password'] == $password) {
            $_SESSION['employee_name'] = $dtrowEmployee['name'];
            $_SESSION['employee_id'] = $dtrowEmployee['employee_id'];
            $_SESSION['employee_role'] = $dtrowEmployee['role_id'];
            $_SESSION['employee_email'] = $dtrowEmployee['email'];
            $_SESSION['employee_phone'] = $dtrowEmployee['phone'];
            $_SESSION['employee_address'] = $dtrowEmployee['address'];
            header('location:index.php?page=admin_home_page');
        } else {
            $errorLogin = 'Wrong email or password';
        }

    }

}

// $errorEmail = $errorPassword = "";
// if (isset($_POST['btnLogin'])) {
//     if ($_POST['email'] == null) {
//         $errorEmail = 'Need to filled ur email';
//     } else {
//         $email = $_POST['email'];
//     }

//     if ($_POST['password'] == null) {
//         $errorPassword = 'Need to filled ur password';
//     } else {
//         $password = $_POST['password'];
//     }

//     if (@$email != null && @$password != null) {

//         // admin------------------------------------------------------------------------------------------------------
//         // $admin = mysqli_query($conn, "SELECT * FROM admin_table WHERE email= '" . $email . "' AND password='" . $password . "' ");
//         // $dtrowAdmin = mysqli_fetch_assoc($admin);
//         // $dtnumberAdmin = mysqli_num_rows($admin);

//         // customer-----------------------------------------------------------------------------------------------------
//         $customer = mysqli_query($conn, "SELECT * FROM customer_table WHERE email= '" . $email . "' AND password='" . $password . "' ");
//         $dtrowCustomer = mysqli_fetch_assoc($customer);
//         $dtnumberCustomer = mysqli_num_rows($customer);

//         //employee----------------------------------------------------------------------------------------------------------
//         $employee = mysqli_query($conn, "SELECT * FROM employee_table WHERE email= '" . $email . "' AND password='" . $password . "' ");
//         $dtrowEmployee = mysqli_fetch_assoc($employee);
//         $dtnumberEmployee = mysqli_num_rows($employee);

//         // if ($dtnumberAdmin > 0 && $dtrowAdmin['email'] == $email && $dtrowAdmin['password'] == $password) {
//         //     $_SESSION['admin_name'] = $dtrowAdmin['name'];
//         //     $_SESSION['admin_id'] = $dtrowAdmin['admin_id'];
//         //     header('location:index.php?page=admin_home_page');

//         // } else
//         if ($dtnumberCustomer > 0 && $dtrowCustomer['email'] == $email && $dtrowCustomer['password'] == $password) {
//             $_SESSION['customer_name'] = $dtrowCustomer['name'];
//             $_SESSION['customer_email'] = $dtrowCustomer['email'];
//             $_SESSION['customer_address'] = $dtrowCustomer['address'];
//             $_SESSION['customer_id'] = $dtrowCustomer['customer-id'];
//             // echo $_SESSION['customer_email'];
//             header('location:index.php?page=customer');

//         } elseif ($dtnumberEmployee > 0 && $dtrowEmployee['email'] == $email && $dtrowEmployee['password'] == $password) {
//             $_SESSION['employee_name'] = $dtrowEmployee['name'];
//             $_SESSION['employee_id'] = $dtrowEmployee['employee_id'];
//             $_SESSION['employee_role'] = $dtrowEmployee['role_id'];
//             $_SESSION['employee_email'] = $dtrowEmployee['email'];
//             $_SESSION['employee_phone'] = $dtrowEmployee['phone'];
//             $_SESSION['employee_address'] = $dtrowEmployee['address'];
//             header('location:index.php?page=employee');
//         } else {
//             $errorLogin = 'Wrong email or password';
//         }

//     }

// }