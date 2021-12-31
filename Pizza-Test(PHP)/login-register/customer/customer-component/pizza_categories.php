<section class="speciality" id="speciality">

    <h1 class="heading"> our <span>speciality</span> </h1>


    <div class="box-container">
        <?php $table = mysqli_query($conn, "SELECT * FROM category_table LIMIT 4 ");
while ($rowTable = mysqli_fetch_assoc($table)) {

    ?>
        <div class="box">
            <a href="index.php?page=pizzaCategoryDetail&action=<?php echo $rowTable['category_id'] ?>">
                <img class="image" style="width: 300px;; height: 250px;"
                    src="category-image/<?php echo $rowTable['category_image'] ?>">
            </a>
            <div class="content">
                <img src="images/s-2.png" alt="">
                <h3><?php echo $rowTable['category_name'] ?></h3>
                <p class="text-break"><?php echo $rowTable['category_description'] ?></p>
            </div>
        </div>
        <?php }?>
    </div>

</section>