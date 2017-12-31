
 <tbody>
  <tr>
   <td><?php echo CHtml::encode($data->name); ?></td>
   <td><?php echo CHtml::encode($data->cycle_date_from); ?></td>
   <td ><?php echo CHtml::encode($data->cycle_date_to); ?>
    <td ><?php  echo CHtml::encode($data->bank_name); ?></td>
     <td ><?php  echo CHtml::encode($data->account_no); ?></td>
    <td ><?php echo CHtml::encode($data->referal_amount); ?></td>
    <td ><?php echo CHtml::encode($data->reward_amount); ?></td> 
   <td ><?php echo CHtml::encode($data->pair_amount); ?></td>
   <td><?php echo  CHtml::encode($data->net_payable_amount); ?></td>
    <td><?php echo CHtml::encode($data->payment_status)==0?'Unpaid':'Paid' ?></td>
   <td><div class="visible-md visible-lg hidden-sm hidden-xs">
      <?php echo CHtml::link('<i class="fa fa-print "></i>',array('invoices/invoice_print/id/'.base64_encode($data->id)), array('data-original-title'=>"Print", 'data-placement'=>"top", 'class'=>"btn btn-xs btn-teal tooltips", 'target'=>"_blank"));  ?>
  
		</div>
   </td>
  </tr>
 </tbody>
