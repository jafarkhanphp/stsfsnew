<div class="container"> 
  <!-- start: PAGE HEADER -->
  <div class="row">
    <div class="col-sm-12">
      <ol class="breadcrumb">
        <li> <i class="clip-home-3"></i> <?php echo CHtml::link('Dashboard',array('user/dashboard'), array('class'=>"")); ?> </li>
        <li >Receipt</li>
      </ol>
      <br />
      <!-- end: PAGE TITLE & BREADCRUMB --> 
    </div>
  </div>
  <!-- end: PAGE HEADER --> 
  <!-- start: PAGE CONTENT -->
  <div class="invoice">
    <div style="border: 3px solid #CCCCCC; width: 700px; padding:5px;">
      <table cellspacing="1" cellpadding="0" class="style1">
        <tbody>
          <tr>
            <td style="font-family: 'trebuchet MS'; font-size: 1.5em; color: #660066; line-height: 2em; height: 2em; text-align: center; border-bottom-style: dashed; border-bottom-width: 1px;"> <?php echo Settings::model()->getSiteSettingByName('site_title');?></td>
          </tr>
          <tr>
            <td style="height: 32px; border-top-style: dashed; border-bottom-style: dashed; border-top-width: 1px; border-bottom-width: 1px; border-top-color: #CCCCCC; border-bottom-color: #CCCCCC; text-align: center; font-weight: Bold;"> INVOICE</td>
          </tr>
          <tr>
            <td><table align="center" width="100%" cellspacing="0" cellpadding="0" class="GV1">
                <tbody>
                  <tr>
                    <td width="450px" valign="top" rowspan="2"><span style="font-family:Verdana;font-size:10pt;font-weight:bold;" id="lblMName">Member Name : VIPIN KUMAR YADAV</span></td>
                    <td width="250px" colspan="2"><span id="lblRDate">Bill No. : <b>91240</b> Dated <b>13/NOV/2014</b></span></td>
                  </tr>
                  <tr>
                    <td>Document No/ Courier Name</td>
                    <td width="60px">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="right"><span id="lblUId">Member ID : 603361</span></td>
                    <td>Dated</td>
                    <td>&nbsp;</td>
                  </tr>
                </tbody>
              </table></td>
          </tr>
          <tr>
            <td><span id="LblDet">
              <table align="center" width="100%" cellspacing="0" cellpadding="0" class="GV1">
                <tbody>
                  <tr>
                    <th>PARTICULARS</th>
                    <th>&nbsp;</th>
                    <th>SUB TOTAL</th>
                  </tr>
                  <tr>
                    <td><table cellspacing="5" cellpadding="0" border="0" class="GV2">
                        <tbody>
                          <tr>
                            <td>Room Nights Domestic</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>(3 Night Domestic Hotel Accommodation for 2 Adult &amp; 2 Child)</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td align="right">(Category : Tour Operator</td>
                            <td align="right">987.79</td>
                          </tr>
                          <tr>
                            <td align="right">Less : Abatement 90@ %</td>
                            <td align="right">-889.01</td>
                          </tr>
                          <tr>
                            <td align="right">Taxable Amount</td>
                            <td align="right" style="border-width: 1px; border-color: #000000; border-style: dashed none none none">98.78</td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td>&nbsp;</td>
                    <td align="right" valign="top">987.79</td>
                  </tr>
                  <tr>
                    <td align="right">Sub Total</td>
                    <td>&nbsp;</td>
                    <td align="right">987.79</td>
                  </tr>
                  <tr>
                    <td align="right">Service Tax (on Assessable Amount 98.78)</td>
                    <td>12%</td>
                    <td align="right">11.85</td>
                  </tr>
                  <tr>
                    <td align="right">Education Cess</td>
                    <td>2%</td>
                    <td align="right">00.24</td>
                  </tr>
                  <tr>
                    <td align="right">Secondary and Higher Education Cess</td>
                    <td>1%</td>
                    <td align="right">00.12</td>
                  </tr>
                  <tr>
                    <td align="right">Round Off</td>
                    <td>&nbsp;</td>
                    <td align="right">00.00</td>
                  </tr>
                  <tr>
                    <td align="right">Total</td>
                    <td>&nbsp;</td>
                    <td align="right" class="InfoLabelK">1000.00</td>
                  </tr>
                  <tr>
                    <td align="left" class="InfoLabelK">Amount In Words - Rupees One Thousand Only</td>
                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td>
                  </tr>
                </tbody>
              </table>
              </span></td>
          </tr>
          <tr>
            <td align="left" style="padding: 5px; color: #000000; font-weight: bold;"> Remark : No Return, No Refund </td>
          </tr>
          <tr>
            <td align="right" style="padding: 5px; color: #000000; font-weight: normal;"><br>
              For Sagatrip Marketing Solution Pvt. Ltd. </td>
          </tr>
          <tr>
            <td align="left" style="padding: 5px; color: #000000; font-weight: normal;"><br>
              <br>
              <span style="text-align:left; font-family: Verdana; font-size: 12px; color: #000000;"> Service Tax Reg. No.  : <strong>AARCS4356HSD001</strong><br>
              <strong>Terms &amp; Conditions :<br>
              </strong>1.	All taxes as applicable.<br>
              2.	Subject to ___________ Jurisdiction.<br>
              <strong>Declaration</strong>: We declare that this invoices shows the actual price<br>
              Of the goods described and that all particulars are true and correct.</span> <br>
              <br></td>
          </tr>
          <tr>
            <td style="padding: 5px; border-top-style: dashed; border-bottom-style: dashed; border-top-width: 1px; border-bottom-width: 1px; border-top-color: #CCCCCC; border-bottom-color: #CCCCCC; text-align: center; "><p><i>* This is a computer generated statement, hence signature is not required.</i></p></td>
          </tr>
          <tr>
            <td style="height: 42px; text-align: center"><a class="btn btn-lg btn-teal hidden-print" onclick="javascript:window.print();">
									Print <i class="fa fa-print"></i>
								</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- end: PAGE CONTENT--> 
</div>
