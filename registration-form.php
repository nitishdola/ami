<?php

ob_start();

session_start();

$Sessid = session_id();

var_dump($_SESSION);

error_reporting(E_ALL ^ E_NOTICE);

//include ("include/globalInc.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>57th International Annual Conference of the Association of Microbiologists of india</title>
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

  #optionsBox a{
    color:#333;
    font-weight: 500;
    text-decoration: none;
    font-family: "Segoe UI",Frutiger,"Frutiger Linotype","Dejavu Sans","Helvetica Neue",Arial,sans-serif
  }

  #optionsBox .add i{
    color: #0066CC;
    padding-left: 2%;
  }

  #optionsBox .remove i{
    color: #C9302C;
    padding-left: 2%;
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

        <td><form name="form1" id="form1" method="post" action="accomodation-form.php">

          <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">

            <tr>

              <td width="24%" class="TextMain1"><table width="100%" border="0" cellspacing="3" cellpadding="3">

                  <tr>

                    <td bgcolor="066DCC" class="h2"><strong>REGISTRATION FORM </strong></td>

                  </tr>

              </table></td>

              <td width="76%">&nbsp;</td>

            </tr>

            <tr>

              <td valign="top" class="TextMain1"><strong>Name</strong></td>

              <td><label> </label>

                  <table width="95%"  border="0" cellspacing="0" cellpadding="0">

                    <tr class="TextMain">

                      <td width="10%">Title</td>

                      <td width="35%">Last Name </td>

                      <td width="55%">First Name </td>

                    </tr>

                    <tr>

                      <td><select name="sboTitle" class="textbox" id="sboTitle"  style="width:70px;">

                          <option value="Mr.">Mr.</option>

                          <option value="Mrs.">Mrs.</option>

                          <option value="Dr.">Dr.</option>

                          <option value="Prof.">Prof.</option>

                      </select></td>

                      <td><input name="txtLastName" type="text" required="required" class="textbox" id="txtLastName" value="<?php echo $_SESSION['LastName']?>" /></td>

                      <td><input name="txtFirstName" type="text" required="required" class="textbox" id="txtFirstName" value="<?php echo $_SESSION['FirstName']?>" /></td>

                    </tr>

                </table></td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Year of Birth </strong></td>

              <td><select name="cboDays" class="textbox" id="cboDays" style="width:70px;">

                  <?php for($d=1;$d<=31;$d++) { 

				  		if(intval($d) < 10)

							$dd = "0".$d;

						else

							$dd = $d;	

				  ?>

                  <option value="<?php echo $dd?>"><?php echo $dd?></option>

                  <?php } ?>

                </select>

&nbsp;

        <select name="cboMnth" class="textbox" id="cboMnth" style="width:90px;">

          <option value="01">Jan</option>

          <option value="02">Feb</option>

          <option value="03">Mar</option>

          <option value="04">Apr</option>

          <option value="05">May</option>

          <option value="06">Jun</option>

          <option value="07">Jul</option>

          <option value="08">Aug</option>

          <option value="09">Sep</option>

          <option value="10">Oct</option>

          <option value="11">Nov</option>

          <option value="12">Dec</option>

        </select>

&nbsp;

        <select name="cboYrs" class="textbox" id="cboYrs" style="width:100px;">

          <?php for($y=1950;$y<=2016;$y++) { 

				  ?>

          <option value="<?php echo $y?>"><?php echo $y?></option>

          <?php } ?>

        </select>

