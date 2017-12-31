<?php $checkPermission=Yii::app()->session['permissions']; ?>
 <tbody>
  <tr>
  <?php $sponser=Sponserdetails::model()->getSponserDetailById($data->Rid);?>
   <td><?php echo date('d-m-Y', strtotime($data->created)); ?></td>
   <td><?php echo CHtml::encode($data->Rid); ?></td>
   <td><?php echo $sponser['sponserId']; ?></td>
  <!-- <td><?php //echo $sponser['ImmediateSponserId']; ?></td>-->
   <td><?php echo CHtml::encode($data->FirstName); ?></td>
   <td><?php echo CHtml::encode($data->Rid); ?></td>
   <td><?php echo $sponser['password']; ?></td>
   <td><?php echo CHtml::encode($data->ContactNo1); ?></td>
   <td><?php if($data->id_status==0){echo 'Free';}else{echo 'Paid';} ?></td>
  
   <td>
   <?php echo CHtml::link('Edit',array('registrations/edit/id/'.base64_encode($data->Rid)), array('data-original-title'=>"Edit Profile", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips"));?>
   
     <?php /*?> <?php 
	  if($checkPermission[0]['edits']==0){
	  	echo CHtml::link('Upgrade',array('registrations/update_red_id/id/'.base64_encode($data->Rid)), array('data-original-title'=>"Upgrade", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips"));
	  }
	  if($_GET['type']=='green'){
		  echo '&nbsp;';
		  echo CHtml::link('Policy',array('policedetails/create/Rid/'.base64_encode($data->Rid)), array('data-original-title'=>"Entre Policy Details", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-orange tooltips"));
		  echo '<p></p>';
		  echo CHtml::link('Welcome Letter',array('registrations/welcome_letter/RID/'.base64_encode($data->Rid)), array('data-original-title'=>"Print Welcome Letter", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips"));
	  }
	  
	  
	    ?><?php */?>
		
   </td>
  </tr>
 </tbody>
