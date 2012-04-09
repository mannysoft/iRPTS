
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td align="left" class="subtitle"><h3>Owner's Infomation</h3></td>
  </tr>
  <tr>
    <td align="left"><!-- BEGIN OwnerListTable -->
      <table width="100%" border="1"  height="100%" class="type-one">
        <!-- BEGIN PersonTable -->
        <tr>
          <th width="20%" align="left">Name </th>
          <th width="15%" align="left" >Address</th>
          <th width="10%" align="left" >Telephone</th>
        </tr>
        <!-- BEGIN PersonList -->
        <tr>
          <td><b><?php echo ucwords($personal_name);?></b></td>
          <td ><b><?php echo ucwords($personal_address); ?></b></td>
          <td ><b>
            <?php ?>
          </b></td>
        </tr>
        <!-- END PersonList -->
        <!-- BEGIN PersonDBEmpty -->
        <!-- END PersonDBEmpty -->
        <!-- END PersonTable -->
        <!-- BEGIN CompanyTable -->
        <!-- BEGIN CompanyList -->
        <tr>
          <td><b><?php echo ucwords($company_name);?></b></td>
          <td ><b><?php echo ucwords($company_address); ?></b></td>
          <td >&nbsp;</td>
        </tr>
        <!-- END CompanyList -->
        <!-- BEGIN OwnerDBEmpty -->
        <tr>
          <td colspan="3" align="left">
         </td>
        </tr>
        <!-- END OwnerDBEmpty -->
        <!-- END CompanyTable -->
      </table>
      
      <!-- END OwnerListTable --></td>
  </tr>

  <tr>
    <td align="left"> 
    <br>
    <a href="#" id="RPU Identification Numbers" class="page1">RPU Identification Numbers</a> |
          <a href="#" id="Declaration of Property" class="page2">Declaration of Property</a> |
          <a href="#" id="GIS Technical Description" class="page3">GIS Technical Description</a> | 
          <a href="#" id="Land" class="page4">Land</a> | 
          <a href="#" id="Plants and Trees" class="page5">Plants and Trees</a> | 
    <a href="#" id="Valuation" class="page6">Valuation</a></td>
  </tr>
  <tr>
    <td align="center"><!-- BEGIN TDTable -->
      <!-- END TDTable --></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td align="center" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="50"><h1><div id="page_name"></div></h1></td>
  </tr>
  <tr>
    <td align="center"><!-- BEGIN OwnerListTable -->
      <table width="90%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        </tr>
      </table>
      <!-- END OwnerListTable --></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
    <td align="center" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <!-- BEGIN DeclarationOfProperty -->
  <tr>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center">
    
     <!-- START RPUIdentification -->
    <table width="90%" border="1" id="page1" class="type-one">
      <tr>
        <td align="left"colspan="2"><?php echo anchor('','Edit');?></td>
      </tr>
      <tr>
        <th colspan="2" align="left">Identification Numbers </th>
      </tr>
      <tr>
        <td width="15%" align="right"> ARP Number </td>
        <td ><b></b>&nbsp; </td>
      </tr>
      <tr>
        <td width="170" align="right"> Property Index Number </td>
        <td ><b>12345</b>&nbsp; </td>
      </tr>
      <tr>
        <td width="170" align="right"> Taxability </td>
        <td ><b>Taxable</b>&nbsp; </td>
      </tr>
      <tr>
        <td width="170" align="right"> Effectivity </td>
        <td ><b>2013</b>&nbsp; </td>
      </tr>
    </table>
    <!-- END RPUIdentification -->
    
     <!-- Start Declaration of Property -->
      <table width="90%" border="1"  id="page2" hidden class="type-one">
      <tr>
        <td align="left" colspan="3"><?php echo anchor('','Edit');?></td>
      </tr>
      <tr>
        <th colspan="3" align="left">Identification Numbers </th>
      </tr>
      <tr>
        <td align="right" width="15%">&nbsp;</td>
        <td colspan="2" ><b>12345 </b><br />(Tax Declaration Number) <br /></td>
      </tr>
      <tr align="left">
        <th colspan="3">Approval</th>
      </tr>
      <tr>
        <td align="right">Provincial Assessor</td>
        <td></td>
        <td> Date
          <table border="0" width="100%" class="type-one">
            <tr>
              <td width="33%"><b>January</b><br> (month)</td>
              <td width="33%"><b>1</b><br> (day)</td>
              <td width="33%"><b>2012</b><br> (year) </td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td align="right">City/Municipal  Assessor</td>
        <td><b></b></td>
        <td> Date
          <table border="0" width="100%" class="type-one">
            <tr>
              <td width="33%"><b>January</b><br> (month)</td>
              <td width="33%"><b>1</b><br> (day)</td>
              <td width="33%"><b>2012</b><br> (year) </td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <th align="left" colspan="3">&nbsp;</th>
      </tr>
      <tr>
        <td align="right" rowspan="4">&nbsp;</td>
        <td><b> </b><br />
          (Cancels TD Number)</td>
        <td><b> </b><br />
          (Canceled By TD Number) </td>
      </tr>
      <tr>
        <td ><b>2022 </b><br />
          (Tax Begins With The Year) </td>
        <td ><!-- 
				   <b> </b><br>
				   (Ceases With The Year) --></td>
      </tr>
      <tr>
        <td ><b> </b><br />
          (enteredInRPARForBy) </td>
        <td ><b></b><br />
          (enteredInRPARForYear) </td>
      </tr>
      <tr >
        <td><b> </b><br />
          (Previous Owner) </td>
        <td ><b> </b><br />
          (Previous Assessed Value) </td>
      </tr>
      <tr align="left">
        <th colspan="3">Memoranda</th>
      </tr>
      <tr >
        <td>&nbsp;</td>
        <td colspan="2"><b></b><br /></td>
      </tr>
    </table>

    
    </td>
  </tr>
  <!-- END DeclarationOfProperty -->
  <tr>
    <td align="center"></td>
  </tr>
  <!-- BEGIN GISTechnicalDescriptionHide -->
  <tr>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"><table width="90%" border="1" id="page3" class="type-one" hidden>
      <!-- BEGIN GISTechnicalDescriptionEncodeLink -->
      <tr>
        <td align="left"colspan="6"><?php echo anchor('','Edit');?></td>
      </tr>
      <!-- END GISTechnicalDescriptionEncodeLink -->
      <!-- BEGIN GISTechnicalDescription -->
      <tr>
        <th colspan="6" align="left">GIS Technical Description</th>
      </tr>
      <tr>
        <td align="left" colspan="6"> Cadastral Lot Number : <b>524</b></td>
      </tr>
      <tr>
        <td align="center"><b>pointID</b>&nbsp; </td>
        <td align="center"><b>point type</b>&nbsp; </td>
        <td align="center"><b>quadrant</b>&nbsp; </td>
        <td ><b>bearing</b> (degrees)&nbsp; </td>
        <td ><b>bearing</b> (minutes)&nbsp; </td>
        <td ><b>distance</b> (m)&nbsp; </td>
      </tr>
      <!-- END GISTechnicalDescription -->
    </table></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <!-- END GISTechnicalDescriptionHide -->
  <!-- BEGIN Land -->
  <tr>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"><!-- BEGIN LandTable -->
      <form method="post" name="landForm">
        <table width="90%" border="1" id="page4" class="type-one" hidden>
          <tr align="left">
            <td colspan="4"bgcolor="#F6F6F6" ><!-- BEGIN AddLandLink -->
              <!-- END AddLandLink --><?php echo anchor('','Add Land');?></td>
            <td align="center"><input type="button" name="Button2" value="Print" onclick="location.href='PrintLandFAAS.php?rpts_Session=128a019c98004619f6e6bc35909cc6a6&amp;afsID=2&amp;odID=2&amp;ownerID=2&amp;afsID=2&amp;print=true';" /></td>
          </tr>
          <tr align="center">
            <td width="15%" ><b>Show/Hide<br />
              </b>
              <input type="checkbox" name="landShowHide" value="1" onclick="toggleShowHide('land');" /></td>
            <td width="25%" ><b>Market Value</b></td>
            <td width="30%" ><b>Assessed Value</b></td>
            <td width="15%" >&nbsp;</td>
            <td width="15%" ><input type="hidden" name="formAction" value="remove" />
              <input type="button" name="Submit" value="Remove" onclick="document.landForm.submit();" /></td>
          </tr>
          <tr align="left">
            <td align="center" ><a name="#land4" id="#land4"></a>
              <input type="checkbox" name="landChk0" value="1" onclick="toggle('land','4')" /></td>
            <td align="center" > 6,000.00 </td>
            <td align="center" > 0.00 </td>
            <td  align="center" ><!-- BEGIN EditLandLink -->
              <a href="javascript: openWin('LandEncode.php?rpts_Session=128a019c98004619f6e6bc35909cc6a6&amp;afsID=2&amp;propertyID=4&amp;formAction=edit','popupWindow',50,50,600,500);">Edit</a>
              <!-- END EditLandLink --></td>
            <td  align="center" ><input type="checkbox" name="landID[]" value="4" /></td>
          </tr>
          <tr id="landRow4" align="left">
            <td colspan="5" align="center">
            <table width="100%" border="1" align="center" class="type-one">
              <tr>
                <td colspan="3" align="left"><b>Land Details </b></td>
              </tr>
              <tr>
                <th colspan="3" align="left">Identification Numbers </th>
              </tr>
              <!--

				 <tr> 

				  <td rowspan="2" align="right" nowrap width="100">&nbsp;</td>

				  <td> <b> 

				   </b><br>

				   (ARP Number) </td>

				  <td> <b> 

				   </b><br>

				   (PIN) </td>

				 </tr>

				 -->
              <tr>
                <td align="right" width="15%">&nbsp;</td>
                <td ><b> </b><br />
                  (OCT/TCT Number) </td>
                <td ><b></b> <br />
                  (Survey Number) </td>
              </tr>
              <tr>
                <th align="left" colspan="3">Boundaries </th>
              </tr>
              <tr>
                <td align="right" rowspan="2">&nbsp;</td>
                <td><b> </b><br />
                  (north) </td>
                <td><b> </b><br />
                  (south) </td>
              </tr>
              <tr>
                <td><b> </b><br />
                  (east) </td>
                <td><b> </b><br />
                  (west) </td>
              </tr>
              <tr>
                <td align="right">Boundary Description</td>
                <td colspan="2" align="left"><b> </b></td>
              </tr>
              <tr>
                <th colspan="3" align="left">Adminisrator</th>
              </tr>
              <tr>
                <td align="right" rowspan="3"> Name</td>
                <td colspan="2"><b> </b><br />
                  (lastname) </td>
              </tr>
              <tr>
                <td colspan="2"><b> </b><br />
                  (firstname) </td>
              </tr>
              <tr>
                <td colspan="2"><b> </b><br />
                  middlename </td>
              </tr>
              <tr>
                <td align="right" rowspan="3"> Address</td>
                <td><b> </b><br />
                  (number) </td>
                <td><b> </b><br />
                  (street) </td>
              </tr>
              <tr>
                <td ><b></b> <br />
                  (barangay) </td>
                <td ><b> </b><br />
                  (district) </td>
              </tr>
              <tr>
                <td ><b> </b><br />
                  (municipality/city) </td>
                <td ><b> </b><br />
                  (province) </td>
              </tr>
              <tr>
                <td align="right">ContactNumber</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">Email</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <th align="left" colspan="3">Land 
                  
                  Appraisal</th>
              </tr>
              <tr>
                <!-- Kind is now known as "Description" -->
                <td align="right">Description</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">Classification</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">Sub-Class</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">Area</td>
                <td colspan="2"><b> 100 </b>square meters</td>
              </tr>
              <tr>
                <td align="right">Actual 
                  
                  Use</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">Unit 
                  
                  Value</td>
                <td colspan="2"><b> 60 </b></td>
              </tr>
              <tr>
                <td align="right">Market 
                  
                  Value </td>
                <td colspan="2"><b> 6,000.00 </b></td>
              </tr>
              <tr align="left">
                <th colspan="3">Value Adjustments Factor </th>
              </tr>
              <tr>
                <td align="right">Adjustment 
                  
                  Factor </td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">% 
                  
                  Adjustment</td>
                <td colspan="2"><b> 100 %</b></td>
              </tr>
              <tr>
                <td align="right">Value 
                  
                  Adjustment</td>
                <td colspan="2"><b> 0.00 </b></td>
              </tr>
              <tr align="left">
                <th colspan="3">Property Assessment </th>
              </tr>
              <tr>
                <td align="right" >Adjusted 
                  
                  Market Value</td>
                <td colspan="2" ><b> 6,000.00 </b></td>
              </tr>
              <tr>
                <td align="right" >Assessment 
                  
                  Level </td>
                <td colspan="2" ><b> %</b></td>
              </tr>
              <tr>
                <td align="right" >Assessed 
                  
                  Value </td>
                <td colspan="2" ><b> 0.00 </b></td>
              </tr>
              <!--

				 <tr> 

				  <td align="right" >Effectivity</td>

				  <td colspan="2" ><b> 

				    </b></td>

				 </tr>

				 -->
              <!--

				 <tr> 

				  <td align="right" >Taxability</td>

				  <td colspan="2" ><b> 

				   Taxable </b></td>

				 </tr>

				 -->
              <tr align="left">
                <th colspan="3">Certification </th>
              </tr>
              <tr>
                <td align="right">Verified 
                  
                  By </td>
                <td><b> xx</b></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="right">Plottings 
                  
                  By </td>
                <td><b> </b></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="right">Noted 
                  
                  By</td>
                <td><b> </b></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" >Appraised 
                  
                  By </td>
                <td ><b> </b></td>
                <td > Date
                  <table border="0" width="100%" class="type-one">
                    <tr>
                      <td width="33%"><b></b> (month)</td>
                      <td width="33%"><b></b> (day)</td>
                      <td width="33%"><b></b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td align="right" >Recommending 
                  
                  Approval </td>
                <td ><b></b></td>
                <td > Date
                  <table border="0" width="100%" class="type-one">
                    <tr>
                      <td width="33%"><b></b> (month)</td>
                      <td width="33%"><b></b> (day)</td>
                      <td width="33%"><b></b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td align="right" >Approved 
                  
                  By </td>
                <td ><b> </b></td>
                <td > Date
                  <table border="0" width="100%" class="type-one">
                    <tr>
                      <td width="33%"><b></b> (month)</td>
                      <td width="33%"><b></b> (day)</td>
                      <td width="33%"><b></b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <th align="left" colspan="3">Memoranda</th>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="left" colspan="3">Misc</td>
              </tr>
              <tr>
                <td align="right">Idle</td>
                <td colspan="2"><b>No</b></td>
              </tr>
              <tr>
                <td align="right">Contested</td>
                <td colspan="2"><b>No</b></td>
              </tr>
            </table></td>
          </tr>
          <tr id="landRow5" align="left">
          
          </tr>
        </table>
      </form>
      <!-- END LandTable --></td>
  </tr>
  <!-- END Land -->
  <tr>
    <td align="center"></td>
  </tr>
  <!-- BEGIN PlantsTrees -->
  <tr>
    <td align="center" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="subtitle">&nbsp;</td>
        <td align="right"><a href="#top"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"><!-- BEGIN PlantsTreesTable -->
      <form method="post" name="plantsTreesForm" id="plantsTreesForm">
        <table width="90%" border="1" id="page5" class="type-one" hidden>
          <tr align="left" >
            <td colspan="4"bgcolor="#F6F6F6"><!-- BEGIN AddPlantsTreesLink -->
              <!-- END AddPlantsTreesLink --><?php echo anchor('','Add Plants/Trees');?></td>
            <td align="center"><input type="button" name="Button2" value="Print"/></td>
          </tr>
          <tr align="center" >
            <th width="15%" ><b>Show/Hide<br />
              </b></th>
            <th width="30%" ><b>Market Value</b></th>
            <th width="30%" ><b>Assessed Value</b></th>
            <th width="12%" ><b>&nbsp;</b></th>
            <th width="12%" >&nbsp;</th>
          </tr>
          <tr align="left" >
            <td align="center"><a name="#plantsTrees1" id="#plantsTrees1"></a>
              <input type="checkbox" name="plantsTreesChk0" value="1"/></td>
            <td align="center"> 2,000.00 </td>
            <td align="center"> 0.00 </td>
            <td  align="center"><a href="#">Edit</a></td>
            <td  align="center"><a href="#">Remove</a></td>
          </tr>
          <tr id="plantsTreesRow1" align="left" >
            <td colspan="5"  align="center" ><table width="100%" border="1" align="center" class="type-one">
              <tr>
                <td colspan="3" align="left"><b>PLANTS/TREES PROPERTY INFORMATION</b></td>
              </tr>
              <tr>
                <th colspan="3" align="left">Identification Numbers </th>
              </tr>
              <!--



				 <tr> 

				  <td width="100" rowspan="2" align="right" nowrap >&nbsp;</td>

				  <td><b></b> 

				   <br>

				   (ARP Number) </td>

				  <td><b> 

				   </b><br>

				   (PIN) </td>

				 </tr>



				 -->
              <tr>
                <td width="15%" align="right" >&nbsp;</td>
                <td colspan="2"><b></b> <br />
                  (Survey Number) </td>
              </tr>
              <tr>
                <th align="left" colspan="3">Location  Details </th>
              </tr>
              <tr>
                <td align="right">landPin</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <th colspan="3" align="left">Adminisrator</th>
              </tr>
              <tr>
                <td align="right" rowspan="3"><input type="hidden" name="personID" value="37214" />
                  Name</td>
                <td colspan="2"><b> </b><br />
                  (lastname) </td>
              </tr>
              <tr>
                <td colspan="2"><b> </b><br />
                  (firstname) </td>
              </tr>
              <tr>
                <td colspan="2"><b> </b><br />
                  middlename </td>
              </tr>
              <tr>
                <td align="right" rowspan="3"><input type="hidden" name="addressID" value="13" />
                  Address</td>
                <td><b> </b><br />
                  (number) </td>
                <td><b> </b><br />
                  (street) </td>
              </tr>
              <tr>
                <td ><b> </b><br />
                  (barangay) </td>
                <td ><b></b> <br />
                  (district) </td>
              </tr>
              <tr>
                <td ><b> </b><br />
                  (municipality/city) </td>
                <td ><b> </b><br />
                  (province) </td>
              </tr>
              <tr>
                <td align="right">ContactNumber</td>
                <td colspan="2"><b></b></td>
              </tr>
              <tr>
                <td align="right">Email</td>
                <td colspan="2"><b></b></td>
              </tr>
              <tr>
                <th align="left" colspan="3">Plants and Trees Appraisal</th>
              </tr>
              <tr>
                <td align="right">productClass</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">areaPlanted</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">totalNumber</td>
                <td colspan="2"><b>50 </b></td>
              </tr>
              <tr>
                <td align="right">nonFruitBearing</td>
                <td colspan="2"><b>0 </b></td>
              </tr>
              <tr>
                <td align="right">fruitBearing</td>
                <td colspan="2"><b>50 </b></td>
              </tr>
              <tr>
                <td align="right">age</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">unitPrice</td>
                <td colspan="2"><b>40 </b></td>
              </tr>
              <tr align="left">
                <th colspan="3">Value Computation</th>
              </tr>
              <tr>
                <td align="right">adjustmentFactor</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">% Adjustment</td>
                <td colspan="2"><b></b> %</td>
              </tr>
              <tr>
                <td align="right">valueAdjustment</td>
                <td colspan="2"><b>0.00 </b></td>
              </tr>
              <tr align="left">
                <th colspan="3">Property Assessment </th>
              </tr>
              <tr>
                <td align="right">Kind</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">Actual 
                  
                  Use</td>
                <td colspan="2"><b> </b></td>
              </tr>
              <tr>
                <td align="right">Market 
                  
                  Value </td>
                <td colspan="2"><b>2,000.00 </b></td>
              </tr>
              <tr>
                <td align="right">Adjusted 
                  
                  Market Value</td>
                <td colspan="2"><b>0.00 </b></td>
              </tr>
              <tr>
                <td align="right">Assessment 
                  
                  Level </td>
                <td colspan="2"><b> </b> %</td>
              </tr>
              <tr>
                <td align="right">Assessed 
                  
                  Value </td>
                <td colspan="2"><b>0.00 </b></td>
              </tr>
              <!--

				 <tr> 

				  <td align="right">Effectivity</td>

				  <td colspan="2"><b> 

				   </b></td>

				 </tr>

				 -->
              <!--

				 <tr> 

				  <td align="right">Taxability</td>

				  <td colspan="2"><b> 

				   </b> </td>

				 </tr>

				 -->
              <tr align="left">
                <th colspan="3">Certification </th>
              </tr>
              <tr>
                <td align="right">Verified 
                  
                  By </td>
                <td><b> xx</b></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="right">Plottings 
                  
                  By </td>
                <td><b> </b></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="right">Noted 
                  
                  By</td>
                <td><b> </b></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" >Appraised 
                  
                  By </td>
                <td><b> </b></td>
                <td > Date
                  <table border="0" width="100%" class="type-one">
                    <tr>
                      <td width="33%"><b></b> (month)</td>
                      <td width="33%"><b></b> (day)</td>
                      <td width="33%"><b></b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td align="right" >Recommending 
                  
                  Approval </td>
                <td><b></b></td>
                <td > Date
                  <table border="0" width="100%" class="type-one">
                    <tr>
                      <td width="33%"><b></b> (month)</td>
                      <td width="33%"><b></b> (day)</td>
                      <td width="33%"><b></b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td align="right" >Approved 
                  
                  By </td>
                <td><b> </b></td>
                <td > Date
                  <table border="0" width="100%" class="type-one">
                    <tr>
                      <td width="33%"><b></b> (month)</td>
                      <td width="33%"><b></b> (day)</td>
                      <td width="33%"><b></b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <th align="left" colspan="3">Memoranda</th>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td colspan="2"><b> </b></td>
              </tr>
            </table></td>
          </tr>
        </table>
      </form>
      <!-- END PlantsTreesTable --></td>
  </tr>
  <!-- END PlantsTrees -->
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"><table width="100%" border="1" id="page6" class="type-one" hidden>
      <!--tr> 

                            <td align="left" colspan="4">- 

                              <a href="javascript: openWin('AFSEncode.php?rpts_Session=128a019c98004619f6e6bc35909cc6a6&afsID=2&formAction=edit','popupWindow',0,0,550,610);">enter 

                              values</a></td>

                          </tr-->
      <tr align="center">
        <th width="25%" >Total Value</th>
        <th width="25%" >Market Value</th>
        <th width="25%" >Assessed Value</th>
      </tr>
      <!-- BEGIN LandTotals -->
      <tr>
        <td align="center" > Land</td>
        <td align="right" >6,000.00</td>
        <td align="right" >0.00</td>
      </tr>
      <!-- END LandTotals -->
      <!-- BEGIN PlantsTreesTotals -->
      <tr>
        <td align="center" >Plants/Trees</td>
        <td align="right" >0.00</td>
        <td align="right" >0.00</td>
      </tr>
      <!-- END PlantsTreesTotals -->
      <tr>
        <td align="center" >Total</td>
        <td align="right" ><b>6,000.00</b></td>
        <td align="right" ><b>0.00</b></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><a name="#down" id="#down"></a></td>
  </tr>
  <tr>
    <td align="center" >Tampering with 
      
      this system is criminally punishable under Philippine Laws.<br />
      &copy; 
      
      Republic of the Philippines National Computer Center. All Rights Reserved. </td>
  </tr>
