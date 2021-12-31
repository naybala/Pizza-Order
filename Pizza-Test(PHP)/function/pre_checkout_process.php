<?php
$errorPm = '';
if (isset($_POST['btncheckout'])) {

    if (@$_POST['pm'] == null) {
        @$errorPm = "need to choose payment method";
    } else {
        $pm = @$_POST['pm'];
    }

    $ship = @$_POST['ship1'];
    $next = @$_POST['shipnext'];
    $customer_id = @$_SESSION['customer_id'];
    $name = @$_POST['name'];
    $email = @$_POST['email'];
    $phone = @$_POST['phone'];
    $address = @$_POST['address'];
    $oldName = @$_POST['oldName'];
    $oldEmail = @$_POST['oldEmail'];
    $oldPhone = @$_POST['oldPhone'];
    $oldAddress = @$_POST['oldAddress'];
    if ($ship == 1 && @$pm != null) {
        $insertPre1 = mysqli_query($conn, "INSERT INTO pre_order_table (pre_customer_id ,pre_order_name , pre_order_email , pre_order_phone ,pre_order_address,payment_id) VALUES ('" . $customer_id . "','" . $oldName . "','" . $oldEmail . "','" . $oldPhone . "','" . $oldAddress . "','" . @$pm . "') ");
        echo "<script>window.location.href='index.php?page=checkoutconfirm'</script>";

    } else {
        if ($name != null && $email != null && $phone != null && $address != null && @$pm != null) {
            $insertPre = mysqli_query($conn, "INSERT INTO pre_order_table (pre_customer_id ,pre_order_name , pre_order_email , pre_order_phone ,pre_order_address,payment_id) VALUES ('" . $customer_id . "','" . $name . "','" . $email . "','" . $phone . "','" . $address . "','" . @$pm . "') ");
            echo "<script>window.location.href='index.php?page=checkoutconfirm'</script>";

        }
        $errorShip = "if u don't want to fill ur info select need ";

    }

}