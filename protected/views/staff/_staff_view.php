<?php $checkPermission=Yii::app()->session['permissions']; ?>
<tbody>
  <tr>
    <td ><?php  echo CHtml::encode($data->name); ?></td>
    <td ><?php echo CHtml::encode($data->email); ?></td>
    <td ><?php echo CHtml::encode($data->mobile); ?></td>
    <td ><?php echo CHtml::encode($data->basic_sallery); ?></td>
     <td><?php echo CHtml::encode(User::model()->getUserIDandPassByUserCode($data->id)); ?></td>
    <td ><?php echo CHtml::encode(date('d F Y',strtotime($data->created))); ?></td>
     <td id="statID<?php echo $data->id;?>">
	 <?php if($checkPermission[0]['edits']==0){?>
    	<?php $St=User::model()->getUserStatusByID($data->id)=='1' ? 'Active' :'Inactive';
			$stt=User::model()->getUserStatusByID($data->id) =='1' ? 'glyphicon glyphicon-ok-sign' : ' glyphicon glyphicon-remove-circle';
			$stt1=User::model()->getUserStatusByID($data->id) =='1' ? 'btn-green' : ' btn-red';
			echo '<a href="#" title="'.$St.'"  class="btn btn-xs '.$stt1.'  tooltips" data-placement="top" oldtitle="'.$St.' " id="statusId'.$data->id.'" onclick="status('.$data->id.');"><i class="'.$stt.'"></i></a>';
		
	} ?>
    </td>
    <td>
	 <?php 
	 	echo CHtml::link('<i class="fa clip-settings"></i>',array('permission/permission/id/'.base64_encode($data->id)),
			 array('data-original-title'=>"Set User Permission", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips")); 
		?>
     </td>
  </tr>
</tbody>
