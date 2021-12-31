<?php

if (isset($_POST['updateProduct'])) {
    $edit_id = $_REQUEST['action'];
    $oldImage = $_POST['oldImage'];
    $productImage = $_FILES['productImage']['name'];
    if ($productImage == null) {
        $productImage = $oldImage;
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $select = $_POST['select'];
    } else {
        $productImage = $_FILES['productImage']['name'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $select = $_POST['select'];
    }

    $selctDuplicate = mysqli_query($conn, "SELECT * FROM  product_table  WHERE product_name='" . $name . "'");
    $selctDuplicateFinal = mysqli_query($conn, "SELECT * FROM  product_table  WHERE product_id='" . $edit_id . "'");
    $checkDuplicate = mysqli_num_rows($selctDuplicate);
    $checkDuplicateFinal = mysqli_fetch_assoc($selctDuplicateFinal);

    if ($checkDuplicateFinal['product_name'] == $name) {
        $updateProduct = mysqli_query($conn, "UPDATE product_table SET product_name='" . $name . "', price='" . $price . "', product_image='" . $productImage . "',product_description='" . $description . "', category_id='" . $select . "' WHERE product_id='" . $edit_id . "'");

    } else {
        if ($checkDuplicate == 1) {
            @$errorDuplicate = "Product Name Already Exists!";

        } else {
            $updateProduct = mysqli_query($conn, "UPDATE product_table SET product_name='" . $name . "', price='" . $price . "', product_image='" . $productImage . "',product_description='" . $description . "', category_id='" . $select . "' WHERE product_id='" . $edit_id . "'");

        }
    }
    if (@$updateProduct) {

        move_uploaded_file($_FILES['productImage']['tmp_name'], 'product-image/' . $productImage);
        echo "<script>alert('Success');</script>";
        echo "<script>window.location.href='index.php?page=products_page'</script>";
    }
}

// $oldImage = $_POST['oldImage'];
// $name = $_POST['name'];
// $price = $_POST['price'];
// // $productImage = $_FILES['productImage']['name'];
// $description = $_POST['description'];
// $select = $_POST['select'];

// $selctDuplicate = mysqli_query($conn, "SELECT * FROM  product_table  WHERE product_id='" . $edit_id . "'");

// $checkDuplicate = mysqli_num_rows($selctDuplicate);

// $checkDuplicateFinal = mysqli_fetch_assoc($selctDuplicate);

// if ($checkDuplicateFinal['product_name'] == $name) {
//     $updateProduct = mysqli_query($conn, "UPDATE product_table SET product_name='" . $name . "', price='" . $price . "', product_image='" . $productImage . "',product_description='" . $description . "', category_id='" . $select . "' WHERE product_id='" . $edit_id . "'");

//     if ($updateProduct) {

//         move_uploaded_file($_FILES['productImage']['tmp_name'], 'product-image/' . $productImage);
//         echo "<script>alert('Success');</script>";
//         echo "<script>window.location.href='index.php?page=products_page'</script>";
//     }
// } else {
//     if ($checkDuplicate == 1) {
//         @$errorDuplicate = "Product Name Already Exists!";

//     } else {
//         $updateProduct = mysqli_query($conn, "UPDATE product_table SET product_name='" . $name . "', price='" . $price . "', product_image='" . $productImage . "',product_description='" . $description . "', category_id='" . $select . "' WHERE product_id='" . $edit_id . "'");

//         if ($updateProduct) {
//             move_uploaded_file($_FILES['productImage']['tmp_name'], 'product-image/' . $productImage);
//             echo "<script>alert('Success');</script>";
//             echo "<script>window.location.href='index.php?page=products_page'</script>";
//         }
//     }
// }