<?php $checkPermission=Yii::app()->session['permissions']; ?>
 <tbody>
  <tr>
  <?php $sponser=Sponserdetails::model()->getSponserById($data->Rid);?>
  <td><?php echo $sponser['no_of_members']; ?></td>
   <td><?php echo CHtml::encode($data->Rid); ?></td>
   <td><?php echo ucwords(CHtml::encode($data->FirstName)); ?></td>
    <td><?php echo date('d-m-Y', strtotime($data->created)); ?></td>
    <td> <?php if($data->activation_date=="0000-00-00"){echo 'Not Upgraded';}else{echo date('d-m-Y', strtotime($data->activation_date));} ?></td>
   <td><?php echo $sponser['sponserId']; ?></td>
   <td><?php echo $sponser['ImmediateSponserId']; ?></td>
  
   <td>
  
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
