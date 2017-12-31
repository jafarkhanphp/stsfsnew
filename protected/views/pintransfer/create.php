<?php
/* @var $this PintransferController */
/* @var $model Pintransfer */

$this->breadcrumbs=array(
	'Pintransfers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pintransfer', 'url'=>array('index')),
	array('label'=>'Manage Pintransfer', 'url'=>array('admin')),
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
								<li class="active">Pin Transfer</li>
								
							</ol>
							<br />
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
                    <div class="col-md-12 space20">
                  <?php echo CHtml::link('Pin Transfer List <i class="fa clip-list-6"></i>',array('pintransfer/index'), array('class'=>"btn btn-orange add-row")); ?>
											
											<div class="btn-group pull-right">
												<button class="btn btn-green dropdown-toggle" data-toggle="dropdown">
													Export <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu dropdown-light pull-right">
													<li><a data-ignorecolumn="3,4" data-table="#sample-table-2" class="export-pdf" href="#"> Save as PDF </a>
													</li>
													<li><a data-ignorecolumn="3,4" data-table="#sample-table-2" class="export-csv" href="#"> Save as CSV </a>
													</li>
												</ul>
											</div>
										</div>
						<div class="col-md-12">
							<!-- start: RESPONSIVE TABLE PANEL -->
							
                            <div class="panel panel-default">
                            <?php
								$flashMessages = Yii::app()->user->getFlashes();
								  if ($flashMessages) {
									foreach($flashMessages as $key => $message) {
										echo '<div class="alert alert-' . $key . '"  ><button class="close" data-dismiss="alert">×</button>'. $message . "</div>\n";
									}}
								?>
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Pin List
									<div class="panel-tools">
										
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
								<div class="modal-body">
									<?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'pintransfer-form',
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
                         <p>
							<?php echo $form->labelEx($model,'reffrel_id'); ?>
								<?php echo $form->textField($model,'reffrel_id',array('size'=>60 ,'maxlength'=>255, 'id'=>'pinno', 'class'=>"form-control", 'title'=>"Enter Reffrel Id")); ?> 							<?php echo $form->error($model,'reffrel_id'); ?>
                          </p>
						<p>
							<?php echo $form->labelEx($model,'pinno',array('class'=>"", 'for'=>"")); ?> 
							<?php echo $form->textField($model,'pinno',array('size'=>60 ,'maxlength'=>10, 'id'=>'pinno', 'class'=>"form-control", 'title'=>"Enter No of pin")); ?> 							<?php echo $form->error($model,'pinno'); ?>
						</p>
						
					</div>
					
				</div>
			</div>
            					<div class="form-group">
													<div class="col-sm-2 col-sm-offset-8">
                                                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>"btn btn-blue next-step btn-block")); ?>
													</div>
												</div>
								
                                <?php $this->endWidget(); ?>
								</div>
							</div>
							<!-- end: RESPONSIVE TABLE PANEL -->
						</div>
					</div>
					
					<!-- end: PAGE CONTENT-->
				</div>