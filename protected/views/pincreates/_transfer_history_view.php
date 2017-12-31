<tbody>  <tr class="odd gradeX">          <td><?php echo CHtml::encode($data->PinNo); ?></td>        <td><?php echo $data->transfer_date=='0000-00-00'?'':date('d F Y', strtotime($data->transfer_date)); ?></td>        <td><?php echo CHtml::encode($data->Rid); ?></td>		<td><?php echo date('d F Y', strtotime($data->created)); ?></td>     </tr></tbody>


