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










        <h2>About Me Page</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>



        <div class="container">
            <div class="col-6 offset-3">
                <div class="card shadow-lg">
                    <div class="card-header">
                        Employee-Detail
                    </div>
                    <div class="card-body">
                        <?php
if (@$_SESSION['employee_name'] != ' ') {
    ?>
                        <h5>Name-<?php

    echo @$_SESSION['employee_name']; ?></h5>
                        <?php
}
?>
                        <?php
if (@$_SESSION['employee_email'] != ' ') {
    ?>
                        <h5>Email-<?php

    echo @$_SESSION['employee_email']; ?></h5>
                        <?php
}
?>
                        <?php
if (@$_SESSION['employee_phone'] != ' ') {
    ?>
                        <h5>
                            Phone-<?php

    echo @$_SESSION['employee_phone']; ?>
                        </h5>
                        <?php
}
?>
                        <?php
if (@$_SESSION['employee_address'] != ' ') {
    ?>
                        <h5>Address-<?php

    echo @$_SESSION['employee_address']; ?></h5>
                        <?php
}
?>

                        <?php $selectRole = mysqli_query($conn, "SELECT * FROM role_table");
while ($role = mysqli_fetch_assoc($selectRole)) {
    ?>
                        <?php
if (@$_SESSION['employee_role'] == $role['role_id']) {
        ?>

                        <h5>Position-<?php echo $role['role_name']; ?></h5>



                        <?php
}
    ?>
                        <?php
}
?>


                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <a href="index.php?page=editEmployeePersonal&action=<?php echo $_SESSION['employee_id'] ?>">
                                <button class="btn btn-primary" type="button">Personal Info Edit</button>
                            </a>
                            <a href="index.php?page=changePassword&action=<?php echo $_SESSION['employee_id'] ?>">
                                <button class="btn btn-danger" type="button">Change Password</button>
                            </a>
                        </div>

                    </div>
                </div>
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