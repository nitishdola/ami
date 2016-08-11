<?php

ob_start();

session_start();

$Sessid = session_id();

unset($_SESSION['reg_form_error']);

error_reporting(E_ALL ^ E_NOTICE);

//include ("include/globalInc.php");
require_once('include/conn.inc.php');

date_default_timezone_set('Asia/Kolkata');
$current_time = date('Y-m-d H:i:s') ;

?>

<?php

	if($_POST['Submit'] == "Proceed") { 

		$sboTitle 		= htmlentities($_POST['sboTitle']);

		$txtLastName 	= htmlentities($_POST['txtLastName']);

		$txtFirstName 	= htmlentities($_POST['txtFirstName']);

		$txtAdd1 		= htmlentities($_POST['txtAdd1']);

		$txtAdd2 		= htmlentities($_POST['txtAdd2']);

		$txtAdd3 		= htmlentities($_POST['txtAdd3']);

		$txtState 		= htmlentities($_POST['txtState']);

		$txtCity 		= htmlentities($_POST['txtCity']);

		$cboCountry 	= htmlentities($_POST['cboCountry']);

		$txtPincode 	= htmlentities($_POST['txtPincode']);

		$txtEmail 		= htmlentities($_POST['txtEmail']);

		$txtMobileNo 	= htmlentities($_POST['txtMobileNo']);

		$txtDob 		= date('Y-m-d', strtotime(trim($_POST['cboYrs']).'-'.trim($_POST['cboMnth']).'-'.trim($_POST['cboDays'])));

		$txtProfessionalRole = htmlentities($_POST['cboPRole']);

		$txtSpeciality = htmlentities($_POST['cboSpeciality']);

		$txtSpecialityOthers 	= htmlentities($_POST['other_speciality']);

		$txtMainWorkplaceType 	= htmlentities($_POST['cboWork']);

		$txtInstitution	= htmlentities($_POST['txtCompany']);

		$txtDepartment	= htmlentities($_POST['txtDepartment']);

		$txtPosition 	= htmlentities($_POST['txtPosition']);

		$txtNationality = htmlentities($_POST['rdoNationality']);

		$txtPassportNumber 	= htmlentities($_POST['txtPassportNumber']);

		$txtIssuedBy 	= htmlentities($_POST['txtIssuedBy']);

		$txtValidUpto 	= htmlentities($_POST['cboPMnth']);

		$txtAccommodationRequired	= htmlentities($_POST['rdoAccomodation']);

		$accompanied_by = $_POST['accompanied_by'];


		$error_array = [];

		if( trim($sboTitle) == '' ) {
			$error_array['title'] = 'Title is empty !';
		}

		if( trim($txtLastName) == '' ) {
			$error_array['last_name'] = 'Last Name is empty !';
		}

		if( trim($txtFirstName) == '' ) {
			$error_array['first_name'] = 'First Name is empty !';
		}

		if( trim($txtAdd1) == '' ) {
			$error_array['address_1'] = 'Address field is empty !';
		}

		if( trim($txtState) == '' ) {
			$error_array['state'] = 'State is empty !';
		}

		if( trim($cboCountry) == '' ) {
			$error_array['country'] = 'Country is empty !';
		}

		if( trim($txtPincode) == '' ) {
			$error_array['pin'] = 'PIN is empty !';
		}

		if( is_int( trim($txtPincode) ) ) {
			$error_array['pin_number'] = 'PIN must be a number !';
		}

		if( trim($txtEmail) == '' ) {
			$error_array['email'] = 'Email is empty !';
		}

		if (filter_var($txtEmail, FILTER_VALIDATE_EMAIL) === false) {
		  	$error_array['email_valid'] = 'Email is not valid !';
		}

		if( trim($txtMobileNo) == '' ) {
			$error_array['mobile'] = 'Mobile is empty !';
		}

		if( is_int( trim($txtMobileNo) ) ) {
			$error_array['mobile_number'] = 'Mobile Number must be a number !';
		}

		if( trim($txtProfessionalRole) == '' ) {
			$error_array['p_role'] = 'Professional Role is empty !';
		}

		if( trim($txtSpeciality) == '' ) {
			$error_array['speciality'] = 'Speciality is empty !';
		}

		if( trim($txtMainWorkplaceType) == '' ) {
			$error_array['main_w'] = 'Main Workplace Type is empty !';
		}

		if( trim($txtInstitution) == '' ) {
			$error_array['institution'] = 'Institution / Company Name is empty !';
		}

		if( trim($txtDepartment) == '' ) {
			$error_array['dept'] = 'Department/Section is empty !';
		}

		if( trim($txtPosition) == '' ) {
			$error_array['position'] = 'Position is empty !';
		}

		if( trim($txtNationality) == '' ) {
			$error_array['nationality'] = 'Nationality is empty !';
		}

		if( trim($txtNationality) == '' ) {
			$error_array['nationality'] = 'Nationality is empty !';
		}

		if( trim($txtAccommodationRequired) == '' ) {
			$error_array['accommodation'] = 'Accommodation is empty !';
		}


		$_SESSION['Title'] = $sboTitle;

		$_SESSION['FirstName'] = $txtFirstName;

		$_SESSION['LastName'] = $txtLastName;

		$_SESSION['Add1'] = $txtAdd1;

		$_SESSION['Add2'] = $txtAdd2;

		$_SESSION['Add3'] = $txtAdd3;

		$_SESSION['State'] = $txtState;

		$_SESSION['City'] = $txtCity;				

		$_SESSION['Country'] = $cboCountry;	

		$_SESSION['Pincode'] = $txtPincode;					

		$_SESSION['Email'] = $txtEmail;

		$_SESSION['Mobile'] = $txtMobileNo;	


		if(count($error_array)) {
			$_SESSION['reg_form_error'] = $error_array;
			header('Location: registration-form.php');
		}
		//save the data to database

		$sql = "INSERT INTO ami_delegates(
				title,
	            first_name,
	            last_name,
	            dob,
	            professional_role,
	            speciality,
	            speciality_others,
	            main_workplace_type,
	            institution,
	            department,
	            position,
	            address_1,
	            address_2,
	            address_3,
	            state,
	            city,
	            pin,
	            country,
	            mobile,
	            email,
	            nationality,
	            passport_number,
	            valid_upto,
	            issued_by,
	            accommodation_required,
	            created_at
	            ) VALUES (
	            :title,
	            :first_name,
	            :last_name,
	            :dob,
	            :professional_role,
	            :speciality,
	            :speciality_others,
	            :main_workplace_type,
	            :institution,
	            :department,
	            :position,
	            :address_1,
	            :address_2,
	            :address_3,
	            :state,
	            :city,
	            :pin,
	            :country,
	            :mobile,
	            :email,
	            :nationality,
	            :passport_number,
	            :valid_upto,
	            :issued_by,
	            :accommodation_required,
	            :created_at
	            )";
	    
	    $pdo->beginTransaction();

	    try {                          
			$stmt = $pdo->prepare($sql);
			                                              
			$stmt->bindParam(':title', $sboTitle, PDO::PARAM_STR);       
			$stmt->bindParam(':first_name', $txtFirstName, PDO::PARAM_STR);       
			$stmt->bindParam(':last_name', $txtLastName, PDO::PARAM_STR);  
			$stmt->bindParam(':dob', $txtDob, PDO::PARAM_STR);
			$stmt->bindParam(':professional_role', $txtProfessionalRole, PDO::PARAM_STR); 
			$stmt->bindParam(':speciality', $txtSpeciality, PDO::PARAM_STR);  
			$stmt->bindParam(':speciality_others', $txtSpecialityOthers, PDO::PARAM_STR);  
			$stmt->bindParam(':main_workplace_type', $txtMainWorkplaceType, PDO::PARAM_STR);  
			$stmt->bindParam(':institution', $txtInstitution, PDO::PARAM_STR);  
			$stmt->bindParam(':department', $txtDepartment, PDO::PARAM_STR);  
			$stmt->bindParam(':position', $txtPosition, PDO::PARAM_STR);  
			$stmt->bindParam(':address_1', $txtAdd1, PDO::PARAM_STR);  
			$stmt->bindParam(':address_2', $txtAdd2, PDO::PARAM_STR);  
			$stmt->bindParam(':address_3', $txtAdd3, PDO::PARAM_STR);  
			$stmt->bindParam(':state', $txtState, PDO::PARAM_STR);  
			$stmt->bindParam(':city', $txtCity, PDO::PARAM_STR);  
			$stmt->bindParam(':pin', $txtPincode, PDO::PARAM_STR);  
			$stmt->bindParam(':country', $cboCountry, PDO::PARAM_STR); 
			$stmt->bindParam(':mobile', $txtMobileNo, PDO::PARAM_STR); 
			$stmt->bindParam(':email', $txtEmail, PDO::PARAM_STR);
			$stmt->bindParam(':nationality', $txtNationality, PDO::PARAM_STR);      	      	                          
			$stmt->bindParam(':passport_number', $txtPassportNumber, PDO::PARAM_STR);
			$stmt->bindParam(':valid_upto', $txtValidUpto, PDO::PARAM_STR); 
			$stmt->bindParam(':issued_by', $txtIssuedBy, PDO::PARAM_STR);  
			$stmt->bindParam(':accommodation_required', $txtAccommodationRequired, PDO::PARAM_STR);       	      		
			$stmt->bindParam(':created_at', $current_time, PDO::PARAM_STR);                          
			
			if($stmt->execute()) {
				$delegate_id = $pdo->lastInsertId();
				//check if guests are added
				if($txtAccommodationRequired == 'yes') {
					if(count($accompanied_by)) {
						//add the guests
						foreach($accompanied_by as $value) {
							$guest_name = '';
							$guest_name = htmlentities($value);

							$sql_guest = "INSERT INTO ami_delegate_guests(
								delegate_id,
				            	name
				            ) VALUES (
					            :delegate_id,
					            :name
					        )";

					        $stmt_guest = $pdo->prepare($sql_guest);
			                                              
							$stmt_guest->bindParam(':delegate_id', $delegate_id, PDO::PARAM_STR);       
							$stmt_guest->bindParam(':name', $guest_name, PDO::PARAM_STR);  

							$stmt_guest->execute();
						}
					}
				}else{
					//redirect to payment page
					header('Location:payment-form.php?delegate_id='.$delegate_id);
				}
			}
			$pdo->commit();
		}catch (PDOException $e) {
		    // roll back transaction
		    $pdo->rollback();
		    // log any errors to file
		    ExceptionErrorHandler($e);
		    require_once($footer_inc);
		    exit;
		}

	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>57th International Annual Conference of the Association of Microbiologists of india</title>



