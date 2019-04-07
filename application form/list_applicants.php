<?php
require_once 'db/dbconn.php';

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
								<h5 class="card-header info-color white-text text-center py-4">
									<strong>List Of Applicants</strong>
                                </h5>
                                
								<!--Card content-->
								<div class="card-body px-md-6 pt-0">
								<table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Representative
      </th>
      <th class="th-sm">Print Form
      </th>
    </tr>
  </thead>
  <tbody>
      <?php

    $get_list = mysqli_query($my_connect,"SELECT * FROM nominees");
    while($applicants = mysqli_fetch_array($get_list)){  ?>
     <tr>
      <td><?php echo $applicants['nominee_name'];  ?></td>
      <td><?php echo $applicants['nominee_representative']; ?></td>
      <td><a href="print_form.php?i=<?php echo $applicants['nominee_id']; ?>" target='_blank'><button class="btn btn-primary">Print This</button></a></td>
    </tr>

  <?php  }
?>
  </tbody>
</table>

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