<!-- Sidebar Holder -->

<nav id="sidebar">
    <div class="sidebar-header">
        <i class="fas fa-user-circle fa-4x"></i>
        <h3>
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



            <?php
if (@$_SESSION['employee_name'] != ' ') {
    ?>
            <h5>Name-<?php

    echo @$_SESSION['employee_name']; ?></h5>
            <?php
}
?>
        </h3>
        <strong>
    </div>

    <?php
if (@$_SESSION['employee_role'] == 1 || @$_SESSION['employee_role'] == 2) {
    ?>
    <ul class="list-unstyled components">
        <li>


        </li>
        <li>
            <a href="index.php?page=home_page">
                <?php echo "Home" ?>
            </a>

        </li>
        <li>
            <a href="index.php?page=dashboard_page">

                <?php echo "Dash Board" ?>
            </a>
        </li>

        <li>
            <a href="index.php?page=employee_page">

                <?php echo "Employee List" ?>
            </a>
        </li>


        <li>
            <a href="index.php?page=categories_page">

                <?php echo "Categories" ?>
            </a>
        </li>
        <li>
            <a href="index.php?page=products_page">

                <?php echo "Products" ?>
            </a>
        </li>
        <li>
            <a href="index.php?page=aboutme">

                about Me
            </a>
        </li>


        <li>
            <!-- logout confirm --------------------------------->
            <button type="button" class='btn btn-primary ms-1 mt-2' data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i class="fas fa-power-off"></i> Logout
            </button>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-black" id="exampleModalLabel">Are You
                                Sure Want to Logout?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-danger">
                            This Changes Can Reach to Ui!
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="index.php?page=logout">
                                <button type="button" class="btn btn-primary">OK</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </li>
    </ul>
    <?php }?>

    <?php
if (@$_SESSION['employee_role'] == 3 || @$_SESSION['employee_role'] == 4) {
    ?>
    <ul class="list-unstyled components">

        <li>
            <a href="index.php?page=categories_page">

                <?php echo "Categories" ?>
            </a>
        </li>
        <li>
            <a href="index.php?page=products_page">

                <?php echo "Products" ?>
            </a>
        </li>
        <li>
            <a href="index.php?page=aboutme">

                about Me
            </a>
        </li>

        <li>
            <!-- logout confirm --------------------------------->
            <button type="button" class='btn btn-primary ms-1 mt-2' data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i class="fas fa-power-off"></i> Logout
            </button>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-black" id="exampleModalLabel">Are You
                                Sure Want to Logout?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-danger">
                            This Changes Can Reach to Ui!
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="index.php?page=logout">
                                <button type="button" class="btn btn-primary">OK</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </li>
    </ul>
    <?php }?>
    <?php
if (@$_SESSION['employee_role'] == 5) {
    ?>
    <ul class="list-unstyled components">

        <li>
            <a href="index.php?page=products_page">

                <?php echo "Products" ?>
            </a>
        </li>
        <li>
            <a href="index.php?page=aboutme">

                about Me
            </a>
        </li>

        <li>
            <!-- logout confirm --------------------------------->
            <button type="button" class='btn btn-primary ms-1 mt-2' data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i class="fas fa-power-off"></i> Logout
            </button>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-black" id="exampleModalLabel">Are You
                                Sure Want to Logout?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-danger">
                            This Changes Can Reach to Ui!
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="index.php?page=logout">
                                <button type="button" class="btn btn-primary">OK</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </li>
    </ul>
    <?php }?>





    <ul class="list-unstyled CTAs">
        2021 copy right
    </ul>
</nav>