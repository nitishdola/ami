<?php

ob_start();

session_start();

$Sessid = session_id();

error_reporting(E_ALL ^ E_NOTICE);

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

<link rel="stylesheet" type="text/css" href="css/alert/box.css" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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

	.myButton {
		-moz-box-shadow:inset 0px 1px 0px 0px #9acc85;
		-webkit-box-shadow:inset 0px 1px 0px 0px #9acc85;
		box-shadow:inset 0px 1px 0px 0px #9acc85;
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #74ad5a), color-stop(1, #68a54b));
		background:-moz-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
		background:-webkit-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
		background:-o-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
		background:-ms-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
		background:linear-gradient(to bottom, #74ad5a 5%, #68a54b 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#74ad5a', endColorstr='#68a54b',GradientType=0);
		background-color:#74ad5a;
		border:1px solid #3b6e22;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:Arial;
		font-size:13px;
		font-weight:bold;
		padding:10px 23px;
		text-decoration:none;
	}
	.myButton:hover {
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #68a54b), color-stop(1, #74ad5a));
		background:-moz-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
		background:-webkit-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
		background:-o-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
		background:-ms-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
		background:linear-gradient(to bottom, #68a54b 5%, #74ad5a 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#68a54b', endColorstr='#74ad5a',GradientType=0);
		background-color:#68a54b;
	}
	.myButton:active {
		position:relative;
		top:1px;
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

@media print {
  	body {
  		font-size: 10px;
  		line-height: 16px;
  	}
}


</style>

<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>



<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0"  style="table-layout: fixed; width: 100%;">

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

  <?php
  	$_POST['customer_id'] = 'AMI86586';
  	require_once('gateway/verification.php');


  	//guest details
  	$statement = $pdo->prepare("
  			SELECT ami_delegates.*, ami_delegate_guests.name, ami_delegate_payments.customer_id
			FROM ami_delegates
			INNER JOIN ami_delegate_guests
			ON ami_delegates.id = ami_delegate_guests.delegate_id
			INNER JOIN ami_delegate_payments
			ON ami_delegates.id = ami_delegate_payments.delegate_id
			WHERE ami_delegate_payments.customer_id = :customer_id
  		");
		$statement->execute(array(':customer_id' => $customer_id));
		$row = $statement->fetch();
		//var_dump($row);
  ?>


  <?php if($success): ?>
  <tr>

    <td bgcolor="#FFFFFF"><table width="1180" border="0" align="center" cellpadding="0" cellspacing="0">

      <tr>

        <td><form name="form1" id="form1" method="post" action="#">

          <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">

            <tr>
            <td> 
              <td width="40%" class="TextMain1"><table width="100%" border="0" cellspacing="3" cellpadding="3">

                  <tr>
                  	<div class="alert-box success"><span>Success ! </span>Your payment was successfull !</div>

                  </tr>

              </table></td>

            <td width="76%">&nbsp;</td>

            </tr>
            <tbody  class="printArea">
            	<tr>
            		<td class="TextMain1">Guest Registration ID</td>
          			<td class="TextMain1">
          				<table width="95%"  border="0" cellspacing="0" cellpadding="0">
                			<tr>
                  				<td width="80%"><strong><?= $row['customer_id']; ?></strong>
                  				</td>
                			</tr>
          				</table>
          			</td>
            	</tr>

            	<tr>
            		<td class="TextMain1">Name</td>
          			<td class="TextMain1">
          				<table width="95%"  border="0" cellspacing="0" cellpadding="0">
                			<tr>
                  				<td width="80%"><?= $row['title'].' '.$row['first_name'].' '.$row['last_name']; ?>
                  				</td>
                			</tr>
          				</table>
          			</td>
            	</tr>

            	<tr>
            		<td class="TextMain1" width="12%">Date of Birth</td>
          			<td class="TextMain1">
          				<table width="95%"  border="0" cellspacing="0" cellpadding="0">
                			<tr>
                  				<td width="80%"><?= date('d-m-Y', strtotime($row['dob'])); ?>
                  				</td>
                			</tr>
          				</table>
          			</td>
            	</tr>

            	<tr>
            		<td class="TextMain1" width="12%">Profession</td>
          			<td class="TextMain1">
          				<table width="95%"  border="0" cellspacing="0" cellpadding="0">
                			<tr>
                  				<td width="40%"><?= $row['professional_role']; ?>
                  				</td>
                			</tr>
          				</table>
          			</td>
            	</tr>

            	<tr>
            		<td class="TextMain1" width="12%">Specialization</td>
          			<td class="TextMain1">
          				<table width="95%"  border="0" cellspacing="0" cellpadding="0">
                			<tr>
                  				<td width="40%"><?= $row['speciality']; ?>
                  				</td>
                  				<?php if(trim($row['speciality_others']) != ''): ?>
                  					<td width="40%"><?= $row['speciality']; ?></td>
                  				<?php endif; ?>
                			</tr>
          				</table>
          			</td>
            	</tr>


            	<tr>
            		<td class="TextMain1" width="12%">Workplace</td>
          			<td class="TextMain1">
          				<table width="95%"  border="0" cellspacing="0" cellpadding="0">
                			<tr>
                  				<td width="40%"><?= $row['main_workplace_type']; ?></td>
                			</tr>
          				</table>
          			</td>
            	</tr>

            	<tr>
            		<td class="TextMain1" width="14%">Institution / Company Name</td>
          			<td class="TextMain1">
          				<table width="95%"  border="0" cellspacing="0" cellpadding="0">
                			<tr>
                  				<td width="40%"><?= $row['institution']; ?></td>
                			</tr>
          				</table>
          			</td>
            	</tr>

            	<tr>
            		<td class="TextMain1" width="14%">Department/ Section Name </td>
          			<td class="TextMain1">
          				<table width="95%"  border="0" cellspacing="0" cellpadding="0">
                			<tr>
                  				<td width="20%"><?= $row['department']; ?></td>
                  				<td width="20%">Position</td>
                  				<td width="40%"><?= $row['position']; ?></td>
                			</tr>
          				</table>
          			</td>
            	</tr>

            	<tr>
            		<td class="TextMain1" width="14%">Address</td>
          			<td class="TextMain1">
          				<table width="95%"  border="0" cellspacing="0" cellpadding="0">
                			<tr>
                  				<td width="20%"><?= $row['address_1']; ?></td>
                  				<?php if($row['address_1'] != ''): ?>
                  				<td width="20%"><?= $row['address_2']; ?></td>
                  				<?php endif; ?>	
                  				<?php if($row['address_1'] != ''): ?>
                  				<td width="20%"><?= $row['address_3']; ?></td>
                  				<?php endif; ?>	
                			</tr>
          				</table>
          			</td>
            	</tr>

            	<tr>
            		<td class="TextMain1" width="14%">State</td>
          			<td class="TextMain1">
          				<table width="95%"  border="0" cellspacing="0" cellpadding="0">
                			<tr>
                  				<td width="35%"><?= $row['state']; ?></td>

                  				<td width="25%">City</td>
                  				<td width="30%"><?= $row['city']; ?></td>
                			</tr>
          				</table>
          			</td>
            	</tr>

            	<tr>
              		<td class="TextMain1">Country</td>
              		<td class="TextMain1">
	              		<table width="95%"  border="0" cellspacing="0" cellpadding="0">
		                	<tr>
		                		<td width="35%"><?= $row['country']; ?></td>

		                  		<td width="25%">PIN</td>

		                  		<td width="30%"><?= $row['pin']; ?></td>
		                	</tr>
	              		</table>
              		</td>
            	</tr>

            	<tr>
              		<td class="TextMain1">Mobile</td>
              		<td class="TextMain1">
	              		<table width="95%"  border="0" cellspacing="0" cellpadding="0">
		                	<tr>
		                		<td width="35%"><?= $row['mobile']; ?></td>

		                  		<td width="25%">Email</td>

		                  		<td width="30%"><?= $row['email']; ?></td>
		                	</tr>
	              		</table>
              		</td>
            	</tr>

            	<tr>
            		<td class="TextMain1" width="14%">Nationality</td>
          			<td class="TextMain1">
          				<table width="95%"  border="0" cellspacing="0" cellpadding="0">
                			<tr>
                  				<td width="40%"><?= $row['nationality']; ?></td>
                			</tr>
          				</table>
          			</td>
            	</tr>

            	<?php if($row['passport_number'] != ''): ?>
            	<tr>
              		<td class="TextMain1">Passport Number</td>
              		<td class="TextMain1">
	              		<table width="95%"  border="0" cellspacing="0" cellpadding="0">
		                	<tr>
		                		<td width="35%"><?= $row['passport_number']; ?></td>

		                  		<td width="16%">Valid Upto</td>

		                  		<td width="30%"><?= $row['valid_upto']; ?></td>

		                  		<td width="20%">Issued By</td>

		                  		<td width="49%"><?= $row['issued_by']; ?></td>
		                	</tr>
	              		</table>
              		</td>
            	</tr>
            	<?php endif; ?>

           </tbody>

            <tr>

              <td colspan="2" class="TextMain1"><hr /></td>

              </tr>
            <tr>

              <td class="TextMain1">&nbsp;</td>

              <td>&nbsp;</td>

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

      <tr>
      	<td><button class="myButton" onclick="PrintElem('.printArea')"><i class="fa fa-print" aria-hidden="true"></i>
Print</button>
 
      	</td>
      </tr>
    </table></td>

    
  </tr>

<?php else: ?>

	<tr>
		<td>FAILED</td>
	</tr>
<?php endif; ?>

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
<script type="text/javascript">

    function PrintElem(elem)
    {
    	//window.print();
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', '', 'height=400,width=600');
        mywindow.document.write('<html><head><title></title>');
        mywindow.document.write('<link rel="stylesheet" href="http://ami.dev/css/style.css" type="text/css" />');
        mywindow.document.write('<style>body {font-size: 10px;line-height: 16px;}</style>');
        mywindow.document.write('</head><body >');
        mywindow.document.write('<table width="100%" border="0" cellspacing="0" cellpadding="0"  style="table-layout: fixed; width: 100%;">');
        mywindow.document.write(data);
        mywindow.document.write('</table>');
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
</html>

<?php ob_end_flush();?>