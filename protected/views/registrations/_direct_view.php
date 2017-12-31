<?php $checkPermission=Yii::app()->session['permissions']; ?>
 <tbody>
  <tr>
  <td><?php echo CHtml::encode($data->Rid); ?></td>
  <td><?php echo CHtml::encode($data->BinaryPosition); ?></td>
   <td><?php echo CHtml::encode($data->FirstName); ?></td>
   <td><?php echo date('d-m-Y', strtotime($data->RegistrationDate)); ?></td>
   <td><?php echo CHtml::encode(Packages::model()->getPackageName($data->package_id)); ?></td>
   <td><?php echo CHtml::encode($data->SponserID); ?></td>
   <td><?php echo $data->ImmediateSponserId; ?></td>
     <td> <div class="visible-md visible-lg hidden-sm hidden-xs">	
	 <?php 	  
	 if($checkPermission[0]['view']==0){	  	
	 echo CHtml::link('<i class="fa fa-share"></i>',array('registrations/view/id/'.base64_encode($data->Rid)),		
	 array('data-placement'=>"top",  'data-original-title'=>"View",  'class'=>"btn btn-xs btn-teal tooltips"));	  
	 }	 
		echo '  ';	  
	if($checkPermission[0]['view']==0){	  
		echo CHtml::link('<i class="fa fa-edit"></i>',array('registrations/edit/id/'.base64_encode($data->Rid)),		
		array('data-placement'=>"top",  'data-original-title'=>"Edit", 'class'=>"btn btn-xs btn-teal tooltips"));	 
	}	  ?>	 </div>
	</td>
  </tr>
 </tbody>
