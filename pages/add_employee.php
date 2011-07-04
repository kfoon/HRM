<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Form</title>


<script type='text/javascript' src='./includes/js/jquery.foggle.min.for.demo.js'></script>

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
			buttonImage: "images/calendar.gif",
			buttonImageOnly: true
		});
	});
	</script>

</head>
<body>

<div id='page'>
<h3>Add Employee</h3>
<div id='wrapper'>
	<form action="index.php?p=add_employee_processor" method='post'>
		<div class="infoWrapper">
				<div class="infoTitle"><label for='name'>Name:</label></div>
				<div class="infoContent">
					<input type="text" name='emp_firstname' id='name' class='input-text long' />
		</div> 
				
		<div class="infoTitle"><label for='name'>Middle Name:</label></div>
		<div class="infoContent">
					<input type="text" name='emp_middle_name' id='name' class='input-text long' />
				</div> 
				
			        <div class="infoTitle"><label for='lastname'>Last Name:</label></div>
				<div class="infoContent">
					<input type="text" name='emp_lastname' id='lastname' class='input-text long' />
				</div>
				
		</div>
		<div class="infoWrapper">
				<div class="infoTitle"><label for="job">Employment Status?</label></div>
				<div class="infoContent">
					<input type="radio" name='job' class='job' value='yes' /> Yes
					<input type="radio" name='job' class='job' value='no' /> No
				</div>

		</div>
		<div class="infoWrapper">
				<div class="infoTitle"><label for="jobsel">Sub Unit:</label></div>
				<div class="infoContent">
					<select name="emp_subunit" id="" class='long jobsel'>
						<option value="">---Select	---</option>
						<option value="Finance">Finance</option>
						<option value="Technical">Technical</option>
						<option value="Sales">Sales</option>
						<option value="other">Others</option>
					</select>
				</div>
				
				<div class="infoTitle"><label for="jobsel">Job Title:</label></div>
				<div class="infoContent">
					<select name="job_title" id="" class='long jobsel'>
						<option value="">---Select	---</option>
						<option value="Technician">Technician</option>
						<option value="CC Rep">CC Rep</option>

				
					</select>
				</div>
				
				<div class="infoTitle"><label for="jobsel">Job Status:</label></div>
				<div class="infoContent">
					<select name="emp_status" id="" class='long jobsel'>
						<option value="">---Select	---</option>
						<option value="Under Probation">Under Probation</option>
						<option value="Fully Employed">Fully Employed</option>
						<option value="Terminated">Terminated</option>

				
					</select>
				</div>
				
		</div>
		
		

		<div class="infoWrapper">
				<div class="infoTitle"><label for="car">Employee ID</label></div>
				<div class="infoContent">
					<input type="radio" name='car' class='car' value='yes' /> Yes
					<input type="radio" name='car' value='no' class='car'  /> No
				</div>

		</div>
		<div class="infoWrapper">
				<div class="infoTitle"><label for="carval">ID Number:</label></div>
				<div class="infoContent">
					<input type="text" name='employee_id' class='long carval'/>
				</div>
		</div>
				<div class="infoWrapper">
				<div class="infoTitle"><label for="carval">Other ID:</label></div>
				<div class="infoContent">
					<input type="text" name='emp_other_id' class='long carval'/>
				</div>
		</div>
		
		
		
		<div class="infoWrapper">
				<div class="infoTitle"><label for='name'>SSN Number:</label></div>
				<div class="infoContent">
					<input type="text" name='emp_ssn_num' id='name' class='input-text long' />
				</div> </div> 
				<div class="infoWrapper">
				<div class="infoTitle"><label for='name'>SIN Number:</label></div>
				<div class="infoContent">
					<input type="text" name='emp_sin_num' id='name' class='input-text long' />
				</div> </div> 

				<div class="infoTitle"><label for='name'>Drivers Licence Expiry Date:</label></div>
					<input type="text" name='emp_dri_lice_exp_date' id='datepicker' class='input-text long' />
					
					
				</di
				
							


		

		
		<div class="infoWrapper">

				<div class="infoTitle"><label for="aboutme">Short message description</label></div>
				<div class="infoContent">
					<input type="radio" name='aboutme' class='aboutme' value='yes' /> Yes
					<input type="radio" name='aboutme' value='no' class='aboutme'  /> No
				</div>
		</div>
		<div class="infoWrapper">
				<div class="infoTitle"><label for="aboutmeText">Text:</label></div>

				<div class="infoContent">
					<textarea name='emp_description' class='short long aboutmeText'></textarea>
				</div>
		</div>
		<div class="infoWrapper">
				<div class="infoTitle">Email</div>
				<div class="infoContent">
					<input type="checkbox" name='nloption' class='nloption' value='subscribe' /> <label for="nloption">Add to mailing list.</label>

				</div>
		</div>
		
		
		
		<div class="infoWrapper">
				<div class="infoTitle"><label for="nlEmail">Employee Email Address:</label></div>
				<div class="infoContent">
					<input type="text" name='emp_work_email' class='long nlEmail' disabled="disabled"/>
				</div>
		</div>
		
		

		<div class="infoWrapper">
				<div class="infoTitle">&nbsp;</div>
				<div class="infoContent">
                                <input type="submit" value='Submit'/>
				
				</div>
		</div>
		
		
		
	</form>
<!-- footer -->
<div id="footer"></div>
<!-- /footer -->

</div>
</body>
</html>