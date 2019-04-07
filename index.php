<?php
require_once 'db/dbconn.php';

if(isset($_POST['btn_allow_vote'])){
	$clean_user_input = mysqli_real_escape_string($my_connect,$_POST['txt_allow_code']);

	$verify_user_code = mysqli_query($my_connect,"SELECT * FROM `tbl_voters_list` WHERE voters_code != '0' AND `voters_code` ='$clean_user_input' AND `voters_code_allow` = '1' LIMIT 1 ");

	if(mysqli_num_rows($verify_user_code) >= 1){
		$get_user_id = mysqli_fetch_array($verify_user_code);
		$get_id = $get_user_id['voters_id'];
		$get_status = $get_user_id['voters_code_allow'];
		
		setcookie("uvsc", $get_id, time() + (86400 * 30),"/");

		echo "<script>
			window.location.href='secure_voting.php';
			</script>
		";

}else{
	echo "<script>
         alert('Sorry....You Have Already Voted Or Wrong Code Entered');
         </script>
      ";
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
   <title>Voting | Vote </title>
   <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- main css -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

   <!--================Header Menu Area =================-->
   <header class="header_area">
      <div class="main_menu" id="mainNav">
         <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
               <!-- Brand and toggle get grouped for better mobile display -->
               <a class="navbar-brand logo_h" href="index.php"><img src="img/log.png" alt="" height="40px"
                     width="120px"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                  <ul class="nav navbar-nav menu_nav ml-auto">
                     <li class="nav-item active"><a class="nav-link" href="index.html"></a></li>
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
                     <img src="img/hand1.gif" alt="" id="gif_image">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="banner_content">
                     <h3 style="font-weight: bold">CALL FOR <strong>VOTES</strong></h3>
                     <p>Today is the appointed day to elect a Workers Representative at <strong>KWAHU PRESBYTERY
                           HEALTH SERVICE. </strong>
                        Please get your voting <strong>coupon </strong> from the Officiating members of the
                        <strong>Electoral Commission</strong> </p>
                     <a class="banner_btn" href="#">Scroll Down To Vote</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================End Home Banner Area =================-->

   <!--================Welcome Area =================-->


   <br><br>
   <section class="welcome_area">
      <div class="container">
         <div class="row welcome_inner">
            <div class="col-md-12">
               <div class="welcome_text" style="text-align:center">
                  <form method="post">
                     <div class="row">
                        <div style="text-align: center;width: 100%">

                           <span class="label_msg">Please Enter The Code In The Box Below</span>
                           <div>

                              <input class="my_input" type="text" name="txt_allow_code" placeholder=""
                                 autofocus="autofocus" required="required">
                           </div>

                           <div>
                              <input type="submit" class="btn btn-primary btn-lg my_button" value="Vote"
                                 name="btn_allow_vote" />
                              <div>




                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
   </section>
   <!--================End Welcome Area =================-->



   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.2.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>

</body>

</html>