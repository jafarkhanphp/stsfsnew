<?php $checkPermission=Yii::app()->session['permissions']; ?>
<tbody>
  <tr class="odd gradeX">
    <td><?php echo CHtml::encode($data->PinNo); ?></td>
    <td><?php echo $data->transfer_status==0?'Not':'Yes'; ?></td>
       <td><?php echo CHtml::encode(User::model()->getIdByUserName($data->user_id)); ?></td>
        <td><?php echo CHtml::encode($data->issued_rid); ?></td>
        <td><?php echo $data->issued_date=='0000-00-00'?'':date('d F Y', strtotime($data->issued_date)); ?></td>
        <td><?php echo date('d F Y', strtotime($data->created)); ?></td>
    <td width="130px;">
    
        <?php 
			if($checkPermission[0]['deletes']==0){
			echo '<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove" onclick="deleteRecord('.$data->id.');"> <i class="fa fa-times fa fa-white"></i></a>'; 
			}
		?>
        
    </td>
  </tr>
</tbody>


