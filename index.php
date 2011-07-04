<?php # Script 2.4 - index.php

/* 
 *	This is the main page.
 *	This page includes the configuration file, 
 *	the templates, and any content-specific modules.
 */

// Require the configuration file before any PHP code:
require_once ('./includes/config.inc.php');

// Validate what page to show:
if (isset($_GET['p'])) {
	$p = $_GET['p'];
} elseif (isset($_POST['p'])) { // Forms
	$p = $_POST['p'];
} else {
	$p = NULL;
}

// Determine what page to display:
switch ($p) {
		case 'add_employee_processor':
		$page = 'add_employee_processor.php';
		$page_title = 'Add New Employee';
		break;
		
		case 'update_employee':
		$page = 'update_employee.php';
		$page_title = 'Update Employee';
		break;
	
	
		
		case 'profile_details_edit':
		$page = 'profile_details_edit.php';
		$page_title = 'Edit Progile Details';
		break;
		case 'profile_details':
		$page = 'profile_details.php';
		$page_title = 'Row Details';
		break;
		
		case 'add_employee':
		$page = 'add_employee.php';
		$page_title = 'Add Employee';
		break;
		
		case 'upload_photo':
		$page = 'upload_photo.php';
		$page_title = 'Edit Profile Picture';
		break;

	case 'employee_information':
		$page = 'employee_information.php';
		$page_title = 'Employee Information';
		break;
		
	case 'personal_details':
		$page = 'personal_details.php';
		$page_title = 'Personal Details';
		break;

	case 'edit_personal_details':
		$page = 'edit_personal_details.php';
		$page_title = 'Edit Personal Details';
		break;
		
	case 'about':
		$page = 'about.php';
		$page_title = 'About Us';
		break;
	
	case 'mission':
		$page = 'mission.php';
		$page_title = 'Our Mission';
		break;

	case 'how-can-you-help':
		$page = 'how-can-you-help.php';
		$page_title = 'How Can You Help';
		break;
	
	case 'blog':
		$page = 'blog.php';
		$page_title = 'Latest Blog Post';
		break;

	case 'contact':
		$page = 'contact.php';
		$page_title = 'Contact Us';
		break;

	case 'html_form':
		$page = 'html_form.php';
		$page_title = 'Send Mail';
		break;



	// Default is to include the main page.
	default:
		$page = 'main.inc.php';
		$page_title = 'Home Page';
		break;
		
} // End of main switch.

// Make sure the file exists:
if (!file_exists('./pages/' . $page)) {
	$page = 'main.inc.php';
	$page_title = 'Site Home Page';
}

// Include the header file:
include_once ('./includes/header.php');

// Include the content-specific module:
// $page is determined from the above switch.
include ('./pages/' . $page);

// Include the footer file to complete the template:
include_once ('./includes/footer.php');

?>
