 <tbody>
  <tr id="<?php echo $data->id;?>" >
   <?php /*?><td align="center"><?php echo CHtml::encode($data->id); ?></td><?php */?>
   <td align="center"><?php echo CHtml::link(CHtml::encode($data->id), array('#', 'id'=>$data->id)); ?></td>
   <td><?php echo CHtml::encode($data->pin_no); ?></td>
   <td ><?php echo CHtml::encode($data->amount); ?></td>
   <td ><?php echo Yii::app()->dateFormatter->format('dd-MMM-yyyy',$data->created); ?></td>
   <td><?php echo CHtml::encode($data->status=='0' ? 'Active' :'Inactive'); ?></td>
   <td><?php echo CHtml::encode($data->issue_status=='0' ? 'not Issue' :'Issue'); ?></td>
   
   <td><div class="visible-md visible-lg hidden-sm hidden-xs">
       
        <?php echo CHtml::link('<i class="fa fa-share"></i>',array('pintransfer/create'), array('class'=>"btn btn-xs btn-green tooltips", 'data-original-title'=>"Transfer",'data-placement'=>"top")); ?>
        <?php 
	echo '<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove" onclick="deleteRecord('.$data->id.');"> <i class="fa fa-times fa fa-white"></i></a>'; ?>
    
    
		</div>
   </td>
  </tr>
 </tbody>
