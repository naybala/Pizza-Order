<?php

if (isset($_POST['updateCategory'])) {
    $edit_id = $_REQUEST['action'];
    $oldImage = $_POST['oldImage'];
    $categoryImage = $_FILES['categoryImage']['name'];
    if ($categoryImage == null) {
        $categoryImage = $oldImage;
        $name = $_POST['name'];
        $description = $_POST['description'];
    } else {
        $categoryImage = $_FILES['categoryImage']['name'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
    $selctDuplicate = mysqli_query($conn, "SELECT * FROM  category_table  WHERE category_name='" . $name . "'");
    $selctDuplicateFianl = mysqli_query($conn, "SELECT * FROM  category_table  WHERE category_id='" . $edit_id . "'");
    $checkDuplicate = mysqli_num_rows($selctDuplicate);
    $checkDuplicateFinal = mysqli_fetch_assoc($selctDuplicateFianl);
    echo $checkDuplicateFinal['category_name'];
    if ($checkDuplicateFinal['category_name'] == $name) {
        $updateCategory = mysqli_query($conn, "UPDATE category_table SET category_name='" . $name . "', category_image='" . $categoryImage . "',category_description='" . $description . "' WHERE category_id='" . $edit_id . "'");

    } else {
        if ($checkDuplicate == 1) {
            @$errorDuplicate = "Category Name Already Exists!";

        } else {
            $updateCategory = mysqli_query($conn, "UPDATE category_table SET category_name='" . $name . "', category_image='" . $categoryImage . "',category_description='" . $description . "' WHERE category_id='" . $edit_id . "'");

        }

    }
    if (@$updateCategory) {
        move_uploaded_file($_FILES['categoryImage']['tmp_name'], 'category-image/' . $categoryImage);
        echo "<script>alert('Success');</script>";
        echo "<script>window.location.href='index.php?page=categories_page'</script>";
    }

}

// $selctDuplicate = mysqli_query($conn, "SELECT * FROM  category_table  WHERE category_name='" . $name . "'");
//     $checkDuplicate = mysqli_num_rows($selctDuplicate);
//     $checkDuplicateFinal = mysqli_fetch_assoc($selctDuplicate);

//     if ($checkDuplicate == 1) {
//         var_dump($checkDuplicate);
//         @$errorDuplicate = "Category Name Already Exists!";

//     } else {
//         var_dump($checkDuplicate);
//         // $updateCategory = mysqli_query($conn, "UPDATE category_table SET category_name='" . $name . "', category_image='" . $categoryImage . "' WHERE category_id='" . $edit_id . "'");
//         // if (@$updateCategory) {
//         //     move_uploaded_file($_FILES['categoryImage']['tmp_name'], 'category-image/' . $categoryImage);
//         //     echo "<script>alert('Success');</script>";
//         //     echo "<script>window.location.href='index.php?page=categories_page'</script>";
//         // }

//     }