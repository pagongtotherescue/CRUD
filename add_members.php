<?php include('header.php'); ?>
<?php include('topbar.php'); ?>

  <body class="theme-orange">
  <div class="row clearfix">
                <div class="col-lg-10 col-md-5 col-sm-2 col-xs-5 m-l-100">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Create Account
                                <small></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="users.php">Go Back</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form method="POST">
                            <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="username" class="form-control" name="username">
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="firstname" class="form-control" name="firstname">
                                        <label class="form-label">First Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="middlename" class="form-control" name="middlename">
                                        <label class="form-label">Middle Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="lastname" class="form-control" name="lastname">
                                        <label class="form-label">Last Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" id="password" class="form-control" name="password">
                                        <label class="form-label"> Password </label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" id="confirmPassword" class="form-control" name="confirmPassword">
                                        <label class="form-label">Confirm Password</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" id="birthday" class="form-control" name="birthday">
                                        <label class="form-label">Birthday</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="gender" class="form-control" name="gender">
                                        <label class="form-label">Gender</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="address" class="form-control" name="address">
                                        <label class="form-label">Address</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="school" class="form-control" name="school" >
                                        <label class="form-label">School</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" id="email" class="form-control" name="email">
                                        <label class="form-label">Email Address</label>
                                    </div>
                                </div>

                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="create"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
      include('database.php'); 

      if(isset($_POST['create'])){


        $username=$_POST['username'];
        $firstname=$_POST['firstname'];
        $middlename=$_POST['middlename'];
        $lastname=$_POST['lastname'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];
        $birthday=$_POST['birthday'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $school=$_POST['school'];
        $email=$_POST['email'];
        

                              $sql="INSERT INTO `users` (`username`, `firstname`, `middlename`, `lastname`,
                                                         `password`, `confirmPassword`,  `birthday`,
                                                         `gender`, `address`, `school`, `email`)
                                                VALUES ('$username', '$firstname', '$middlename', '$lastname',
                                                        '$password','$confirmPassword', '$birthday',
                                                          '$gender', '$address', '$school', '$email')";
                              $con->query($sql) or die($connection->error);
                              echo "<script>window.location='users.php' </script>";
                              

      } ?>
</body>