</table>

<script type="text/javascript">
$("#page_name").html('RPU Identification Numbers');
//--------------------------------------------------------------------------------------------------------------
$("a").click(function() {
	$("#page_name").html($(this).attr('id'));
});
//--------------------------------------------------------------------------------------------------------------
$(".page1").click(function() {
	$('#page1').show('slow');
	
	$('#page2').hide();
	$('#page3').hide();
	$('#page4').hide();
	$('#page5').hide();
});
//--------------------------------------------------------------------------------------------------------------
$(".page2").click(function() {
	$('#page2').show('slow');
	
	$('#page1').hide(); 
	$('#page3').hide();
	$('#page4').hide();
	$('#page5').hide();
	$('#page6').hide();
});
//--------------------------------------------------------------------------------------------------------------
$(".page3").click(function() {
	$('#page3').show('slow');
	
	$('#page1').hide();
	$('#page2').hide(); 
	$('#page4').hide();
	$('#page5').hide();
	$('#page6').hide();
});
//--------------------------------------------------------------------------------------------------------------
$(".page4").click(function() {
	$('#page4').show('slow');
	
	$('#page1').hide();
	$('#page2').hide();
	$('#page3').hide(); 
	$('#page5').hide();
	$('#page6').hide();
});
//--------------------------------------------------------------------------------------------------------------
$(".page5").click(function() {
	$('#page5').show('slow');
	
	$('#page1').hide();
	$('#page2').hide();
	$('#page3').hide();
	$('#page4').hide(); 
	$('#page6').hide();

});
//--------------------------------------------------------------------------------------------------------------
$(".page6").click(function() {
	$('#page6').show('slow');
	
	$('#page1').hide();
	$('#page2').hide();
	$('#page3').hide();
	$('#page4').hide();
	$('#page5').hide();
});
//--------------------------------------------------------------------------------------------------------------
</script>