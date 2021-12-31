<?php
if (@$_REQUEST['action']) {
    $final = @$_REQUEST['action'];

    $deleteProduct = mysqli_query($conn, "DELETE FROM product_table WHERE product_id = '" . $final . "' ");

}
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
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <?php include 'login-register/admin/adminStyle.php'?>

</head>

<body>
    <div class="wrapper">
        <?php require_once 'side_bar.php'?>

        <?php require_once 'header.php'?>
        <!-- Page Content Holder -->





        <!-- Search Bar -->
        <div class="row g-3 align-items-center mb-3">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Product Search</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>

        </div>




        <h2>Product Page</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <?php
if (@$_SESSION['employee_role'] != 4 && @$_SESSION['employee_role'] != 1 && @$_SESSION['employee_role'] != 5) {
    ?>
        <a href="index.php?page=registerProduct">
            <button class="btn btn-primary mb-5"><?php echo "Register New Products" ?></button>
        </a>
        <?php }?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables
                    Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>code</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>image</th>
                                <th>description</th>
                                <th>Category</th>
                                <?php
if (@$_SESSION['employee_role'] != 4 && @$_SESSION['employee_role'] != 5 && @$_SESSION['employee_role'] != 1) {
    ?>
                                <th><?php echo "Operation" ?></th>
                                <?php }?>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>code</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>image</th>
                                <th>description</th>
                                <th>Category</th>
                                <?php
if (@$_SESSION['employee_role'] != 4 && @$_SESSION['employee_role'] != 5 && @$_SESSION['employee_role'] != 1) {
    ?>
                                <th><?php echo "Operation" ?></th>
                                <?php }?>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $table = mysqli_query($conn, "SELECT * FROM product_table,category_table WHERE product_table.category_id = category_table.category_id");
while ($rowTable = mysqli_fetch_assoc($table)) {

    ?>
                            <tr>
                                <td><?php echo $rowTable['product_id'] ?></td>
                                <td><?php echo $rowTable['product_name'] ?></td>
                                <td><?php echo $rowTable['product_code'] ?></td>
                                <td><?php echo $rowTable['price'] ?></td>
                                <td><?php echo $rowTable['registration_product_date'] ?></td>
                                <td><img style="width:100px; height: 100px;"
                                        src="product-image/<?php echo $rowTable['product_image'] ?>"></td>
                                <td class="text-break"><?php echo $rowTable['product_description'] ?></td>
                                <td><?php echo $rowTable['category_name'] ?></td>
                                <?php
if (@$_SESSION['employee_role'] != 4 && @$_SESSION['employee_role'] != 5 && @$_SESSION['employee_role'] != 1) {
        ?>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <a
                                            href="index.php?page=editProduct&action=<?php echo $rowTable['product_id'] ?>">
                                            <button class="btn btn-primary me-1">Edit</button>
                                        </a>
                                        <a
                                            href="index.php?page=deleteProduct&action=<?php echo $rowTable['product_id'] ?>">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>


                                    </div>
                                </td>
                                <?php }?>
                            </tr>
                            <?php }
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>



    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>
</body>


</html>