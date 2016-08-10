<?php
ob_start();
session_start();
$Sessid = session_id();
error_reporting(E_ALL ^ E_NOTICE);
//include ("include/globalInc.php");
?>
<?php
	if($_POST['TransType'] = "New Registration") {
	$txtRFirstName = $_POST['txtRFirstName'];
	$txtRLastName = $_POST['txtRLastName'];
	
	if(strlen($txtRFirstName) > 0)
		$_SESSION['FirstName'] = $txtRFirstName;
	else
		$_SESSION['FirstName'] = "";
		
	if(strlen($txtRLastName) > 0)
		$_SESSION['LastName'] = $txtRLastName;
	else
		$_SESSION['LastName'] = "";	
		
	header("location: registration-form.php");		
	}
?>
<?php ob_end_flush(); ?>