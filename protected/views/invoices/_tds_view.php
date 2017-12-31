<?php $checkPermission=Yii::app()->session['permissions']; ?>
 <tbody>
  <tr>
   <td><?php echo CHtml::encode(date('d F Y', strtotime($data->cycle_date_from))); ?></td>
   <td><?php echo CHtml::encode(date('d F Y', strtotime($data->cycle_date_to))); ?></td>
   <td ><?php  
   				$userBranch=Yii::app()->user->getState('branch_id');
				if(Yii::app()->user->getState('user_type')==1){ //for Manager
						echo Invoices::model()->countInvoiceByDateByBranchId($data->created_date, $userBranch);
				} else {
					echo Invoices::model()->countInvoiceByDate($data->created_date);
				}
    ?></td>
     <td ><?php  
	 			if(Yii::app()->user->getState('user_type')==1){ // //for Manager
					echo Invoices::model()->geTotalPaybleAmtByDateByBranchId($data->created_date, $userBranch);
				} else {
					echo CHtml::encode(round(Invoices::model()->geTotalPaybleAmtByDate($data->created_date)));
				}
	 
	  ?></td>
   <td style="width:10%"><?php  
	 			if(Yii::app()->user->getState('user_type')==1){ // //for Manager
					echo Invoices::model()->geTotalTDSByDateByBranchId($data->created_date, $userBranch);
				} else {
					echo CHtml::encode(round(Invoices::model()->geTotalTDSByDate($data->created_date)));
				}
	 
	  ?></td>
   <td style="width:10%"><?php 	if($checkPermission[0]['view']==0){
	   echo 		CHtml::link('<i class="fa  clip-zoom-in "></i>',array('invoices/index_tds/fromDate/'.$data->cycle_date_from.'/toDate/'.$data->cycle_date_to), array('data-original-title'=>"View", 'data-placement'=>"top", 'title'=>'Invoice View', 'class'=>"btn btn-xs btn-teal tooltips")); } ?></td>
  </tr>
 </tbody>
