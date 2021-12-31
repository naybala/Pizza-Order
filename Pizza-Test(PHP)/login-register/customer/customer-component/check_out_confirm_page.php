<?php
require_once "function/order_confirm.php"
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

    <!-- checkout -->

    <div class="jumbotron text-center bg-light">
        <h1 class="display-3">Thank You!</h1>
        <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your
            account setup.</p>
        <hr>
        <p>
            Having trouble? <a href="#">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm mb-5" href="#" role="button">Continue to homepage</a>
        </p>
    </div>


    <div class="container-fluid col-md-10 offset-1">
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="text-center">Your Shopping List Contain These Items</h5>
                <div class="border rounded border-danger p-3">
                    <div class="table-responsive">
                        <table class="table table-bordered border-primary text-center" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Pizza Name</th>
                                    <th>Pizza Image</th>
                                    <th>Pizza Price</th>
                                    <th>Pizza Count</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$customer_id = $_SESSION['customer_id'];
$table = mysqli_query($conn, "SELECT * FROM cart_table WHERE customer_id='" . $customer_id . "'");

while ($rowTable = mysqli_fetch_assoc($table)) {
    $pro = mysqli_query($conn, "SELECT * FROM product_table WHERE product_id = '" . $rowTable['product_id'] . "'");
    $rowPro = mysqli_fetch_assoc($pro);
    ?>
                                <tr>
                                    <th><?php echo $rowPro['product_name'] ?></th>
                                    <th><img class="img-thumbnail" style="width:90px; height: 90px;"
                                            src="product-image/<?php echo $rowPro['product_image'] ?>"></th>
                                    <th><?php echo $rowPro['price'] ?> $</th>
                                    <th>x <?php echo $rowTable['quantity'] ?></th>
                                    <th><?php echo $rowTable['total_price'] ?> $</th>
                                </tr>
                                <?php }?>
                            </tbody>

                        </table>
                        <?php
$total = mysqli_query($conn, "SELECT SUM(total_price) as total FROM cart_table WHERE customer_id ='" . $customer_id . "'");
$rowTotal = mysqli_fetch_assoc($total);

?>
                        <?php
$totalQ = mysqli_query($conn, "SELECT SUM(quantity) as totalQ FROM cart_table WHERE customer_id ='" . $customer_id . "'");
$rowTotalQ = mysqli_fetch_assoc($totalQ);

?>
                        <h5>All Total Order Amount = <?php echo $rowTotal['total'] ?> $</h5>
                    </div>
                    <div class="d-flex justify-content-between mt-4 mb-3">
                        <?php
$customer_id = $_SESSION['customer_id'];
$preOrder = mysqli_query($conn, "SELECT * FROM pre_order_table WHERE pre_customer_id ='" . $customer_id . "'");
$rowP = mysqli_fetch_assoc($preOrder);
?>
                        <a href="index.php?page=cartPage&preaction=<?php echo $rowP['pre_order_id'] ?>">
                            <button class="btn btn-primary ms-5" type="button"> Order Cancel</button>
                        </a>

                        <a>

                            <form action="" method="POST">
                                <input type="hidden" value=" <?php echo $rowP['pre_order_id'] ?>" name="pre_id">
                                <input type="hidden" value=" <?php echo $rowTotalQ['totalQ'] ?>" name="total_quantity">
                                <input type="hidden" value=" <?php echo $rowTotalQ['totalQ'] ?>" name="total_quantity">
                                <input type="hidden" value=" <?php echo $rowTotal['total'] ?>" name="total_price">
                                <input type="hidden" value="<?php echo $rowP['pre_order_email'] ?>" name="order_email">
                                <input type="hidden" value="<?php echo $rowP['pre_customer_id'] ?>" name="cus_id">
                                <input type="hidden" value="<?php echo $rowP['payment_id'] ?>" name="payment_id">
                                <button class="btn btn-primary ms-5 mb-3" type="submit" name="btnOrderConfirm">Order
                                    Confirm</button>
                                <?php
if ($rowP['payment_id'] == 2 || $rowP['payment_id'] == 3) {

    ?>
                                <p>You been choose Visa or credit payment option</p>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">Card Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="cardName">
                                        <small class="text-danger"><?php echo @$errorCardName; ?></small>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">Card Number</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="cardNumber">
                                        <small class="text-danger"><?php echo @$errorCardNum; ?></small>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">Expiration</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="expiration">
                                        <small class="text-danger"><?php echo @$errorExp; ?></small>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">CVV</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name='CVV'>
                                        <small class="text-danger"><?php echo @$errorCvv; ?></small>
                                    </div>
                                </div>
                                <?php }?>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </div>

</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
</script>

</html>