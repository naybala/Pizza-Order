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
    <?php
require_once 'function/product_insert_process.php';
?>

    <div class="container col-6 offset-3 mt-5">
        <div class="card">
            <div class="card-body shadow-lg">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="name" value="<?php echo htmlspecialchars(@$name); ?>">
                        <small class="text-danger"><?php echo $errorName; ?></small>
                        <small class="text-danger"><?php echo @$errorDuplicateName; ?></small>

                    </div>
                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label">Product Code</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="code"
                            value="<?php echo htmlspecialchars(@$code); ?>">
                        <small class="text-danger"><?php echo $errorCode; ?></small>
                        <small class="text-danger"><?php echo @$errorDuplicate; ?></small>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Product Price</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="price" value="<?php echo htmlspecialchars(@$price); ?>">
                        <small class="text-danger"><?php echo $errorPrice; ?></small>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Upload Product Image</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="productImage">
                        <small class="text-danger"><?php echo $errorProductImage; ?></small>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Product Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="description" value="<?php echo htmlspecialchars(@$description); ?>">
                        <small class="text-danger"><?php echo $errorDescription; ?></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Select Category</label>
                        <select class="form-select" aria-label="Default select example" name="select">
                            <option selected value="empty">Open this select menu</option>
                            <?php $selectRole = mysqli_query($conn, "SELECT * FROM category_table");
while ($role = mysqli_fetch_assoc($selectRole)) {
    ?>
                            <option value="<?php echo $role['category_id']; ?>">
                                <?php echo $role['category_name']; ?>
                            </option>
                            <?php
}
?>
                        </select>
                        <small class="text-danger"><?php echo $errorSelect; ?></small>
                    </div>
                    <!-- <div class="mb-5">
                        <label for="exampleInputEmail1" class="form-label">Add New categories</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="newCategory">

                    </div> -->




                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=products_page">
                            <button type="button" class="btn btn-primary">Cancel</button>
                        </a>
                        <button type="submit" class="btn btn-primary" name="btnProductRegister">Save</button>



                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>

</html>