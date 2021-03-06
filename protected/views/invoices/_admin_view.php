<?php $checkPermission=Yii::app()->session['permissions']; ?>
 <tbody>
  <tr>
   <td align="center"><?php echo CHtml::encode($data->id); ?></td>
   <td><?php echo CHtml::encode($data->rid); ?></td>
   <td><?php echo CHtml::encode($data->name); ?></td>
   <td ><?php echo CHtml::encode(date('d F Y',strtotime($data->cycle_date_from))); ?></td>
     <td ><?php  echo CHtml::encode(date('d F Y',strtotime($data->cycle_date_to))); ?></td>
    <td ><?php echo CHtml::encode($data->total_bv_amount); ?></td> 
   <td ><?php echo CHtml::encode($data->steppool_amount); ?></td>
   <td><?php echo  CHtml::encode(round($data->gross_amount)); ?></td>
    <td><div id="paidstatus<?php echo $data->id;?>">
    <?php if($data->payment_status!=0){
				echo '<span class="label label-sm label-success">Paid</span>';
			} else {
				echo ' <span class="label label-sm label-danger">Unpaid</span>';
			}
	?>
	</div>
    </td>
   <td style="width:10%"><div class="visible-md visible-lg hidden-sm hidden-xs">
   		<div style="float:left; display:<?php echo $data->payment_status==0?'':'none'; ?> " id="paidId<?php echo $data->id; ?>" >
      <?php 
	  // echo CHtml::link('<i class="fa clip-paypal "></i>',array('invoices/update_payout/id/'.base64_encode($data->id)), array('data-original-title'=>"Pay Now", 'title'=>'Payment Now', 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips" ));  ?>
      </div>&nbsp;
       
	   <?php 	if($checkPermission[0]['prints']==0){
					echo CHtml::link('<i class="fa fa-print "></i>',array('invoices/invoice_print/id/'.base64_encode($data->id)), array('data-original-title'=>"Print", 'data-placement'=>"top", 'title'=>'Invoice Print', 'class'=>"btn btn-xs btn-teal tooltips", 'target'=>"_blank"));					
					} ?>
       
       <?php //echo CHtml::link('<i class="fa clip-mobile-3"></i>',array('invoices/send_sms_one_by_one/id/'.base64_encode($data->id)), array('data-original-title'=>"Print", 'data-placement'=>"top", 'title'=>'Send SMS', 'class'=>"btn btn-xs btn-teal tooltips"));  ?>
  
		</div>
   </td>
  </tr>
 </tbody>
