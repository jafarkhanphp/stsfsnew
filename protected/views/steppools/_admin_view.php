 <tbody>
  <tr id="<?php echo $data->id;?>" >
   <td align="center"><?php echo CHtml::encode($data->id); ?></td>
   <td><?php echo CHtml::encode($data->Rid); ?></td>
   <td ><?php echo CHtml::encode($data->final_kevel); ?></td>
   <td ><?php echo CHtml::encode($data->amount); ?></td>
   <td ><?php echo CHtml::encode($data->steppool_bv); ?></td>
   <td ><?php echo Yii::app()->dateFormatter->format('dd-MMM-yyyy',$data->created_date); ?></td>
   <td><?php echo CHtml::encode($data->payment_status=='0' ? 'Unpaid' :'Paid'); ?></td>
   <td>&nbsp;</td>
  </tr>
 </tbody>
