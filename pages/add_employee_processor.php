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

$sql="INSERT INTO emp_info (
                 emp_firstname, 
                 emp_middle_name,
                 emp_lastname,
                 emp_subunit, 
                 job_title,
                 emp_status,
                 employee_id,
                 emp_work_email,
                 emp_other_id,
                 emp_ssn_num,
                 emp_sin_num,
                 emp_dri_lice_num,
                 emp_dri_lice_exp_date,
                 emp_gender,
                 emp_marital_status,
                 nationality,
                 emp_birthday,
                 emp_description
                 
                 )
VALUES
(
'$_POST[emp_firstname]',   
'$_POST[emp_middle_name]',
'$_POST[emp_lastname]',
'$_POST[emp_subunit]',
'$_POST[job_title]',
'$_POST[emp_status]',
'$_POST[employee_id]',
'$_POST[emp_work_email]',
'$_POST[emp_other_id]',
'$_POST[emp_ssn_num]',
'$_POST[emp_sin_num]',
'$_POST[emp_dri_lice_num]',
'$_POST[emp_dri_lice_exp_date]',
'$_POST[emp_gender]',
'$_POST[emp_marital_status]',
'$_POST[nationality]',
'$_POST[emp_birthday]',
'$_POST[emp_description]'
)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Employee Profile Updated";

mysql_close($con)
?> 