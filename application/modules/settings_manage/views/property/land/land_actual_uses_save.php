<form action="" method="post">
<table width="100%" border="0" cellpadding="10" cellspacing="10">
  <tr>
    <td width="22%" align="right">Report Code:</td>
    <td width="28%">
	<?php $r = new Report_code_m();?>
	  <?php $js = 'id = "report_code"';?>
	  <?php echo form_dropdown('report_code', $r->report_codes_options(), $land->report_code, $js); ?>
      </td>
    <td width="50%">
	</td>
  </tr>
  <tr>
    <td align="right"><label for="code">Code:</label></td>
    <td>
      <input name="code" type="text" id="code" value="<?php echo $land->code; ?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><label for="description">Description:</label></td>
    <td><input name="description" type="text" id="description" value="<?php echo $land->description; ?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">Assessment Level:</td>
    <td><input name="value" type="text" id="value" value="<?php echo $land->value; ?>" />
    %</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="type-one">Status:</td>
      <?php $active = ''?>
      <?php $inactive = ''?>
	  <?php if($land->status == 'active' or $land->id == ''):?>
      	<?php $active = 'checked';?>
      <?php else:?>
      	<?php $inactive = 'checked';?>
      <?php endif;?>
      <td align="left" class="type-one"><input type="radio" name="status" id="active" value="active" <?php echo $active;?>/>
      <label for="active">Active</label> <input type="radio" name="status" id="inactive" value="inactive" <?php echo $inactive;?>/>
      <label for="inactive">Inactive</label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="encode_barangay" id="encode_barangay" value="Save"/> 
      <a href="<?php echo base_url();?>settings_manage/property/land_actual_uses">Cancel</a></td>
    <td><input name="op" type="hidden" id="op" value="1" /></td>
  </tr>
</table>
</form>