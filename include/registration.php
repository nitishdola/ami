<form name="frmReg" method="post" action="redirectReg.php">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">

    <tr>

      <td width="190"><img src="images/registration.png" width="190" height="58" /></td>

      <td width="40">&nbsp;</td>

      <td width="550"><input name="first_name" type="text" class="textbox" id="txtRFirstName"  required placeholder="First Name" pattern="[a-z A-Z]+"></td>

      <td width="550"><input name="last_name" type="text" class="textbox" id="txtRLastName"  required placeholder="Last Name" pattern="[a-z A-Z]+"/>
      <td width="40">&nbsp;</td>
      <td width="550"><input name="email" type="email" class="textbox" id="email"  required placeholder="Email" ></td>

      <input name="TransType" type="hidden" id="TransType" value="New_Registration"></td>
      <td width="40">&nbsp;</td>
      <td width="650"><span class="TextMain1">

        <input type="submit" name="Submit" value="Submit"  class="buttonGrey"/>

      </span></td>

    </tr>

  </table>

</form>

