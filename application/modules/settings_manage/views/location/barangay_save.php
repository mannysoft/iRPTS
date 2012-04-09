<form id="myform" method="post" action="" enctype="multipart/form-data">
<table width="100%" border="0" cellpadding="10" cellspacing="10">
    <tr>
      <td align="right" class="type-one">&nbsp;</td>
      <td align="left" class="type-one"><strong>
        <input name="op" type="hidden" id="op" value="1" />
      </strong></td>
      <td width="43%" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" class="type-one">District</td>
      <td align="left" class="type-one">
	  <?php $d = new District_m();?>
	  <?php $js = 'id = "district_id"';?>
	  <?php echo form_dropdown('district_id', $d->district_options(), $barangay->district_id, $js); ?></td>
      <td align="left"></td>
    </tr>
    <tr>
      <td width="22%" align="right" class="type-one">Code: </td>
      <td width="35%" align="left" class="type-one"><input name="code" type="text" class="ilaw" id="code" value="<?php echo $barangay->code; ?>" size="35"/>
      </td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" class="type-one">Description: </td>
      <td align="left" class="type-one"><input name="description" type="text" id="description" value="<?php echo $barangay->description; ?>" size="35" class="ilaw"/></td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" class="type-one">Status:</td>
      <?php $active = ''?>
      <?php $inactive = ''?>
	  <?php if($barangay->status == 'active' or $barangay->id == ''):?>
      	<?php $active = 'checked';?>
      <?php else:?>
      	<?php $inactive = 'checked';?>
      <?php endif;?>
      <td align="left" class="type-one"><input type="radio" name="status" id="active" value="active" <?php echo $active;?>/>
      <label for="active">Active</label> <input type="radio" name="status" id="inactive" value="inactive" <?php echo $inactive;?>/>
      <label for="inactive">Inactive</label></td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" class="type-one">&nbsp;</td>
      <td align="left" class="type-one"><strong>
        <input type="submit" name="button2" id="button" value="Save"/>
        </strong><a href="<?=base_url().'settings_manage/location/barangay'?>">Cancel</a></td>
      <td align="left">&nbsp;</td>
    </tr>
</table>
<div></div>
</form>