<?php

ob_start();

session_start();

$Sessid = session_id();

error_reporting(E_ALL ^ E_NOTICE);

//include ("include/globalInc.php");
require_once('include/conn.inc.php');

$url = 'http://localhost/ami';

date_default_timezone_set('Asia/Kolkata');
$current_time = date('Y-m-d H:i:s') ;
?>

<?php

	if($_POST['TransType'] = "New_Registration") {

		$first_name = htmlentities($_POST['first_name']);

		$last_name 	= htmlentities($_POST['last_name']);

		$email 		= htmlentities($_POST['email']);
		
		$code 		= md5(uniqid ().date('d-m-Y H:i:s'));

		/*//check if email already exists
		$email = trim($_GET['email']);
		//check if valid
		$statement = $pdo->prepare("
			SELECT first_name, last_name, email
			FROM ami_users
			WHERE email = :email
			");
		$statement->execute(array(':email' => $email));
		$row = $statement->fetch();
		if($row) {
			header('Location:registration-form.php');
		}*/

		$sql = "INSERT INTO ami_users(
		            first_name,
		            last_name,
		            email,
		            code
	            ) VALUES (
		            :first_name,
		            :last_name,
		            :email,
		            :code
	            )";

	    try {     
		    $stmt = $pdo->prepare($sql);     
			$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);       
			$stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);  
			$stmt->bindParam(':email', $email, PDO::PARAM_STR);
			$stmt->bindParam(':code', $code, PDO::PARAM_STR);

			if($stmt->execute()) {
				//send email
				$to      = $email;
				$subject = 'AMI Registration';
				$message = 'Dear user,please click on the below link to register';
				$message = '<a href="'.$url.'/activate-member?member_code='.$code.'">'.$url.'/activate-member?member_code='.$code.'</a>';
				$headers = 'From: webmaster@ami.com' . "\r\n" .
				    'Reply-To: webmaster@ami.com' . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $message, $headers);

				header("location: index.php?reg_success=success");
			}
		}catch (PDOException $e) {
		    // roll back transaction
		    $pdo->rollback();
		    // log any errors to file
		    ExceptionErrorHandler($e);
		    require_once($footer_inc);
		    exit;
		}

		//header("location: registration-form.php");		

	}

?>

<?php ob_end_flush(); ?>