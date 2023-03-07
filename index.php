<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In</title>
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

<body class="login-page" style="background-color: orange;">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Tex<b style="color:black;">TILE</b></a>
            <small style="color:black;">Construction Company</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-black">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-blue waves-effect" type="submit" name="submit">SUBMIT</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="regForm.php" style="color:black;">Register</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html" style="color:gold;">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
    <script src="js/pages/examples/sign-in.js"></script>

    <?php
      include('database.php');

     if(isset($_POST['submit'])){

      $username=$_POST['username'];
      $password=$_POST['password'];

      $login_query=mysqli_query($con, "select * from admin where username='$username' and password='$password' ");
      $count=mysqli_num_rows($login_query);
      $row=mysqli_fetch_array($login_query);

      if ($count > 0){
        session_start();
        $_SESSION['id']=$row['admin_id'];

        echo "<script>window.location='homePage.php' </script>";
      } else { 
}
      }

      if(isset($_POST['submit'])){
      
        $username=$_POST['username'];
        $password=$_POST['password'];
        
  
        $login_query=mysqli_query($con, "select * from users where username='$username' and password='$password' ");
        $count=mysqli_num_rows($login_query);
        $row=mysqli_fetch_array($login_query);
  
        if ($count > 0){
          session_start();
          $_SESSION['user_id']=$row['user_id'];
          
  
          echo "<script>window.location='homePage.php' </script>";
        } else { 
          echo "<div class='alert alert-success'>".'Username/Password is Incorrect'."</div>";
        }
          
          ?>

<?php
}
      
                            
       ?>

</body>
</html>