<?php $checkPermission=Yii::app()->session['permissions']; ?>
<tbody>
  <tr class="odd gradeX">
    <td><?php echo CHtml::encode($data->no_pin); ?></td>
     <td><?php echo CHtml::encode($data->pin_pkg_amt); ?></td>
    <td><?php echo $data->flag==0?'Create':'Transfer'; ?></td>
    <td><?php if($data->flag==1){echo $data->transfer_to;} ?></td>
        
      
        <td><?php echo date('d F Y', strtotime($data->created_date)); ?></td>
    <td width="130px;">
    
        <?php 
			if($checkPermission[0]['deletes']==0){
			//echo '<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove" onclick="deleteRecord('.$data->id.');"> <i class="fa fa-times fa fa-white"></i></a>'; 
			}
		?>
        
    </td>
  </tr>
</tbody>


