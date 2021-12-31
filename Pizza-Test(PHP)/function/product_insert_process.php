<?php

$errorName = $errorCode = $errorPrice = $errorProductImage = $errorDescription = $errorSelect = "";
if (isset($_POST['btnProductRegister'])) {

    if ($_POST['name'] == null) {
        $errorName = 'Need to filled ur name';
    } else {
        $name = $_POST['name'];
    }

    if ($_POST['code'] == null) {
        $errorCode = 'Need to filled ur code';
    } else {
        $code = $_POST['code'];
    }

    if ($_POST['price'] == null) {
        $errorPrice = 'Need to filled ur price';
    } else {
        $price = $_POST['price'];
    }
    if ($_FILES['productImage']['name'] == null) {
        $errorProductImage = 'Need to filled Product Image';

    } else {
        $productImage = $_FILES['productImage']['name'];
    }

    if ($_POST['description'] == null) {
        $errorDescription = 'Need to filled ur description';
    } else {
        $description = $_POST['description'];
    }
    if ($_POST['select'] == 'empty') {
        $errorSelect = 'Need to Choose ur select';
    } else {
        $select = $_POST['select'];
    }

    if (@$name != null && @$code != null && @$price != null && @$productImage != null && @$description != null && @$select != 'empty') {
        $selctDuplicate = mysqli_query($conn, "SELECT * FROM  product_table WHERE product_code = '" . $code . "'");

        $checkDuplicate = mysqli_num_rows($selctDuplicate);

        if ($checkDuplicate > 0) {
            @$errorDuplicate = "Products Code Already Exists!";
            // @$errorDuplicateName = "Products Name Already Exists!";

        } else {

            $insertProducts = mysqli_query($conn, "INSERT INTO product_table( product_code , product_name , price ,  product_image , product_description , category_id) VALUES('" . $code . "','" . $name . "','" . $price . "','" . $productImage . "','" . $description . "','" . $select . "')");
            if ($insertProducts) {
                move_uploaded_file($_FILES['productImage']['tmp_name'], 'product-image/' . $productImage);
                echo "<script>alert('Success');</script>";
                echo "<script>window.location.href='index.php?page=products_page'</script>";

            }
        }
    }

}