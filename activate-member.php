<?php
ob_start();

session_start();

$Sessid = session_id();

error_reporting(E_ALL ^ E_NOTICE);

//include ("include/globalInc.php");
require_once('include/conn.inc.php');

if(isset($_GET['member_code']) && trim($_GET['member_code']) != '' ) {
	$member_code = trim($_GET['member_code']);
	//check if valid
	$statement = $pdo->prepare("
		SELECT id, first_name, last_name, email
		FROM ami_users
		WHERE code = :member_code
		");
	$statement->execute(array(':member_code' => $member_code));
	$row = $statement->fetch();
	if($row) {
		$_SESSION['FirstName'] 	= $row['first_name'];
		$_SESSION['LastName'] 	= $row['last_name'];
		$_SESSION['email'] 		= $row['email'];
		$_SESSION['user_id'] 	= $row['id'];
		
		header('Location:registration-form.php');
	}
}
?>

<?php ob_end_flush(); ?>