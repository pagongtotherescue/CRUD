<?php include('header.php'); ?>
<?php include('topbar.php'); ?>
<?php include('database.php'); ?>
<body class="theme-orange" >
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2> Members  </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="add_members.php">Add Members</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Member Full Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                $result= mysqli_query($con,"select * from users order by user_id DESC") or die (mysqli_error());
                                while ($row= mysqli_fetch_array ($result) ){
                                $id=$row['user_id'];
                                ?>

                               <tr>
                    <td>
                    
                    <?php echo $row['user_id']; ?></a></td> 
                    <td><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></td> 
                    <td><?php echo $row['username']; ?></td> 
                    <td><?php echo $row['email']; ?></td> 
                    <td><?php echo $row['status']; ?></td> 

                    <td>
									<a class="btn btn-primary" for="ViewUsers" href="view_users.php<?php echo '?user_id='.$id; ?>">
									View
									</a>
									<a class="btn btn-warning"  for="EditUsers" href="edit_users.php<?php echo '?user_id='.$id; ?>">	
									Edit
									</a>
									<a class="btn btn-danger" for="DeleteUsers" href="#delete<?php echo $id;?>" data-toggle="modal" data-target="#delete<?php echo $id;?>">
										Delete
									</a>
                                    <!-- del modal user -->
									<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i>User</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-danger">
													Are you sure you want to delete?
												</div>
												<div class="modal-footer">
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												<a href="delete_users.php<?php echo '?user_id='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												</div>
										</div>
										</div>
									</div>
                </tr>
                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                                </body>


               