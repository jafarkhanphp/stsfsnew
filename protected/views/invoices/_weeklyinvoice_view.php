<?php $checkPermission=Yii::app()->session['permissions']; ?>
 <tbody>
  <tr>
   <td><?php echo CHtml::encode(date('d-m-Y',strtotime($data->created_date))); ?></td>
   <td><?php echo CHtml::encode($data->tds).' %';?></td>
    <td><?php echo CHtml::encode($data->service_charge).' %'; ?></td>
   <td><?php echo CHtml::encode($data->level_income); ?></td>
   <td><?php echo $data->direct_income + $data->team_income; ?></td>
   <td><?php echo CHtml::encode($data->total_income); ?></td>
   <td><?php echo CHtml::encode($data->payable_income); ?></td>
   <td> <?php if($data->payment_status!=0){
				echo '<span class="label label-sm label-success">Paid</span>';
			} else {
				echo ' <span class="label label-sm label-danger">Unpaid</span>';
			}
	?></td>
    <td> <?php if($data->payment_status!=0){echo date('d-m-Y',strtotime($data->payment_date));}?></td>
   
   
  
    
   
   
  </tr>
 </tbody>
