<?php

require '../db/dbconn.php';

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.

header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);

if($_COOKIE['del'] === 'o'){

if ($input['action'] === 'edit') {

	$users_name = $input['full_name'];
	$users_username = $input['username'];
	$users_id = $input['id'];

    $my_connect->query("UPDATE `reg_tbl_login` SET `reg_user_name` = '$users_name', `reg_user_username` = '$users_username' WHERE `reg_tbl_login`.`reg_user_id` = '$users_id'");
} else if ($input['action'] === 'delete') {

	$users_id = $input['id'];

    $my_connect->query("DELETE FROM `reg_tbl_login` WHERE `reg_tbl_login`.`reg_user_id` = '$users_id'");
}

mysqli_close($my_connect);

echo json_encode($input);



}else{

if ($input['action'] === 'edit') {

	$users_name = $input['full_name'];
	$users_id = $input['id'];

    $my_connect->query("UPDATE `tbl_voters_list` SET `voters_name` = '$users_name' WHERE `tbl_voters_list`.`voters_id` = '$users_id'");
} else if ($input['action'] === 'delete') {

	$users_id = $input['id'];

    $my_connect->query("DELETE FROM `tbl_voters_list` WHERE `tbl_voters_list`.`voters_id` =  '$users_id'");
}

mysqli_close($my_connect);

echo json_encode($input);



}

