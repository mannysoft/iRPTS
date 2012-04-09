<form action="" method="post">
<table width="100%" border="0" cellpadding="10" cellspacing="10">
  <tr>
    <td width="21%" align="right" class="type-one">Type:</td>
      <?php $active = ''?>
      <?php $inactive = ''?>
	  <?php if($build->type == 'B' or $build->id == ''):?>
      	<?php $active = 'checked';?>
      <?php else:?>
      	<?php $inactive = 'checked';?>
      <?php endif;?>
      <td width="48%" align="left" class="type-one"><input type="radio" name="type" id="building" value="B" <?php echo $active;?>/>
      <label for="building">Building</label> 
      <input type="radio" name="type" id="improvement" value="I" <?php echo $inactive;?>/>
      <label for="improvement">Improvement</label></td>
    <td width="31%">&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><label for="code">Code:</label></td>
    <td>
      <input name="code" type="text" id="code" value="<?php echo $build->code ?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><label for="description">Description:</label></td>
    <td><input name="description" type="text" id="description" value="<?php echo $build->description; ?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">Unit Value Option:</td>
    <td><input type="radio" name="unit_option" id="range" value="range" <?php echo $active;?> class="range"/>
      <label for="range">Range</label> 
      <input type="radio" name="unit_option" id="single" value="single" <?php echo $inactive;?> class="single"/>
      <label for="single">Single Value</label>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">Range:</td>
    <td><input name="range_lower_bound" type="text" id="range_lower_bound" value="<?php echo $build->range_lower_bound; ?>" size="5" /> 
      - 
      <input name="range_upper_bound" type="text" id="range_upper_bound" value="<?php echo $build->range_upper_bound; ?>" size="5" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">Unit Value:</td>
    <td><input name="value" type="text" id="value" value="<?php echo $build->value; ?>" size="5" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="type-one">Status:</td>
      <?php $active = ''?>
      <?php $inactive = ''?>
	  <?php if($build->status == 'active' or $build->id == ''):?>
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
      <a href="<?php echo base_url();?>settings_manage/property/build_classes">Cancel</a></td>
    <td><input name="op" type="hidden" id="op" value="1" /></td>
  </tr>
</table>
</form>
<script>

$(document).ready(function(){
	
	//$('#range').attr("checked", true);
	$('#value').attr("disabled", true);
	$('#range_lower_bound').attr("disabled", false);
	$('#range_upper_bound').attr("disabled", false);
	
	// If the value field is not zero
	<?php if($build->value != 0):?>
		$('#single').attr("checked", true);
		$('#value').attr("disabled", false);
		$('#range_lower_bound').attr("disabled", true);
		$('#range_upper_bound').attr("disabled", true);
	<?php endif?>
});


$('.range').click(function(){

	$('#value').attr("disabled", true);
	$('#range_lower_bound').attr("disabled", false);
	$('#range_upper_bound').attr("disabled", false);
	
	$('#range_lower_bound').focus();
	
});
$('.single').click(function(){

	$('#value').attr("disabled", false);
	$('#range_lower_bound').attr("disabled", true);
	$('#range_upper_bound').attr("disabled", true);
	
	$('#value').focus();
});
</script>