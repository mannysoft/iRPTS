<form id="lgu_settings_form" method="post" action="">
<table width="100%">
  <tr>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><fieldset class="type-one"><legend>LGU</legend>
        <table width="100%" border="0">
          <tr>
            <td width="30%" align="right">LGU Name:</td>
            <td width="53%"><input name="lgu_name" id="lgu_name" value="<?php echo $settings['lgu_name'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">LGU Type:</td>
            <td><select dojotype="dijit.form.Select" id="lgu_type" name="lgu_type">
              <option value="municipality">municipality</option>
              <option value="province">province</option>
            </select></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
    	</fieldset></td>
    <td>
    
    <fieldset><legend>Chief Executive</legend>
    <table width="100%" border="0">
          <tr>
            <td width="30%" align="right">Designation:</td>
            <td width="53%"><input name="chief_designation" id="chief_designation" value="<?php echo $settings['chief_designation'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">First Name:</td>
            <td><input name="chief_fname" id="chief_fname" value="<?php echo $settings['chief_fname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">Middle Name:</td>
            <td><input name="chief_mname" id="chief_mname" value="<?php echo $settings['chief_mname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">Last Name:</td>
            <td><input name="chief_lname" id="chief_lname" value="<?php echo $settings['chief_lname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
  </table>
  </fieldset>
  
  </td>
    <td>
    
    <fieldset><legend>Assessor</legend>
    <table width="100%" border="0">
          <tr>
            <td width="30%" align="right">Designation:</td>
            <td width="53%"><input name="assessor_designation" id="assessor_designation" value="<?php echo $settings['assessor_designation'];?>" dojotype="dijit.form.TextBox" /></input></td>
      </tr>
          <tr>
            <td align="right">First Name:</td>
            <td><input name="assessor_fname" id="assessor_fname" value="<?php echo $settings['assessor_fname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">Middle Name:</td>
            <td><input name="assessor_mname" id="assessor_mname" value="<?php echo $settings['assessor_mname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">Last Name:</td>
            <td><input name="assessor_lname" id="assessor_lname" value="<?php echo $settings['assessor_lname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
  </table>
  </fieldset>
    
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
    
    <fieldset><legend>Treasurer</legend>
    <table width="100%" border="0">
          <tr>
            <td width="30%" align="right">Designation:</td>
            <td width="53%"><input name="treasurer_designation" id="treasurer_designation" value="<?php echo $settings['treasurer_designation'];?>" dojotype="dijit.form.TextBox" /></input></td>
      </tr>
          <tr>
            <td align="right">First Name:</td>
            <td><input name="treasurer_fname" id="treasurer_fname" value="<?php echo $settings['treasurer_fname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">Middle Name:</td>
            <td><input name="treasurer_mname" id="treasurer_mname" value="<?php echo $settings['treasurer_mname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">Last Name:</td>
            <td><input name="treasurer_lname" id="treasurer_lname" value="<?php echo $settings['treasurer_lname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
  </table>
  </fieldset>
  
  
    
    </td>
    <td>
    
    <fieldset><legend>Provincial Assessor</legend>
    <table width="100%" border="0">
          <tr>
            <td width="30%" align="right">Designation:</td>
            <td width="53%"><input name="provincial_assessor_designation" id="provincial_assessor_designation" value="<?php echo $settings['provincial_assessor_designation'];?>" dojotype="dijit.form.TextBox" /></input></td>
      </tr>
          <tr>
            <td align="right">First Name:</td>
            <td><input name="provincial_assessor_fname" id="provincial_assessor_fname" value="<?php echo $settings['provincial_assessor_fname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">Middle Name:</td>
            <td><input name="provincial_assessor_mname" id="provincial_assessor_mname" value="<?php echo $settings['provincial_assessor_mname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">Last Name:</td>
            <td><input name="provincial_assessor_lname" id="provincial_assessor_lname" value="<?php echo $settings['provincial_assessor_lname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
  </table></fieldset>
    
    
    </td>
    <td>
    
    
    <fieldset><legend>Provincial Treasurer</legend>
    <table width="100%" border="0">
          <tr>
            <td width="30%" align="right">Designation:</td>
            <td width="53%"><input name="provincial_treasurer_designation" id="provincial_treasurer_designation" value="<?php echo $settings['provincial_treasurer_designation'];?>" dojotype="dijit.form.TextBox" /></input></td>
      </tr>
          <tr>
            <td align="right">First Name:</td>
            <td><input name="provincial_treasurer_fname" id="provincial_treasurer_fname" value="<?php echo $settings['provincial_treasurer_fname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">Middle Name:</td>
            <td><input name="provincial_treasurer_mname" id="provincial_treasurer_mname" value="<?php echo $settings['provincial_treasurer_mname'];?>" dojotype="dijit.form.TextBox" /></input></td>
          </tr>
          <tr>
            <td align="right">Last Name:</td>
            <td><input name="provincial_treasurer_lname" id="provincial_treasurer_lname" value="<?php echo $settings['provincial_treasurer_lname'];?>" dojotype="dijit.form.TextBox" /></input>
            <input name="op" type="hidden" id="op" value="1" /></td>
          </tr>
  </table>
    </fieldset>
    
    
    
    </td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Save" /></td>
    <td>&nbsp;</td>
  </tr>
</table>


</form>
