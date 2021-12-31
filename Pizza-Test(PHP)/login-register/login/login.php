<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
                initial-scale=1.0">
    <title>Document</title>
    <style>
    .register {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        margin-top: 3%;
        padding: 3%;
    }

    .register-left {
        text-align: center;

        color: #f8f9fa;


    }

    .register-left input {
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 90%;
        margin-bottom: 3%;
        cursor: pointer;
    }

    .register-right {
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }


    .register-left p {
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }

    .register .register-form {
        padding: 10%;
        margin-top: 10%;
    }




    .register-heading {
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
    }
    </style>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="loginstyle.css">


</head>

<body class="">
    <?php
include 'function/login_process.php';
?>


    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <h3>Welcome</h3>
                <p>Aru U Hungry?Let's Order Some Pizza</p>
                <a href="index.php?page=back">
                    <input type="submit" name="" value="<Back" /><br />
                </a>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Login Here</h3>
                        <form action="" method="POST">
                            <div class="row register-form">


                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control
                                        " name="email" value="<?php echo htmlspecialchars(@$email); ?>" />
                                    <small class="text-danger"><?php echo $errorEmail; ?></small>
                                    <small class="text-danger"><?php echo @$errorLogin; ?></small>
                                </div>

                                <div class="mb-3">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control
                                        " name="password" value="<?php echo htmlspecialchars(@$password); ?>" />
                                    <small class="text-danger"><?php echo $errorPassword; ?></small>
                                    <small class="text-danger"><?php echo @$errorLogin; ?></small>
                                </div>

                                <div class="container mb-3">
                                    <div class="row mb-5">
                                        <div class="col-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label
                                                            mb-3" for="flexCheckChecked">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex
                                                    justify-content-lg-end">
                                            <a href="" class="text-primary">Forgot
                                                Password</a>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-6
                                                mx-auto mb-3
                                                ">
                                        <button class="btn btn-primary" type="submit" name="btnLogin">Login</button>
                                    </div>
                                    <div class="col-md-6 offset-3">
                                        <a href="index.php?page=register" class="ms-5">
                                            Don't You Have an Account SignUp Here!
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>


</html>