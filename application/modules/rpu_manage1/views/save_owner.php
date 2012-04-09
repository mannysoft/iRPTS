<form method="post" action="" id="myform">
<fieldset><legend></legend>
<table width="100%" border="0">
      <tr>
        <td colspan="4" align="center" valign="middle" ><div id="error_message"><?php echo validation_errors();?></div></td>
      </tr>
      <tr>
        <td  align="right" nowrap="nowrap">bread crumbs here</td>
        <td  align="left" colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" nowrap="nowrap">&nbsp;</td>
        <td  align="left" colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" width="168" nowrap="nowrap">LastName</td>
        <td  align="left" colspan="2"><input name="last_name" type="text" id="last_name" size="30" maxlength="100" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" width="168" nowrap="nowrap">FirstName</td>
        <td  align="left" colspan="2"><input name="first_name" type="text" id="first_name" size="30" maxlength="100" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" width="168" nowrap="nowrap">MiddleName</td>
        <td  align="left" colspan="2"><input name="middle_name" type="text" id="middle_name" size="30" maxlength="100" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" width="168" nowrap="nowrap">Gender</td>
        <td  align="left" colspan="2"><input type="radio" name="gender" value="male" {male} />
          male
          <input type="radio" name="gender" value="female" {female} />
          female </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" width="168" nowrap="nowrap">Birthday</td>
        <td  colspan="2" align="left"><table border="0" cellspacing="0" cellpadding="2" width="100">
          <tr>
            <td  width="33%"><strong>
              <?php $js = 'id= "birth_month"';echo form_dropdown('birth_month', $month_options, $month_options_selected, $js);?>
            </strong>
              (month)</td>
            <td  width="33%"><strong>
              <?php $js = 'id= "birth_day"';echo form_dropdown('birth_day', $day_options, $day_options_selected, $js);?>
            </strong>
              (day)</td>
            <td  width="33%"><strong>
              <?php $js = 'id= "birth_year"';echo form_dropdown('birth_year', $year_options, $year_options_selected, $js);?>
            </strong>
              (year) </td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" width="168" nowrap="nowrap">Marital 
          Status</td>
        <td  align="left" colspan="2"><!-- BEGIN MaritalStatusList -->
          <input type="radio" name="marital_status" value="" />
          &nbsp;&nbsp;&nbsp;
  <!-- END MaritalStatusList --></td>
        <td width="161">&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" nowrap="nowrap">TIN</td>
        <td width="340" align="left" ><input type="text" name="tin" maxlength="32" size="30" /></td>
        <td width="351" align="left" >&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  rowspan="3" nowrap="nowrap" align="right"><input name="address_id" type="hidden" id="address_id" />
          Address</td>
        <td  align="left"><input type="text" size="30" name="number" maxlength="32" />
          (Number) </td>
        <td  align="left"><input type="text" name="street" size="30" maxlength="64" />
          (Street) </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="left"><input type="text" name="barangay" size="30" maxlength="64" />
          (Barangay) </td>
        <td  align="left"><input type="text" name="district" size="30" maxlength="64" />
          (District) </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="left"><input name="municipality_city" type="text" id="municipality_city" size="30" maxlength="64" />
          (Municipality/City) </td>
        <td  align="left"><input type="text" name="province" size="30" maxlength="32" />
          (Province) </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" nowrap="nowrap">Telephone</td>
        <td  align="left" colspan="2"><input type="text" name="telephone" size="30" maxlength="64" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" nowrap="nowrap">Cell 
          Number</td>
        <td  align="left" colspan="2"><input name="mobile_number" type="text" id="mobile_number" size="30" maxlength="64" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" nowrap="nowrap">Email</td>
        <td  align="left" colspan="2"><input type="text" name="email" size="30" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  nowrap="nowrap"><b> </b></td>
        <td  colspan="2"><!--input type="button" name="Button" value="Cancel" onClick="javascript:EncodePerson.action.value = 'cancel';EncodePerson.submit();"--></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right" valign="middle" nowrap="nowrap" >&nbsp;</td>
        <td colspan="2" ><input type="submit" name="button" id="button" value="Save" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="op" type="hidden" id="op" value="1" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></fieldset>
</form>
<script>
$('#myform').submit(function(){

	return true;
	$('#error_message').html("Saving...");
	
	var data = 'number=' + $('#number').val() + '&province=' + $('#province').val();
		data +='&district=' + $('#district').val() + '&barangay=' + $('#barangay').val() + '&op=' + $('#op').val();
		data +='&street=' + $('#street').val();
  
     $.ajax({  
         url: "<?php echo base_url().'index.php/Ajax/sample'?>",    
         type: "POST",          
         data: data,       
         cache: false,  
         success: function (html) {    
           
             //hide the progress bar  
             //$('#outputtime').hide();     
              //alert(html) 
             //add the content retrieved from ajax and put it in the #content div  
             $('.std_block').html(html);  
               
             //display the body with fadeIn transition  
             //$('#sample').fadeIn('slow');         
        }         
     });  
	
	return false;
	
});

</script>