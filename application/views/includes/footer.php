  </div>
</div>
<div class="no_float"></div>
</div>
<div id="old-foot">
<div align="center"><?php $this->Helps->footer(); echo ' (Database Version '.$this->Migrations->get_version().')';?> | Copyright © 2010 - <?php echo date('Y');?> <a href="http://www.charliesoft.net/" class="footerLink" target="_new">Charliesoft</a>. All Rights Reserved.</div>
</div>
</body>
<!--
<script>
var isInIFrame = (window.location != window.parent.location) ? true : false;

alert(isInIFrame)
</script>-->
</html>
<script>
<?php if(isset($focus_field)):?>
$('#<?php echo $focus_field;?>').focus();
<?php endif;?>

function delete_item(delete_id, msg, url)
{
	var answer = confirm(msg)
	
	if (!answer)
	{
		return false;
	}
	
	window.location = url
}
</script>