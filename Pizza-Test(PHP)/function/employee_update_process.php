<?php

if (isset($_POST['update'])) {
    $edit_id = $_REQUEST['action'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $select = $_POST['select'];
    $address = $_POST['address'];

    $selctDuplicate = mysqli_query($conn, "SELECT * FROM  employee_table  WHERE email='" . $email . "'");
    $selctDuplicateFinal = mysqli_query($conn, "SELECT * FROM  employee_table  WHERE employee_id='" . $edit_id . "'");
    $checkDuplicate = mysqli_num_rows($selctDuplicate);
    $checkDuplicateFinal = mysqli_fetch_assoc($selctDuplicateFinal);

    if ($checkDuplicateFinal['email'] == $email) {

        $updateEmployee = mysqli_query($conn, "UPDATE employee_table SET name='" . $name . "', email='" . $email . "', phone='" . $phone . "', role_id='" . $select . "',address='" . $address . "' WHERE employee_id='" . $edit_id . "' ");

        if ($updateEmployee) {
            echo "<script>alert('Success');</script>";
            echo "<script>window.location.href='index.php?page=employee_page'</script>";
        }
    } else {

        if ($checkDuplicate == 1) {
            @$errorDuplicate = "Email Already Exists!";

        } else {

            $updateEmployee = mysqli_query($conn, "UPDATE employee_table SET name='" . $name . "', email='" . $email . "', phone='" . $phone . "', role_id='" . $select . "',address='" . $address . "' WHERE employee_id='" . $edit_id . "' ");

            if ($updateEmployee) {
                echo "<script>alert('Success');</script>";
                echo "<script>window.location.href='index.php?page=employee_page'</script>";
            }
        }
    }

}

// $rowEmployee = mysqli_fetch_assoc($updateEmployee);
// $updateEmployee = mysqli_query($conn, "UPDATE employee_table SET name='" . $name . "', email='" . $email . "', phone='" . $phone . "', role_id='" . $select . "',address='" . $address . "' WHERE employee_id='" . $edit_id . "' ");

//         if ($updateEmployee) {
//             echo "<script>alert('Success');</script>";
//             echo "<script>window.location.href='index.php?page=employee_page'</script>";
//         }

///--------------------------------------------------------------------------------------------

// if ($checkDuplicate == 1) {
//     @$errorDuplicate = "Email Already Exists!";

// } else {
//     $updateEmployee = mysqli_query($conn, "UPDATE employee_table SET name='" . $name . "', email='" . $email . "', phone='" . $phone . "', role_id='" . $select . "',address='" . $address . "' WHERE employee_id='" . $edit_id . "' ");

//     if ($updateEmployee) {
//         echo "<script>alert('Success');</script>";
//         echo "<script>window.location.href='index.php?page=employee_page'</script>";
//     }
// }