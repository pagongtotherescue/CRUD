<?php include('header.php'); ?>
<?php include('database.php');
$ID=$_GET['user_id'];
?>

<body class="theme-orange">
   <?php include('topbar.php'); ?>

   <?php
        $query=mysqli_query($con,"select * from users where user_id='$ID'")or die(mysqli_error()) ;
        $row=mysqli_fetch_array($query);
  ?>

    <section class="content">
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                    <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                                    <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img src="images/wht_AH_logo.png">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="#"><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></a>
                                                        </h4>
                                                        Shared publicly - 3 Mar 2023
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="post">
                                                    <div class="post-heading">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim 
                                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                                                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque 
                                                            porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                                                            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
                                                            dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis 
                                                            nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid 
                                                            ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea 
                                                            voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
                                                            eum fugiat quo voluptas nulla pariatur?</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="material-icons">thumb_up</i>
                                                            <span>99999999999999999999 Likes</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="material-icons">comment</i>
                                                            <span>0 Comments</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="material-icons">share</i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Type a comment" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                        <form class="form-horizontal" method="POST">
                                            <div class="form-group">
                                                <label for="firstname" class="col-sm-2 control-label">First Name</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $row['firstname']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="middlename" class="col-sm-2 control-label">Middle Name</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name" value="<?php echo $row['middlename']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $row['lastname']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="birthday" class="col-sm-2 control-label">Birthday</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Birthday" value="<?php echo $row['birthday']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="gender" class="col-sm-2 control-label">Gender</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender" value="<?php echo $row['birthday']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="col-sm-2 control-label">Address</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $row['address']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="school" class="col-sm-2 control-label">School</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="school" name="school" placeholder="School" value="<?php echo $row['school']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputExperience" class="col-sm-2 control-label">Experience</label>

                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <textarea class="form-control" id="InputExperience" name="InputExperience" rows="3" placeholder="Experience"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputSkills" class="col-sm-2 control-label">Skills</label>

                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="InputSkills" name="InputSkills" placeholder="Skills">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <input type="checkbox" id="terms_condition_check" class="chk-col-red filled-in" />
                                                    <label for="terms_condition_check">I agree to the <a href="#">terms and conditions</a></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <input type="submit" class="btn btn-danger" name="update" value="UPDATE"></input>
                                                </div>
                                            </div>
                                        </form>
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
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
 
</body>

</html>
