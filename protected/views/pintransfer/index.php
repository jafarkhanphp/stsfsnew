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
                    <?php echo CHtml::link('Create Pin Transfer <i class="fa fa-plus"></i>',array('pintransfer/create'), array('class'=>"btn btn-orange add-row")); ?>
											
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
							  <?php
								$flashMessages = Yii::app()->user->getFlashes();
								  if ($flashMessages) {
									foreach($flashMessages as $key => $message) {
										echo '<div class="alert alert-' . $key . '"  ><button class="close" data-dismiss="alert">×</button>'. $message . "</div>\n";
									}}
								?>
							<!-- start: RESPONSIVE TABLE PANEL -->
							
                            <div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Transfered Pin List
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-bordered table-hover" id="sample-table-1">
											<?php  $this->renderPartial('_admin_search',array( 'model'=>$model,)); ?>
                                            <thead>
												<tr>
													<th class="center"><?php echo CHtml::encode($model->getAttributeLabel('id')); ?></th>
													<th><?php echo CHtml::encode($model->getAttributeLabel('reffrel_id')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('pinno')); ?></th>
													<th><?php echo CHtml::encode($model->getAttributeLabel('created')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('issue_status')); ?></th>
													<th>Action</th>
												</tr>
											</thead>
                                             <?php $this->widget('zii.widgets.CListView', array(
													'dataProvider'=>$dataProvider,
													'itemView'=>'_admin_view',
													'enableSorting'=>1,'sortableAttributes'=>array('ID',
													'id' 
														),
													)); 
											?>
                                           <tr>
													<th class="center"><?php echo CHtml::encode($model->getAttributeLabel('id')); ?></th>
													<th><?php echo CHtml::encode($model->getAttributeLabel('reffrel_id')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('pinno')); ?></th>
													<th><?php echo CHtml::encode($model->getAttributeLabel('created')); ?></th>
                                                    <th><?php echo CHtml::encode($model->getAttributeLabel('issue_status')); ?></th>
													<th>Action</th>
												</tr>
										</table>
									</div>
								</div>
							</div>
							<!-- end: RESPONSIVE TABLE PANEL -->
						</div>
					</div>
					
					<!-- end: PAGE CONTENT-->
				</div>
              
                <script language="javascript">
		
			 
			  function deleteRecord(Id) {
				  if(!confirm("Are you sure you want to delete the record?")){
					return false;
				}
				 $("#loader").show();
				// return confirm("Are you sure?");
				 jQuery.ajax({
                url: '<?php echo Yii::app()->request->baseUrl;?>/index.php/Pintransfer/Delete',
                type: "POST",
                data: {id: Id},  
                success: function(data){
					//alert(data);
					//return false ;
                    if(data==1){
						$("#"+Id).hide();
						$("#loader").hide();
					} 
					else if(data==2) {
							$("#loader").hide();
						alert('Record exist in Registration Table');
							}
					else {
						$("#loader").hide();
						alert('Record could not be deleted');
					}
                    }
                });
			 }

		           </script>
		