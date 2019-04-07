<?php
require_once 'db/dbconn.php';

if(isset($_POST['voted'])){
	$my_id = $_COOKIE['uvsc'];
   $selected_person = $_POST['candidate_vote'];
   
   $check_id_validity = mysqli_query($my_connect,"SELECT * FROM tbl_voters_list WHERE voters_code_allow = '1' AND voters_id = '$my_id'");

   if(mysqli_num_rows($check_id_validity)>=1){
      $get_details = mysqli_fetch_array($check_id_validity);

      $get_status = $get_details['voters_code_allow'];

      if($get_status === '0'){

         echo "<script>
         alert('Already Voted');
               </script>";

         echo "<script>
               window.location.href='index.php';
               </script>";

      }else{

         $insert_query = mysqli_query($my_connect,"INSERT INTO 
         `voters_voting_pool` (`pool_id`, `pool_user_id`, `pool_added`,
          `pool_voted`) VALUES (NULL, '$my_id', '$selected_person', '1')");
      
          if($insert_query){
             $remove_voter = mysqli_query($my_connect,"UPDATE `tbl_voters_list` SET `voters_code_allow` = '0' WHERE `tbl_voters_list`.`voters_id` = '$my_id'");
            
             unset($_COOKIE['uvsc']);
      
             echo "<script>
      
             window.location.href='thank_you.html';
             
             </script>";
          
            }

      }

   }else{

      echo "<script>
      alert('You Cant Be Verified');
            </script>";

      echo "<script>
            window.location.href='secure_login.php';
            </script>";

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
                     <li class="nav-item active"><a class="nav-link" href="index.html">Voting</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
   </header>
   <!--================Header Menu Area =================-->


   <!--================Welcome Area =================-->

   <br>
   <br><br>
   <section class="welcome_area">
      <div class="container">
         <div class="row welcome_inner">
            <div class="col-md-12">
               <div class="welcome_text" style="text-align:center">
                  <div class="row">
                     <div style="text-align: center;width: 100%">
                        <form method="post">

                           <table class="table table-bordered">
                              <thead>
                                 <th width="100%">Candidates</th>
                                 <th width="50%">Vote</th>
                              </thead>

                              <tbody>

                                 <?php

										$get_all_candidates = mysqli_query($my_connect,"SELECT * FROM `tbl_candidates`");
										while ($getting_candidates = mysqli_fetch_array($get_all_candidates)) { ?>

                                 <tr>

                                    <td><img src="admin/picx/<?php echo $getting_candidates['candidate_picture']; ?>"
                                          height="138px" height="100px">
                                       <br><br>
                                       <?php echo $getting_candidates['candidate_name'];    ?></td>
                                    <td>
                                       <label class="display_thumb">
                                          <input type="radio" value="<?php  echo $getting_candidates['candidate_id'] ?>"
                                             name="candidate_vote" class="candidate_vote">
                                          <div class="radio-image"></div>
                                       </label>
                                    </td>

                                 </tr>

                                 <?php }

										?>

                              </tbody>

                              <tfoot>
                                 <tr>
                                    <td colspan="2"><input type="submit" name="voted" class="btn btn-primary btn-xlg"
                                          value="Vote" style="width: 500px;height: 100px;font-size: 44px;"></td>
                                 </tr>
                              </tfoot>

                           </table>

                        </form>


                     </div>
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

   <script type="text/javascript">
   $(document).ready(function() {


   })
   </script>

</body>

</html>