<?php $checkPermission=Yii::app()->session['permissions']; ?>

<tbody>
  <tr>
    <td ><?php echo CHtml::encode($data->usercode); ?></td>
    <td ><?php echo CHtml::encode($data->username); ?></td>
    <td ><?php echo CHtml::encode($data->password); ?></td>
    <td ><?php echo CHtml::encode($data->branch_id); ?></td>
    
    <td style="width:10%">&nbsp;</td>
  </tr>
</tbody>
