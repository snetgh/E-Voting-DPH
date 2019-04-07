<?php
  require '../db/dbconn.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="600" />
  <title>Voting | Results </title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="src/normalize.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="number-pb.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
<script src="src/jquery.velocity.min.js"></script>
<script src="number-pb.js"></script>
</head>
<body>

<table class="table table-bordered">
                              <thead style="text-align:center">
                             

                              <tr>

<th style="font-size: 30px;">Registered Voters :<strong><div style="font-size: 30px;color: red"> <?php  $get_registered_voters = mysqli_query($my_connect,"SELECT * FROM `tbl_voters_list` "); echo $registerd_voters = mysqli_num_rows($get_registered_voters);    ?> </div></strong> </th>
   
   <th style="font-size: 30px;">People Voted : <strong><div style="font-size: 30px;color: red"><?php $get_votted_users = mysqli_query($my_connect,"SELECT * FROM `voters_voting_pool` WHERE pool_voted = '1'"); echo $voted = mysqli_num_rows($get_votted_users);    ?> </div></strong>  </th>

     <th style="font-size: 30px;">Awaiting Votes : <strong><div style="font-size: 30px;color: red"><?php  $get_codes_registered  = mysqli_query($my_connect,"SELECT * FROM `tbl_voters_list` WHERE `voters_code_allow` = '1' AND `voters_code` = '0' "); echo  mysqli_num_rows($get_codes_registered);    ?></div></strong>  </th>


</tr>

 <tr>

                              <th style="font-size: 30px;" >Candidates</th>
                                 <th style="font-size: 30px;">Progress</th>
                                 <th style="font-size: 30px;">Votes </th>

                              </tr>


                                 
                              </thead>

                              <tbody>

                                 <?php

										$get_all_candidates = mysqli_query($my_connect,"SELECT * FROM `tbl_candidates`");
										while ($getting_candidates = mysqli_fetch_array($get_all_candidates)) {
                      $get_id = $getting_candidates['candidate_id'];
                      $getting_number_of_votes = mysqli_query($my_connect,"SELECT * FROM voters_voting_pool join tbl_candidates on voters_voting_pool.pool_added = tbl_candidates.candidate_id WHERE pool_voted = '1' And candidate_id = '$get_id'");
                      $my_votes = mysqli_num_rows($getting_number_of_votes);
                      
                      ?>
                        
                                 <tr>

                                    <td style="text-align: center;"><img src="../admin/picx/<?php echo $getting_candidates['candidate_picture']; ?>"
                                          width="138px" height="120px"> 
                                       <br><br>
                                       <div style="font-size: 25px"><?php echo $getting_candidates['candidate_name'];    ?></div></td>
                                    <td style="text-align: center;">
                                    <div class="progress" style="height: 8rem !important">
                                      <?php 
                                      
                                      $get_registered_voters = mysqli_query($my_connect,"SELECT * FROM `tbl_voters_list` ");
                                        $registerd_voters = mysqli_num_rows($get_registered_voters);
 
                                      $percentage = (($my_votes/$registerd_voters)*100) 

                                       ?>

  <div class="progress-bar" role="progressbar" style="width: <?php echo $percentage  ?>%;" aria-valuenow="<?php echo $my_votes;?>" aria-valuemin="0" aria-valuemax="<?php  $get_registered_voters = mysqli_query($my_connect,"SELECT * FROM `tbl_voters_list` "); echo $registerd_voters = mysqli_num_rows($get_registered_voters);    ?>"><?php echo $my_votes;?></div>
</div>
                                    </td>


                                    <td style="text-align: center;">
                                      
                                      <div style="font-size: 50px;color: red"><?php  echo $my_votes;  ?></div>

                                    </td>

                                 </tr>

                                 <?php }

										?>

                              </tbody>

                           </table>

</body>
</html>