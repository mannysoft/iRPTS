<form id="myform" method="post" action="" target="" enctype="multipart/form-data">
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td><input name="op" type="hidden" id="op" value="1" /></td>
    <td align="right"><a href="<?php echo base_url();?>settings_manage/location/barangay_save">Add Barangay</a> &nbsp;</td>
  </tr>
  <tr>
    <td width="71%">&nbsp;</td>
    <td width="4%">&nbsp;</td>
    <td width="25%" align="right"></td>
  </tr>
</table>
<table width="100%" border="0" class="type-one">
      <tr class="type-one-header">
        <th width="2%" scope="col"><input name="checkall" type="checkbox" id="checkall" onClick="select_all('user', '1');" value="1"/></th>
        <th width="12%" scope="col">Code</th>
        <th width="28%" scope="col">Description</th>
        <th width="20%" scope="col">District</th>
        <th width="14%" scope="col">Status</th>
        <th width="24%" scope="col">Action</th>
  </tr>
	  <?php $d = new District_m()?>
	  <?php foreach( $barangays as $row ): ?>
      <?php $d->get_by_id($row->district_id);?>
		 <?php $bg 	= $this->Helps->set_line_colors();?>
		<tr bgcolor="<?php echo $bg;?>" onmouseover="this.bgColor = '<?php echo $this->config->item('mouseover_linecolor')?>';" 
    onmouseout ="this.bgColor = '<?php echo $bg;?>';">
        <td bgcolor=""><input name="user[]" type="checkbox" value="<?php echo $row->id;?>" ONCLICK="highlightRow(this,'#ABC7E9');"/></td>
		<td bgcolor=""><?php echo $row->code;?></td>
        <td bgcolor=""><strong><?php echo $row->description;?></strong></td>
        <td bgcolor=""><?php echo $d->description?></td>
        <td bgcolor=""><?php echo $row->status;?></td>
        <td bgcolor="">
          <a href="<?php echo base_url();?>settings_manage/location/barangay_save/<?php echo $row->id;?>">Edit</a> | 
		  <a href="#" onclick="delete_user('<?php echo $row->username;?>','Delete Barangay <?php echo $row->description;?>?', '<?php echo base_url();?>settings_manage/location/barangay_delete/<?php echo $row->id;?>')">Delete</a>
        </td>
        </tr>
		<?php endforeach;?>
      <tr>
        <td colspan="2"><!--<select name="action" id="action" onchange="this.form.submit();">
          <option>With Selected:</option>
          <option value="0">Deactivate</option>
		  <option value="1">Activate</option>
        </select>--></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
</form>
<script>
function delete_user(delete_id, msg, url)
{
	var answer = confirm(msg)
	
	if (!answer)
	{
		return false;
	}
	
	window.location = url
}
</script>