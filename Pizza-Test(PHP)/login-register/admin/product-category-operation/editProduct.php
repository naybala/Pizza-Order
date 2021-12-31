<?php
include 'function/product_update_process.php';
$edit = $_REQUEST['action'];

$editProduct = mysqli_query($conn, "SELECT * FROM product_table,category_table WHERE product_table.category_id = category_table.category_id AND product_id = '" . $edit . "' ");

$rowEdit = mysqli_fetch_assoc($editProduct);

?>
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

    <div class="container col-6 offset-3 mt-5">
        <div class="card">
            <div class="card-body shadow-lg">
                <form method="POST" enctype="multipart/form-data">
                    <label for="" class="fs-3 text-center text-primary">Image Of Product</label>
                    <div class="mb-1">
                        <img class="img-fluid" src="product-image/<?php echo $rowEdit['product_image'] ?>">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Upload Product Image</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="productImage">
                    </div>
                    <div class=" mb-1">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            value="<?php echo @$rowEdit['product_image'] ?>" name="oldImage">
                    </div>

                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Product Code</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            disabled value="<?php echo @$rowEdit['product_code'] ?>">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="name" value="<?php echo @$rowEdit['product_name'] ?>">
                        <small class="text-danger"><?php echo @$errorDuplicate; ?></small>
                    </div>

                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Product Price</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="price" value="<?php echo @$rowEdit['price'] ?>">

                    </div>



                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Product Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="description" value="<?php echo @$rowEdit['product_description'] ?>">

                    </div>

                    <div class="form-group mb-4">
                        <label for="">Select Position</label>
                        <select class="form-select" aria-label="Default select example" name="select">
                            <option value="<?php echo $rowEdit['category_id']; ?>">
                                <?php echo $rowEdit['category_name']; ?>
                            </option>
                            <?php $selectRole = mysqli_query($conn, "SELECT * FROM category_table");
while ($role = mysqli_fetch_assoc($selectRole)) {
    ?>
                            <option value="<?php echo $role['category_id']; ?>">
                                <?php echo @$role['category_name']; ?>
                            </option>
                            <?php
}
?>
                        </select>

                    </div>




                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=products_page">
                            <button type="button" class="btn btn-primary">Cancel</button>
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#updateModal">
                            Update
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are You
                                            Sure Want to Update?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-danger">
                                        This Action Can Permantely Change Product Data Form List!
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary"
                                            name="updateProduct">Update</button>

                                    </div>
                                </div>
                            </div>
                        </div>

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