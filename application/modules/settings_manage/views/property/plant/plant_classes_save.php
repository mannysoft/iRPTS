<form action="" method="post">
<table width="100%" border="0" cellpadding="10" cellspacing="10">
  <tr>
    <td width="20%"></td>
    <td width="39%">&nbsp;</td>
    <td width="41%">&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><label for="code">Code:</label></td>
    <td>
      <input name="code" type="text" id="code" value="<?php echo $plant->code ?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><label for="description">Description:</label></td>
    <td><input name="description" type="text" id="description" value="<?php echo $plant->description; ?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">Unit Value:</td>
    <td><input name="value" type="text" id="value" value="<?php echo $plant->value; ?>" size="5" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="type-one">Status:</td>
      <?php $active = ''?>
      <?php $inactive = ''?>
	  <?php if($plant->status == 'active' or $plant->id == ''):?>
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
    <td><input type="submit" name="encode_barangay" id="encode_barangay" value="Save" /> 
      <a href="<?php echo base_url();?>settings_manage/property/plant_classes">Cancel</a></td>
    <td><input name="op" type="hidden" id="op" value="1" /></td>
  </tr>
</table>
</form>