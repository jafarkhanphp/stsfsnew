<?php $checkPermission=Yii::app()->session['permissions']; ?>
 <tbody>
	 <tr>
   
   <td ><?php echo CHtml::encode(date('d F Y',strtotime($data->request_date))); ?></td>
   <td><?php echo CHtml::encode($data->amount); ?></td>
    <td>
    <?php if($data->payment_mod==0){
				echo 'Cash';
			} else if($data->payment_mod==1) {
				echo ' Cheque';
			}else if($data->payment_mod==2) {
				echo ' RTGS/NEFT';
			}
	?>
	
    </td>
    <td ><?php echo CHtml::encode($data->Cheque_UTR); ?></td> 
	<td>
    <?php if($data->status==0){
				echo 'Waiting';
			} else if($data->status==1) {
				echo 'Processing';
			}else if($data->status==2) {
				echo ' Rejected';
			}else if($data->status==3) {
				echo ' Completed';
			}
	?>
	
    </td>
  <td ><?php echo CHtml::encode($data->status_update_date=='0000-00-00'?'':date('d F Y',strtotime($data->status_update_date))); ?></td>
   <td><?php echo  CHtml::encode($data->remarks); ?></td>
  </tr>
 </tbody>