<form method="post" action="" id="myform">
<fieldset><legend>Property Information</legend>
<table width="100%" border="0">
      <tr>
        <td colspan="4" align="center" valign="middle" ><div id="error_message"></div></td>
      </tr>
      <tr>
        <td width="19%" rowspan="3" align="right" valign="middle" nowrap="nowrap" >          Location </td>
        <td width="19%" ><input name="number" type="text" id="number" value="<?php echo set_value('number');?>" size="30" maxlength="32" />
        <br>(<b>Number</b>)</td>
        <td width="65%" ><input name="street" type="text" id="street" value="<?php echo set_value('street', '');?>" size="30" />
          <br />
        (<b>Street</b>)</td>
        <td width="16%">&nbsp;</td>
      </tr>
      <tr>
        <td ><b>
          <?php 
		  $p = new Province_m();
		  $p_rows = $p->get();
		  foreach($p_rows as $p_row)
		  {
		  	$province_options[$p_row->id] = ucwords($p_row->description);
		  }
		  $js = 'id= "province_id"';
		  echo form_dropdown('province_id', $province_options, $this->input->post('province_id'), $js);
		  ?>
        </b><br />
          (<b>Province</b>) </td>
        <td ><b>
          <?php
		  $m = new Municipality_city_m();
		  $m_rows = $m->get();
		  foreach($m_rows as $m_row)
		  {
		  	$municipality_options[$m_row->id] = ucwords($m_row->description);
		  } 
		  $js = 'id= "municipality_city_id"';
		  echo form_dropdown('municipality_city_id', $municipality_options, $municipality_options, $js);
		  ?>
          </b><br />
        (<b>Municipality/City</b>) </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td ><b>
          <?php $district_option_selected = $this->input->post('district_id');
		  $d = new District_m();
		  $d_rows = $d->get();
		  foreach($d_rows as $d_row)
		  {
		  	$district_options[$d_row->id] = ucwords($d_row->description);
		  }
		  $js = 'id= "district_id"';
		  echo form_dropdown('district_id', $district_options, $district_option_selected, $js);?>
          </b><br />
          (<b>District</b>) </td>
        <td ><b>
          <?php $barangay_option_selected = $this->input->post('barangay_id');
		  $b = new Barangay_m();
		  $b_rows = $b->get();
		  foreach($b_rows as $b_row)
		  {
		  	$barangay_options[$b_row->id] = ucwords($b_row->description);
		  }
		  $js = 'id= "barangay_id"';
		  echo form_dropdown('barangay_id', $barangay_options, $barangay_option_selected, $js);
		  ?>
        </b><br />
        (<b>Barangay</b>) </td>
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
        <br>(<b>Lot Number</b>) </td>
        <td ><input type="text" name="zone_number" size="30" id="zone_number" />
        <br />(<b>Zone Number</b>) </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td ><input type="text" name="block_number" size="30" id="block_number" />
          <br />(<b>Block Number</b>) </td>
        <td ><input type="text" name="psd13" size="30" />
          <br />
        (<b>Psd13</b>) </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td rowspan="3" align="right" valign="middle" nowrap="nowrap" > Documents</td>
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
        <input name="op" type="hidden" id="op" value="1" />
        <?php echo anchor('rpu','Cancel');?>
        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>To do: use ajax: after clicking save put progress bar and if the adding of data is success,</td>
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