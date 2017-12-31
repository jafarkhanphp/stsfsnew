<?php $checkPermission=Yii::app()->session['permissions']; ?>
 <tbody>
  <tr>
 
   <td><?php echo date('d-m-Y', strtotime($data->activation_date)); ?></td>
   <td><?php echo CHtml::encode($data->Rid); ?></td>
   <td><?php echo CHtml::encode($data->FirstName); ?></td>
   <td><?php if($data->id_status==0){echo 'Red';}else{echo 'Green';} ?></td>
   <td></td>
  </tr>
 </tbody>
