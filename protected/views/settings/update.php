<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/assets/plugins/bootstrap-social-buttons/social-buttons-3.css"
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
                    <h2>Settings</h2>
                       
                        <div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
									<li class="active">
										<a data-toggle="tab" href="#panel_overview">
											Overview
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#panel_edit_account">
											Edit Setting
										</a>
									</li>
									
								</ul>
								<div class="tab-content">
									<div id="panel_overview" class="tab-pane in active">
										<div class="row">
											<div class="col-sm-5 col-md-4">
												<div class="user-left">
													
													<table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Contact Information</th>
															</tr>
														</thead>
														<tbody>
                                                        <tr>
																<td>Title :</td>
																<td><a href="#"><?php echo $setting1;?></a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
                                                        <tr>
																<td>Phone :</td>
																<td><a href="#"><?php echo $setting8;?></a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Mobile :</td>
																<td><a href="#"><?php echo $setting3;?></a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Email:</td>
																<td><a href="#"><?php echo $setting5;?></a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
                                                            <tr>
																<td>Address:</td>
																<td><a href="#"><?php echo $setting14;?></a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
														</tbody>
													</table>
													<table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Other </th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Keyword:</td>
																<td><a href="#"><?php echo $setting13 ;?></a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Meta Title:</td>
																<td><a href="#"><?php echo $setting6;?></a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
                                                            <tr>
																<td>Meta Description:</td>
																<td><a href="#"><?php echo $setting7;?></a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
                                                            <tr>
																<td>Footer:</td>
																<td><a href="#"><?php echo $setting4;?></a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
														</tbody>
													</table>
													
												</div>
											</div>
											<div class="col-sm-7 col-md-8">
												
												<div class="panel panel-white">
													
													<div class="panel-body panel-scroll" style="height:400px">
														<table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Social information</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Twitter</td>
																<td><?php echo $setting9 ;?></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Facebook :</td>
																<td><?php echo $setting10;?></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Google</td>
																<td><?php echo $setting11;?></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Linkdlin</td>
																<td><?php echo $setting12;?></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
                                                            <tr>
																<td>Skype</td>
																<td><?php echo $setting15;?></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
                                                            
															<tr>
																<td>Logo</td>
																<td><div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="user-image">
																<div class="fileupload-new thumbnail">
                                                                <?php 
																if($setting2!=''){
																echo CHtml::image(Yii::app()->request->baseUrl."/images/members/".$setting2, $this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'200', )); } else {
																	echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'200')); 
																}
																?>
                                                               
																</div>
															</div>
														</div></td>
																<td>
                                                                
                                                                <a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
                                                            
                                                            <tr>
																<td>Favicon</td>
																<td><div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="user-image">
																<div class="fileupload-new thumbnail">
                                                                <?php 
																if($setting16!=''){
																echo CHtml::image(Yii::app()->request->baseUrl."/images/members/".$setting16, $this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'200', )); } else {
																	echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'200')); 
																}
																?>
                                                               
																</div>
															</div>
														</div></td>
																<td>
                                                                
                                                                <a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
														</tbody>
													</table>
                                                    	
													</div>
												</div>
												
											</div>
										</div>
									</div>
									<div id="panel_edit_account" class="tab-pane">
										 <?php $form=$this->beginWidget('CActiveForm', array(
										'id'=>'settings-form','enableAjaxValidation'=>false, 'htmlOptions'=>array('class'=>'', 'enctype'   => 'multipart/form-data')
									)); ?>
                                    
                                    
											<div class="row">
												<div class="col-md-12">
													<h3>Edit Setting</h3>
													<hr>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<?php echo $form->labelEx($model,'site_title',array('class'=>"", 'for'=>"")); ?> 
							
							<?php echo $form->textField($model,'site_title',array('size'=>60 ,'maxlength'=>10, 'id'=>'site_title', 'class'=>"form-control", 'title'=>"Enter Title",'value'=>$setting1)); ?>                       
                   <?php echo $form->error($model,'site_title'); ?>  
													</div>
													<div class="form-group">
														<?php echo $form->labelEx($model,'site_mobile',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting3)); ?> 					<?php echo $form->error($model,'site_mobile'); ?>
													</div>
													<div class="form-group">
														<?php echo $form->labelEx($model,'site_phone',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting8)); ?> 					
							<?php echo $form->error($model,'site_phone'); ?>
                                                        
													</div>
													<div class="form-group">
														<?php echo $form->labelEx($model,'site_email',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting5)); ?>
                           				<?php echo $form->error($model,'site_email'); ?>
                                                        
													</div>
													<div class="form-group">
														<?php echo $form->labelEx($model,'address',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting14)); ?> 		
                            
                            					<?php echo $form->error($model,'address'); ?>
													</div>
													<div class="form-group">
														<?php echo $form->labelEx($model,'meta_title',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting6)); ?> 
                           <?php echo $form->error($model,'meta_title'); ?>
													</div>
                                                    <div class="form-group">
														<?php echo $form->labelEx($model,'meta_description',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting7)); ?> 	
                            					<?php echo $form->error($model,'meta_description'); ?>
													</div>
												</div>
												<div class="col-md-6">
													
                                                   
														<div class="col-md-6">
															
                                                            
														
													</div>
													<div class="row">
														<div class="col-md-8">
                                                        <div class="form-group">
										<?php echo $form->labelEx($model,'site_footer',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting4)); ?> 
                            <?php echo $form->error($model,'site_footer'); ?>
                                                                
															</div>
															<div class="form-group">
                                                            
                                                            <?php echo $form->labelEx($model,'keyword',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting13)); ?> 		
                          
                            					<?php echo $form->error($model,'keyword'); ?>
																
															</div>
														</div>
                                                        <div class="col-md-8">
															<div class="form-group">
																<?php echo $form->labelEx($model,'twitter',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting9)); ?> 	
                                                   <?php echo $form->error($model,'twitter'); ?>
															</div>
														</div>
                                                        
                                                        <div class="col-md-8">
															<div class="form-group">
															<?php echo $form->labelEx($model,'google',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting10)); ?> 	                        
                            					<?php echo $form->error($model,'google'); ?>
                                                                
															</div>
                                                            
                                                            
                                                            
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<?php echo $form->labelEx($model,'linkedin',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting12)); ?> 	
                            
                            					<?php echo $form->error($model,'linkedin'); ?>
															</div>
														</div>
                                                        
													</div>
                                                    <div class="row">
														<div class="col-md-8">
															<div class="form-group">
																<?php echo $form->labelEx($model,'facebook',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting11)); ?>		
                           
                            					<?php echo $form->error($model,'facebook'); ?>
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<?php echo $form->labelEx($model,'skype',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'settingvalue',array('size'=>60 ,'maxlength'=>10, 'id'=>'no_of_pin', 'class'=>"form-control", 'title'=>"Enter No of pin",'value'=>$setting15)); ?> 		
  
                            					<?php echo $form->error($model,'skype'); ?>
															</div>
														</div>
                                                        
													</div>
													
												</div>
											</div>
											
                                    <div class="row">
												<div class="col-md-12">
													<h3>Logo Images</h3>
													<hr>
												</div>
												<div class="col-md-6">
													<div class="form-group">
                                                    <?php echo $form->labelEx($model,'site_logo',array('class'=>"", 'for'=>"")); ?> 
													<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="user-image">
																<div class="fileupload-new thumbnail">
                                                                <?php 
																if($setting2!=''){
																echo CHtml::image(Yii::app()->request->baseUrl."/images/members/".$setting2, $this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'200', )); } else {
																	echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'200')); 
																}
																?>
                                                               
																</div>
															</div>
														</div>
                            
                            			
                            	<?php //echo $form->error($model,'site_logo'); ?>
											</div>
												
												</div>
												<div class="col-md-6">
													<div class="form-group">
                                                     <?php echo $form->labelEx($model,'site_favicon',array('class'=>"", 'for'=>"")); ?> 
														<div class="fileupload fileupload-new" data-provides="fileupload">
															<div class="user-image">
																<div class="fileupload-new thumbnail">
                                                                <?php 
																if($setting16!=''){
																echo CHtml::image(Yii::app()->request->baseUrl."/images/members/".$setting16, $this->pageTitle=Yii::app()->name, array('align'=>'middle', 'width'=>'200', )); } else {
																	echo CHtml::image(Yii::app()->request->baseUrl."/images/empty.png",$this->pageTitle=Yii::app()->name, array('width'=>'200')); 
																}
																?>
                                                               
																</div>
															</div>
														</div>
                            
                            			
                            	<?php echo $form->error($model,'site_favicon'); ?>
				
													
												</div>
                                            
                                            
                                            
											</div>
									
								</div>
                                    
											<div class="row">
												<div class="col-md-4">
                                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>"btn btn-teal btn-block")); ?>
												</div>
											</div>
										 <?php $this->endWidget(); ?>
									</div>
                                    
                                    
							</div>
						</div>
                        
					</div></div>
					
					<!-- end: PAGE CONTENT-->
				</div>

