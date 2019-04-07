<?php
require_once 'db/dbconn.php';
if(isset($_POST['btn_add_register'])){
$get_full_name = mysqli_real_escape_string($my_connect, $_POST['txt_name']);
$get_contact = mysqli_real_escape_string($my_connect, $_POST['txt_contact']);
$get_department = mysqli_real_escape_string($my_connect, $_POST['sel_department']);
$get_rank = mysqli_real_escape_string($my_connect, $_POST['sel_rank']);
$get_elector_1_name = mysqli_real_escape_string($my_connect, $_POST['elector1_name']);
$get_elector_1_phone = mysqli_real_escape_string($my_connect, $_POST['elector1_phone']);
$get_elector_1_department = mysqli_real_escape_string($my_connect, $_POST['sel_elector_1_department']);
$get_elector_1_rank = mysqli_real_escape_string($my_connect, $_POST['sel_elector_1_rank']);
$get_elector_2_name = mysqli_real_escape_string($my_connect, $_POST['elector2_name']);
$get_elector_2_phone = mysqli_real_escape_string($my_connect, $_POST['elector2_phone']);
$get_elector_2_department = mysqli_real_escape_string($my_connect, $_POST['sel_elector_2_department']);
$get_elector_2_rank = mysqli_real_escape_string($my_connect, $_POST['sel_elector_2_rank']);

$get_rep_name = mysqli_real_escape_string($my_connect, $_POST['txt_rep_name']);

$run_insert_query = mysqli_query($my_connect,"
INSERT INTO `nominees` (`nominee_id`, `nominee_name`, `nominee_department`, 
`nominee_rank`, `nominee_contact`, `elector_1_name`, `elector_1_contact`,
 `elector_1_department`, `elector_1_rank`, `elector_2_name`, `elector_2_contact`, 
 `elector_2_department`, `elector_2_rank`, `nominee_representative`, `creation_timestamp`) 
 VALUES (NULL, '$get_full_name', '$get_department', '$get_rank', '$get_contact', '$get_elector_1_name', 
 '$get_elector_1_phone', '$get_elector_1_department', '$get_elector_1_rank', '$get_elector_2_name',
  '$get_elector_2_phone', '$get_elector_2_department', '$get_elector_2_rank', 
 '$get_rep_name', CURRENT_TIMESTAMP)
");

if($run_insert_query){
	echo "<script>window.location.href='thank_you.html'</script>";
}

}

?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>PRESBYTERY HEALTH SERVICE </title>
	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<link rel="stylesheet" href="css/mbd.min.css">

<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//web.presbyhealthservices.com/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
</head>


<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu" id="mainNav">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container box_1620">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/log.png" alt="" height="40px" width="120px"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.html">Nominations</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="home_left_img">
							<img src="img/pic.png" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner_content">
							<h3 style="font-weight: bold">CALL FOR <strong>NOMINATIONS</strong></h3>
							<p>Do you think have the neccessary skills to become the next Workers Representative at <strong>KWAHU PRESBYTERY
									HEALTH SERVICE. </strong>
								Then apply <strong>now </strong> by filling the form below and hit <strong>submit</strong> </p>
							<a class="banner_btn" href="#">Apply Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Welcome Area =================-->
	<section class="welcome_area">
		<div class="container">
			<div class="row welcome_inner">
				<div class="">
					<div class="welcome_text" style="text-align:center">
						<div class="row">
							<!-- Default form register -->
							<!-- Material form register -->
							<div class="card">
								<h5 class="card-header info-color white-text text-center py-4">
									<strong>Normination Forms</strong>
								</h5>

								<hr>
								<label style="text-align: center"><strong>Personal Details</strong> </label>
								<hr>
								<!--Card content-->
								<div class="card-body px-md-5 pt-0">
									<!-- Form -->
									<form class="text-center" style="color: #757575;" method='post'>
										<div class="form-row">
											<div class="col">
												<!-- Full name -->
												<div class="md-form">
													<input type="text" id="txt_name" name="txt_name" class="form-control" required>
													<label for="materialRegisterFormFirstName">Full name</label>
												</div>
											</div>
											<div class="col">
												<!-- Last name -->
												<div class="md-form">
													<input type="text" id="txt_contact" name="txt_contact" class="form-control" required>
													<label for="materialRegisterFormLastName">Contact</label>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col">
												<!-- Department -->
												<div class="md-form">
													<select class="mdb-select browser-default custom-select w-100" id="sel_department" name="sel_department" required>
														<option value="" disabled selected>Choose Department</option>
														<?php    
														$departments = mysqli_query($my_connect,"SELECT * FROM departments ORDER BY `staff_department`");
														while($my_departments = mysqli_fetch_array($departments)){ ?>
														 <option value="<?php  echo $my_departments['staff_department_id'] ?>"><?php echo $my_departments['staff_department'];  ?></option>
													<?php	}
														
														?>
													</select>
												</div>
											</div>
											<div class="col">
												<!-- Department -->
												<div class="md-form">
													<select class="mdb-select w-100" id="sel_rank" name="sel_rank" required>
														<option value="" disabled selected>Choose Rank</option>
														<?php    
														$departments = mysqli_query($my_connect,"SELECT * FROM ranks ORDER BY `staff_ranks`");
														while($my_departments = mysqli_fetch_array($departments)){ ?>
														 <option value="<?php  echo $my_departments['staff_rank_id'] ?>"><?php echo $my_departments['staff_ranks'];  ?></option>
													<?php	}
														
														?>
													</select>
												</div>
											</div>
										</div>

										<br>
										<hr>
										<label style="text-align: center"><strong>Elector Supporting Nomination</strong> </label>
										<hr>
										<div class="form-row">
											<div class="col">
												<div class="md-form w-100">
													<input type="text" id="elector1_name" name="elector1_name" class="form-control " aria-describedby="materialRegisterFormPasswordHelpBlock"
													 required>
													<label for="materialRegisterFormPassword">Name</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Supporting Nomination 1
													</small>
												</div>
											</div>
											<div class="col">
												<div class="md-form">
													<input type="text" id="elector1_phone" name="elector1_phone" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock"
													 required>
													<label for="materialRegisterFormPassword">Telephone</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Supporting Nomination 1
													</small>
												</div>
											</div>
										</div>
										<!-- E-mail -->
										<div class="form-row">
											<div class="col">
												<!-- Department -->
												<select class="mdb-select w-100" searchable="Search here.." id="sel_elector_1_department" name="sel_elector_1_department" required>
													<option value="" disabled selected>Choose Department</option>
													<?php    
														$departments = mysqli_query($my_connect,"SELECT * FROM departments ORDER BY `staff_department`");
														while($my_departments = mysqli_fetch_array($departments)){ ?>
														 <option value="<?php  echo $my_departments['staff_department_id'] ?>"><?php echo $my_departments['staff_department'];  ?></option>
													<?php	} ?>
														
												</select>
											</div>
											<div class="col">
												<!-- Department -->
												<select class="mdb-select w-100" searchable="Search here.." id="sel_elector_1_rank" name="sel_elector_1_rank" required>
													<option value="" disabled selected>Choose Rank</option>
													<?php    
														$departments = mysqli_query($my_connect,"SELECT * FROM ranks ORDER BY `staff_ranks`");
														while($my_departments = mysqli_fetch_array($departments)){ ?>
														 <option value="<?php  echo $my_departments['staff_rank_id'] ?>"><?php echo $my_departments['staff_ranks'];  ?></option>
													<?php	}
														
														?>
												</select>
											</div>
										</div>

										<div class="form-row">
											<div class="col">
												<div class="md-form w-100">
													<input type="text" id="elector2_name" name="elector2_name" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
													<label for="materialRegisterFormPassword">Name</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Supporting Nomination 2
													</small>
												</div>
											</div>
											<div class="col">
												<div class="md-form">
													<input type="text" id="elector2_phone" name="elector2_phone" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
													<label for="materialRegisterFormPassword">Telephone</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Supporting Nomination 2
													</small>
												</div>
											</div>
										</div>
										<!-- E-mail -->
										<div class="form-row">
											<div class="col">
												<!-- Department -->
												<select class="mdb-select w-100" searchable="Search here.." id="sel_elector_2_department" name="sel_elector_2_department" required>
													<option value="" disabled selected>Choose Department</option>
													<?php    
														$departments = mysqli_query($my_connect,"SELECT * FROM departments ORDER BY `staff_department`");
														while($my_departments = mysqli_fetch_array($departments)){ ?>
														 <option value="<?php  echo $my_departments['staff_department_id'] ?>"><?php echo $my_departments['staff_department'];  ?></option>
													<?php	} ?>
												</select>
											</div>
											<div class="col">
												<!-- Department -->
												<select class="mdb-select w-100" searchable="Search here.." id="sel_elector_2_rank" name="sel_elector_2_rank" required>
													<option value="" disabled selected>Choose Rank</option>
													<?php    
														$departments = mysqli_query($my_connect,"SELECT * FROM ranks ORDER BY `staff_ranks`");
														while($my_departments = mysqli_fetch_array($departments)){ ?>
														 <option value="<?php  echo $my_departments['staff_rank_id'] ?>"><?php echo $my_departments['staff_ranks'];  ?></option>
													<?php	}
														
														?>
												</select>
											</div>
										</div>
										<br>
										<hr>
										<label style="text-align: center"><strong>Signature Of Electors</strong> </label>
										<hr>
										<div class="form-row">
											<div class="col">
												<!-- Elector 1 -->
												<div class="md-form w-100">
													<input type="text" id="signature_elector_1" class="form-control" disabled>
													<label for="materialRegisterFormFirstName">Signature</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Elector 1 Signature
													</small>
												</div>
											</div>
											<div class="col">
												<!-- Elector 1 -->
												<div class="md-form w-100">
													<input type="text" id="signature_elector_2" class="form-control" disabled>
													<label for="materialRegisterFormFirstName">Date</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Date Of Signature
													</small>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col">
												<!-- Elector 2 -->
												<div class="md-form">
													<input type="text" id="materialRegisterFormFirstName" class="form-control" disabled>
													<label for="materialRegisterFormFirstName">Signature</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Elector 2 Signature
													</small>
												</div>
											</div>
											<div class="col">
												<!-- Elector 2 -->
												<div class="md-form">
													<input type="text" id="datepicker" class="form-control datepicker">
													<label for="materialRegisterFormFirstName">Date</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4" disabled>
														Date Of Signature
													</small>
												</div>
											</div>
										</div>

										<br>
										<hr>
										<label style="text-align: center"><strong>Consent Of Nominee</strong> </label>
										<hr>

										<label>I consent to the above nomination</label>

										<div class="form-row">
											<div class="col">
												<!-- Elector 2 -->
												<div class="md-form">
													<input type="text" id="materialRegisterFormFirstName" class="form-control" disabled>
													<label for="materialRegisterFormFirstName">Signature Of <strong>NOMINEE</strong></label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Nominee Signature
													</small>
												</div>
											</div>
											<div class="col">
												<!-- Elector 2 -->
												<div class="md-form">
													<input type="text" id="datepicker" class="form-control" disabled>
													<label for="materialRegisterFormFirstName">Date</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Date Of Signature
													</small>
												</div>
											</div>
										</div>

										<div style="padding:20px;border:black 2px dotted">
											<h5 style="font-weight:bold">This nomination form must reach the office of the Returning Officer By Friday
												<strong>25th January, 2019
												</strong>at the conference room (Maternity Block)</h5>
										</div>

										<div>
											<br>
											<span>Declaration Of Candidate</span>
											<ul class="list-group" style="text-align:left">
												<li class="list-group-item">1. Having been duly nominated and confirmed as candidate as a candidate in the
													upcoming elections, I understand the election rules and agree to abide by them. Any failure to do so will
													result in my being disqualified as a candidate. I understand that any and all publicity materials used in
													my campaign must be approved by the selection officer</li>
												<li class="list-group-item">2. I understand that i am fully responsible for all election-related materials
													used by me or my team</li>
												<li class="list-group-item">3. My candidate's Representative is
													<div class="form-row">
														<div class="col">
															<div class="md-form">
																<input type="text" id="txt_rep_name" name="txt_rep_name" class="form-control" required>
																<label for="materialRegisterFormFirstName">Name</label>
															</div>
														</div>
														<div class="col">
															<div class="md-form">
																<input type="text" id="txt_signature" class="form-control" disabled>
																<label for="materialRegisterFormFirstName">Signature</label>
															</div>
														</div>
														<div class="col">
															<div class="md-form">
																<input type="text" id="txt_date_time" class="form-control" disabled>
																<label for="materialRegisterFormFirstName">Date and Time</label>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>

										<div class="form-row">
											<div class="col">
												<div class="md-form">
													<input type="text" id="txt_my_signature" class="form-control" disabled>
													<label for="materialRegisterFormFirstName">Signature</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Signature Of Election Officer
													</small>
												</div>
											</div>
										</div>

										<!-- Sign up button -->
										<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="btn_add_register">Register</button>

									</form>
									<!-- Form -->

								</div>

							</div>
							<!-- Material form register -->
							<!-- Default form register -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Welcome Area =================-->

	<br><br>

	<!--================Footer Area =================-->
	<footer class="footer_area p_10">
		<div class="container">
			<div class="row footer_inner">
				<div styl="text-align:center">
					<aside class="f_widget ab_widget" style="text-align:center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;
							<script>document.write(new Date().getFullYear());</script> This software is Designed By StepNetwork </p> </aside>
							 </div> <div class="col-lg-5 col-sm-6">
							
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->





	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
	<!-- JQuery -->
	<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<!-- Bootstrap tooltips -->

	<script src="js/popper.min.js"></script>
	<script src="js/mbd.min.js"></script>

	<script>
	</script>

</body>

</html>