
<html>
<head>

<script src="jquery-1.5.1.js"></script>
	<script src="./includes/datepicker/jquery.ui.core.js"></script>
	<script src="./includes/datepicker/jquery.ui.widget.js"></script>
	<script src="./includes/datepicker/jquery.ui.datepicker.js"></script>
	
	<link rel="stylesheet" href="./includes/datepicker/jquery.ui.base.css">
	<link rel="stylesheet" href="./includes/datepicker/jquery.ui.theme.css">









	<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			showOn: "button",
			buttonImage: "./images/calendar.gif",
			buttonImageOnly: true
		});
	});
		$(function() {
		$( "#datepicker_DOB" ).datepicker({
			showOn: "button",
			buttonImage: "./images/calendar.gif",
			buttonImageOnly: true
		});
	});
	</script>


<body>


<div id ="page">
	
<?php

function view_profile(){
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
echo'<table border="0" width="80%"> <h3>Personal Details</h3>';
echo'<form action="#" method="post" id="emp_info">';
echo'<input type="hidden" id="personal__csrf_token" value="" name=""> ';                                   
echo'<table cellspacing="0" cellpadding="0" border="0" class="">';
echo'<input type="hidden" id="" name="" value=""> ';                                       
echo'<tbody><tr>';
echo'<!-- section for full name -->';
echo'<td>';
echo'<table width="100%">';
echo'<tbody><tr>';
echo'<td>Full Name</td>';
echo'<td valign="top"><input type="text" id="" maxlength="30" class="formInputText" name="" value="'.$row['emp_firstname'].'" disabled=""><br class="clear"></td>';
echo'<td valign="top"><input type="text" id="" maxlength="30" class="formInputText" name="" value="'.$row['emp_middle_name'].'" disabled=""></td>';
echo'<td valign="top"><input type="text" id="" maxlength="30" class="formInputText" name="" value="'.$row['emp_lastname'].'" disabled=""><br class="clear"></td>';
echo'</tr>';
echo'<tr>';
echo'<td>&nbsp;</td>';
echo'<td class="helpText">First Name<span class="required">*</span></td>';
echo'<td class="helpText">Middle Name</td>';
echo'<td class="helpText">Last Name<span class="required">*</span></td>';
echo'</tr>';
echo'</tbody></table>';
echo'<div class="hrLine">&nbsp;</div>';
echo'</td>';
echo'</tr>';
echo'<tr>';            
echo'<td>';
echo'<!-- section for rest of the contents -->';
echo'<table width="100%" border="0">';
echo'<tbody><tr>';
echo'<td>Employee Id</td>';
echo'<td><input type="text" id="" maxlength="10" class="formInputText" name="" value="'.$row['employee_id'].'" disabled=""></td>';
echo'<td class="hideTr">SSN Number</td>';
echo'<td class="hideTr"><input type="text" id="" maxlength="30" class="formInputText" name="" value="'.$row['emp_ssn_num'].'" disabled=""></td>';
echo'</tr>';
echo'<tr>';
echo'<td>Other Id</td>';
echo'<td><input type="text" id="" maxlength="30" class="formInputText" name="" value="'.$row['emp_other_id'].'" disabled=""></td>';
echo'<td class="hideTr">SIN Number</td>';
echo'<td class="hideTr"><input type="text" id="" maxlength="30" class="formInputText" name="" value="'.$row['emp_sin_num'].'" disabled=""></td>';
echo'</tr>';
echo'<tr>';
echo'<td>Driver\'s License Number</td>';
echo'<td><input type="text" id="" maxlength="30" class="formInputText" name="" value="'.$row['emp_dri_lice_num'].'" disabled=""></td>';
echo'<td>License Expiry Date</td>';
echo'<td><input type="text"  maxlength="11" class="datepicker" id="datepicker" size="10" value="'.$row['emp_dri_lice_exp_date'].'" name="" disabled="">';                                                           
echo'<br class="clear">';
echo'</td>';
echo'</tr>';
echo'<tr>';
echo'<td colspan="4"><br> <div class="hrLine">&nbsp;</div></td>';
echo'</tr>';
echo'<tr>';
echo'<td>Gender<span class="required">*</span></td>';
echo'<td>';
echo'<input type="radio" id="" value="1" name="" disabled="">&nbsp;<label for="emp_gender">'.$row['emp_gender'].'</label>';

echo'</td>';
echo'<td>Marital Status</td>';
echo'<td><select id="" class="formInputText" name="" disabled="">';
echo'<option value="0">'.$row['emp_marital_status'].'</option>';
echo'<option value="Single">Single</option>';
echo'<option value="Married">Married</option>';
echo'<option value="Other">Other</option>';
echo'</select></td>';
echo'</tr>';
echo'<tr>';
echo'<td>Nationality</td>';
echo'<td><select id="" class="formInputText" name="" disabled="">';
echo'<option value="0">'.$row['nationality'].'</option>';
echo'</select></td>';
echo'<td>Ethnic Race</td>';
echo'<td><select id="" class="formInputText" name="" disabled="">';
echo'<option value="0">'.$row['ethnic_race_code'].'</option>';
echo'</select></td>';
echo'</tr>';
echo'<tr>';
echo'<td>Date of Birth</td>';
echo'<td><input type="text" id="datepicker_DOB" maxlength="11" class="datepicker" value="'.$row['emp_birthday'].'" name="" disabled="datepicker">';                                                          
echo'<br class="clear">';
echo'</td>';
echo'<td>&nbsp;</td>';
echo'<td>&nbsp;</td>';
echo'</tr>';
echo'</tbody></table>';
echo'</td>';
echo'</tr>';
echo'</tbody></table>';
echo'<div class="formbuttons">';
echo'<a href="index.php?p=edit_personal_details&id='.$id.'">';
echo'<input type="button" tabindex="2" value="Edit" id="btnSave" class="savebutton">';
echo'</a>';
echo'</div>';
echo'</form>';
	
}
	
	}
view_profile();
?>		


    
                         
</body>
</html>