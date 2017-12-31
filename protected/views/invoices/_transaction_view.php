<?php $checkPermission=Yii::app()->session['permissions']; ?>
<?php $id=Yii::app()->user->getState('usercode');
$sql='select sum(payable_income) as get_amount from invoices where Rid="'.$id.'"';
$command=Yii::app()->db->createCommand($sql);
$get_amt=$command->queryRow();

$sql1='select sum(payable_income) as withdraw from invoices where Rid="'.$id.'" and payment_status=1';
$command1=Yii::app()->db->createCommand($sql1);
$withdraw=$command1->queryRow();
$balance=$get_amt['get_amount'] - $withdraw['withdraw'];
?>
Received Amount= <?php if($get_amt['get_amount']!=0){echo $get_amt['get_amount'];}else{echo '0';}?><br />
Withdraw Amount= <?php if($withdraw['withdraw']!=0){echo $withdraw['withdraw'];}else{echo '0';}?><br />
Balance= <?php if($balance!=0){echo $balance;}else{echo '0';}?>
 <tbody>
  <tr>
   <td><?php echo CHtml::encode(date('d-m-Y',strtotime($data->created_date))); ?></td>
   
   <td><?php echo CHtml::encode($data->level_income); ?></td>
   <td><?php echo $data->direct_income + $data->team_income; ?></td>
   <td><?php echo CHtml::encode($data->total_income); ?></td>
   <td><?php echo CHtml::encode($data->payable_income); ?></td>
   <td> <?php if($data->payment_status!=0){
				echo '<span class="label label-sm label-success">Paid</span>';
			} else {
				echo ' <span class="label label-sm label-danger">Unpaid</span>';
			}
	?></td>
   
   
  
    
   
   
  </tr>
 </tbody>
