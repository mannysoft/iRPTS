<?php if (validation_errors()): ?>
<div class="clean-red"><?php echo validation_errors(); ?></div>
<?php elseif ($this->session->flashdata('msg')): ?>
<div class="clean-green"><?php echo $this->session->flashdata('msg');?></div>
<?php else: ?>
<?php endif; ?>
<form action="" method="post">
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php echo anchor('courses/save', 'Add Course', 'class="btn-add-right"');?></td>
  </tr>
  <tr>
    <td width="9%">&nbsp;</td>
    <td width="79%">&nbsp;</td>
    <td width="12%"></td>
  </tr>
</table>
<table width="100%" border="0" class="type-one">
      <tr class="type-one-header">
        <th width="4%" bgcolor="#D6D6D6">ID</th>
        <th width="10%" bgcolor="#D6D6D6"><strong>Course Code</strong></th>
        <th width="20%" bgcolor="#D6D6D6">Course</th>
        <th width="25%" bgcolor="#D6D6D6">Description</th>
        <th width="10%" bgcolor="#D6D6D6">Year</th>
        <th width="10%" bgcolor="#D6D6D6">HCS</th>
        <th width="10%" bgcolor="#D6D6D6">Status</th>
        <th width="10%" bgcolor="#D6D6D6"><strong>Actions</strong></th>
    </tr>
	  
	  <?php foreach($rows as $row):
		  if($row->hcs == 1):
			  $hcs ="HCS";
		  else:
			  $hcs ="Regular Course";
		  endif;	  
		  
		  if($row->open == 1):
			  $open ="Open";
		  else:
			  $open ="<font color='#FF0000'>Close</font>";
		  endif;
	  ?>
	<? $bg = $this->Helps->set_line_colors();?>
    <tr bgcolor="<?php echo $bg;?>" onmouseover="this.bgColor = '<?php echo $this->config->item('mouseover_linecolor')?>';" 
    onmouseout ="this.bgColor = '<?php echo $bg;?>';">
	    <td><?=$row->id;?></td>
	    <td><?=strtoupper($row->course_code);?></td>
	    <td><?=ucwords($row->course);?></td>
	    <td align="left"><?=ucwords($row->description);?></td>
	    <td align="right"><?=$row->years;?></td>
	    <td align="center"><?=$hcs;?></td>
      <td align="center"><?=$open;?></td>
	    <td align="center"><a href="<?php echo base_url();?>courses/delete/<?=$row->id;?>" class="delete_office">Delete</a> <a href="<?php echo base_url();?>courses/save/<?=$row->id;?>">Edit</a></td>
	    </tr>
		<?php endforeach;?>
        <tr>
          <td colspan="7"><?php echo $this->pagination->create_links(); ?></td>
          <td><input name="op" type="hidden" id="op" value="1" /></td>
        </tr>
</table>
</form>
<script>
$('.delete_office').click(function(){

	var answer = confirm("Are you sure?")
	
	if (!answer)
	{
		return false;
	}
});
</script>