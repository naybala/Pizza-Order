<?php
if (@$_REQUEST['action']) {
    $final = @$_REQUEST['action'];
    $deleteEmployee = mysqli_query($conn, "DELETE FROM employee_table WHERE employee_id = '" . $final . "' ");

}
?>
<?php include "function/exportEmployeeList.php";?>

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





        <!-- Search Bar -->
        <div class="row g-3 align-items-center mb-3">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Employee Search</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>

        </div>







        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Employee Page</h1>
            <p class="mb-4">DataTables is a third party plugin that
                is used to generate the demo table below.
                For more information about DataTables, please visit
                the <a target="_blank" href="https://datatables.net">official
                    DataTables documentation</a>.</p>
            <a href="index.php?page=registerEmployeeRole">
                <button class="btn btn-primary mb-5">Register New Employee Role</button>
            </a>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary mt-2">DataTables
                        Example</h6>
                    <form action="index.php?page=employee_page&action=exportData" method="POST">
                        <button class="btn btn-primary" type="submit" name="exportExcel">Export to Excel</button>
                    </form>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Position</th>
                                    <th>Date</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Position</th>
                                    <th>Date</th>
                                    <th>Operation</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $table = mysqli_query($conn, "SELECT * FROM employee_table,role_table WHERE employee_table.role_id = role_table.role_id");
while ($rowTable = mysqli_fetch_assoc($table)) {

    ?>
                                <tr>
                                    <td><?php echo $rowTable['employee_id'] ?></td>
                                    <td><?php echo $rowTable['name'] ?></td>
                                    <td><?php echo $rowTable['email'] ?></td>
                                    <td><?php echo $rowTable['phone'] ?></td>
                                    <td><?php echo $rowTable['address'] ?></td>
                                    <td><?php echo $rowTable['role_name'] ?></td>
                                    <td><?php echo $rowTable['date'] ?></td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a
                                                href="index.php?page=editEmployee&action=<?php echo $rowTable['employee_id'] ?>">
                                                <button class="btn btn-primary">Edit</button>
                                            </a>
                                            <a
                                                href="index.php?page=deleteEmployee&action=<?php echo $rowTable['employee_id'] ?>">
                                                <button class="btn btn-danger">Detete</button>
                                            </a>




                                            <!-- logout confirm --------------------------------->
                                            <!-- <button class='btn btn-danger' data-bs-toggle="modal"
                                                data-bs-target="#Delete">
                                                Delete
                                            </button>
                                            <div class="modal fade" id="Delete" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-black" id="exampleModalLabel">
                                                                Are You
                                                                Sure Want to Delete?</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-danger">
                                                            This Changes Can Permantely Delete Employee Form List!
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-between">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <a
                                                                href="index.php?page=employee_page&action=<?php echo $rowTable['employee_id'] ?>">
                                                                <button class="btn btn-danger" type="submit">Ok</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                        </div>
                                    </td>
                                </tr>
                                <?php }
?>
                            </tbody>
                        </table>
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