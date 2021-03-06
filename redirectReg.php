<?php

ob_start();

session_start();

$Sessid = session_id();

error_reporting(E_ALL ^ E_NOTICE);

//include ("include/globalInc.php");
require_once('include/conn.inc.php');

$url = 'http://ami2016.org';

date_default_timezone_set('Asia/Kolkata');
$current_time = date('Y-m-d H:i:s') ;
?>

<?php

	if($_POST['TransType'] = "New_Registration") {

		$first_name = htmlentities($_POST['first_name']);

		$last_name 	= htmlentities($_POST['last_name']);

		$email 		= htmlentities($_POST['email']);
		
		$code 		= md5(uniqid ().date('d-m-Y H:i:s'));

		if($first_name == '' || $last_name == '' || $email == '') {
			header('Location:registration-form.php');
		}

		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		  	header('Location:registration-form.php');
		}

		//check if email already exists
		$email = trim($_POST['email']);
		//check if valid
		$statement = $pdo->prepare("
			SELECT first_name, last_name, email
			FROM ami_users
			WHERE email = :email
			");
		$statement->execute(array(':email' => $email));
		$row = $statement->fetch();
		if($row) {
			//update the code
			$sql = "UPDATE ami_users SET code = :code 
            WHERE email = :email";
			$stmt = $pdo->prepare($sql);                                  
			$stmt->bindParam(':code',  $code,  PDO::PARAM_STR);
			$stmt->bindParam(':email', $email, PDO::PARAM_STR);        
			$stmt->execute(); 

			$to = $email;

			$subject = 'Complete Your AMI 2016 Registration';

			$headers = "From: " . 'AMI 2016 Registration <no-reply@ami2016.org>' . "\r\n";
			$headers .= "Reply-To: ". 'no-reply@ami2016.org' . "\r\n";
			//$headers .= "CC: susan@example.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

			$message .= '<p><strong>Thank You for registering AMI 2016 !</p>';
			$message .= '<p>Please click on the link below to complete your registration process </p>';
			$message .= $url.'/activate-member.php?member_code='.$code;

			mail($to, $subject, $message, $headers);

			header("location: index.php?reg_success=success");
		} else {
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

					$to = $email;

					$subject = 'Complete Your AMI 2016 Registration';

					$headers = "From: " . 'AMI 2016 Registration <no-reply@ami2016.org>' . "\r\n";
					$headers .= "Reply-To: ". 'no-reply@ami2016.org' . "\r\n";
					//$headers .= "CC: susan@example.com\r\n";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

					$message .= '<p><strong>Thank You for registering AMI 2016 !</p>';
					$message .= '<p>Please click on the link below to complete your registration process </p>';
					$message = $url.'/activate-member.php?member_code='.$code;

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
		}
	}

?>

<?php ob_end_flush(); ?>