 <tbody>
  <tr>
    <td align="center"><?php echo CHtml::encode($data->Rid); ?></td>
    <td><?php echo CHtml::encode($data->plan_name); ?></td>
    <td ><?php echo CHtml::encode($data->amount); ?>
    <!--<td ><?php  echo CHtml::encode($data->totalmember); ?></td>-->
	<td ><?php  echo $data->paymentstatus==1?'Paid':'Unpaid'; ?></td> 
       <td ><?php  echo CHtml::encode(date('d F Y', strtotime($data->created))); ?></td>
      
    <td>&nbsp;</td>
  </tr>
 </tbody>
