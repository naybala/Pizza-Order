<?php
include 'function/change_password_process.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
    <div class="container col-6 offset-3 mt-5">
        <div class="card">
            <div class="card-body shadow-lg">
                <form method="POST">

                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Old Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="oldPassword">
                        <small class="text-danger"><?php echo @$errorOldPassword; ?></small>
                        <small class="text-danger"><?php echo @$checkOldPasswordFail; ?></small>
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="newPassword">
                        <small class="text-danger"><?php echo @$errorNewPassword; ?></small>
                        <small class="text-danger"><?php echo @$passwordMismatch; ?></small>
                        <small class="text-danger"><?php echo @$checkPasswordLength; ?></small>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="newConfirmPassword">
                        <small class="text-danger"><?php echo @$errorNewConfirmPassword; ?></small>
                        <small class="text-danger"><?php echo @$passwordMismatch; ?></small>
                        <small class="text-danger"><?php echo @$checkPasswordLength; ?></small>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=aboutme">
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
                                            Sure Want to Update your Password?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-danger">
                                        This Action Can Permantely Change Password !
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary"
                                            name="changePassword">Update</button>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
</script>

</html>