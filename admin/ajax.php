<?php

require '../db/dbconn.php';

if(isset($_POST['generate_code'])){

    $get_voter_id = $_POST["voters_reg_id"];
    $get_voter_code = $_POST["code_gen"];

    $check_status = mysqli_query($my_connect,"SELECT * FROM `tbl_voters_list`
     WHERE `voters_code_allow` = '1' AND `tbl_voters_list`.`voters_id` = '$get_voter_id' LIMIT 1");

     if(mysqli_num_rows($check_status)>=1){
        $response['data'] = "error";
        $response['done'] = false;
     }else{

        $run_query = mysqli_query($my_connect,"UPDATE `tbl_voters_list` SET 
        `voters_code` = '$get_voter_code', 
        `voters_code_allow` = '1' 
        WHERE 
        `tbl_voters_list`.`voters_id` = '$get_voter_id'");
    if($run_query){ 
        $response['data'] = "success";
        $response['done'] = true;
    }else{
        $response['data'] = "false";
        $response['done'] = false;
    }

}
   
    echo json_encode($response);
}


?>