&nbsp;</td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Professional Role </strong></td>

              <td><label>

                <select name="cboPRole" required="required" class="textbox" id="cboPRole" style="width:280px">

                  <option value="">Select Professional Role</option>
                  
                  <option value="Student">Student</option>

                  <option value="PhD Research Scholar">PhD Research Scholar</option>

                  <option value="Scientist">Scientist</option>

                  <option value="Technician">Technician</option>

                  <option value="Professor">Professor</option>

                  <option value="Others">Others</option>

                </select>

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Speciality</strong></td>

              <td><table width="95%"  border="0" cellspacing="0" cellpadding="0">

                  <tr>

                    <td width="44%"><select name="cboSpeciality" required="required" class="textbox" id="cboSpeciality"  style="width:280px">

                        <option value="">Select Speciality</option>

                        <option value="Industrial Microbiology">Industrial Microbiology</option>

                        <option value="Medical and Veterinary Microbiology">Medical and Veterinary Microbiology</option>

                        <option value="Environmental Microbiology">Environmental Microbiology</option>

                        <option value="Food and Dairy Microbiology">Food and Dairy Microbiology</option>

                        <option value="Soil and Agriculture Microbiology">Soil and Agriculture Microbiology</option>

                        <option value="Molecular Microbiology and Biotechnology">Molecular Microbiology and Biotechnology</option>

                        <option value="Others">Others</option>

                    </select></td>

                    <td width="56%"  id="other_speciality" style="display:none;"><input name="other_speciality" type="text" class="textbox" size="50" maxlength="100" placeholder="Speciality - Others" /></td>

                  </tr>

              </table></td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Main Workplace Type </strong></td>

              <td><label>

                <select name="cboWork" required="required" class="textbox" id="cboWork"  style="width:280px">

                  <option value="">Select Speciality</option>

                  <option value="University">University</option>

                  <option value="Research Institute">Research Institute</option>

                  <option value="Hospital">Hospital</option>

                  <option value="Company">Company</option>

                  <option value="Others">Others</option>

                </select>

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Institution / Company Name </strong></td>

              <td><label>

                <input name="txtCompany" required="required" type="text" class="textboxBig" id="txtCompany" size="30" maxlength="75" />

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Department/ Section Name </strong></td>

              <td><label>

                <input name="txtDepartment"  required="required" type="text" class="textboxBig" id="txtDepartment" size="30" maxlength="75" />

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Your Position </strong></td>

              <td><label>

                <input name="txtPosition" type="text" class="textboxBig" id="txtPosition" size="30" maxlength="75" />

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Address Line 1</strong></td>

              <td><label>

                <input name="txtAdd1" type="text" class="textboxBig" id="txtAdd1" required placeholder="ADDRESS LINE 1" />

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Address Line 2</strong></td>

              <td><label>

                <input name="txtAdd2" type="text" class="textboxBig" id="txtAdd2" placeholder="ADDRESS LINE 2"  />

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Address Line 3</strong></td>

              <td><label>

                <input name="txtAdd3" type="text" class="textboxBig" id="txtAdd3" placeholder="ADDRESS LINE 3"  />

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>State </strong></td>

              <td><table width="95%"  border="0" cellspacing="0" cellpadding="0">

                  <tr>

                    <td width="36%"><input name="txtState" type="text" class="textbox" id="txtState" required placeholder="STATE"  /></td>

                    <td width="8%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="TextMain1">City</span></td>

                    <td width="56%"><input name="txtCity" type="text" class="textbox" id="txtCity" required placeholder="CITY" /></td>

                  </tr>

              </table></td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Pin Code </strong></td>

              <td><label>

                <input name="txtPincode" type="number" class="textbox" id="txtPincode" required placeholder="PINCODE"/>

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Country</strong></td>

              <td><select name="cboCountry" required="required" class="textboxBig" id="cboCountry" required>

                  <option value="">Select Country</option>

                  <option value="Afghanistan">Afghanistan</option>

                  <option value="Albania">Albania</option>

                  <option value="Algeria">Algeria</option>

                  <option value="American Samoa">American Samoa</option>

                  <option value="Andorra">Andorra</option>

                  <option value="Angola">Angola</option>

                  <option value="Anguilla">Anguilla</option>

                  <option value="Antartica">Antarctica</option>

                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>

                  <option value="Argentina">Argentina</option>

                  <option value="Armenia">Armenia</option>

                  <option value="Aruba">Aruba</option>

                  <option value="Australia">Australia</option>

                  <option value="Austria">Austria</option>

                  <option value="Azerbaijan">Azerbaijan</option>

                  <option value="Bahamas">Bahamas</option>

                  <option value="Bahrain">Bahrain</option>

                  <option value="Bangladesh">Bangladesh</option>

                  <option value="Barbados">Barbados</option>

                  <option value="Belarus">Belarus</option>

                  <option value="Belgium">Belgium</option>

                  <option value="Belize">Belize</option>

                  <option value="Benin">Benin</option>

                  <option value="Bermuda">Bermuda</option>

                  <option value="Bhutan">Bhutan</option>

                  <option value="Bolivia">Bolivia</option>

                  <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>

                  <option value="Botswana">Botswana</option>

                  <option value="Bouvet Island">Bouvet Island</option>

                  <option value="Brazil">Brazil</option>

                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>

                  <option value="Brunei Darussalam">Brunei Darussalam</option>

                  <option value="Bulgaria">Bulgaria</option>

                  <option value="Burkina Faso">Burkina Faso</option>

                  <option value="Burundi">Burundi</option>

                  <option value="Cambodia">Cambodia</option>

                  <option value="Cameroon">Cameroon</option>

                  <option value="Canada">Canada</option>

                  <option value="Cape Verde">Cape Verde</option>

                  <option value="Cayman Islands">Cayman Islands</option>

                  <option value="Central African Republic">Central African Republic</option>

                  <option value="Chad">Chad</option>

                  <option value="Chile">Chile</option>

                  <option value="China">China</option>

                  <option value="Christmas Island">Christmas Island</option>

                  <option value="Cocos Islands">Cocos (Keeling) Islands</option>

                  <option value="Colombia">Colombia</option>

                  <option value="Comoros">Comoros</option>

                  <option value="Congo">Congo</option>

                  <option value="Congo">Congo, the Democratic Republic of the</option>

                  <option value="Cook Islands">Cook Islands</option>

                  <option value="Costa Rica">Costa Rica</option>

                  <option value="Cota D'Ivoire">Cote d'Ivoire</option>

                  <option value="Croatia">Croatia (Hrvatska)</option>

                  <option value="Cuba">Cuba</option>

                  <option value="Cyprus">Cyprus</option>

                  <option value="Czech Republic">Czech Republic</option>

                  <option value="Denmark">Denmark</option>

                  <option value="Djibouti">Djibouti</option>

                  <option value="Dominica">Dominica</option>

                  <option value="Dominican Republic">Dominican Republic</option>

                  <option value="East Timor">East Timor</option>

                  <option value="Ecuador">Ecuador</option>

                  <option value="Egypt">Egypt</option>

                  <option value="El Salvador">El Salvador</option>

                  <option value="Equatorial Guinea">Equatorial Guinea</option>

                  <option value="Eritrea">Eritrea</option>

                  <option value="Estonia">Estonia</option>

                  <option value="Ethiopia">Ethiopia</option>

                  <option value="Falkland Islands">Falkland Islands (Malvinas)</option>

                  <option value="Faroe Islands">Faroe Islands</option>

                  <option value="Fiji">Fiji</option>

                  <option value="Finland">Finland</option>

                  <option value="France">France</option>

                  <option value="France Metropolitan">France, Metropolitan</option>

                  <option value="French Guiana">French Guiana</option>

                  <option value="French Polynesia">French Polynesia</option>

                  <option value="French Southern Territories">French Southern Territories</option>

                  <option value="Gabon">Gabon</option>

                  <option value="Gambia">Gambia</option>

                  <option value="Georgia">Georgia</option>

                  <option value="Germany">Germany</option>

                  <option value="Ghana">Ghana</option>

                  <option value="Gibraltar">Gibraltar</option>

                  <option value="Greece">Greece</option>

                  <option value="Greenland">Greenland</option>

                  <option value="Grenada">Grenada</option>

                  <option value="Guadeloupe">Guadeloupe</option>

                  <option value="Guam">Guam</option>

                  <option value="Guatemala">Guatemala</option>

                  <option value="Guinea">Guinea</option>

                  <option value="Guinea-Bissau">Guinea-Bissau</option>

                  <option value="Guyana">Guyana</option>

                  <option value="Haiti">Haiti</option>

                  <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>

                  <option value="Holy See">Holy See (Vatican City State)</option>

                  <option value="Honduras">Honduras</option>

                  <option value="Hong Kong">Hong Kong</option>

                  <option value="Hungary">Hungary</option>

                  <option value="Iceland">Iceland</option>

                  <option selected="selected" value="India">India</option>

                  <option value="Indonesia">Indonesia</option>

                  <option value="Iran">Iran (Islamic Republic of)</option>

                  <option value="Iraq">Iraq</option>

                  <option value="Ireland">Ireland</option>

                  <option value="Israel">Israel</option>

                  <option value="Italy">Italy</option>

                  <option value="Jamaica">Jamaica</option>

                  <option value="Japan">Japan</option>

                  <option value="Jordan">Jordan</option>

                  <option value="Kazakhstan">Kazakhstan</option>

                  <option value="Kenya">Kenya</option>

                  <option value="Kiribati">Kiribati</option>

                  <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>

                  <option value="Korea">Korea, Republic of</option>

                  <option value="Kuwait">Kuwait</option>

                  <option value="Kyrgyzstan">Kyrgyzstan</option>

                  <option value="Lao">Lao People's Democratic Republic</option>

                  <option value="Latvia">Latvia</option>

                  <option value="Lebanon">Lebanon</option>

                  <option value="Lesotho">Lesotho</option>

                  <option value="Liberia">Liberia</option>

                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                  <option value="Liechtenstein">Liechtenstein</option>

                  <option value="Lithuania">Lithuania</option>

                  <option value="Luxembourg">Luxembourg</option>

                  <option value="Macau">Macau</option>

                  <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>

                  <option value="Madagascar">Madagascar</option>

                  <option value="Malawi">Malawi</option>

                  <option value="Malaysia">Malaysia</option>

                  <option value="Maldives">Maldives</option>

                  <option value="Mali">Mali</option>

                  <option value="Malta">Malta</option>

                  <option value="Marshall Islands">Marshall Islands</option>

                  <option value="Martinique">Martinique</option>

                  <option value="Mauritania">Mauritania</option>

                  <option value="Mauritius">Mauritius</option>

                  <option value="Mayotte">Mayotte</option>

                  <option value="Mexico">Mexico</option>

                  <option value="Micronesia">Micronesia, Federated States of</option>

                  <option value="Moldova">Moldova, Republic of</option>

                  <option value="Monaco">Monaco</option>

                  <option value="Mongolia">Mongolia</option>

                  <option value="Montserrat">Montserrat</option>

                  <option value="Morocco">Morocco</option>

                  <option value="Mozambique">Mozambique</option>

                  <option value="Myanmar">Myanmar</option>

                  <option value="Namibia">Namibia</option>

                  <option value="Nauru">Nauru</option>

                  <option value="Nepal">Nepal</option>

                  <option value="Netherlands">Netherlands</option>

                  <option value="Netherlands Antilles">Netherlands Antilles</option>

                  <option value="New Caledonia">New Caledonia</option>

                  <option value="New Zealand">New Zealand</option>

                  <option value="Nicaragua">Nicaragua</option>

                  <option value="Niger">Niger</option>

                  <option value="Nigeria">Nigeria</option>

                  <option value="Niue">Niue</option>

                  <option value="Norfolk Island">Norfolk Island</option>

                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>

                  <option value="Norway">Norway</option>

                  <option value="Oman">Oman</option>

                  <option value="Pakistan">Pakistan</option>

                  <option value="Palau">Palau</option>

                  <option value="Panama">Panama</option>

                  <option value="Papua New Guinea">Papua New Guinea</option>

                  <option value="Paraguay">Paraguay</option>

                  <option value="Peru">Peru</option>

                  <option value="Philippines">Philippines</option>

                  <option value="Pitcairn">Pitcairn</option>

                  <option value="Poland">Poland</option>

                  <option value="Portugal">Portugal</option>

                  <option value="Puerto Rico">Puerto Rico</option>

                  <option value="Qatar">Qatar</option>

                  <option value="Reunion">Reunion</option>

                  <option value="Romania">Romania</option>

                  <option value="Russia">Russian Federation</option>

                  <option value="Rwanda">Rwanda</option>

                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>

                  <option value="Saint LUCIA">Saint LUCIA</option>

                  <option value="Saint Vincent">Saint Vincent and the Grenadines</option>

                  <option value="Samoa">Samoa</option>

                  <option value="San Marino">San Marino</option>

                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>

                  <option value="Saudi Arabia">Saudi Arabia</option>

                  <option value="Senegal">Senegal</option>

                  <option value="Seychelles">Seychelles</option>

                  <option value="Sierra">Sierra Leone</option>

                  <option value="Singapore">Singapore</option>

                  <option value="Slovakia">Slovakia (Slovak Republic)</option>

                  <option value="Slovenia">Slovenia</option>

                  <option value="Solomon Islands">Solomon Islands</option>

                  <option value="Somalia">Somalia</option>

                  <option value="South Africa">South Africa</option>

                  <option value="South Georgia">South Georgia and the South Sandwich Islands</option>

                  <option value="Span">Spain</option>

                  <option value="SriLanka">Sri Lanka</option>

                  <option value="St. Helena">St. Helena</option>

                  <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>

                  <option value="Sudan">Sudan</option>

                  <option value="Suriname">Suriname</option>

                  <option value="Svalbard">Svalbard and Jan Mayen Islands</option>

                  <option value="Swaziland">Swaziland</option>

                  <option value="Sweden">Sweden</option>

                  <option value="Switzerland">Switzerland</option>

                  <option value="Syria">Syrian Arab Republic</option>

                  <option value="Taiwan">Taiwan, Province of China</option>

                  <option value="Tajikistan">Tajikistan</option>

                  <option value="Tanzania">Tanzania, United Republic of</option>

                  <option value="Thailand">Thailand</option>

                  <option value="Togo">Togo</option>

                  <option value="Tokelau">Tokelau</option>

                  <option value="Tonga">Tonga</option>

                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>

                  <option value="Tunisia">Tunisia</option>

                  <option value="Turkey">Turkey</option>

                  <option value="Turkmenistan">Turkmenistan</option>

                  <option value="Turks and Caicos">Turks and Caicos Islands</option>

                  <option value="Tuvalu">Tuvalu</option>

                  <option value="Uganda">Uganda</option>

                  <option value="Ukraine">Ukraine</option>

                  <option value="United Arab Emirates">United Arab Emirates</option>

                  <option value="United Kingdom">United Kingdom</option>

                  <option value="United States">United States</option>

                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>

                  <option value="Uruguay">Uruguay</option>

                  <option value="Uzbekistan">Uzbekistan</option>

                  <option value="Vanuatu">Vanuatu</option>

                  <option value="Venezuela">Venezuela</option>

                  <option value="Vietnam">Viet Nam</option>

                  <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                  <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>

                  <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>

                  <option value="Western Sahara">Western Sahara</option>

                  <option value="Yemen">Yemen</option>

                  <option value="Yugoslavia">Yugoslavia</option>

                  <option value="Zambia">Zambia</option>

                  <option value="Zimbabwe">Zimbabwe</option>

                </select>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Mobile Phone </strong></td>

              <td><label>

                <input name="txtMobileNo" type="number" class="textbox" id="txtMobileNo" required placeholder="MOBILE" />

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>E-mail ID </strong></td>

              <td><label>

                <input name="txtEmail" type="email" class="textboxBig" id="txtEmail" required placeholder="EMAIL ADDRESS" />

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Nationality</strong></td>

              <td><input name="rdoNationality" required type="radio" value="indian" />

                  <span class="TextMain1"><strong>INDIAN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <input name="rdoNationality" type="radio" value="foreigner" />

                  <strong>FOREIGNER</strong></strong></span></td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Passport Number </strong></td>

              <td><label>

                <input name="txtPassportNumber" type="text" class="textboxBig" size="45" maxlength="20" />

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Issued by </strong></td>

              <td><label>

                <input name="txtIssuedBy" type="text" class="textboxBig" size="45" maxlength="20" />

                </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Valid Upto </strong></td>

              <td><label>

                <select name="cboPMnth" class="textbox" id="cboPMnth" style="width:90px;">

                  <option value="01">Jan</option>

                  <option value="02">Feb</option>

                  <option value="03">Mar</option>

                  <option value="04">Apr</option>

                  <option value="05">May</option>

                  <option value="06">Jun</option>

                  <option value="07">Jul</option>

                  <option value="08">Aug</option>

                  <option value="09">Sep</option>

                  <option value="10">Oct</option>

                  <option value="11">Nov</option>

                  <option value="12">Dec</option>

                </select>

