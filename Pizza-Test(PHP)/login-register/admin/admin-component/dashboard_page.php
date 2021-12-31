<?php
require_once "function/admin_confirm_process.php";
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
                <label for="inputPassword6" class="col-form-label">Search</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>

        </div>





        <h2>Dashboard Page</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>

        <div class="card-body shadow-lg">
            <div class="table-responsive">
                <table class="table table-bordered border-danger rounded text-center" id="dataTable" width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th>order_name</th>
                            <th>email</th>
                            <th>payment</th>
                            <th>order_date</th>
                            <th>remark</th>
                            <th>vocher</th>
                            <th>confirm_date</th>
                            <th>status</th>
                            <th>quantity</th>
                            <th>price</th>
                            <th>operation</th>
                        </tr>
                    </thead>
                    <?php
$orderConfirm = mysqli_query($conn, "SELECT * FROM order_table,shipping_table WHERE order_table.order_id = shipping_table.order_id");
while ($rowOrder = mysqli_fetch_assoc($orderConfirm)) {
    $order_id = $rowOrder['order_id'];
    $payment = $rowOrder['payment_id'];
    $status = $rowOrder['order_status'];
    ?>
                    <tbody>
                        <tr>
                            <th><?php echo $rowOrder['shipping_name']; ?></th>
                            <th><?php echo $rowOrder['order_email']; ?></th>
                            <th><?php if ($payment == 1) {?>
                                <?php echo "Cash On Delivery" ?>
                                <?php } else if ($payment == 2) {?>
                                <?php echo "Credit Card" ?>
                                <?php } else {?>
                                <?php echo "Visa Card" ?>
                                <?php }?>
                            </th>
                            <th><?php echo $rowOrder['order_date']; ?></th>
                            <th><?php echo $rowOrder['remark']; ?></th>
                            <th><?php echo $rowOrder['vocher_code']; ?></th>
                            <th><?php echo $rowOrder['confirm_date']; ?></th>
                            <th><?php if ($status == 0) {?>
                                <p class="text-danger"><?php echo "Unconfirm" ?></p>
                                <?php } else {?>
                                <p class="text-primary"><?php echo "Confirm" ?></p>
                                <?php }?>
                            </th>
                            <th><?php echo $rowOrder['order_total_quantity']; ?></th>
                            <th><?php echo $rowOrder['order_total_price']; ?> $</th>
                            <th>
                                <?php
if (@$_SESSION['employee_role'] != 4 && @$_SESSION['employee_role'] != 1 && @$_SESSION['employee_role'] != 5 && @$_SESSION['employee_role'] != 3) {
        ?>
                                <form action="" method="POST">

                                    <input type="hidden" value="<?php echo $order_id ?>" name="order_id">
                                    <?php if ($status == 0) {?>
                                    <button class="btn btn-primary" type="submit"
                                        name="btnAdminConfirm">Confirm</button>
                                    <?php } else {?>
                                    <p class="text-primary"><?php echo "Confirmed!" ?></p>
                                    <?php }?>

                                </form>
                                <?php }?>
                            </th>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
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