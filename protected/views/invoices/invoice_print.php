<title>Invoice Print :- <?php echo CHtml::encode($this->pageTitle); ?></title>

<link href="http://webrupee.com/font" rel="stylesheet" type="text/css">
<script type="text/javascript">
  function openWin(){
   window.print();
  }
</script>
<style>
th{
	text-align:left;
}	
</style>
<div style="border:#999 2px solid; width:900px; text-align:left">
<?php $form=$this->beginWidget('CActiveForm', array('id'=>'Invoice-form', 'enableAjaxValidation'=>false, 'htmlOptions'=>array('enctype'=>'multipart/form-data'),)); ?>
<table border="0" width="900" cellpadding="0" cellspacing="0">
	<tr>
    	<td align="center"><div style="float:left; width:200px"><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/logo.png",'', array('width'=>130, 'height'=>'' , 'alt'=>"")); ?></div><div style="width:auto;text-align:left"><span style="font-size:28px">STEP TWO SUCCESS FINANCIAL SERVICES PVT. LTD</span><br>
    <span style="font-size:15px; margin-left:0px;"><b>Corporate Office:</b> <?php echo Settings::model()->getSiteSettingByName('address'); ?>  Mob: <?php echo Settings::model()->getSiteSettingByName('mobile1'); ?> , Phone: <?php echo Settings::model()->getSiteSettingByName('phone'); ?> </span><br>
    <span style="font-size:15px; margin-left:90px;"><b>e-mail:</b> <?php echo Settings::model()->getSiteSettingByName('email'); ?><b>website:</b> www.stsfs.com</span>
    </div></td>
     </tr>
     <tr>
    	<td><br />
        	<table border="1" bordercolor="#0000FF" cellpadding="6" cellspacing="0" style="background:#CCC; width:900px; padding:5px;">
            	<tr>
                	<td colspan="4"> <?php
								$flashMessages = Yii::app()->user->getFlashes();
								  if ($flashMessages) {
									foreach($flashMessages as $key => $message) {
										echo '<div style="color:red">'. $message . "</div>\n";
									}}
								?>
                     </td>
                </tr>
                <tr>
                
                	<th>Payment Period Date<br /></th>
                    <td><?php echo date('d F Y', strtotime($invoiceDetail['cycle_date_from']));  ?> To 
						<?php echo date('d F Y', strtotime($invoiceDetail['cycle_date_to'])); ?><br /> </td>
                    <th valign="top">Invoice No: </th>
                    <td><?php echo $invoiceDetail['id']; ?></td>
                </tr>
                <tr>
                	<th>Business Name</th>
                    <td><?php echo $invoiceDetail['name']; ?> (<?php echo Registrations::model()->getBvByRid($invoiceDetail['rid']);?> BV)</td>
                    <th>Sponsor Id </th>
                    <td><?php echo Registrations::model()->getSponsorID($invoiceDetail['rid']) ?></td>
                </tr>
                <tr>
                	<th>Address</th>
                    <td><?php echo $invoiceDetail['address']; ?></td>
                    <th> BA Code</th>
                    <td><?php echo $invoiceDetail['rid']; ?> </td>
                </tr>
                <tr>
                	<th>Auto Sharing Level</th>
                    <td><?php echo $invoiceDetail['steppool_level']; ?> - <?php echo $invoiceDetail['steppool_amount']; ?></td>
                    <th>Mobile No.</th>
                    <td><?php echo $invoiceDetail['mobile']; ?></td>
                </tr>
                <tr>
                	<th>Total BV (Left)</th>
                    <td><?php echo $invoiceDetail['total_left_bv']; ?></td>
                    <th>Total BV  (Right)</th>
                    <td><?php echo $invoiceDetail['total_right_bv']; ?></td>
                </tr>
                
                <tr>
                	<th>Current BV (Left)</th>
                    <td><?php echo $invoiceDetail['current_left_bv']; 
							if(($invoiceDetail['total_pair_bv']-$invoiceDetail['current_left_bv'])>0){
								  echo " +Carrey forward ";
								   $carreyL=$invoiceDetail['total_pair_bv']-$invoiceDetail['current_left_bv'];
						   			echo $carreyL;
						  } else {
						  		$carreyL=0;
						  }
					
					?></td>
                    <th>Current BV  (Right)</th>
                    <td><?php echo $invoiceDetail['current_right_bv'];
							if(($invoiceDetail['total_pair_bv']-$invoiceDetail['current_right_bv'])>0){
						  		echo " + Carrey forward ";
						  		$carreyR=$invoiceDetail['total_pair_bv']-$invoiceDetail['current_right_bv'];
						  		echo $carreyR;
						  } else {
						 	 $carreyR=0;
						  }
					 ?></td>
                </tr>
                
                <tr>
                	<th>Balance BV (Left)</th>
                    <td><?php echo $invoiceDetail['balance_left_bv']; ?></td>
                    <th>Balance BV  (Right)</th>
                    <td><?php echo $invoiceDetail['balance_right_bv']; ?></td>
                </tr>
                  
                <tr>
                	<th>Matching Business Volume </th>
                    <td><?php echo $invoiceDetail['total_bv']; ?>BV
					</td>
                    <td><?php //echo $invoiceDetail['referal_bv']!=0?'First MBV':'';?></td>
                    <td><?php //echo $invoiceDetail['referal_bv']!=0?$invoiceDetail['referal_bv']:'' ?></td>
                </tr>
             </table>
                    
        </td>
     </tr>
     <tr>
     
    	<td><h3 style="margin-left:10px; padding-top:1px;">Payout Payment Receipt</h3></td>
     </tr>
     <tr>
    	<td><table border="1" bordercolor="#0000FF" cellpadding="6" cellspacing="0" style="background:#CCC; width:900px; padding:5px;">
            	<tr>
               	  
                    <th>MBV </th>
                   
                    <th>Auto Sharing Amt.</th>
                    <th>Re- Purchase  Amt. </th>
					<th>Royalty Bonus  </th>
                    <th>Net Amount</th>
                </tr>
                <tr>
                	
                    <td><?php echo $invoiceDetail['total_bv_amount']; ?></td>
                    
                    <td><?php echo $invoiceDetail['steppool_amount']; ?></td>
                    <td> </td>
					<td> </td>
                    <td><?php echo $invoiceDetail['net_payable_amount'];?></td>
                </tr>
             </table></td>
     </tr>
     
     <tr>
    	<td></td>
     </tr>
     <tr>
    	<td>
        <h3 style=" color:#F00">   <?php echo $invoiceDetail['remarks']!='Null'?$invoiceDetail['remarks']:'';?></h3>
        
                    <?php  //echo $this->Html->image('/img/signature.jpg',array('alt'=>'Signature','width'=>'300','height'=>'150','style'=>'margin-left:60px; margin-top:30px;')); ?>
              
        	<table border="1" bordercolor="#0000FF" align="right" cellpadding="6" cellspacing="0" style="background:#CCC; width:355px; padding:5px;">
            <thead></thead>
            
                <tr>
                	<th>Handling Charges <?php echo Settings::model()->getSiteSettingByName('handling');?>%</th>
                    <td><?php echo $invoiceDetail['servicecharge_amt']; ?></td>
                </tr>
                <tr>
                	<th>Advance</th>
                    <td><?php ?></td>
                </tr>
                
                 
                <tr>
                	<th>Net Payable Amount</th>
                    <th><span class="WebRupee">Rs </span><?php echo number_format($invoiceDetail['gross_amount']); ?></th>
                </tr>
                <tr>
                	<th>Status</th>
                    <th><?php if($invoiceDetail['payment_status']==1){ echo "Paid" ; } else { echo "Unpaid"; } echo ' / '.$invoiceDetail['payment_date']; ?></th>
                </tr>
            </table>
        </td>
     </tr>
    
     <tr>
    	<td align="center"><br /><br /><br />
    	.........................................................................................................................................................................................................................</td>
     </tr>
     <tr>
    	<td><h2 style="margin-left:10px;">Payment Receipt</h2><br />
        	<div style="margin-left:10px;">I acknowledge that I have payout income of <?php echo number_format($invoiceDetail['gross_amount']); ?>/-<span class="WebRupee">Rs</span> for this cycle (<?php echo date('d F Y', strtotime($invoiceDetail['cycle_date_from'])); ?> to <?php echo date('d F Y',strtotime($invoiceDetail['cycle_date_to'])); ?>) Invoice No. <?php echo 'Invoice-'.$invoiceDetail['id']; ?> Rid: <?php echo $invoiceDetail['rid']; ?> Name: <?php echo $invoiceDetail['name']; ?> Mobile No: <?php echo $invoiceDetail['mobile']; ?> Date:  <?php echo date('d-m-Y');?><br /><br /><br /></div>
            <div style="float:right">Signature ...........................</div>
            
        </td>
     </tr>
     <tr>
    	<td colspan="2" align="center">© Copyright <?php echo date('Y');?> STS Financial Services All Rights Reserved</td>
    </tr>
     <tr>
    	<td colspan="2" align="center">
        
		
		&nbsp;&nbsp;
        
        <input type="button" value="Click to Print" onclick="openWin()" />
      
          &nbsp;&nbsp;
	
		</td>
    </tr>
     
 </table>
</div>


     <?php $this->endWidget(); ?>
