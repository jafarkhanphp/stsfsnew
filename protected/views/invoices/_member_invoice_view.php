<?php $checkPermission=Yii::app()->session['permissions']; ?>

<tbody>
  <tr>
    <td align="center"><?php echo CHtml::encode($data->id); ?></td>
    <td ><?php echo CHtml::encode(date('d F Y',strtotime($data->cycle_date_from))); ?></td>
    <td ><?php  echo CHtml::encode(date('d F Y',strtotime($data->cycle_date_to))); ?></td>
    <td ><?php echo CHtml::encode($data->total_bv); ?></td>
    <td ><?php echo CHtml::encode($data->net_payable_amount); ?></td>
    <td><?php echo  CHtml::encode(round($data->gross_amount)); ?></td>
    <td><?php if($data->payment_status!=0){
				echo '<span class="label label-sm label-success">Paid</span>';
			} else {
				echo ' <span class="label label-sm label-danger">Unpaid</span>';
			}
	?></td>
    <td style="width:10%"><div class="">
        <?php 	echo CHtml::link('<i class="fa fa-print "></i>',array('invoices/invoice_print/id/'.base64_encode($data->id)), array('data-original-title'=>"Print", 'data-placement'=>"top", 'title'=>'Invoice Print', 'class'=>"btn btn-xs btn-teal tooltips", 'target'=>"_blank"));  ?>
      </div></td>
  </tr>
</tbody>
