<form name="frmReg" method="post" action="redirectReg.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="290"><img src="images/registration.png" width="290" height="58" /></td>
      <td width="40">&nbsp;</td>
      <td width="850"><input name="txtRFirstName" type="text" class="textbox" id="txtRFirstName"  required placeholder="First Name" pattern="[a-z A-Z]+"></td>
      <td width="850"><input name="txtRLastName" type="text" class="textbox" id="txtRLastName"  required placeholder="Last Name" pattern="[a-z A-Z]+"/>
      <input name="TransType" type="hidden" id="TransType" value="New Registration"></td>
      <td width="850"><span class="TextMain1">
        <input type="submit" name="Submit" value="Submit"  class="buttonGrey"/>
      </span></td>
    </tr>
  </table>
</form>
