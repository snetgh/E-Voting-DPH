<?php
	require '../db/dbconn.php';

	 setcookie("del", 'o', time() + (86400 * 30),"/");

?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Voting | Manage Officers</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

			<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>


	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="dashboard.php" class="logo">
						<img src="img/log.png" height="35" alt="logo" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							
						</a>
						<span><?php echo $_COOKIE['u'];  ?></span>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								
								<li>
									<a role="menuitem" tabindex="-1" href="change_password.php" data-lock-screen="true"><i class="fa fa-lock"></i> Change Password</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="index.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
               <div class="nano-content">
                  <nav id="menu" class="nav-main" role="navigation">
                     <ul class="nav nav-main">
                        <li>
                           <a href="dashboard.php">
                              <i class="fa fa-home" aria-hidden="true"></i>
                              <span>Dashboard</span>
                           </a>
                        </li>

                        <li>
                           <a href="add_officer.php">
                              <i class="fa fa-cubes" aria-hidden="true"></i>
                              <span>Add Officer</span>
                           </a>
                        </li>

                        <li class="nav-active">
                           <a href="manage_officers.php">
                              <i class="fa fa-cogs" aria-hidden="true"></i>
                              <span>Manage Officer</span>
                           </a>
                        </li>

                        <li>
                           <a href="add_voters.php">
                              <i class="fa fa-plus-square" aria-hidden="true"></i>
                              <span>Add Voters</span>
                           </a>
                        </li>

                        <li>
                           <a href="manage_voters.php">
                              <i class="fa fa-cogs" aria-hidden="true"></i>
                              <span>Manage Voters</span>
                           </a>
                        </li>

                        <li>
                           <a href="add_nominee.php">
                              <i class="fa fa-plus-square" aria-hidden="true"></i>
                              <span>Add Nominees</span>
                           </a>
                        </li>

                        <li>
                           <a href="manage_nominee.php">
                              <i class="fa fa-cogs" aria-hidden="true"></i>
                              <span>Manage Nominees</span>
                           </a>
                        </li>


                        <li>
                           <a href="change_password.php">
                              <i class="fa fa-exchange" aria-hidden="true"></i>
                              <span>Change Password</span>
                           </a>
                        </li>

                        <li>
                           <a href="index.php">
                              <i class="fa fa-power-off" aria-hidden="true"></i>
                              <span>Logout</span>
                           </a>
                        </li>


                     </ul>
                  </nav>

                  <hr class="separator" />
               </div>

            </div>

         </aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Manage Officers</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Manage Officers</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						
						<div class="row">
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
						
										<h2 class="panel-title">Manage Officers</h2>
									</header>
									<div class="panel-body">
										<div class="table-responsive" style="overflow-x: hidden!important">
											<table class="table table-hover mb-none" id="datatable-default">
												<thead>
													<tr>
														<th>#</th>
														<th>Full name</th>
														<th>Username</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$get_officer_data = mysqli_query($my_connect,"SELECT * FROM reg_tbl_login WHERE `reg_user_status` = '2'");

													while ($officers_data = mysqli_fetch_array($get_officer_data)) {  ?>

													<tr>
														<td><?php echo $officers_data['reg_user_id'];  ?></td>
														<td><?php echo $officers_data['reg_user_name'];  ?></td>
														<td><?php echo $officers_data['reg_user_username'];  ?></td>
													</tr>
														
												<?php	}

													?>
												</tbody>
											</table>
										</div>
									</div>
								</section>
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Calender</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
							</div>
		
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<script src="../js/tabledit.js"></script>

		<script>  
$(document).ready(function(){  

     $('#datatable-default').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'full_name'],[2, 'username']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>


	</body>
</html>