<style>

	

	/* You don't need the above styles, they are demo-specific ----------- */

	

	#menu, #menu ul {

		margin: 0;

		padding: 0;

		list-style: none;

	}

	

	#menu {

		width: 1180px;

		margin: 0px auto;

	

		

	}

	

	#menu:before,

	#menu:after {

		content: "";

		display: table;

	}

	

	#menu:after {

		clear: both;

	}

	

	#menu {

		zoom:1;

	}

	

	#menu li {

		float: left;

		border-left: 1px solid #FFFFFF;

		-moz-box-shadow: 1px 0 0 #1C0880;

		-webkit-box-shadow: 1px 0 0 #1C0880;

		box-shadow: 1px 0 0 #FFFFFF;

		position: relative;

	}

	

	#menu a {

		float: left;

		padding: 10px 13.5px;

		color: #0D1074;

		font: bold 13px Arial, Helvetica;

		text-decoration: none;

	}

	

	#menu li:hover > a {

		color: #fafafa;

	}

	

	*html #menu li a:hover { /* IE6 only */

		color: #fafafa;

	}

	

	#menu ul {

		margin: 20px 0 0 0;

		_margin: 0; /*IE6 only*/

		opacity: 0;

		visibility: hidden;

		position: absolute;

		top: 38px;

		left: 0;

		z-index: 1;    

		background: #98CBF5;

		

		

		

		-moz-box-shadow: 0 -1px rgba(255,255,255,.7);

		-webkit-box-shadow: 0 -1px 0 rgba(255,255,255,.7);

		box-shadow: 0 -1px 0 rgba(255,255,255,.7);	

		-moz-border-radius: 3px;

		-webkit-border-radius: 3px;

		border-radius: 3px;

		-webkit-transition: all .2s ease-in-out;

		-moz-transition: all .2s ease-in-out;

		-ms-transition: all .2s ease-in-out;

		-o-transition: all .2s ease-in-out;

		transition: all .2s ease-in-out;  

	}



	#menu li:hover > ul {

		opacity: 1;

		visibility: visible;

		margin: 0;

	}

	

	#menu ul ul {

		top: 0;

		left: 250px;

		margin: 0 0 0 20px;

		_margin: 0; /*IE6 only*/

		-moz-box-shadow: -1px 0 0 rgba(255,255,255);

		-webkit-box-shadow: -1px 0 0 rgba(255,255,255);

		box-shadow: -1px 0 0 rgba(255,255,255);		

	}

	

	#menu ul li {

		float: none;

		display: block;

		border: 0;

		_line-height: 0; /*IE6 only*/

		

		-webkit-box-shadow: 0 1px 0 #fff, 0 1px 0 #666;

		box-shadow: 0 1px 0 #fff, 0 1px 0 #666;

	}

	

	#menu ul li:last-child {   

		-moz-box-shadow: none;

		-webkit-box-shadow: none;

		box-shadow: none;    

	}

	

	#menu ul a {    

		padding: 10px;

		width: 230px;

		_height: 10px; /*IE6 only*/

		display: block;

		white-space: nowrap;

		float: none;

		text-transform: none;

	}

	

	#menu ul a:hover {

		background-color: #066DCD;

		

	}

	

	#menu ul li:first-child > a {

		-moz-border-radius: 3px 3px 0 0;

		-webkit-border-radius: 3px 3px 0 0;

		border-radius: 3px 3px 0 0;

	}

	

	#menu ul li:first-child > a:after {

		content: '';

		position: absolute;

		left: 40px;

		top: -6px;

		border-left: 6px solid transparent;

		border-right: 6px solid transparent;

		border-bottom: 6px solid #066DCD;

	}

	

	#menu ul ul li:first-child a:after {

		left: -6px;

		top: 50%;

		margin-top: -6px;

		border-left: 0;	

		border-bottom: 6px solid transparent;

		border-top: 6px solid transparent;

		border-right: 6px solid #A30201;

	}



	</style>









