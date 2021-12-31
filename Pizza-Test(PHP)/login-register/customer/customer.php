<?php
include 'function/login_process.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order Website </title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->

    <?php
require_once 'customerStyle.php';
?>


</head>

<body>

    <!-- header section starts  -->
    <header>

        <div class="logo"><i class="fas fa-utensils"></i>Pizza Order System</div>
        <div id="menu-bar" class="fas fa-bars"></div>


        <nav class="navbar">

            <a id='a1' href="#home">home</a>
            <a id='a1' href="#speciality">speciality</a>
            <a id='a1' href="#popular">popular</a>
            <a id='a1' href="#gallery" class='me-5'>gallery</a>

            <div class="card text-center border-light ms-5">
                <div class="card-body rounded">

                    <a href="index.php?page=customerDeatil">
                        <i class="fas fa-user-circle fa-3x"></i>
                        <?php
if (@$_SESSION['customer_name'] != ' ') {
    ?>
                        <p class="text-black fs-4"><?php

    echo @$_SESSION['customer_name']; ?></p>
                        <?php
}
?>
                    </a>
                </div>
            </div>
    </header>
    <!-- header section ends -->





    <!-- home section starts  -->
    <?php
require_once 'ui-component/homeSection.php'
?>
    <!-- home section ends -->


    <!-- speciality section starts  -->
    <?php
require_once 'customer-component/pizza_categories.php'
?>
    <!-- speciality section ends -->


    <!-- popular section starts  -->
    <?php
require_once 'customer-component/most_popular_pizza.php'
?>
    <!-- popular section ends -->


    <!-- How It Work section starts  -->
    <?php
require_once 'ui-component/howItWork.php'
?>
    <!-- How It Work section ends -->


    <!-- gallery section starts  -->

    <!-- gallery section ends -->


    <!-- <a href="#home" class="fas fa-angle-up" id="scroll-top"></a> -->




    <!-- footer section  -->
    <?php
require_once 'ui-component/footer.php'
?>
    <!-- footer section  end-->

    <?php
require_once 'customer-component/floating_cart_page.php';
?>



    <!-- <a href="#home" class="fas fa-angle-up" id="scroll-top"></a> -->





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script>
    let menu = document.querySelector('#menu-bar');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () => {

        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');

    }

    window.onscroll = () => {

        menu.classList.remove('fa-times');
        navbar.classList.remove('active');

        if (window.scrollY > 60) {
            document.querySelector('#scroll-top').classList.add('active');
        } else {
            document.querySelector('#scroll-top').classList.remove('active');
        }

    }

    function loader() {
        document.querySelector('.loader-container').classList.add('fade-out');
    }

    function fadeOut() {
        setInterval(loader, 2000);
    }

    window.onload = fadeOut();
    </script>
</body>

</html>