<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="signup-page" style="background-color: orange;" >
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Tex<b style="color:black;">Tile</b></a>
            <small style="color:black;">Construction Company</small>
        </div>
        <div class="card">
            <div class="body">
                <form method="POST">
                    <div class="msg">Register a new membership</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="firstname" placeholder="First Name" required autofocus>
                        </div> </div>
                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="middlename" placeholder="Middle Name" required autofocus>
                        </div></div>
                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required autofocus>
                        </div></div>
                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div></div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirmPassword" minlength="6" placeholder="Confirm Password" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-black">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);" style="color:gold;">terms of usage</a>.</label>
                    </div>

                    <input  class="btn btn-block btn-lg bg-blue waves-effect" type="submit" name="register" value="Register">

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="index.php" style="color:orange;">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
      include('database.php');

      if(isset($_POST['register'])){


        $username=$_POST['username'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];
        $firstname=$_POST['firstname'];
        $middlename=$_POST['middlename'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        

                              $sql="INSERT INTO `users` (`username`, `password`, `confirmPassword`, `firstname`, `middlename`,
                                                         `lastname`, `email`)
                                                VALUES ('$username', '$password', '$confirmPassword', '$firstname', '$middlename',
                                                          '$lastname', '$email')";
                              $con->query($sql) or die($connection->error);
                              echo "<script>window.location='index.php' </script>";
                              

      } ?>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-up.js"></script>
</body>

</html>