<?php

ob_start();

session_start();

$Sessid = session_id();

error_reporting(E_ALL ^ E_NOTICE);
if(isset($_GET['delegate_id'])) {
	$delegate_id = trim($_GET['delegate_id']);
	$customer_id = strtoupper('AMI'.$delegate_id.mt_rand(1000,10000));
}else{
	header('Location:registration-form.php');
}
require_once('include/conn.inc.php');

date_default_timezone_set('Asia/Kolkata');
$current_time = date('Y-m-d H:i:s') ;
//include ("include/globalInc.php");

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

  <tr>

    <td bgcolor="#FFFFFF"><table width="1180" border="0" align="center" cellpadding="0" cellspacing="0">

      <tr>

        <td><form name="form1" id="form1" method="post" action="payment-response.php">

          <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">

            <tr>

              <td width="24%" class="TextMain1"><table width="100%" border="0" cellspacing="3" cellpadding="3">

                  <tr>

                    <td bgcolor="066DCC" class="h2"><strong>PAYMENT FORM</strong></td>

                  </tr>

              </table></td>

              <td width="76%">&nbsp;</td>

            </tr>

            <?php 
	            $statement = $pdo->prepare("
	  			SELECT ami_delegates.*, ami_delegate_guests.name
				FROM ami_delegates
				INNER JOIN ami_delegate_guests
				ON ami_delegates.id = ami_delegate_guests.delegate_id
				WHERE ami_delegates.id = :delegate_id
	  		");
			$statement->execute(array(':delegate_id' => $delegate_id));
			$row = $statement->fetch();
			//var_dump($row);

			$sql = "INSERT INTO ami_delegate_payments(
					delegate_id,
	            	customer_id
	            )VALUES (
	            	:delegate_id,
	            	:customer_id
	            )";
			try {                          
				$stmt = $pdo->prepare($sql);
				                                              
				$stmt->bindParam(':delegate_id', $delegate_id, PDO::PARAM_STR);       
				$stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_STR); 

				$stmt->execute();

				$payment_id = $pdo->lastInsertId();

			}catch (PDOException $e) {
			    // roll back transaction
			    $pdo->rollback();
			    // log any errors to file
			    ExceptionErrorHandler($e);
			    require_once($footer_inc);
			    exit;
			}
			//insert data to payments table

			?>
            <tr>

              <td valign="top" class="TextMain1">Name</td>

              <td><label class="TextMain1"><strong><?php echo $row['title']; ?>&nbsp;&nbsp;<?php echo $row['first_name'];?>&nbsp;&nbsp;<?php echo $row['last_name']; ?>&nbsp;&nbsp;</strong></label>                  </td>

            </tr>

            <tr>

              <td class="TextMain1">Address Line 1 </td>

              <td class="TextMain1"><strong><?php echo $row['address_1']; ?></strong></td>

            </tr>

            <tr>

              <td class="TextMain1">Address Line 2 </td>

              <td class="TextMain1"><strong><?php if(isset($row['address_2'])){ echo $row['address_2']; } ?></strong></td>

            </tr>

            <tr>

              <td class="TextMain1">Address Line 3 </td>

              <td class="TextMain1"><strong><?php if(isset($row['address_3'])){ echo $row['address_3']; }?></strong></td>

            </tr>

            <tr>

              <td class="TextMain1">State</td>

              <td class="TextMain1"><table width="95%"  border="0" cellspacing="0" cellpadding="0">

                <tr>

                  <td width="35%"><strong><?php echo $row['state']; ?></strong></td>

                  <td width="16%">City</td>

                  <td width="49%"><strong><?php echo $row['city']; ?></strong></td>

                </tr>

              </table></td>

            </tr>

            <tr>

              <td class="TextMain1">Country</td>

              <td class="TextMain1"><table width="95%"  border="0" cellspacing="0" cellpadding="0">

                <tr>

                  <td width="35%"><strong><?php echo $row['country']; ?></strong></td>

                  <td width="16%">PINCODE</td>

                  <td width="49%"><strong><?php echo $row['pin']; ?></strong></td>

                </tr>

              </table></td>

            </tr>

            <tr>

              <td class="TextMain1">Mobile Phone </td>

              <td class="TextMain1"><strong><?php echo $row['mobile']; ?></strong></td>

            </tr>

            <tr>

              <td class="TextMain1">E-mail ID </td>

              <td class="TextMain1"><strong><?php echo $row['email']; ?></strong></td>

            </tr>

            <tr>

              <td colspan="2" class="TextMain1"><hr /></td>

              </tr>

            <tr>

              <td class="TextMain1"><strong>Payment Amount </strong></td>

              <td><label>

                <input name="textfield3548" type="text" class="textbox" size="45" maxlength="20" />

                <select name="cboMnth" class="textbox" id="cboMnth" style="width:90px;">

                  <option value="INR">INR</option>

                  <option value="USD">USD</option>

                                </select>

</label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1">&nbsp;</td>

              <td>&nbsp;</td>

            </tr>

            <tr>

              <td colspan="2" class="TextMain1" align="center"><input type="submit" name="Submit" value="Proceed to Pay"  class="button"/></td>

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