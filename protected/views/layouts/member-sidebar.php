<?php 
					   $currentUrl=Yii::app()->controller->id .'/'. Yii::app()->controller->action->id;
					   if($currentUrl=='user/member_dashboard') { $dashboard='active open';} else { $dashboard='';}
					   if($currentUrl=='pin/index' or $currentUrl=='pin/create') { $pin='active open';} else { $pin='';}
					   if($currentUrl=='pintransfer/memberpin') { $pinTransfer='active open';} else { $pinTransfer='';}
					   if($currentUrl=='registration/member_add') { $members='active open';} else { $members='';}
					   if($currentUrl=='plan/index' or $currentUrl=='plan/create') { $plans='active open';} else { $plans='';}
					   if($currentUrl=='registration/network' ) { $network='active open';} else { $network='';}
					   if($currentUrl=='receipt/receipt' ) { $receipt='active open';} else { $receipt='';}
					   if($currentUrl=='invoices/member_invoice' ) { $invoice='active open';} else { $invoice='';}
					  if($currentUrl=='rewards/member_reward' ) { $rewards='active open';} else { $rewards='';}  
					   if($currentUrl=='Binaryincome/member_pairincome' ) { $pairincome='active open';} else { $pairincome='';}
					    if($currentUrl=='referalamount/member_directincome' ) { $referalreport='active open';} else { $referalreport='';}  
					?>
<ul class="main-navigation-menu">
						<li class="<?php echo $dashboard;?>">
                        	<?php echo CHtml::link('<i class="clip-home-3"></i><span class="title"> Dashboard </span><span class="selected"></span>',array('user/member_dashboard'), array('class'=>"")); ?>
						</li>
                        <li class="<?php echo $pin; echo $pinTransfer;?>">
							<a href="javascript:void(0)"><i class="clip-location"></i>
								<span class="title"> Pin </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li class="<?php echo $pinTransfer;?>"><?php echo CHtml::link('<span class="title">Transfer List</span>',array('pintransfer/memberpin'), array('class'=>"")); ?>
								</li>
							</ul>
						</li>
						<li class="<?php echo $members; echo $network; ?>">
							<a href="javascript:void(0)"><i class="clip-users"></i>
								<span class="title"> Members </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li class="<?php echo $members; ?>">
									<?php echo CHtml::link('<span class="title">Create</span>',array('registration/member_add'), array('class'=>"")); ?>
								</li>
								<li class="<?php echo $network;?>">
									<?php echo CHtml::link('<span class="title">Network</span>',array('registration/network/id'), array('class'=>"")); ?>
								</li>
							</ul>
						</li>
						
                        <li class="<?php echo $rewards; ?>" ><?php echo CHtml::link('<i class="fa fa-gift"></i>
								<span class="title"> Rewards </span><span class="selected"></span>',array('rewards/member_reward'), array('class'=>"")); ?>
						</li>
						<li class="<?php echo $receipt; echo $invoice ?>">
							<a href="javascript:void(0)"><i class="clip-file"></i>
								<span class="title"> Reports </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<li class="<?php echo $receipt; ?>">
								 <?php $userDetail=Registration::model()->getRegistationByUserId();
								        $rids=$userDetail['Rid'];
										$receiptDetail=Receipt::model()->getIdByRid($rids);
										$reciptId=base64_encode($receiptDetail['id']);
								 ?>
								<?php echo CHtml::link('<span class="title">Receipt</span>',array('receipt/receipt/id/'.$reciptId), array('class'=>"", 'target'=>"_new")); ?>
                                
                                </li>
							
								<li class="<?php echo $invoice; ?>"><?php echo CHtml::link('<span class="title">Invoices</span>',array('invoices/member_invoice/'), array('class'=>"")); ?></li>
                                <li class="<?php echo $referalreport; ?>"><?php echo CHtml::link('<span class="title">Direct Income </span>',array('referalamount/member_directincome'), array('class'=>"")); ?></li>
                                <li class="<?php echo $pairincome; ?>"><?php echo CHtml::link('<span class="title">Pair Income</span>',array('Binaryincome/member_pairincome/'), array('class'=>"")); ?></li>
								<li class="<?php //echo $leftMember;?>">
									<?php echo CHtml::link('<span class="title">Left Member</span>',array('registration/left_members/'), array('class'=>"")); ?>
								</li>
                                <li class="<?php //echo $rightMember;?>">
									<?php echo CHtml::link('<span class="title">Right Member</span>',array('registration/right_members/'), array('class'=>"")); ?>
								</li>
							</ul>
						</li>
                        
						
					</ul>