<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">

							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Blood Requests 
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="users-today-requests.php">
											<i class="icon-tasks"></i>
											Today's Requests
  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
$query=mysqli_query($con,"select * from recipients_info where requestdatetime Between '$from' and '$to' && email='".$_SESSION['email']."' ");
$num_rows1 = mysqli_num_rows($query);
{
?>
											<b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="users-lastmonth-requests.php">
											<i class="icon-tasks"></i>
											Last Months Requests
										<?php	
		  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="719:59:59";
$to=date('Y-m-d')." ".$t1;								 
$ret = mysqli_query($con,"SELECT * FROM recipients_info where requestdatetime Between '$from' and '$to'");
$num = mysqli_num_rows($ret);
$ret1 = mysqli_query($con,"SELECT * FROM blood_camp where cdate Between '$from' and '$to'");
$num1 = mysqli_num_rows($ret1);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
<?php 
$f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($con,"SELECT * FROM blood_camp where cdate Between '$from' and '$to'");
$num_rows1 = mysqli_num_rows($result);
{
?>
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="users-profile.php">
									<i class="menu-icon icon-group"></i>
									Profile </b>
								</a>
							</li>
							
							<li>
								<a href="users-inbox-message.php">
									<i class="menu-icon icon-group"></i>
									Inbox </b>
								</a>
							</li>
							
							<li>
								<a href="users-message.php">
									<i class="menu-icon icon-group"></i>
									Blood Camp Messages<b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
								</a>
							</li>
							
							<li>
								<a href="users-bloodgroups.php">
									<i class="menu-icon icon-group"></i>
									Stock of each blood groups

								</a>
							</li>
<?php }?>				
							<li>
								<a href="users-recipients.php">
									<i class="menu-icon icon-group"></i>
									Recipient's Information
								</a>
							</li>
							
						</ul>


						<ul class="widget widget-menu unstyled">
                                <li><a href="users-requestblood.php"><i class="menu-icon icon-tasks"></i> Request For Blood </a></li>
                                <li><a href="users-blood-received.php"><i class="menu-icon icon-tasks"></i>Blood Received</a></li>
								<li><a href="users-donor-form.php"><i class="menu-icon icon-tasks"></i>Blood Donated </a></li>
                                <li><a href="users-medical.php"><i class="menu-icon icon-paste"></i>Medical Information</a></li>
                                <li><a href="users-donors.php"><i class="menu-icon icon-table"></i>Donor's information</a></li>
                        
                            </ul><!--/.widget-nav-->


						<ul class="widget widget-menu unstyled">
							<li><a href="users-logs.php"><i class="menu-icon icon-tasks"></i>User Login Log </a></li>
							
							<li>
								<a href="users-logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
