        <form id="assessment_settings_form"  method="post" action="">
        <table width="100%" border="0" cellspacing="10">
          <tr>
            <td width="17%" align="right"><label for="auto_calculate">
           Auto Calculate
        </label></td>
            <td width="8%"><input name="auto_calculate" type="checkbox" id="auto_calculate" value="1" <?php echo $auto_calculate;?>/></td>
            <td width="75%">This setting will determine if the property pop-ups</td>
          </tr>
          <tr>
            <td align="right"><input name="op" type="hidden" id="op" value="1" /></td>
            <td><input type="submit" name="button" id="button" value="Save" /></td>
            <td>&nbsp;</td>
          </tr>
        </table>
        </form>
