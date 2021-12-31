<?php

$errorCategory = $errorDescripton = $errorCategoryImage = " ";
if (isset($_POST['btnCategoryRegister'])) {

    if ($_POST['newCategory'] == null) {
        $errorCategory = 'Need to filled ur Category';
    } else {
        $newCategory = $_POST['newCategory'];
    }
    if ($_FILES['categoryImage']['name'] == null) {
        $errorCategoryImage = 'Need to filled Category Image';

    } else {
        $categoryImage = $_FILES['categoryImage']['name'];
    }
    if ($_POST['description'] == null) {
        $errorDescripton = 'Need to filled ur Description';
    } else {
        $description = $_POST['description'];
    }

    if (@$newCategory != null && @$errorDescripton != null && @$errorCategoryImage != null) {
        $selctDuplicate = mysqli_query($conn, "SELECT * FROM  category_table WHERE category_name = '" . $newCategory . "'");
        $checkDuplicate = mysqli_num_rows($selctDuplicate);
        if ($checkDuplicate > 0) {
            @$errorDuplicate = "Category Already Exists!";

        } else {

            $insertCategory = mysqli_query($conn, "INSERT INTO category_table( category_name , category_image ,category_description) VALUES('" . $newCategory . "' , '" . $categoryImage . "' ,'" . $description . "')");
            if ($insertCategory) {
                move_uploaded_file($_FILES['categoryImage']['tmp_name'], 'category-image/' . $categoryImage);
                echo "<script>alert('Success');</script>";
                echo "<script>window.location.href='index.php?page=categories_page'</script>";

            }
        }
    }

}