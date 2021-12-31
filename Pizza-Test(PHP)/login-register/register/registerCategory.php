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
require_once 'function/category_insert_process.php';
?>

    <div class="container col-6 offset-3 mt-5">
        <div class="card">
            <div class="card-body shadow-lg">
                <form method="POST" enctype="multipart/form-data">

                    <div class="form-group mb-3">
                        <label for="">Category List</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open and View Category</option>
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

                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Add New categories</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" name="newCategory"
                            value="<?php echo htmlspecialchars(@$newCategory); ?>">
                        <small class="text-danger"><?php echo @$errorCategory; ?></small>
                        <small class="text-danger"><?php echo @$errorDuplicate; ?></small>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Category Description</label>
                        <textarea name="description" value="<?php echo htmlspecialchars(@$description); ?>" id=""
                            cols="93" rows="10"></textarea>
                        <small class="text-danger"><?php echo @$errorDescripton; ?></small>
                    </div>
                    <div class="mb-5">
                        <label for="exampleInputEmail1" class="form-label">Upload Category Image</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="categoryImage" value="">
                        <small class="text-danger"><?php echo @$errorCategoryImage; ?></small>


                    </div>





                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=categories_page">
                            <button type="button" class="btn btn-primary">Cancel</button>
                        </a>
                        <button type="submit" class="btn btn-primary" name="btnCategoryRegister">Save</button>



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