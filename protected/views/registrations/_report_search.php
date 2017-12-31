<?php //$form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl('registrations/Custome_Member/id_status/'.$_GET['id_status']),'method'=>'get'));

 ?>

<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
 
<tr>

 <td><?php 
							 $this->widget('zii.widgets.jui.CJuiDatePicker', array(
									 'model' => $model,
									 'attribute' => 'created',
									 'options' => array(
													  'dateFormat' => 'dd-mm-yy',
													  'defaultDate' => '+0w',
													  'changeYear' => true, 
													  //'minDate'=> '-6',
													  'maxDate' => 'dateToday'  
													),
													  'htmlOptions' => array(
													  'size' => '10',         // textField size
													  'maxlength' => '11',    // textField maxlength
													  'class'=>'form-control col-md-3',
													  'style'=>'width:200px;',
													  'value'=>@$_GET['Registrations']['created'],
													  'placeholder'=>'From Date'
													  ),
												  ));
				  
											?>  <?php 
											  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
													  'model' => $model,
													  'attribute' => 'activation_date',
													   'options' => array(
															'dateFormat' => 'dd-mm-yy',
															'defaultDate' => '+0w',
															'changeYear' => true, 
															//'minDate'=> '-6',
															'maxDate' => 'dateToday'  
													),
													  'htmlOptions' => array(
														  'size' => '10',         // textField size
														  'maxlength' => '11',    // textField maxlength
														  'class'=>'form-control col-md-3',
														  'style'=>'width:200px;',
														  'value'=>@$_GET['Registrations']['activation_date'],
														   'placeholder'=>'To Date'
													  ),
												  ));
				  
											?></td>

 
 <td></td>
  <td></td>
  <td><?php 
  	  // $PositionOptions = array('0' => 'Red', '1' => 'Green');
			   // echo $form->dropDownList($model, 'id_status', $PositionOptions, array( 'prompt' => 'Select Status' , 'id'=>"id_status", 'class'=>"form-control"));?></td>


 <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>
