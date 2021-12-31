<?php
include 'function/login_process.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
require_once 'customerDetailStyle.php';
?>
</head>

<body>

    <div class="container col-6 offset-3 mt-5">
        <?php
$customer_id = $_SESSION['customer_id'];
$orderConfirm = mysqli_query($conn, "SELECT * FROM order_table WHERE customer_id ='" . $customer_id . "' ");
while ($rowOrder = mysqli_fetch_assoc($orderConfirm)) {
    ?>



        <?php
if ($rowOrder['order_status'] == 0) {
        ?>

        <h5>Order is Loading
            <div class="spinner-grow text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-success" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-info" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </h5>

        <br>
        <?php } elseif ($rowOrder['order_status'] == 1) {?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Your Order!</strong> Confirm And On My Way!...
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php }?>

        <?php }?>


        <div class="card shadow-lg">
            <div class="card-header text-center">
                Details
            </div>
            <div class="card-body">
                <img src="images/p-6.jpg" class="rounded mx-auto d-block" alt="...">
                <div class="container col-6 offfset-3">
                    <div class="div">
                        Name:<?php
if (@$_SESSION['customer_name'] != ' ') {

    echo @$_SESSION['customer_name'];

}
?>
                    </div>

                    <div class="div">
                        Email:<?php
if (@$_SESSION['customer_email'] != ' ') {

    echo @$_SESSION['customer_email'];

}
?>
                    </div>

                    <div class="div mb-5">
                        Address:<?php
if (@$_SESSION['customer_address'] != ' ') {

    echo @$_SESSION['customer_address'];

}
?>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=customer">
                            <button class="btn btn-primary">Back</button>
                        </a>
                        <!-- logout confirm --------------------------------->
                        <button type="button" class='btn btn-primary' data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fas fa-power-off"></i> Logout
                        </button>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-black" id="exampleModalLabel">Are You
                                        Sure Want to Logout?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-danger">
                                    This Changes Can Reach to Ui!
                                </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <a href="index.php?page=logout">
                                        <button class="btn btn-primary">OK</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>

</html>