&nbsp;

        <select name="cboPYrs" class="textbox" id="cboPYrs" style="width:100px;">

          <?php for($y=2016;$y<=2050;$y++) { 

				  ?>

          <option value="<?php echo $y?>"><?php echo $y?></option>

          <?php } ?>

        </select>

&nbsp; </label>

              </td>

            </tr>

            <tr>

              <td class="TextMain1"><strong>Accommodation Required</strong></td>

              <td><label>

                <input name="rdoAccomodation" id="accoRequired" type="radio" value="yes" />

                <span class="TextMain1"><strong>Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <input name="rdoAccomodation"  id="accoNotRequired" type="radio" value="no" />

                <strong>No</strong></strong></span> </label></td>

            </tr>

            <tbody id="accompaniedBy" style="display:none;">
              <tr class="acc_box">
                <td class="TextMain1"><strong>Accompanied By </strong></td>
                <td>
                  <label>
                    <input name="accompanied_by[]" type="text" class="textboxBig" size="45" maxlength="20" />
                  </label>
                </td>
              </tr>

              <tr id="optionsBox"> <td>&nbsp;</td>
                <td>
                  <a href="javascript:void(0)" class="add"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;&nbsp;Add More</a>
                  <a href="javascript:void(0)" class="remove"><i class="fa fa-minus-square" aria-hidden="true"></i>&nbsp;&nbsp;Remove</a>
                </td>
              </tr>
            </tbody>

            <tr>
              <td class="TextMain1">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>

              <td colspan="2" class="TextMain1" align="center"><input type="submit" name="Submit" value="Proceed"  class="button"/></td>

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

<script>
$('#cboSpeciality').change(function() {
  if($(this).val() == 'Others') {
    $('#other_speciality').fadeIn();
  }else{
    $('#other_speciality').fadeOut();
  }
});

$('#accoRequired').click(function() {
  console.log('show');
  $('#accompaniedBy').show();
});

$('#accoNotRequired').click(function() {
  console.log('hide');
  $('#accompaniedBy').hide();
});


$('.add').click(function(e) {
  if($('.acc_box').length >= 1) {
    $('.acc_box:last').after('<tr class="acc_box"><td></td><td><label><input name="accompanied_by[]" type="text" class="textboxBig" size="45" maxlength="20" /></label></td></tr>');
  }else{
    var html = '';
    html += '<tr class="acc_box"><td></td><td><label><input name="accompanied_by[]" type="text" class="textboxBig" size="45" maxlength="20" /></label></td></tr>';
    $(html).insertBefore('#optionsBox');
  }
  $('.remove').show();
});

$('.remove').on('click',function() {
  $('.acc_box:last').remove();
  if($('.acc_box').length < 1) {
    $('.remove').hide();
  }
});
</script>

</body>

</html>

<?php ob_end_flush();?>