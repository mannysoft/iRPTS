<form id="treasury_settings_form"  method="post" action="">
        <fieldset><legend>Penalty LUT</legend>
        <table width="100%" border="0" cellspacing="5">
          <tr>
            <td width="8%" align="right">&nbsp;</td>
            <td width="17%" align="right"><strong>Month</strong></td>
            <td width="15%" align="right">&nbsp;</td>
            <td width="9%" align="right"><strong>Month</strong></td>
            <td width="13%">&nbsp;</td>
            <td width="9%" align="right"><strong>Month</strong></td>
            <td width="9%">&nbsp;</td>
            <td width="9%" align="right"><strong>Month</strong></td>
            <td width="11%">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>1:</strong></td>
            <td align="left"><input name="m1" id="m1" value="<?php echo $m[0]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>13</strong></td>
            <td align="left"><input name="m13" id="m13" value="<?php echo $m[12]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>25</strong></td>
            <td align="left"><input name="m25" id="m25" value="<?php echo $m[24]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>37</strong></td>
            <td align="left"><input name="m37" id="m37" value="<?php echo $m[36]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>2:</strong></td>
            <td align="left"><input name="m2" id="m2" value="<?php echo $m[1]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>14</strong></td>
            <td align="left"><input name="m14" id="m14" value="<?php echo $m[13]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>26</strong></td>
            <td align="left"><input name="m26" id="m26" value="<?php echo $m[25]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>38</strong></td>
            <td align="left"><input name="m38" id="m38" value="<?php echo $m[37]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>3:</strong></td>
            <td align="left"><input name="m3" id="m3" value="<?php echo $m[2]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>15</strong></td>
            <td align="left"><input name="m15" id="m15" value="<?php echo $m[14]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>27</strong></td>
            <td align="left"><input name="m27" id="m27" value="<?php echo $m[26]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="left">&nbsp;</td>
            <td align="left"><input name="op" type="hidden" id="op" value="1" /></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>4:</strong></td>
            <td align="left"><input name="m4" id="m4" value="<?php echo $m[3]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>16</strong></td>
            <td align="left"><input name="m16" id="m16" value="<?php echo $m[15]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>28</strong></td>
            <td align="left"><input name="m28" id="m28" value="<?php echo $m[27]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="left">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>5:</strong></td>
            <td align="left"><input name="m5" id="m5" value="<?php echo $m[4]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>17</strong></td>
            <td align="left"><input name="m17" id="m17" value="<?php echo $m[16]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>29</strong></td>
            <td align="left"><input name="m29" id="m29" value="<?php echo $m[28]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="left">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>6:</strong></td>
            <td align="left"><input name="m6" id="m6" value="<?php echo $m[5]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>18</strong></td>
            <td align="left"><input name="m18" id="m18" value="<?php echo $m[17]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>30</strong></td>
            <td align="left"><input name="m30" id="m30" value="<?php echo $m[29]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="left">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>7:</strong></td>
            <td align="left"><input name="m7" id="m7" value="<?php echo $m[6]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>19</strong></td>
            <td align="left"><input name="m19" id="m19" value="<?php echo $m[18]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>31</strong></td>
            <td align="left"><input name="m31" id="m31" value="<?php echo $m[30]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="left">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>8:</strong></td>
            <td align="left"><input name="m8" id="m8" value="<?php echo $m[7]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>20</strong></td>
            <td align="left"><input name="m20" id="m20" value="<?php echo $m[19]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>32</strong></td>
            <td align="left"><input name="m32" id="m32" value="<?php echo $m[31]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="left">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>9:</strong></td>
            <td align="left"><input name="m9" id="m9" value="<?php echo $m[8]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>21</strong></td>
            <td align="left"><input name="m21" id="m21" value="<?php echo $m[20]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>33</strong></td>
            <td align="left"><input name="m33" id="m33" value="<?php echo $m[32]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="left">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>10:</strong></td>
            <td align="left"><input name="m10" id="m10" value="<?php echo $m[9]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>22</strong></td>
            <td align="left"><input name="m22" id="m22" value="<?php echo $m[21]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>34</strong></td>
            <td align="left"><input name="m34" id="m34" value="<?php echo $m[33]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="left">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>11:</strong></td>
            <td align="left"><input name="m11" id="m11" value="<?php echo $m[10]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>23</strong></td>
            <td align="left"><input name="m23" id="m23" value="<?php echo $m[22]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>35</strong></td>
            <td align="left"><input name="m35" id="m35" value="<?php echo $m[34]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="left">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td align="right"><strong>12:</strong></td>
            <td align="left"><input name="m12" id="m12" value="<?php echo $m[11]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>24</strong></td>
            <td align="left"><input name="m24" id="m24" value="<?php echo $m[23]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="right"><strong>36</strong></td>
            <td align="left"><input name="m36" id="m36" value="<?php echo $m[35]?>" dojotype="dijit.form.TextBox" style="width: 5em;"/></td>
            <td align="left">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
        </table>
        </fieldset>
        
    
    <div dojoType="dijit.layout.ContentPane" title="Other Settings" selected="true">
    <fieldset><legend>Other Settings</legend>
    	<table width="100%" border="0" cellspacing="5">
          <tr>
            <td width="30%" align="right"><strong>Annual Due Date</strong></td>
            <td width="53%"><input name="annual_due_date" id="annual_due_date" value="<?php echo $settings->annual_due_date;?>" dojotype="dijit.form.TextBox"/></td>
            <td width="53%">&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><strong>Basic Tax Rate</strong></td>
            <td><input name="pct_rpt_tax" id="pct_rpt_tax" value="<?php echo $settings->pct_rpt_tax;?>" dojotype="dijit.form.TextBox"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><strong><span class="fields"> SEF Tax Rate </span></strong></td>
            <td><input name="pct_sef" id="pct_sef" value="<?php echo $settings->pct_sef;?>" dojotype="dijit.form.TextBox"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><strong><span class="fields"> Idle Tax Rate</span></strong></td>
            <td><input name="pct_idle" id="pct_idle" value="<?php echo $settings->pct_idle;?>" dojotype="dijit.form.TextBox"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><strong><span class="fields"> Early Payment<br />
            Discount Percentage </span></strong></td>
            <td><input name="discount_percentage" id="discount_percentage" value="<?php echo $settings->discount_percentage;?>" dojotype="dijit.form.TextBox"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><strong><span class="fields"> Early Payment<br />
            Discount Period </span></strong></td>
            <td><strong>
              <?php $js = 'id= "month" dojoType="dijit.form.Select"';echo form_dropdown('month', $month_options, $month_selected, $js);?>
            </strong><strong>
            <?php $js = 'id= "day" dojoType="dijit.form.Select"';echo form_dropdown('day', $days_options, $days_selected, $js);?>
            </strong></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><strong><span class="fields"> Advanced Payment<br />
            Discount Percentage </span></strong></td>
            <td><input name="advanced_discount_percentage" id="advanced_discount_percentage" value="<?php echo $settings->advanced_discount_percentage;?>" dojotype="dijit.form.TextBox"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><strong><span class="fields"> Q1-Advanced Payment<br />
            Discount Percentage </span></strong></td>
            <td><input name="q1_advanced_discount_percentage" id="q1_advanced_discount_percentage" value="<?php echo $settings->q1_advanced_discount_percentage;?>" dojotype="dijit.form.TextBox"/></td>
            <td>&nbsp;</td>
          </tr>
      </table>
      <table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Save" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

  </fieldset>
   
</form>