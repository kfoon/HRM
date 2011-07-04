<html>



<body>
<div id ="page">

<h3>Employee Detail Information </h3>
	
<?php


	
$id = $_GET['id'];
$con = mysql_connect('localhost','mskebbeh','7020666');
if(!mysql_select_db('hrm_database'))
        {
	die(mysql_error());
	}
	
$query = "select * from emp_info where id = '$id'";

$result = mysql_query($query);

$row = mysql_fetch_array($result);

{
	
	

echo'<table border="0" width="80%">';
echo '<tr><td><td><form method"post" action="../hrm/pages/update.php"></td></td></tr>';
echo '<tr><td><strong>Employee ID:</strong><td><input type="text"   value="'.$row['id'].'"></td></td></tr>';
echo '<tr><td><strong>First Name:</strong><td><input type="text"   value="'.$row['emp_firstname'].'"></td></td></tr>';
echo '<tr><td><strong>Middle Name:</strong><td><input type="text"   value="'.$row['emp_middle_name'].'"></td></td></tr>';
echo '<tr><td><strong>Last Name:</strong><td><input type="text"   value="'.$row['emp_lastname'].'"></td></td></tr>';
echo '<tr><td><strong>Employee Card:</strong><td><input type="text"   value="'.$row['employee_id'].'"></td></td></tr>';
echo '<tr><td><strong>SSN No:</strong><td><input type="text"   value="'.$row['emp_ssn_num'].'"></td></td></tr>';
echo '<tr><td><strong>Other ID: </strong><td><input type="text"   value="'.$row['emp_other_id'].'"></td></td></tr>';
echo '<tr><td><strong>SIN No:</strong><td><input type="text"   value="'.$row['emp_sin_num'].'"></td></td></tr>';
echo '<tr><td><strong>Drivers License No:</strong><td><input type="text"   value="'.$row['emp_dri_lice_num'].'"></td></td></tr>';
echo '<tr><td><strong>Drivers License Expiry Date:</strong><td><input type="text"   value="'.$row['emp_dri_lice_exp_date'].'"></td></td></tr>';
echo '<tr><td><strong>Gender:</strong><td><input type="text"   value="'.$row['emp_gender'].'"></td></td></tr>';
echo '<tr><td><strong>Marital Status:</strong><td><input type="text"   value="'.$row['emp_marital_status'].'"></td></td></tr>';
echo '<tr><td><strong>Nationality:</strong><td><input type="text"   value="'.$row['nationality'].'"></td></td></tr>';
echo '<tr><td><strong>Ethnic Race:</strong><td><input type="text"   value="'.$row['ethnic_race_code'].'"></td></td></tr>';
echo '<tr><td><strong>Birthday:</strong><td><input type="text"   value="'.$row['emp_birthday'].'"></td></td></tr>';
echo '<tr><td><strong>Birthday:</strong><td><input type="submit"   value="submit"></td></td></tr>';
echo'</form>';
echo'</table>';

echo'<a href="index.php?p=upload_photo" >
<img src="./images/web.gif"  width="150" height="100"  class="floatRightClear"  value="'.$row['id'].'">

        </a>';
echo'<div class="floatLeftClear" style="width: 150px; padding-top: 0px; font-size: 1em;
	 background: none repeat scroll 0 0 #fff;
 margin-top: -215px; margin-left: 459px;"> 
<a href="qanet.gm">'.$row['emp_firstname'].' '.$row['emp_lastname'].'</a><br>
<h3>Personal</h3>
<a href="">Personal Details<br>
<a href="qanet.gm">Contact Details</a><br>
<a href="qanet.gm">Dependents</a><br>
<a href="qanet.gm">Immigration</a><br>
<h3>Employment</h3>
<a href="qanet.gm">Job</a><br>
<a href="qanet.gm">Salary</a>

<h3>Qualification</h3>


</div>';




	
	}

?>		

<h3>
<a href="index.php?p=personal_details">
<input type="button" class="plainbtn" id="addBtn" onmouseover="this.className='plainbtn plainbtnhov'" onmouseout="this.className='plainbtn'" value="Save">
</a> 
</h3>	

</html>
</body>