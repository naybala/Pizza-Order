<?php
if (isset($_POST['btnOrderConfirm'])) {
    $pre_id = $_POST['pre_id'];
    $payment_id = $_POST['payment_id'];
    $cus_id = $_POST['cus_id'];
    $total_quantity = $_POST['total_quantity'];
    $total_price = $_POST['total_price'];
    $order_email = $_POST['order_email'];

    if (@$_POST['cardName'] == null) {
        $errorCardName = "Please Fill ur Card Name";
    } else {
        $cardName = $_POST['cardName'];
    }
    if (@$_POST['cardNumber'] == null) {
        $errorCardNum = "Please Fill ur Card Number";
    } else {
        $cardNumber = $_POST['cardNumber'];
    }

    if (@$_POST['expiration'] == null) {
        $errorExp = "Please Fill ur Expiration";
    } else {
        $expiration = $_POST['expiration'];
    }
    if (@$_POST['CVV'] == null) {
        $errorCvv = "Please Fill ur CVV";
    } else {
        $cvv = $_POST['CVV'];
    }

    if ($payment_id == 1) {

        $insertOrder = mysqli_query($conn, "INSERT INTO order_table (customer_id,payment_id,order_email,order_status,order_total_quantity,order_total_price)VALUES('" . $cus_id . "','" . $payment_id . "','" . $order_email . "','" . 0 . "','" . $total_quantity . "','" . $total_price . "')");
        if ($insertOrder) {

            $order = mysqli_query($conn, "SELECT order_id FROM order_table ORDER BY order_id DESC LIMIT 1");
            $rowOrder = mysqli_fetch_assoc($order);
            $rowOrder_id = $rowOrder['order_id'];
            $preOrder = mysqli_query($conn, "SELECT * FROM pre_order_table WHERE pre_customer_id ='" . $cus_id . "'");
            $rowPreOrder = mysqli_fetch_assoc($preOrder);
            $table = mysqli_query($conn, "SELECT * FROM cart_table,product_table WHERE cart_table.product_id = product_table.product_id AND customer_id ='" . $cus_id . "'");
            while ($rowTable = mysqli_fetch_assoc($table)) {
                $insertOrderDetail = mysqli_query($conn, "INSERT INTO order_detail_table(order_id,product_id,product_name,quantity,total_price) VALUES ('" . $rowOrder_id . "','" . $rowTable['product_id'] . "','" . $rowTable['product_name'] . "','" . $rowTable['quantity'] . "','" . $rowTable['total_price'] . "')");

            }
            $insertShipping = mysqli_query($conn, "INSERT INTO shipping_table(customer_id,order_id,shipping_name,shipping_phone,shipping_address) VALUES('" . $cus_id . "','" . $rowOrder_id . "','" . $rowPreOrder['pre_order_name'] . "','" . $rowPreOrder['pre_order_phone'] . "','" . $rowPreOrder['pre_order_address'] . "')");

            $deletePreOrder = mysqli_query($conn, "DELETE FROM pre_order_table WHERE pre_order_id='" . $pre_id . "'");
            $deleteCart = mysqli_query($conn, "DELETE FROM cart_table WHERE customer_id='" . $cus_id . "'");
            echo "<script>window.location.href='index.php?page=customerDeatil'</script>";

        }
    } else {
        if (@$cardName != null && @$cardNumber != null && @$expiration != null && @$cvv) {
            $insertCard = mysqli_query($conn, "INSERT INTO paymentcard_table( cardname , cardnumber ,expiration,cvv,payment_id) VALUES('" . $cardName . "' , '" . $cardNumber . "' ,'" . $expiration . "','" . $cvv . "','" . $payment_id . "') ");
            if ($insertCard) {
                $insertOrder1 = mysqli_query($conn, "INSERT INTO order_table (customer_id,payment_id,order_email,order_status,order_total_quantity,order_total_price)VALUES('" . $cus_id . "','" . $payment_id . "','" . $order_email . "','" . 0 . "','" . $total_quantity . "','" . $total_price . "')");
                if ($insertOrder1) {

                    $order = mysqli_query($conn, "SELECT order_id FROM order_table ORDER BY order_id DESC LIMIT 1");
                    $rowOrder = mysqli_fetch_assoc($order);
                    $rowOrder_id = $rowOrder['order_id'];
                    $preOrder = mysqli_query($conn, "SELECT * FROM pre_order_table WHERE pre_customer_id ='" . $cus_id . "'");
                    $rowPreOrder = mysqli_fetch_assoc($preOrder);
                    $table = mysqli_query($conn, "SELECT * FROM cart_table,product_table WHERE cart_table.product_id = product_table.product_id AND customer_id ='" . $cus_id . "'");
                    while ($rowTable = mysqli_fetch_assoc($table)) {
                        $insertOrderDetail = mysqli_query($conn, "INSERT INTO order_detail_table(order_id,product_id,product_name,quantity,total_price) VALUES ('" . $rowOrder_id . "','" . $rowTable['product_id'] . "','" . $rowTable['product_name'] . "','" . $rowTable['quantity'] . "','" . $rowTable['total_price'] . "')");

                    }
                    $insertShipping = mysqli_query($conn, "INSERT INTO shipping_table(customer_id,order_id,shipping_name,shipping_phone,shipping_address) VALUES('" . $cus_id . "','" . $rowOrder_id . "','" . $rowPreOrder['pre_order_name'] . "','" . $rowPreOrder['pre_order_phone'] . "','" . $rowPreOrder['pre_order_address'] . "')");

                    $deletePreOrder = mysqli_query($conn, "DELETE FROM pre_order_table WHERE pre_order_id='" . $pre_id . "'");
                    $deleteCart = mysqli_query($conn, "DELETE FROM cart_table WHERE customer_id='" . $cus_id . "'");
                    echo "<script>window.location.href='index.php?page=customerDeatil'</script>";

                }

            }
        }

    }

}