
<html>
<?
$id = $_GET['id'];
$con = mysql_connect("mysql.nazuka.net","u549979352_hrm","hrmuser1");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hrm_database", $con);

$query = "select * from emp_info where id = '$id'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

?>
<head>
<title>Form</title>

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

</head>



<body>
<div id="page">
                          <h3>Edit Personal Details</h3>

<form action="index.php?p=update_employee" method="post" ">
                                                               <table cellspacing="0" cellpadding="0" border="0" class="tableArrange">
                                                           <tbody><tr>
                                            <!-- section for full name -->
                                            <td>
                                                <table width="100%">
                                                    <tbody><tr>
                                                        <td>Full Name</td>
                                                        <td valign="top"><input type="text"  maxlength="30" class="formInputText" name="emp_firstname" value="<?php echo $row[emp_firstname]; ?>"><br class="clear"></td>
                                                        <td valign="top"><input type="text" maxlength="30" class="formInputText" name="emp_middle_name" value=""></td>
                                                        <td valign="top"><input type="text"  maxlength="30" class="formInputText" name="emp_lastname" value=""><br class="clear">
                                                        <input type="hidden"  maxlength="30" class="formInputText" name="id" value="<?php echo $id;?>"><br class="clear"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td class="helpText" >First Name<span class="required">*</span></td>
                                                        <td class="helpText">Middle Name</td>
                                                        <td class="helpText">Last Name<span class="required">*</span></td>
                                                    </tr>
                                                </tbody></table>
                                                <div class="hrLine">&nbsp;</div>
                                            </td>
                                        </tr>
                                        <tr>                
                                            <td>
                                                <!-- section for rest of the contents -->
                                                <table width="100%" border="0">
                                                    <tbody><tr>
                                                        <td>Employee Id</td>
                                                        <td><input type="text"  maxlength="10" class="formInputText" name="employee_id" value="0003"></td>
                                                        <td class="hideTr">SSN Number</td>
                                                        <td class="hideTr"><input type="text"  maxlength="30" class="formInputText" name="emp_ssn_num" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Other Id</td>
                                                        <td><input type="text"  maxlength="30" class="formInputText" name="emp_other_id" value=""></td>
                                                        
                                                        <td class="hideTr">SIN Number</td>
                                                        <td class="hideTr"><input type="text"  maxlength="30" class="formInputText" name="emp_sin_num" value=""></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Driver's License Number</td>
                                                        <td><input type="text"  maxlength="30" class="formInputText" name="emp_dri_lice_num" value=""></td>
                                                        <td>License Expiry Date</td>
                                                        <td><input type="text"  maxlength="11" class="datepicker" id="datepicker" size="10" name="emp_dri_lice_exp_date">                                                            
                                                        
                                                            <br class="clear">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"><br> <div class="hrLine">&nbsp;</div></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender<span class="required" >*</span></td>
                                                        <td>
<input type="radio"  value="Male" name="emp_gender">&nbsp;<label for="emp_gender">Male</label>
<input type="radio"  value="Female" name="emp_gender">&nbsp;<label for="emp_gender">Female</label>
</td>
                                                        <td>Marital Status</td>
                                                        <td><select class="formInputText" name="emp_marital_status">
<option value="0">-- Select --</option>
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Other">Other</option>
</select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nationality</td>
                                                        <td>
<select class="formInputText" name="nationality" style="width: 130px;">
<option value="0">-- Select --</option>
<option value="Afghanistan">Afghanistan</option><option value="Åland Islands">Åland Islands</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean territory">British Indian Ocean territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, Democratic Republic">Congo, Democratic Republic</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Côte d'Ivoire (Ivory Coast)">Côte d'Ivoire (Ivory Coast)</option><option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and McDonald Islands">Heard and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><!-- copyright Felgall Pty Ltd --><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea (north)">Korea (north)</option><option value="Korea (south)">Korea (south)</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia, Former Yugoslav Republic Of">Macedonia, Former Yugoslav Republic Of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestinian Territories">Palestinian Territories</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Réunion">Réunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><!-- copyright Felgall Pty Ltd --><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option  value="United States of America" selected="selected">United States of America</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands (British)">Virgin Islands (British)</option><option value="Virgin Islands (US)">Virgin Islands (US)</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
</select>

</td>
                                                        <td>Ethnic Race</td>
                                                        <td><select  class="formInputText" name="ethnic_race_code">
<option value="0">-- Select --</option>
</select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date of Birth</td>
                                                        <td><input type="text"  maxlength="11" class="datepicker_DOB" id="datepicker_DOB" name="emp_birthday">  
                                                         
                                                            <br class="clear">
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>

                                                    
                                                    
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                  <input type="submit" />
                 
                                </form>

</body>
</html>