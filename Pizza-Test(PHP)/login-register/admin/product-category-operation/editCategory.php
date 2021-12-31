<?php
include 'function/category_update_process.php';
$edit = $_REQUEST['action'];

$editCategory = mysqli_query($conn, "SELECT * FROM category_table WHERE category_id = '" . $edit . "' ");

$rowEdit = mysqli_fetch_assoc($editCategory);

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
                    <label for="" class="fs-3 text-center text-primary">Image Of Category</label>
                    <div class="mb-1">
                        <img class="img-fluid" src="product-image/<?php echo $rowEdit['category_image'] ?>">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Upload Category Image</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="categoryImage">
                    </div>
                    <div class=" mb-1">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            value="<?php echo @$rowEdit['category_image'] ?>" name="oldImage">
                    </div>



                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="name" value="<?php echo @$rowEdit['category_name'] ?>">
                        <small class="text-danger"><?php echo @$errorDuplicate; ?></small>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Category Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="description" value="<?php echo @$rowEdit['category_description'] ?>">

                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=categories_page">
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
                                            name="updateCategory">Update</button>

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