<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>

<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>



<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td bgcolor="#066DCD">&nbsp;</td>

        <td width="1180" bgcolor="#D4EAFF"><div align="center">

          <?php include("include/top.php"); ?>

        </div></td>

        <td bgcolor="#D4EAFF">&nbsp;</td>

      </tr>

    </table></td>

  </tr>

  <tr>

    <td bgcolor="#98CBF5"><table width="1180" border="0" align="center" cellpadding="0" cellspacing="0">

      <tr>

        <td><?php include("include/top-link.php"); ?></td>

      </tr>

    </table></td>

  </tr>

  <tr>

    <td bgcolor="#D4EAFF"><?php include("include/banner.php"); ?></td>

  </tr>

  <tr>

    <td height="40" bgcolor="#404040"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

      <tr>

        <td bgcolor="#333333">&nbsp;</td>

        <td width="1180" height="40" bgcolor="#404040"><?php include("include/registration.php"); ?></td>

        <td bgcolor="#404040">&nbsp;</td>

      </tr>

    </table></td>

  </tr>

  	<?php
  		/*$statement = $pdo->prepare("
  			SELECT ami_delegates.*, ami_delegate_guests.name
			FROM ami_delegates
			INNER JOIN ami_delegate_guests
			ON ami_delegates.id = ami_delegate_guests.delegate_id
			WHERE ami_delegates.id = :delegate_id
  		");
		$statement->execute(array(':delegate_id' => $delegate_id));
		$row = $statement->fetch();
		var_dump($row);*/
	?>
  <tr>

    <td bgcolor="#FFFFFF"><table width="1180" border="0" align="center" cellpadding="0" cellspacing="0">

      <tr>

        <td><form name="form1" id="form1" method="get" action="payment-form.php">

          <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">

            <tr>

              <td width="24%" class="TextMain1"><table width="100%" border="0" cellspacing="3" cellpadding="3">

                  <tr>

                    <td bgcolor="066DCC" class="h2"><strong>ACCOMODATION DETAILS</strong></td>

                  </tr>

              </table></td>

              <td width="76%">&nbsp;</td>

            </tr>

            <tr>

              <td valign="top" class="TextMain1"><strong>For accommodation Please contact:</strong></td>

              <td><label class="TextMain1">                Dr. Bhaben Tanti<br />

                Convener, Accommodation Committee:<br />

                Associate Professor<br />

                Department of Botany<br />

                Gauhati University<br />

                Mobile number: 9401203977<br />

                Email id: btanti@gauhati.ac.in/ami2016guwahati@gmail.com </label>

                                </td>

            </tr>

            <tr>
            <input type="hidden" name="delegate_id" value="<?= $delegate_id; ?>">
              <td colspan="2" class="TextMain1" align="center"><input type="submit" name="Submit" value="Proceed to Payment"  class="button"/></td>

            </tr>

            <tr>

              <td colspan="2" class="TextMain1" align="center">&nbsp;</td>

            </tr>

          </table>

        </form></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

    </table></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td height="60" bgcolor="#066DCC"><table width="1180" border="0" align="center" cellpadding="0" cellspacing="0">

      <tr>

        <td class="TextMainline">Copyright @ 2016, AMI 2016, All Rights Reserved</td>

        <td>&nbsp;</td>

        <td><div align="right"><span class="TextMainline">Powered by <a href="http://webcomindia.biz/" target="_blank" class="TextMainline">Web.Com (India) Pvt. Ltd.</a></span></div></td>

      </tr>

    </table></td>

  </tr>

</table>

</body>

</html>

<?php ob_end_flush();?>