<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular</span> foods </h1>

    <div class="box-container">
        <?php $table = mysqli_query($conn, "SELECT * FROM product_table LIMIT 8");
while ($rowTable = mysqli_fetch_assoc($table)) {

    ?>

        <div class="box">
            <span class="price"> <?php echo $rowTable['price'] ?> $</span>
            <img class="image" style="width: 300px;; height: 250px;"
                src="category-image/<?php echo $rowTable['product_image'] ?>">
            <h3><?php echo $rowTable['product_name'] ?></h3>
            <p class="fs-4"><?php echo $rowTable['product_description'] ?></p>
            <a href="index.php?page=pizzaProductDetail&action=<?php echo $rowTable['product_id'] ?>" class="btn">View
                Detail</a>
        </div>

        <?php }?>


    </div>

</section>