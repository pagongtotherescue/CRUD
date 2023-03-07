<?php include('header.php'); ?>
<?php include('topbar.php'); ?>
<?php include ('database.php');
$ID=$_GET['user_id'];
 ?>
   <body class="theme-orange">
   <?php
        $query=mysqli_query($con,"select * from users where user_id='$ID'")or die(mysqli_error()) ;
        $row=mysqli_fetch_array($query);
  ?>
  <div class="row clearfix">
                <div class="col-lg-10 col-md-5 col-sm-2 col-xs-5 m-l-100">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update <b><?php echo $row['username'] ; ?></b> Account
                                <small></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="users.php">Go Back</a></li>
                                        <li><a href="view_users.php">View User Profile</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
              
                        <div class="body">
                            <form method="POST">
                            <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $row['username']; ?>">
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="firstname" class="form-control" name="firstname" value="<?php echo $row['firstname']; ?>">
                                        <label class="form-label">First Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="middlename" class="form-control" name="middlename" value="<?php echo $row['middlename']; ?>">
                                        <label class="form-label">Middle Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="lastname" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>">
                                        <label class="form-label">Last Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" id="birthday" class="form-control" name="birthday" value="<?php echo $row['birthday']; ?>">
                                        <label class="form-label">Birthday</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="gender" class="form-control" name="gender" value="<?php echo $row['gender']; ?>">
                                        <label class="form-label">Gender</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="address" class="form-control" name="address" value="<?php echo $row['address']; ?>">
                                        <label class="form-label">Address</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="school" class="form-control" name="school" value="<?php echo $row['school']; ?>">
                                        <label class="form-label">School</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" id="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                                        <label class="form-label">Email Address</label>
                                    </div>
                                </div>

                                <br>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="update" value="update"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <?php
$id =$_GET['user_id'];
if (isset($_POST['update'])) {

    $username=$_POST['username'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $school=$_POST['school'];
    $email=$_POST['email'];

{		
mysqli_query($con," UPDATE users SET username='$username', firstname='$firstname', middlename='$middlename', lastname='$lastname', birthday='$birthday', 
gender='$gender', address='$address', school='$school', email='$email' WHERE user_id = '$id' ")or die(mysqli_error());
echo "<script>alert('Successfully Updated User Info!'); window.location='view_users.php'</script>";
}

}
?>
</body>