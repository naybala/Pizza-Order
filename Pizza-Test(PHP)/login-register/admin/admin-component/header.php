<div id="content" class="home">

    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                    <i class="glyphicon glyphicon-align-left"></i>
                    <span>Menu</span>
                </button>
            </div>

            <?php
if (@$_SESSION['employee_role'] == 1) {
    ?>
            <a href="index.php?page=employeeRegister">
                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">

                    <span><?php echo "Employee Register" ?></span>
                </button>
            </a>
            <?php }?>
        </div>
    </nav>