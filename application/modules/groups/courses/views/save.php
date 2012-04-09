<?php if (validation_errors()): ?>
<div class="clean-red"><?php echo validation_errors(); ?></div>
<?php elseif ($this->session->flashdata('msg')): ?>
<div class="clean-green"><?php echo $this->session->flashdata('msg');?></div>
<?php else: ?>
<?php endif; ?>

<fieldset><legend><?php // echo $legend;?></legend>
<form action="" method="post">
  <table width="100%" border="0" cellpadding="5" cellspacing="5" class="table-form">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="22%" align="right">Course Code :</td>
      <td><input name="course_code" type="text"  id="course_code" value="<?php echo $course_code;?>"  size="50"/>
        <input name="course_code_old" type="hidden"  id="course_code_old" value="<?php echo $course_code;?>"  size="50"/></td>
      <td width="4%">&nbsp;</td>
    </tr>
    <tr>
      <td width="22%" align="right">Course: </td>
      <td><input name="course" type="text"  id="course" value="<?php echo $course;?>"  size="50"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right">Description: </td>
      <td><input name="description" type="text"  id="description" value="<?php echo $description; ?>"  size="50"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right">Years: </td>
      <td>
	  <?php 
		$opt = array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4',
					'5' => '5'
					);	
		echo form_dropdown('year', $opt, $year);
		?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right">HCS:</td>
      <td><input name="hcs" type="checkbox" value ="1" <?php echo $hcs; ?>/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right">Open:</td>
      <td><input name="open" type="checkbox"  value ="1" <?php echo $open; ?>/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Save" />
        <a href="<?=base_url().'courses'?>">Cancel</a>
        <input name="op" type="hidden" id="op" value="1" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</fieldset>