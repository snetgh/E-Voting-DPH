<?php
	
  require '../db/dbconn.php';

   if (isset($_POST['btn_signup'])) {

	$user_name = $_POST['txt_name']; 
	$user_username = $_POST['txt_username'];
    $user_password = $_POST['txt_password'];

    $strong_pass = password_hash($user_password,PASSWORD_DEFAULT);

    $my_insert_query = mysqli_query($my_connect,"INSERT INTO `reg_tbl_login` (`reg_user_id`, 
	 `reg_user_name`, `reg_user_username`, `reg_user_password`, `reg_user_status`, `reg_timestamp`) 
	 VALUES (NULL, '$user_name', '$user_username', '$strong_pass', '1', CURRENT_TIMESTAMP)");

    if($my_insert_query){
        echo "<script>alert('Created Successfully');window.location.href='index.php'</script>";
    }

  
}


?>

<!doctype html>
<html class="fixed">

<head>

   <title>Voting | Admin SignUp</title>

   <!-- Basic -->
   <meta charset="UTF-8">

   <meta name="keywords" content="HTML5 Admin Template" />
   <meta name="description" content="Porto Admin - Responsive HTML5 Template">
   <meta name="author" content="okler.net">

   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

   <!-- Web Fonts  -->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet"
      type="text/css">

   <!-- Vendor CSS -->
   <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
   <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
   <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
   <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

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
   <!-- start: page -->
   <section class="body-sign">
      <div class="center-sign">
         <a href="/" class="logo pull-left">
            <img src="img/log.png" height="54" alt="Porto Admin" />
         </a>

         <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
               <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
            </div>
            <div class="panel-body">
               <form method="post">
                  <div class="form-group mb-lg">
                     <label>Name</label>
                     <div class="input-group input-group-icon">
                        <input name="txt_name" type="text" class="form-control input-lg" />
                        <span class="input-group-addon">
                           <span class="icon icon-lg">
                              <i class="fa fa-user"></i>
                           </span>
                        </span>
                     </div>
                  </div>

                  <div class="form-group mb-lg">
                     <label>Username</label>
                     <div class="input-group input-group-icon">
                        <input name="txt_username" type="text" class="form-control input-lg" />
                        <span class="input-group-addon">
                           <span class="icon icon-lg">
                              <i class="fa fa-user"></i>
                           </span>
                        </span>
                     </div>
                  </div>

                  <div class="form-group mb-lg">
                     <div class="clearfix">
                        <label class="pull-left">Password</label>
                     </div>
                     <div class="input-group input-group-icon">
                        <input name="txt_password" type="password" class="form-control input-lg" />
                        <span class="input-group-addon">
                           <span class="icon icon-lg">
                              <i class="fa fa-lock"></i>
                           </span>
                        </span>
                     </div>
                  </div>

                  <div class="row" style="text-align: center;">
                     <button type="submit" name="btn_signup" class="btn btn-primary hidden-xs">Sign Up</button>
                     <button type="submit" name="btn_signup"
                        class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up </button>

                  </div>

                  <div style="text-align: center">
                     <p class="text-center">Already Have An Account? <a href="index.php">Sign In !</a>
                     </p>
                  </div>

               </form>
            </div>
         </div>

         <p class="text-center text-muted mt-md mb-md">&copy; Copyright <?php echo date('Y')  ?>. All rights reserved.
            Developed By Step Network .</p>
      </div>
   </section>
   <!-- end: page -->

   <!-- Vendor -->
   <script src="assets/vendor/jquery/jquery.js"></script>
   <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
   <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
   <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
   <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

   <!-- Theme Base, Components and Settings -->
   <script src="assets/javascripts/theme.js"></script>

   <!-- Theme Custom -->
   <script src="assets/javascripts/theme.custom.js"></script>

   <!-- Theme Initialization Files -->
   <script src="assets/javascripts/theme.init.js"></script>

</body>

</html>