<?php
if (@$_REQUEST['action']) {
    $final = @$_REQUEST['action'];
    $deleteCart = mysqli_query($conn, "DELETE FROM cart_table WHERE cart_id = '" . $final . "' ");
}
?>
<?php
if (@$_REQUEST['preaction']) {
    $pre_id = @$_REQUEST['preaction'];
    $deletePre = mysqli_query($conn, "DELETE FROM pre_order_table WHERE pre_order_id = '" . $pre_id . "' ");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">


</head>



<body>
    <div class="container-fluid col-md-10 offset -1 mt-5">
        <h3 class="text-primary text-center">Cart Page</h3>
        <?php
$customer_id = $_SESSION['customer_id'];
$table = mysqli_query($conn, "SELECT * FROM cart_table WHERE customer_id='" . $customer_id . "'");

while ($rowTable = mysqli_fetch_assoc($table)) {
    $pro = mysqli_query($conn, "SELECT * FROM product_table WHERE product_id = '" . $rowTable['product_id'] . "'");
    $rowPro = mysqli_fetch_assoc($pro);
    ?>
        <div class="card shadow-lg mb-1">


            <div class="card-body">

                <div class="row g-0">
                    <div class="col-md-2">
                        <img class="img-thumbnail" style="width:130px; height: 130px;"
                            src="product-image/<?php echo $rowPro['product_image'] ?>">
                        <p class="text-primary ms-5 fs-4">x <?php echo $rowTable['quantity'] ?></p>

                    </div>

                    <div class="col-md-9">
                        <form action="" method="POST">
                            <div class="card-body">
                                <p class="fs-5">Name - <?php echo $rowPro['product_name'] ?></p>
                                <p class="fs-5">Price -<?php echo $rowPro['price'] ?>
                                    $
                                </p>
                                <p class="fs-5">Sub Total -<?php echo $rowTable['total_price'] ?>
                                    $
                                </p>
                            </div>
                    </div>
                    <div class="col-md-1">
                        <a href="index.php?page=deleteCart&action=<?php echo $rowTable['cart_id'] ?>">
                            <button class="btn btn-danger mt-5" type="button">Remove</button>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <?php }?>


        <?php
$total = mysqli_query($conn, "SELECT SUM(total_price) as total FROM cart_table WHERE customer_id ='" . $customer_id . "'");
$rowTotal = mysqli_fetch_assoc($total);

?>

        <h4 class="ms-3 mt-3">All Total =<?php echo $rowTotal['total'] ?> $</h4>
        <div class="d-flex justify-content-between mt-4 mb-5">
            <a href="index.php?page=customer">
                <button class="btn btn-primary" type="button"> Continue Shopping</button>
            </a>

            <a href="index.php?page=checkout">
                <button class="btn btn-primary" type="button">Check Out</button>
            </a>
        </div>

</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
</script>

</html>