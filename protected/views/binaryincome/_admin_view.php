
 <tbody>
  <tr>
    <td align="center"><?php echo CHtml::encode($data->RID); ?></td>
    <td><?php echo CHtml::encode($data->left_bv); ?></td>
    <td ><?php echo CHtml::encode($data->right_bv); ?>
    <td ><?php  echo CHtml::encode($data->total_bv); ?></td>
	<td ><?php  echo CHtml::encode($data->caping); ?></td>
    <td ><?php  echo CHtml::encode($data->total_bv_amt); ?></td>   
    <td ><?php  echo CHtml::encode(date('d F Y', strtotime($data->created))); ?></td>
    <td ><?php  echo $data->payment_status==1?'Paid':'Unpaid'; ?></td>   
    <td>&nbsp;</td>
  </tr>
 </tbody>
