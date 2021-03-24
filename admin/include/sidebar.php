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
										<a href="admin-today_requests.php">
											<i class="icon-tasks"></i>
											Today's Requests
  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysqli_query($con,"SELECT * FROM recipients_info where requestdatetime Between '$from' and '$to'");
$num_rows1 = mysqli_num_rows($result);
{
?>
											<b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="admin-lastmonth-requests.php">
											<i class="icon-tasks"></i>
											Last Months Requests
										<?php	
		  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="719:59:59";
$to=date('Y-m-d')." ".$t1;								 
$ret = mysqli_query($con,"SELECT * FROM recipients_info where requestdatetime Between '$from' and '$to'");
$num = mysqli_num_rows($ret);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
										</a>
									</li>
								</ul>
								
							</li>
							
							
							
							
							<li>
							
								<a class="collapsed" data-toggle="collapse" href="#togglePages1">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Search 
								</a>
								
								<ul id="togglePages1" class="collapse unstyled">
								
									<li>
										<a href="search-result.php">
											<i class="icon-tasks"></i>
											Search By Blood Group	
										</a>
									</li>
									
									<li>
										<a href="adv-search-result.php">
											<i class="icon-tasks"></i>
											Search By Location
										</a>
									</li>
									
								</ul>
								
							</li>
					
							
							
							
							
							
							
							<li>
								<a href="admin-profile.php">
									<i class="menu-icon icon-group"></i>
									Profile Info
								</a>
							</li>
							
							<li>
								<a href="admin-bloodgroups.php">
									<i class="menu-icon icon-group"></i>
									Stock

								</a>
							</li>
							
							<li>
								<a href="admin-bloodbank.php">
									<i class="menu-icon icon-group"></i>
									Blood Bank Info
								</a>
							</li>
							
							<li>
								<a href="admin-create-users.php">
									<i class="menu-icon icon-group"></i>
									Create An Admin
								</a>
							</li>
							
						</ul>


						<ul class="widget widget-menu unstyled">
                                <li><a href="admin-recipients.php"><i class="menu-icon icon-tasks"></i> Recipient's Information </a></li>
                                <li><a href="admin-messages.php"><i class="menu-icon icon-tasks"></i>User Feedback </a></li>
								<li><a href="admin-send-messages.php"><i class="menu-icon icon-tasks"></i>Blood Camp </a></li>
                                <li><a href="admin-medical.php"><i class="menu-icon icon-paste"></i>Medical Information</a></li>
                                <li><a href="admin-donors.php"><i class="menu-icon icon-table"></i>Donor's information</a></li>
								<li><a href="admin-manage-users.php"><i class="menu-icon icon-table"></i>Manage Users</a></li>
                        
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li><a href="admin-user-logs.php"><i class="menu-icon icon-tasks"></i>User Login Log </a></li>
							
							<li>
								<a href="admin-logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
