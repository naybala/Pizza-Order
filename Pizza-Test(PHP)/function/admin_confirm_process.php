<?php
if (isset($_POST['btnAdminConfirm'])) {
    $remark = (rand(10, 100));
    $vocher_code = (rand(1000, 50000));
    $today = date("Y-m-d H:i:s");
    $order_id = $_POST['order_id'];

    $finalConfirm = mysqli_query($conn, "UPDATE order_table SET order_status = '" . 1 . "',remark= '" . $remark . "',vocher_code='" . $vocher_code . "',confirm_date='" . $today . "' WHERE order_id='" . $order_id . "'");

}