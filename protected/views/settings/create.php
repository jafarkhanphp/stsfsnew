<?php
/* @var $this SettingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'Settings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Setting', 'url'=>array('index')),
	array('label'=>'Manage Setting', 'url'=>array('admin')),
);
?>
<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							
							<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-home-3"></i>
									<a href="#">Dashboard</a>
								</li>
								<li class="active">Setting</li>
								
							</ol>
							<br />
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
                    <div class="col-md-12 space20">
                  <?php // echo CHtml::link('Setting List <i class="fa clip-list-6"></i>',array('setting/index'), array('class'=>"btn btn-orange add-row")); ?>
											
											
                        
                        
                        
                        <div class="col-md-12">
							<!-- start: RESPONSIVE TABLE PANEL -->
							<div class="col-sm-6">
                            <div class="panel panel-default">
                           
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Main Setting
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
								<div class="modal-body">
								<?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'settings-form',
                            // Please note: When you enable ajax validation, make sure the corresponding
                            // controller action is handling ajax validation correctly.
                            // There is a call to performAjaxValidation() commented in generated controller code.
                            // See class documentation of CActiveForm for details on this.
                            'enableAjaxValidation'=>false,
                        )); ?>
				<div class="row">
					<div class="modal-body">
                    <span class="" style="display:none" id="loader"><?php echo CHtml::image(Yii::app()->request->baseUrl."/assets/assets/images/loading.gif",'', array('width'=>"16", 'height'=>"16" , 'alt'=>"")); ?></span>
                    <div class="" id="formResult"></div>
                     <div class="" id="formResult">
						<p>
							<?php echo $form->labelEx($model,'site_title',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter Title")); ?> <p> <?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue" ,'dir'=>'right')); ?></p>
													
                             <?php echo $form->error($model,'site_title'); ?>                       
												
						</p>
                     
                       							
							
                          
                        </div>
                         <div class="" id="formResult2">
						<p><?php echo $form->labelEx($model,'site_logo',array('class'=>"", 'for'=>"")); ?> 
                        
                        <?php echo CHtml::image(Yii::app()->request->baseUrl.'/upload/'.$model->settingvalue,"settingvalue",array("width"=>200)); ?>
							<?php // echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'site_logo', 'class'=>"form-control", 'title'=>"choose image")); ?> 	
                            
                            
                            <p> <?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue",'dir'=>'right')); ?>	</p>					
							<?php echo $form->error($model,'site_logo'); ?>
						</p>
                       
                        </div>
                         <div class="" id="formResult">
                        <p><?php echo $form->labelEx($model,'site_mobile',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 	<p>
                             <?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?>	</p>					<?php echo $form->error($model,'site_mobile'); ?>
						</p></div>
                         <div class="" id="formResult">
                        <p><?php echo $form->labelEx($model,'site_phone',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> <p>	
                             <?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>						<?php echo $form->error($model,'site_phone'); ?>
						</p>
                        </div>
                         <div class="" id="formResult">
                        <p><?php echo $form->labelEx($model,'site_footer',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 	<p>
                             <?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>
                            <?php echo $form->error($model,'site_footer'); ?>
						</p></div>
                        <div class="" id="formResult">                      
                        <p><?php echo $form->labelEx($model,'site_email',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 	<p>
                             <?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?>		</p>				<?php echo $form->error($model,'site_email'); ?>
                             
						</p></div>
                         <div class="" id="formResult">
                        <p><?php echo $form->labelEx($model,'meta_title',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> <p>
                             <?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>
                           <?php echo $form->error($model,'meta_title'); ?>
						</p></div>
                         <div class="" id="formResult">
                        <p><?php echo $form->labelEx($model,'meta_description',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 		<p>
                             <?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>
                            					<?php echo $form->error($model,'meta_description'); ?>
						</p></div>
                        
                          
                       
                       
                       
                        
                        
					</div>
                    
					
				</div>
			</div>
            					
								
                                <?php $this->endWidget(); ?>
								</div>
							</div>
                            </div>
                            <div class="col-sm-6">
                            <div class="panel panel-default">
                          
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Other Setting
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
								<div class="modal-body">
									<?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'registration-form',
                            // Please note: When you enable ajax validation, make sure the corresponding
                            // controller action is handling ajax validation correctly.
                            // There is a call to performAjaxValidation() commented in generated controller code.
                            // See class documentation of CActiveForm for details on this.
                            'enableAjaxValidation'=>false,
                        )); ?>
				<div class="row">
					<div class="modal-body">
                    <span class="" style="display:none" id="loader"><?php echo CHtml::image(Yii::app()->request->baseUrl."/assets/assets/images/loading.gif",'', array('width'=>"16", 'height'=>"16" , 'alt'=>"")); ?></span>
                    <div class="" id="formResult"></div>
                     <div class="" id="formResult">
                     <p><?php echo $form->labelEx($model,'twitter',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 		
                           <p>  <?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>
                            					<?php echo $form->error($model,'twitter'); ?>
						</p></div>
                        
                         <div class="" id="formResult">
                         
                          <p><?php echo $form->labelEx($model,'google',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 		
                             <p><?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>
                            					<?php echo $form->error($model,'google'); ?>
						</p>
                         
                         </div>
                         
                          <div class="" id="formResult">
                         
                          <p><?php echo $form->labelEx($model,'facebook',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 		
                             <p><?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>
                            					<?php echo $form->error($model,'facebook'); ?>
						</p>
                         
                         </div>
                         
                          <div class="" id="formResult">
                         
                          <p><?php echo $form->labelEx($model,'linkedin',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 		
                             <p><?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>
                            					<?php echo $form->error($model,'linkedin'); ?>
						</p>
                         
                         </div>
                         
                          <div class="" id="formResult">
                         
                          <p><?php echo $form->labelEx($model,'keyword',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 		
                             <p><?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>
                            					<?php echo $form->error($model,'keyword'); ?>
						</p>
                         
                         </div>
                          <div class="" id="formResult">
                         
                          <p><?php echo $form->labelEx($model,'address',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 		
                             <p><?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>
                            					<?php echo $form->error($model,'address'); ?>
						</p>
                         
                         </div>
                          <div class="" id="formResult">
                         
                          <p><?php echo $form->labelEx($model,'skype',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 		
                             <p><?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>
                            					<?php echo $form->error($model,'skype'); ?>
						</p>
                         
                         </div>
                        
                        
                         <div class="" id="formResult">
						<p><?php echo $form->labelEx($model,'site_favicon',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>10,'maxlength'=>5 , 'id'=>'amount', 'class'=>"form-control", 'title'=>"Amount")); ?> 	 <p><?php echo CHtml::submitButton($model->isNewRecord ? 'Edit' : 'Save',array('class'=>"btn btn-blue")); ?></p>					
                            	<?php echo $form->error($model,'site_favicon'); ?>
						</p>
                       
                        </div>
                        
                        
					</div>
                    
					
				</div>
			</div>
            					
								
                                <?php $this->endWidget(); ?>
								</div>
							</div>
                            
                            </div>
							<!-- end: RESPONSIVE TABLE PANEL -->
						</div>
                        
					</div></div>
					
					<!-- end: PAGE CONTENT-->
				</div>