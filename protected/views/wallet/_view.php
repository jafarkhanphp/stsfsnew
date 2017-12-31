<?php $checkPermission=Yii::app()->session['permissions']; ?>
 <tbody>
  <tr>
   <td align="center"><?php echo CHtml::encode($data->rid); ?></td>
    <td><?php echo CHtml::encode($data->account_head_name); ?></td>
   <td><?php echo CHtml::encode($data->credit); ?></td>
    <td><?php echo CHtml::encode($data->debit); ?></td>
    <td ><?php echo CHtml::encode($data->balance); ?></td> 
	<td ><?php echo CHtml::encode(date('d F Y',strtotime($data->created))); ?></td>
   <td></td>
   
  </tr>
 </tbody>