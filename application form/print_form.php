<?php
require_once 'db/dbconn.php';

if(isset($_GET['i'])){
    $selected_id = $_GET['i'];
}else{
    echo "<script>window.location.href='list_applicants.php'</script>";
}


$get_query = mysqli_query($my_connect,"SELECT * FROM `nominees` WHERE `nominee_id` = '$selected_id'");
$get_details = mysqli_fetch_array($get_query);
$user_name = $get_details['nominee_name'];
$user_department = $get_details['nominee_department'];
$user_rank = $get_details['nominee_rank'];
$user_contact = $get_details['nominee_contact'];
$user_elector_1_name = $get_details['elector_1_name'];
$user_elector_1_contact = $get_details['elector_1_contact'];
$user_elector_1_department = $get_details['elector_1_department'];
$user_elector_1_rank = $get_details['elector_1_rank'];
$user_elector_2_name = $get_details['elector_2_name'];
$user_elector_2_contact = $get_details['elector_2_contact'];
$user_elector_2_department = $get_details['elector_2_department'];
$user_elector_2_rank = $get_details['elector_2_rank'];
$user_representative = $get_details['nominee_representative'];


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

</head>

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

<body>

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
													<input type="text" id="txt_name" name="txt_name" class="form-control" disabled value="<?php  echo $user_name ?>">
													<label for="materialRegisterFormFirstName">Full name</label>
												</div>
											</div>
											<div class="col">
												<!-- Last name -->
												<div class="md-form">
													<input type="text" id="txt_contact" name="txt_contact" class="form-control" disabled value="<?php  echo $user_contact ?>">
													<label for="materialRegisterFormLastName">Contact</label>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col">
												<!-- Department -->
												<div class="md-form">
                                                <input type="text" id="txt_name" name="txt_name" class="form-control" disabled value="
                                                <?php  $get_departments_query = mysqli_query($my_connect,"SELECT * FROM `departments`"); 
                                                while($my_departments = mysqli_fetch_array($get_departments_query)){
                                                    if($my_departments['staff_department_id'] == $user_department ){
                                                        echo $my_departments['staff_department'];
                                                    }else{

                                                    }
                                                } 
                                                 ?>">
													<label for="materialRegisterFormFirstName">Department</label>
												</div>
											</div>
											<div class="col">
												<!-- Department -->
												<div class="md-form">
                                                <input type="text" id="txt_name" name="txt_name" class="form-control" disabled value="
                                                <?php  $get_ranks_query = mysqli_query($my_connect,"SELECT * FROM `ranks`"); 
                                                while($my_ranks = mysqli_fetch_array($get_ranks_query)){
                                                    if($my_ranks['staff_rank_id'] == $user_rank ){
                                                        echo $my_ranks['staff_ranks'];
                                                    }else{

                                                    }
                                                } 
                                                 ?>">
													<label for="materialRegisterFormFirstName">Rank</label>
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
                                                    disabled value="<?php  echo $user_elector_1_name ?>">
													<label for="materialRegisterFormPassword">Name</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Supporting Nomination 1
													</small>
												</div>
											</div>
											<div class="col">
												<div class="md-form">
													<input type="text" id="elector1_phone" name="elector1_phone" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock"
                                                    disabled value="<?php  echo $user_elector_1_contact ?>">
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
												<div class="md-form w-100">
													<input type="text" id="elector1_name" name="elector1_name" class="form-control " aria-describedby="materialRegisterFormPasswordHelpBlock"
                                                    disabled value=" <?php  $get_departments_query = mysqli_query($my_connect,"SELECT * FROM `departments`"); 
                                                while($my_departments = mysqli_fetch_array($get_departments_query)){
                                                    if($my_departments['staff_department_id'] == $user_elector_1_department ){
                                                        echo $my_departments['staff_department'];
                                                    }else{

                                                    }
                                                } 
                                                 ?>">
													<label for="materialRegisterFormPassword">Department</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Supporting Nomination 1
													</small>
												</div>
											</div>
											<div class="col">
												<div class="md-form">
													<input type="text" id="elector1_phone" name="elector1_phone" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock"
                                                    disabled value="<?php  $get_ranks_query = mysqli_query($my_connect,"SELECT * FROM `ranks`"); 
                                                while($my_ranks = mysqli_fetch_array($get_ranks_query)){
                                                    if($my_ranks['staff_rank_id'] == $user_elector_1_rank ){
                                                        echo $my_ranks['staff_ranks'];
                                                    }else{

                                                    }
                                                } 
                                                 ?>">
													<label for="materialRegisterFormPassword">Rank</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Supporting Nomination 1
													</small>
												</div>
											</div>
											
                                        </div>
                                        
                                        

										<div class="form-row">
											<div class="col">
												<div class="md-form w-100">
                                                    <input type="text" id="elector2_name" name="elector2_name" class="form-control"
                                                     aria-describedby="materialRegisterFormPasswordHelpBlock" value="<?php  echo $user_elector_2_name ?>">
													<label for="materialRegisterFormPassword">Name</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Supporting Nomination 2
													</small>
												</div>
											</div>
											<div class="col">
												<div class="md-form">
                                                    <input type="text" id="elector2_phone" name="elector2_phone" 
                                                    class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock"  value="<?php  echo $user_elector_2_contact ?>"> 
													<label for="materialRegisterFormPassword">Telephone</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Supporting Nomination 2
													</small>
												</div>
											</div>
                                        </div>
                                        
                                        <div class="form-row">
                                        <div class="col">
												<div class="md-form w-100">
                                                    <input type="text" id="elector1_name" name="elector1_name" 
                                                    class="form-control " aria-describedby="materialRegisterFormPasswordHelpBlock"
                                                    disabled  value=" <?php  $get_departments_query = mysqli_query($my_connect,"SELECT * FROM `departments`"); 
                                                while($my_departments = mysqli_fetch_array($get_departments_query)){
                                                    if($my_departments['staff_department_id'] == $user_elector_2_department ){
                                                        echo $my_departments['staff_department'];
                                                    }else{

                                                    }
                                                } 
                                                 ?>">
													<label for="materialRegisterFormPassword">Department</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Supporting Nomination 2
													</small>
												</div>
											</div>
											<div class="col">
												<div class="md-form">
													<input type="text" id="elector1_phone" name="elector1_phone" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock"
                                                    disabled  value="<?php  $get_ranks_query = mysqli_query($my_connect,"SELECT * FROM `ranks`"); 
                                                while($my_ranks = mysqli_fetch_array($get_ranks_query)){
                                                    if($my_ranks['staff_rank_id'] == $user_elector_2_rank ){
                                                        echo $my_ranks['staff_ranks'];
                                                    }else{

                                                    }
                                                } 
                                                 ?>">
													<label for="materialRegisterFormPassword">Rank</label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Supporting Nomination 2
													</small>
												</div>
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
													<label for="materialRegisterFormFirstName"></label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Elector 1 Signature
													</small>
												</div>
											</div>
											<div class="col">
												<!-- Elector 1 -->
												<div class="md-form w-100">
													<input type="text" id="signature_elector_2" class="form-control" disabled>
													<label for="materialRegisterFormFirstName"></label>
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
													<label for="materialRegisterFormFirstName"></label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Elector 2 Signature
													</small>
												</div>
											</div>
											<div class="col">
												<!-- Elector 2 -->
												<div class="md-form">
													<input type="text" id="datepicker" class="form-control datepicker">
													<label for="materialRegisterFormFirstName"></label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4" disabled>
														Date Of Signature
													</small>
												</div>
											</div>
										</div>
                                                <br><br><br><br><br><br><br>
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
													<label for="materialRegisterFormFirstName"></label>
													<small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Nominee Signature
													</small>
												</div>
											</div>
											<div class="col">
												<!-- Elector 2 -->
												<div class="md-form">
													<input type="text" id="datepicker" class="form-control" disabled>
													<label for="materialRegisterFormFirstName"></label>
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
																<input type="text" id="txt_rep_name" name="txt_rep_name" class="form-control" disabled  value="<?php  echo $user_representative ?>">
                                                                <label for="materialRegisterFormFirstName"></label>
                                                                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Name Of Representative
													</small>
															</div>
														</div>
														<div class="col">
															<div class="md-form">
																<input type="text" id="txt_signature" class="form-control" disabled>
                                                                <label for="materialRegisterFormFirstName"></label>
                                                                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Signature Of Representative
													</small>
															</div>
														</div>
														<div class="col">
															<div class="md-form">
																<input type="text" id="txt_date_time" class="form-control" disabled>
                                                                <label for="materialRegisterFormFirstName"></label>
                                                                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
														Date And Time
													</small>
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