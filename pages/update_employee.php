<div id="page">

<?php

  header( "refresh:5;url=index.php?p=employee_information" );
  echo 'You\'ll be redirected in about 5 secs. If not, click <a href="index.php?p=employee_information">here<br></a>'; 


$con = mysql_connect("mysql.nazuka.net","u549979352_hrm","hrmuser1");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hrm_database", $con);

$emp_firstname = $_POST['emp_firstname'];  
$emp_middle_name = $_POST['emp_middle_name']; 
$emp_lastname = $_POST['emp_lastname']; 
$emp_subunit = $_POST['emp_subunit']; 
$emp_status = $_POST['emp_status']; 
$employee_id = $_POST['employee_id']; 
$emp_work_email = $_POST['emp_work_email'];  
$emp_other_id = $_POST['emp_other_id']; 
$emp_ssn_num = $_POST['emp_ssn_num']; 
$emp_sin_num = $_POST['emp_sin_num']; 
$emp_dri_lice_num = $_POST['emp_dri_lice_num']; 
$emp_dri_lice_exp_date = $_POST['emp_dri_lice_exp_date']; 
$emp_gender = $_POST['emp_gender']; 
$emp_marital_status = $_POST['emp_marital_status']; 
$nationality = $_POST['nationality']; 
$emp_birthday = $_POST['emp_birthday']; 
$emp_description = $_POST['emp_description']; 
$userid = $_POST['id']; 

$sql="UPDATE emp_info SET
                 emp_firstname = '$emp_firstname', 
                 emp_middle_name = '$emp_middle_name',
                 emp_lastname = '$emp_lastname',
                 emp_subunit ='$emp_subunit', 
                 emp_status = '$emp_status',
                 employee_id = '$employee_id',
                 emp_work_email = '$emp_work_email',
                 emp_other_id = '$emp_other_id',
                 emp_ssn_num = '$emp_ssn_num',
                 emp_sin_num = '$emp_sin_num',
                 emp_dri_lice_num = '$emp_dri_lice_num',
                 emp_dri_lice_exp_date = '$emp_dri_lice_exp_date',
                 emp_gender = '$emp_gender',
                 emp_marital_status = '$emp_marital_status',
                 nationality = '$nationality',
                 emp_birthday ='$emp_birthday',
                 emp_description = '$emp_description' WHERE id = $userid";
                 
             

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Employee Profile Updated";

mysql_close($con)
?> 