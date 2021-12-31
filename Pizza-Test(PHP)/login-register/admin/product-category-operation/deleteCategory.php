<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container col-4 offest-4 mt-5 ">
        <div class="card shadow-lg p-1">
            <div class="card-header text-center text-danger">
                <h3>Delete Confirmation!</h3>
            </div>
            <div class="card-body fs-5 text-danger">
                Warning!
                <div class="text-black">This Changes Can Permantely Delete Category Form List!</div>
            </div>
            <div class="cart-footer border mt-5">
                <div class="d-flex justify-content-between">
                    <a href="index.php?page=categories_page"><button class="btn btn-primary">Cancel</button></a>
                    <?php
if (@$_REQUEST['action']) {
    $delete = @$_REQUEST['action'];
    $DeleteId = mysqli_query($conn, "SELECT * FROM category_table WHERE category_id='" . $delete . "'");
    $rowDelete = mysqli_fetch_assoc($DeleteId);
}
?>



                    <a href="index.php?page=categories_page&action=<?php echo $rowDelete['category_id'] ?>">
                        <button class="btn btn-danger" type="button">Confirm </button>
                    </a>

                </div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>
</body>

</html>