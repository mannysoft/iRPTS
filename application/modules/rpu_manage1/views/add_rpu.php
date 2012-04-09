<form method="post" action="" id="myform">
<fieldset><legend>Property Information</legend>
<table width="100%" border="0">
      <tr>
        <td colspan="4" align="center" valign="middle" ><div id="error_message"><?php echo validation_errors();?></div></td>
      </tr>
      <tr>
        <td width="19%" rowspan="3" align="right" valign="middle" nowrap="nowrap" >          Location </td>
        <td width="19%" ><input name="number" type="text" id="number" value="<?php echo set_value('number');?>" size="30" maxlength="32" />
        (Number)</td>
        <td width="65%" ><input name="street" type="text" id="street" value="<?php echo set_value('street', '');?>" size="30" />
          <br />
        (Street)</td>
        <td width="16%">&nbsp;</td>
      </tr>
      <tr>
        <td ><strong>
          <?php $js = 'id= "province_id"';echo form_dropdown('province_id', $province_options, $province_options, $js);?>
        </strong><br />
          (Province) </td>
        <td ><strong>
          <?php $js = 'id= "municipality_city_id"';echo form_dropdown('municipality_city_id', $municipality_options, $municipality_options, $js);?>
          </strong><br />
        (Municipality/City) </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td ><strong>
          <?php $js = 'id= "district_id"';echo form_dropdown('district_id', $district_options, $district_option_selected, $js);?>
          </strong><br />
          (District) </td>
        <td ><strong>
          <?php $js = 'id= "barangay_id"';echo form_dropdown('barangay_id', $barangay_options, $barangay_option_selected, $js);?>
        </strong><br />
        (Barangay) </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right" valign="middle" nowrap="nowrap" >House Tag 
          Number</td>
        <td ><input type="text" name="house_tag_number" size="30" id="house_tag_number" /></td>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right" valign="middle" nowrap="nowrap" >Land Area</td>
        <td ><input type="text" name="land_area" size="30" id="land_area" />
       </td>
        <td >&nbsp;
  </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td rowspan="2" align="right" valign="middle" nowrap="nowrap" > Description of Land</td>
        <td ><input type="text" name="lot_number" size="30" id="lot_number" />
        (Lot Number) </td>
        <td ><input type="text" name="zone_number" size="30" id="zone_number" />
          <br />
        (Zone Number) </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td ><input type="text" name="block_number" size="30" id="block_number" />
          (Block Number) </td>
        <td ><input type="text" name="psd13" size="30" />
          <br />
        (Psd13) </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td rowspan="3" align="right" valign="middle" nowrap="nowrap" > documents</td>
        <td colspan="2" ><input name="affidavit_of_ownership" type="checkbox" id="affidavit_of_ownership" value="1" />
        Affidavit of Ownership</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" ><input name="barangay_certificate" type="checkbox" id="barangay_certificate" value="1" />
          Barangay Certificate </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" ><input name="land_tagging" type="checkbox" id="land_tagging" value="1" />
          Land Tagging </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Save" />
        <input name="op" type="hidden" id="op" value="1" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>to do: use ajax: after clicking save put progress bar and if the adding of data is success,</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>change the parent div to details of inserted data        </td>
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