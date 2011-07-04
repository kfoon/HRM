<?php # Script 2.5 - main.inc.php

/* 
 *	This is the main content module.
 *	This page is included by index.php.
 */

// Redirect if this page was accessed directly:
if (!defined('BASE_URL')) {

	// Need the BASE_URL, defined in the config file:
	require_once ('../includes/config.inc.php');
	
	// Redirect to the index page:
	$url = BASE_URL . 'index.php';
	header ("Location: $url");
	exit;
	
} // End of defined() IF.
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/media/images/favicon.ico" />
		
	
		<script type="text/javascript" language="javascript" src="./includes/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			var oTable;
			
			/* Formating function for row details */
			function fnFormatDetails ( nTr )
			{
				var aData = oTable.fnGetData( nTr );
				var sOut = '<table cellpadding="3"  cellspacing="0" border="0" style="padding-left:50px;color: #3B5998">';
				sOut += '<tr><td>First Name:</td><td><input type="text" value="'+aData[1]+'" disabled=""><td>Last Name:</td><td><input type="text" value="'+aData[2]+'" disabled=""></td></td></tr>';
				sOut += '<tr><td>Nationality:</td><td><input type="text" value="'+aData[13]+'" disabled=""><td>DOB:</td><td><input type="text" value="'+aData[14]+'" disabled=""></td></td></tr>';
			        sOut += '<tr><td>Job Title:</td><td><input type="text" value="'+aData[3]+'" disabled=""><td>MOB No:</td><td><input type="text" value="'+aData[12]+'" disabled=""></td></td></tr>';
			        sOut += '<tr><td>Employment Status:</td><td><input type="text" value="'+aData[4]+'" disabled=""><td>Address:</td><td><input type="text" value="'+aData[11]+'" disabled=""></td></td></tr>';
			        sOut += '<tr><td>Department:</td><td><input type="text" value="'+aData[5]+'" disabled=""><td>Surpervisor:</td><td><input type="text" value="'+aData[8]+'" disabled=""></td></tr>';
			        sOut += '<tr><td>Employee ID:</td><td><input type="text" value="'+aData[15]+'" disabled=""><td>SS No:</td><td><input type="text" value="'+aData[10]+'" disabled=""></td></tr>';
			        sOut += '<tr><td>Gender:</td><td><input type="text" value="'+aData[6]+'" disabled=""><td>Email:</td><td><input type="text"  value="'+aData[7]+'" disabled=""></td></tr>';
				sOut += '<tr><td>View Profile:</td><td> <?php echo "<a href=\"index.php?p=personal_details&id='+aData[9]+'\">View</a>";?></td></tr>';
				sOut += '</table>';
				
				return sOut;
			}
			
			$(document).ready(function() {
				oTable = $('#example').dataTable( {
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "php_processors/details_col.php",
					"aoColumns": [
						{ "sClass": "center", "bSortable": false },
						null,
						null,
						null,
						{ "sClass": "center" },
						{ "sClass": "center" }
					],
					"aaSorting": [[1, 'asc']]
				} );
				
				$('#example tbody td img').live( 'click', function () {
					var nTr = this.parentNode.parentNode;
					if ( this.src.match('details_close') )
					{
						/* This row is already open - close it */
						this.src = "images/details_open.png";
						oTable.fnClose( nTr );
					}
					else
					{
						/* Open this row */
						this.src = "images/details_close.png";
						oTable.fnOpen( nTr, fnFormatDetails(nTr), 'details' );
					}
				} );
			} );
	
		</script>
	</head>
	<body>
	<div id="page">
			
			<h3>Employee Information</h3>
			<div id="dynamic">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
		<tr>
			<th width="4%"></th>
			<th width="20%">First Name</th>
			<th width="20%">Last Name</th>
			<th width="15%">Job Title</th>
			<th width="25%">Employment Status</th>
			<th width="25%">Sub Unit</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td colspan="5" class="dataTables_empty">Loading data from server</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<th width="4%"></th>
			<th width="20%">		
		<div class="actionbuttons">
		<a href="index.php?p=add_employee">                
		<input type="button" value="Add Employee" onmouseout="this.className='plainbtn'" onmouseover="this.className='plainbtn plainbtnhov'" id="addBtn" class="plainbtn">
                </a>
                </th>
			<th width="20%"></th>
			<th width="15%"></th>
			<th width="25%"></th>
			<th width="25%"></th>
			
		</tr>
	</tfoot>
</table>
			</div>
			<div class="spacer"></div>
			
			
			
	</body>
</html>