<table width="100%" border="0">
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="67%"><input name="op" type="hidden" id="op" value="1" /></td>
    <td width="23%"><a href="<?php echo base_url();?>settings_manage/property/plant_classes_save/">Add new</a></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="79%">&nbsp;</td>
    <td width="6%"></td>
    <td width="15%">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" class="type-one">
      <tr class="type-one-header">
        <th width="2%" bgcolor="#D6D6D6"><input name="checkall" type="checkbox" id="checkall" onClick="select_all('employee', '1');" value="1"/></td>
        <th width="9%" bgcolor="#D6D6D6"><strong>Code</strong></th>
        <th width="29%" bgcolor="#D6D6D6">Description</th>
        <th width="10%" bgcolor="#D6D6D6">Unit Value</th>
        <th width="21%" bgcolor="#D6D6D6"><strong>Status</strong></th>
        <th width="29%" bgcolor="#D6D6D6"><strong>Action</strong></th>
  </tr>
	  
	  <?php foreach( $plants as $row ): ?>
		 <?php $bg 	= $this->Helps->set_line_colors();?>
  <tr bgcolor="<?php echo $bg;?>" onmouseover="this.bgColor = '<?php echo $this->config->item('mouseover_linecolor')?>';" 
    onmouseout ="this.bgColor = '<?php echo $bg;?>';">
        <td bgcolor=""><input name="employee[]" type="checkbox" value="<?php //echo $id;?>" ONCLICK="highlightRow(this,'#ABC7E9');"/></td>
		<td bgcolor=""><?php echo $row->code;?></td>
		<td bgcolor=""><?php echo $row->description;?></td>
		<td align="right" bgcolor=""><?php echo $row->value;?></td>
        <td bgcolor=""><?php echo $row->status;?></td>
        <td align="left" bgcolor="">
        <a href="<?php echo base_url();?>settings_manage/property/plant_classes_save/<?php echo $row->id;?>" class="edit_barangay">Edit</a> | <a href="#" onclick="delete_item('<?php echo $row->username;?>','Delete Land Class <?php echo $row->description;?>?', '<?php echo base_url();?>settings_manage/property/plant_classes_delete/<?php echo $row->id;?>')">Delete</a></td>
        </tr>
		<?php endforeach;?>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
</table>