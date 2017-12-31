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
					echo Invoices::model()->getotalAmtByDateByBranchId($data->created_date, $userBranch);
				} else {
					echo CHtml::encode(round(Invoices::model()->geTotalPaybulAmtByDate($data->created_date)));
				}?>
	</td>
	<td ><?php  
	 			if(Yii::app()->user->getState('user_type')==1){ // //for Manager
					echo Invoices::model()->getotalAmtByDateByBranchId($data->created_date, $userBranch);
				} else {
					echo CHtml::encode(round(Invoices::model()->geTotalHandlingAmtByDate($data->created_date)));
				}?>
	</td>
	<td ><?php  
	 			if(Yii::app()->user->getState('user_type')==1){ // //for Manager
					echo Invoices::model()->getotalAmtByDateByBranchId($data->created_date, $userBranch);
				} else {
					echo CHtml::encode(round(Invoices::model()->getotalAmtByDate($data->created_date)));
				}?>
	</td>
    <td><div id="paidstatus<?php echo $data->id;?>">
    <?php 	if(Yii::app()->user->getState('user_type')==1){ // //for Manager
					if(Invoices::model()->paymentCountByDateByBranchId($data->created_date, $userBranch)==0){
				echo '<span class="label label-sm label-success">Paid</span>';
			} else {
				echo CHtml::link('<span class="label label-sm label-danger">Unpaid</span>',array('invoices/paid_all/fromDate/'.$data->cycle_date_from.'/toDate/'.$data->cycle_date_to), array('data-original-title'=>"View", 'data-placement'=>"top", 'title'=>'Clicked to Paid all Invoices', 'class'=>"tooltips"));
				
			}
				} else {
					if(Invoices::model()->paymentCountByDate($data->created_date)==0){
				echo '<span class="label label-sm label-success">Paid</span>';
			} else {
				echo CHtml::link('<span class="label label-sm label-danger">Unpaid</span>',array('invoices/paid_all/fromDate/'.$data->cycle_date_from.'/toDate/'.$data->cycle_date_to), array('data-original-title'=>"View", 'data-placement'=>"top", 'title'=>'Clicked to Paid all Invoices', 'class'=>"tooltips"));
				
			}
				}
			
				
	?>
	</div>
    </td>
   <td style="width:10%"><div class="visible-md visible-lg hidden-sm hidden-xs">
       
	   <?php 	if($checkPermission[0]['view']==0){
	   echo 		CHtml::link('<i class="fa  clip-zoom-in "></i>',array('invoices/index/fromDate/'.$data->cycle_date_from.'/toDate/'.$data->cycle_date_to), array('data-original-title'=>"View", 'data-placement'=>"top", 'title'=>'Invoice View', 'class'=>"btn btn-xs btn-teal tooltips")); } ?>
		</div>
   </td>
  </tr>
 </tbody>
