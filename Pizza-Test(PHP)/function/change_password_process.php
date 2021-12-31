<?php

$errorNewPassword = $errorNewConfirmPassword = $errorOldPassword = "";
if (isset($_POST['changePassword'])) {
    $edit_id = $_REQUEST['action'];

    if ($_POST['oldPassword'] == null) {
        $errorOldPassword = 'Need to filled ur old password';
    } else {
        $oldPassword = $_POST['oldPassword'];
    }

    if ($_POST['newPassword'] == null) {
        $errorNewPassword = 'Need to filled ur New password';
    } else {
        $newPassword = $_POST['newPassword'];
    }

    if ($_POST['newConfirmPassword'] == null) {
        $errorNewConfirmPassword = 'Need to filled ur New Confirm password';
    } else {
        $newConfirmPassword = $_POST['newConfirmPassword'];
    }

    if (@$newPassword != null && @$newConfirmPassword && @$oldPassword != null) {
        $checkOldPassword = mysqli_query($conn, "SELECT * From employee_table WHERE employee_id='" . $edit_id . "'");
        $checkFinal = mysqli_fetch_assoc($checkOldPassword);
        if ($checkFinal['password'] == $oldPassword) {
            if (strlen($newPassword) > 6 && strlen($newConfirmPassword) > 6) {
                if ($newPassword == $newConfirmPassword) {
                    $updatePassword = mysqli_query($conn, "UPDATE employee_table SET password='" . $newPassword . "' WHERE employee_id='" . $edit_id . "'");

                    if ($updatePassword) {
                        echo "<script>alert('Success');</script>";
                        echo "<script>window.location.href='index.php?page=aboutme'</script>";

                    }

                } else {
                    $passwordMismatch = " Password Doesn't Match";

                }

            } else {
                $checkPasswordLength = 'password is too short';

            }
        } else {
            $checkOldPasswordFail = 'Old Password Does not Match';

        }
    }
}