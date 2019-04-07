<?php
	
	require 'db/dbconn.php';
	//include 'PHPExcel/IOFactory.php';

$output = '';
if(isset($_POST["import"]))
{
$value = explode(".", $_FILES["excel"]["name"]);
$extension = strtolower(array_pop($value));
  // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $surname = mysqli_real_escape_string($my_connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $other_names = mysqli_real_escape_string($my_connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());

    $full_name = $surname." ".$other_names;

    $query = "INSERT INTO `tbl_voters_list` (`voters_id`, `voters_name`, `voters_code`, `voters_code_allow`, `voters_timestamp`) VALUES (NULL, '$full_name', '0', '0', CURRENT_TIMESTAMP)";

    mysqli_query($my_connect, $query);

$output = '<label class="text-success">All Files Uploaded...Please Check Your Database To Confirm</label>';
   
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>

<html>
 <head>
  <title>Voting | Uploading Voters</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"
  <script src="js/jquery-3.2.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  
  </style>
 </head>
 <body>
  <div class="container box">
   <h3 align="center">Import Excel to Mysql using PHPExcel in PHP</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="excel" />
    <br />
    <input type="submit" name="import" class="btn btn-info" value="Import" />
   </form>
   <br />
   <br />
   <?php
   echo $output;
   ?>
  </div>
 </body>
</html>