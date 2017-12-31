 <tbody>
  <tr id="<?php echo $data->id;?>">
    <td align="center"><?php echo CHtml::link(CHtml::encode($data->id), array('#', 'id'=>$data->id)); ?></td>
   <td ><?php echo CHtml::encode($data->pinno); ?></td>
   <td ><?php echo Yii::app()->dateFormatter->format('dd-MMM-yyyy',$data->created); ?></td>
   <td><?php echo CHtml::encode($data->issue_status=='1' ? 'not Issue' :'Issue'); ?></td>
   <td><div class="visible-md visible-lg hidden-sm hidden-xs">
			 <?php echo '<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove" onclick="deleteRecord('.$data->id.');"> <i class="fa fa-times fa fa-white"></i></a>'; ?>
    
												</div></td>
  </tr>
 </tbody>
