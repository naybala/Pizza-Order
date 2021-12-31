<?php
require_once "function/pre_checkout_process.php"
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
    <div class="container-fluid col-md-10 offset-1 mt-3">
        <h1 class="text-primary text-center mb-3">Check Out Form</h1>
        <div class="row">
            <div class="col-md-9">
                <h5 class="text-danger">Your Shipping Form--------------------------------></h5>
                <div class="border rounded border-danger p-4">

                    <?php
$customer_id = $_SESSION['customer_id'];
$cusDe = mysqli_query($conn, "SELECT * FROM customer_table,cart_table WHERE customer_table.customer_id = cart_table.customer_id AND cart_table.customer_id= '" . $customer_id . "'");
$rowCus = mysqli_fetch_assoc($cusDe);
?>

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Shipping Name</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                placeholder="<?php echo $rowCus['name'] ?>" name="name"
                                value="<?php echo htmlspecialchars(@$name); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Shipping Email</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp"
                                placeholder="<?php echo $rowCus['email'] ?>" name="email"
                                value="<?php echo htmlspecialchars(@$email); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Shipping Phone</label>
                            <input type="number" class="form-control" aria-describedby="emailHelp"
                                placeholder="<?php echo $rowCus['phone'] ?>" name="phone"
                                value="<?php echo htmlspecialchars(@$phone); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Shipping Address</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                placeholder="<?php echo $rowCus['address'] ?>" name="address"
                                value="<?php echo htmlspecialchars(@$address); ?>">
                        </div>
                        <hr>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="1" name="ship1">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as
                                my billing address</label>
                            <br>
                            <small class="text-danger"><?php echo @$errorShip; ?></small>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="1" name="shipnext">
                            <label class="custom-control-label" for="save-info">Save this information for next
                                time</label>
                        </div>

                        <hr>
                        <?php
$payment = mysqli_query($conn, "SELECT * FROM payment_table");
while ($rowpay = mysqli_fetch_assoc($payment)) {
    ?>
                        <input type="radio" name="pm" value="<?php echo $rowpay['payment_id'] ?>" />
                        <?php echo $rowpay['payment_type'] ?>

                        <?php }?>
                        <br>
                        <small class="text-danger"><?php echo @$errorPm; ?></small>

                        <div class="d-grid gap-2 mt-3">
                            <input type="hidden" value="<?php echo $rowCus['cart_id'] ?>" name="cart_id">
                            <input type="hidden" value="<?php echo $rowCus['name'] ?>" name="oldName">
                            <input type="hidden" value="<?php echo $rowCus['email'] ?>" name="oldEmail">
                            <input type="hidden" value="<?php echo $rowCus['phone'] ?>" name="oldPhone">
                            <input type="hidden" value="<?php echo $rowCus['address'] ?>" name="oldAddress">
                            <button class="btn btn-primary" type="submit" name="btncheckout">Check Out Confirm</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-3">
                <h5 class="text-danger text-center">Your Shopping Cart</h5>
                <div class="border rounded border-danger">
                    <?php
$customer_id = $_SESSION['customer_id'];
$table = mysqli_query($conn, "SELECT * FROM cart_table WHERE customer_id='" . $customer_id . "'");

while ($rowTable = mysqli_fetch_assoc($table)) {
    $pro = mysqli_query($conn, "SELECT * FROM product_table WHERE product_id = '" . $rowTable['product_id'] . "'");
    $rowPro = mysqli_fetch_assoc($pro);
    ?>



                    <div class="card-body">

                        <div class="row g-0">
                            <div class="col-md-4 mt-2">
                                <img class="img-thumbnail" style="width:80px; height: 90px;"
                                    src="product-image/<?php echo $rowPro['product_image'] ?>">
                                <p class="text-primary ms-4">x <?php echo $rowTable['quantity'] ?></p>

                            </div>
                            <div class="col-md-8">
                                <p>Name - <?php echo $rowPro['product_name'] ?></p>
                                <p>Price -<?php echo $rowPro['price'] ?>
                                    $
                                </p>
                                <p>Sub Total
                                    -<?php echo $rowTable['total_price'] ?>
                                    $
                                </p>

                            </div>

                        </div>

                    </div>
                    <hr>
                    <?php }?>

                    <?php
$total = mysqli_query($conn, "SELECT SUM(total_price) as total FROM cart_table WHERE customer_id ='" . $customer_id . "'");
$rowTotal = mysqli_fetch_assoc($total);

?>

                    <p class="ms-3">Total =<?php echo $rowTotal['total'] ?>$</p>
                </div>

                <a href="index.php?page=cartPage">
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary" type="button">Return To Cart Page</button>
                    </div>
                </a>

            </div>
        </div>
    </div>


</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
</script>

</html>