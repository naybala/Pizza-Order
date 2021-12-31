<?php

$errorRole = "";
if (isset($_POST['btnEmployeeRoleRegister'])) {

    if ($_POST['newRole'] == null) {
        $errorRole = 'Need to filled ur Role';
    } else {
        $newRole = $_POST['newRole'];
    }

    if (@$newRole != null) {
        $selctDuplicate = mysqli_query($conn, "SELECT * FROM  role_table WHERE role_name = '" . $newRole . "'");
        $checkDuplicate = mysqli_num_rows($selctDuplicate);
        if ($checkDuplicate > 0) {
            @$errorDuplicate = "Employee Role Already Exists!";

        } else {
            $insertEmployeeRole = mysqli_query($conn, "INSERT INTO role_table( role_name  ) VALUES('" . $newRole . "' )");
            if ($insertEmployeeRole) {

                echo "<script>alert('Success');</script>";
                echo "<script>window.location.href='index.php?page=employee_page'</script>";

            }
        }
    }

}