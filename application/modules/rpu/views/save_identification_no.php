<form method="post" action="" id="myform">
<fieldset><legend></legend>
<table width="100%" border="0" cellpadding="10" cellspacing="10">
      <tr>
        <td colspan="4" align="center" valign="middle" ><div id="error_message"><?php echo validation_errors();?></div></td>
      </tr>
      <tr>
        <td  align="right" nowrap="nowrap">bread crumbs here</td>
        <td width="691" colspan="2"  align="left">&nbsp;</td>
        <td width="161">&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" valign="middle" nowrap="nowrap" width="168">ARP Number: </td>
        <td colspan="2" ><input name="arp_number" type="text" id="arp_number" value="<?=$afs->arp_number?>" size="30" maxlength="32" />
          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" valign="middle" nowrap="nowrap" width="168">Property Index Number: </td>
        <td colspan="2" ><input name="property_index_number" type="text" id="property_index_number" value="<?=$afs->property_index_number?>" size="30" maxlength="32" />
          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" valign="middle" nowrap="nowrap" width="168">Taxability: </td>
        <td colspan="2"><input type="radio" name="taxability" value="Taxable" <?=$taxable?> />
          Taxable
          &nbsp;
          <input type="radio" name="taxability" value="Exempt" <?=$exempt?> />
          Exempt</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" valign="middle" nowrap="nowrap" width="168">Effectivity: </td>
        <td colspan="2" ><strong>
          <?php $js = 'id= "effectivity"';echo form_dropdown('effectivity', $year_options, $year_options_selected, $js);?>
        </strong></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td  nowrap="nowrap"><b> </b></td>
        <td  colspan="2"><input type="submit" name="button" id="button" value="Save" />
        <input name="op" type="hidden" id="op" value="1" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right" valign="middle" nowrap="nowrap" >&nbsp;</td>
        <td colspan="2" >&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></fieldset>
</form>