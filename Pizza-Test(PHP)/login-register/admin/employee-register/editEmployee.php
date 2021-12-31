<?php
include 'function/employee_update_process.php';
$edit = $_REQUEST['action'];
$editEmployee = mysqli_query($conn, "SELECT * FROM employee_table,role_table WHERE employee_table.role_id = role_table.role_id AND employee_id = '" . $edit . "' ");
$rowEdit = mysqli_fetch_assoc($editEmployee);

?>
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
</head>

<body>

    <div class="container col-6 offset-3 mt-5">
        <div class="card">
            <div class="card-body shadow-lg">
                <form method="POST">
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Employee Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="name" value="<?php echo $rowEdit['name'] ?>">

                    </div>
                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label">Employee Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" name="email"
                            value="<?php echo $rowEdit['email'] ?>">
                        <small class="text-danger"><?php echo @$errorDuplicate; ?></small>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Employee Phone</label>
                        <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="phone" value="<?php echo $rowEdit['phone'] ?>">

                    </div>
                    <div class="form-group mb-1">
                        <label for="">Select Position</label>
                        <select class="form-select" aria-label="Default select example" name="select">
                            <option value="<?php echo $rowEdit['role_id']; ?>">
                                <?php echo $rowEdit['role_name']; ?>
                            </option>
                            <?php $selectRole = mysqli_query($conn, "SELECT * FROM role_table");
while ($role = mysqli_fetch_assoc($selectRole)) {
    ?>
                            <option value="<?php echo $role['role_id']; ?>">
                                <?php echo $role['role_name']; ?>
                            </option>
                            <?php
}
?>
                        </select>

                    </div>


                    <div class="mb-5">
                        <label for="exampleInputEmail1" class="form-label">Employee address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="address" value="<?php echo $rowEdit['address'] ?>">

                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=employee_page">
                            <button type="button" class="btn btn-primary">Cancel</button>
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#updateModal">
                            Update
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are You
                                            Sure Want to Update?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-danger">
                                        This Action Can Permantely Change Employee Data Form List!
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary" name="update">Update</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>

</html>