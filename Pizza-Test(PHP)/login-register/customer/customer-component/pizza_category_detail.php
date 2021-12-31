<?php $edit_id = $_REQUEST['action'];
$detailCate = mysqli_query($conn, "SELECT * FROM category_table,product_table WHERE category_table.category_id = product_table.category_id AND product_table.category_id='" . $edit_id . "' ");

$rowEdit = mysqli_fetch_assoc($detailCate);

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

    <?php
require_once 'login-register/customer/cart_style.php';
?>

</head>



<body>
    <?php
require_once 'floating_cart_page.php';
?> <div class="mt-3 ms-2">
        <a href="index.php?page=customer"><button class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i>Main
                Page</button>
        </a>
    </div>
    <!-- <h1 class="text-danger text-center mt-5">
        <?php echo $rowEdit['category_name'] ?>
    </h1> -->
    <?php $table = mysqli_query($conn, "SELECT * FROM product_table WHERE category_id='" . $edit_id . "'");
while ($rowTable = mysqli_fetch_assoc($table)) {

    ?>
    <div class="container-fluid mt-2 col-10 offset-1">

        <div class="card shadow-lg">
            <div class="card-header">
                <h3 class="text-primary"><?php echo @$rowTable['product_name']; ?></h3>
            </div>
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img class="img-thumbnail" style="width:200px; height: 200px;"
                            src="product-image/<?php echo $rowTable['product_image'] ?>">

                    </div>

                    <div class="col-md-9">
                        <form action="" method="POST">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Product-Code -
                                    <?php echo $rowTable['product_code'] ?>
                                </h5>
                                <p class="card-text fs-3">Name - <?php echo $rowTable['product_name'] ?></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="card-text fs-3 text-danger">Price -
                                            <?php echo $rowTable['price'] ?> $
                                        </p>
                                    </div>

                                </div>
                                <p class="card-break"><?php echo $rowTable['product_description'] ?></p>
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <a href="index.php?page=pizzaProductDetail&action=<?php echo $rowTable['product_id'] ?>"
                                            class="btn btn-danger">View
                                            Detail</a>
                                    </div>

                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php }?>


    <div class="container-fluid mt-4 col-10 offset-1">
        <h1 class="text-danger text-center">
            More Products
        </h1>
        <div class="row">
            <?php $table = mysqli_query($conn, "SELECT * FROM product_table");
while ($rowTable = mysqli_fetch_assoc($table)) {

    ?> <div class="col-md-4 my-1">
                <div class="card shadow-lg">
                    <img class="rounded mx-auto d-block" style="width: 300px;; height: 250px;"
                        src="category-image/<?php echo $rowTable['product_image'] ?>">
                    <div class="card-body text-center">
                        <p class="text-primary">
                            Pizza Code-<?php echo $rowTable['product_code'] ?></p>
                        <p class="text-break">
                            Pizza Name-<?php echo $rowTable['product_name'] ?></p>
                        <a href="index.php?page=pizzaProductDetail&action=<?php echo $rowTable['product_id'] ?>">
                            <button class="btn btn-danger"> View Details</button>
                        </a>

                    </div>
                </div>
            </div>
            <?php }?>

        </div>

    </div>



</body>
<script>
window.onscroll = () => {
    if (window.scrollY > 0) {
        document.querySelector('#scroll-top').classList.add('active');
    } else {
        document.querySelector('#scroll-top').classList.remove('active');
    }

}
</script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
</script>

</html>