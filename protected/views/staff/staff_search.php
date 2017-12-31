<?php 
if(isset($_GET['Staff']['name'])){$name=$_GET['Importexcel']['name']; } else { $name='';}
if(isset($_GET['Staff']['status'])){$status=$_GET['Importexcel']['status']; } else { $status='';}
?>

<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?>
<tr>
 <td><?php echo $form->textField($model,'name',array('value'=>$name, 'size'=>10,'maxlength'=>200,'class'=>""));?></td>
 <td>&nbsp;</td>
<td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
   <td><?php 	$statusOptions = array('0' => 'Active', '1' => 'Inactive');
			    echo $form->dropDownList($model, 'status', $statusOptions, array('options' => array($status=>array('selected'=>true)),  'prompt' => 'Select Status' , 'id'=>"status", 'class'=>"form-control "));?></td>
 <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td>
</tr>
<!-- search-form -->
<?php $this->endWidget(); ?>
