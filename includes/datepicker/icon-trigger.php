<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Datepicker - Icon trigger</title>

	<script src="jquery-1.5.1.js"></script>
	<script src="jquery.ui.core.js"></script>
	<script src="jquery.ui.widget.js"></script>
	<script src="jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="demos.css">

	<link rel="stylesheet" href="jquery.ui.base.css">
	<link rel="stylesheet" href="jquery.ui.theme.css">



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

<div class="demo">

<p>Date: <input type="text" id="datepicker"></p>



</body>
</html>
