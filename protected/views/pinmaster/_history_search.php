<?php $form=$this->beginWidget('CActiveForm', array('action'=>Yii::app()->createUrl($this->route),'method'=>'get')); ?><tr>   <td></td>   <td></td>  <td><?php $listdata3 = Packages::model()->getPackageDropDown(0);					echo $form->dropDownList($model, 'pkg_id', $listdata3, array('prompt' => 'Select Packages', 					 'class'=>"form-control",'id'=>"pkg_id"));?> </td>  <td><?php echo CHtml::htmlButton('Search',array('type'=>'sumbit' , 'class' => 'btn btn-info')); ?></td></tr><!-- search-form --><?php $this->endWidget(); ?>