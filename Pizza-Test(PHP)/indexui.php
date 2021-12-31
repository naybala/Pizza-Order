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
require_once 'style.php'
?>

</head>

<body>

    <!-- header section starts  -->
    <?php
require_once 'ui-component/header.php'
?>
    <!-- header section ends -->





    <!-- home section starts  -->
    <?php
require_once 'ui-component/homeSection.php'
?>
    <!-- home section ends -->


    <!-- speciality section starts  -->
    <?php
require_once 'ui-component/specialitySection.php'
?>
    <!-- speciality section ends -->


    <!-- popular section starts  -->
    <?php
require_once 'ui-component/popularSection.php'
?>
    <!-- popular section ends -->


    <!-- How It Work section starts  -->
    <?php
require_once 'ui-component/howItWork.php'
?>
    <!-- How It Work section ends -->


    <!-- gallery section starts  -->

    <!-- gallery section ends -->





    <!-- footer section  -->
    <?php
require_once 'ui-component/footer.php'
?>
    <!-- footer section  end-->


    <!-- scroll top button  -->

    <!-- footer section  -->


    <!-- loader  -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>




</body>
<!-- js section----------------------------- -->
<!-- custom js file link  -->
<script src="script.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>


</html>