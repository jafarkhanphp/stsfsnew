<?php

class SteppoolsController extends Controller
{
	
	
	function actionUpdate_Pool(){
			ini_set('max_execution_time',120); 
			$allMembers=Registrations::model()->getAllMembers();
			foreach($allMembers as $member){
				//$this->create_steppool($member['ImmediateSponserId']);
				$rid=$member['Rid'];
				$MaxDetail=Steppools::model()->getMaxId();
				if($MaxDetail>0){
					$positions=intval($MaxDetail)+1;
				} else {
					 $positions	=1;
				} 
				$exist=Steppools::model()->checkExistById($rid);
				if($exist==0){
					 Yii::app()->db->createCommand()->insert('steppools', array('Rid'=>$rid, 'position_member'=>$positions,
					 'amount'=>0, 'steppool_bv'=>0, 'total_count'=>0, 'level'=>'', 'created_date'=>date('Y-m-d'), 'payment_status'=>0, 'sms_status'=>0, 'sms_date'=>date('Y-m-d')));
					 
					 $this->UpdateTotalCount();
					
					
				}
				
				
				
				
				
			}
			//$this->Create_Pair_Bv('10016773'); 
			
	}
	
	
	
	
	function create_steppool($id){
			$sponserDetail2=Sponserdetails::model()->getLeftNodeRightNode($id);
			 if(isset($sponserDetail2['LNode'])){
			 	$Lnode=$sponserDetail2['LNode'];
			 } else { $Lnode="0" ; }
			 
			 if(isset($sponserDetail2['RNode'])){
			 	$Rnode=$sponserDetail2['RNode'];
			 } else { $Rnode="0" ; }
			 
			 
			if($Lnode !=0 && $Rnode!=0){
				
						$Rid=$id;
						$MaxDetail=Steppools::model()->getMaxId();
						
						
						if($MaxDetail>0){
							 $positions=intval($MaxDetail)+1;
							//echo 'demol<br>';
						} else {
						  $positions	=1;
						}
						//echo $position_member.'<br>'; 
                        	
							$exist=Steppools::model()->checkExistById($Rid);
							if($exist==0){
								 Yii::app()->db->createCommand()->insert('steppools', array('Rid'=>$id, 'position_member'=>$positions,
								 'amount'=>0, 'steppool_bv'=>0, 'total_count'=>0, 'level'=>'', 'created_date'=>date('Y-m-d'), 'payment_status'=>0, 'sms_status'=>0, 'sms_date'=>date('Y-m-d')));
								 
								$this->UpdateTotalCount($Rid);
								
								
								/* $sendMobile=Registrations::model()->MobileNoByRID($id);
								$greensms="Dear%20Associate%20Congratulation%20your%20id(".$id.")%20has%20been%20entered%20successfully%20in%20Step%20Pool%20Plan.";
								
								$curentDate=date('Y-m-d H:i:s');		
								 $url = "http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=6dd3689460a74aaae178c2a57611222c&message=$greensms&senderId=STSFSU&routeId=1&mobileNos=$sendMobile&smsContentType=english";
									
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, $url);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_HEADER, 0);
								curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
								$result = curl_exec($ch);
								curl_exec($ch);*/
								
							}
					
					
				
			 }
		
	}
	
	function actionUpdate_Stepoolamt(){
			ini_set('max_execution_time',120); 
			$allMembers=Steppools::model()->getSteppoolByDesc();
			foreach($allMembers as $member){
				$Rid=$member['Rid'];
				$total_count=$member['total_count'];
				if($total_count>25 && $total_count<100){
				  $steppoolcheck=Steppools::model()->checkCountEntry($Rid, '1000');
					if($steppoolcheck==0){
						Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$Rid, 'plan_name'=>'',
								 'amount'=>'1000', 'totalmember'=>$total_count, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
					}		 
				}
				
				if($total_count>100 && $total_count<200){
					$steppoolcheck=Steppools::model()->checkCountEntry($Rid, '1500');
					if($steppoolcheck==0){
						Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$Rid, 'plan_name'=>'',
								 'amount'=>'1500', 'totalmember'=>$total_count, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
					}		 
				}
				 if($total_count>200 && $total_count<400){
					$steppoolcheck=Steppools::model()->checkCountEntry($Rid, '2500');
					if($steppoolcheck==0){
						Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$Rid, 'plan_name'=>'',
								 'amount'=>'2500', 'totalmember'=>$total_count, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
					}		 
				}
				
				if($total_count>400 && $total_count<800){
					$steppoolcheck=Steppools::model()->checkCountEntry($Rid, '5000');
					if($steppoolcheck==0){
						Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$Rid, 'plan_name'=>'',
								 'amount'=>'5000', 'totalmember'=>$total_count, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
					}		 
				}
				
				if($total_count>800 && $total_count<1600){
					$steppoolcheck=Steppools::model()->checkCountEntry($Rid, '10000');
					if($steppoolcheck==0){
						Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$Rid, 'plan_name'=>'',
								 'amount'=>'10000', 'totalmember'=>$total_count, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
					}		 
				}
				
				if($total_count>1600 && $total_count<3200){
					$steppoolcheck=Steppools::model()->checkCountEntry($Rid, '20000');
					if($steppoolcheck==0){
						Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$Rid, 'plan_name'=>'',
								 'amount'=>'20000', 'totalmember'=>$total_count, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
					}		 
				}
				
				if($total_count>3200 && $total_count<6400){
					$steppoolcheck=Steppools::model()->checkCountEntry($Rid, '30000');
					if($steppoolcheck==0){
						Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$Rid, 'plan_name'=>'',
								 'amount'=>'30000', 'totalmember'=>$total_count, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
					}		 
				}
				
				if($total_count>6400 && $total_count<12800){
					$steppoolcheck=Steppools::model()->checkCountEntry($Rid, '30000');
					if($steppoolcheck==0){
						Yii::app()->db->createCommand()->insert('steppoolamount', array('Rid'=>$Rid, 'plan_name'=>'',
								 'amount'=>'30000', 'totalmember'=>$total_count, 'paymentstatus'=>0, 'created'=>date('Y-m-d')));
					}		 
				}
				
				
			 }
			
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	function UpdateTotalCount(){
		$stepDetails=Steppools::model()->getSteppoolByDesc();
		$i=0;
		foreach($stepDetails as $details){
			$Rid=$details['Rid'];
			if($i==0){
				$connectionUpdate=Yii::app()->db;
				$sqlsteppool = "UPDATE steppools SET total_count = '0' WHERE Rid= '$Rid' ";
				$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
				$commandsteppool->execute();
			} else{
				$connectionUpdate=Yii::app()->db;
				$sqlsteppool = "UPDATE steppools SET total_count = total_count+1 WHERE Rid= '$Rid' ";
				$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
				$commandsteppool->execute();
			}
		$i++;
		}
		
	}
	
	public function actionIndex(){
		$this->layout= false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
            $this->redirect(array('/site/login'));
		} 
		$checkPermission=Yii::app()->session['permissions'];
		if($checkPermission[0]['lists']!=0){
			Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
			$this->redirect(array('/user/dashboard')); 
		}
		
		$model = new Steppools($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Steppools'])){
				$model->attributes=$_GET['Steppools'];
				$criteria->addSearchCondition('t.Rid', $_GET['Steppools']['Rid']."%", 0);
				//$criteria->addSearchCondition('t.final_kevel', $_GET['Steppools']['final_kevel'], 0);
				//$criteria->addSearchCondition('t.payment_status', $_GET['Steppools']['payment_status'], 0);
			}

		$dataProvider=new CActiveDataProvider('Steppools', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('id'=>true),  ), 
		'pagination' => array ( 'PageSize' => 15,  ) 
		));
		$this->render('index',array('dataProvider'=>$dataProvider,'model'=>$model));


	}
	
	
	public function actionSingle_Leg_Network(){
		$this->layout = false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
			$this->redirect(array('/site/login'));
		} 
		$checkPermission=Yii::app()->session['permissions'];
		if($checkPermission[0]['lists']!=0){
			Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
			$this->redirect(array('/user/dashboard'));
		}
		$this->render('single_leg_network',array('model'=>''));
	}
	
	
	
	public function actionSteppool(){
		$this->layout = false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
			$this->redirect(array('/site/login'));
		} 
			if(Yii::app()->user->getState('user_type')==0 || Yii::app()->user->getState('user_type')==3){
				$checkPermission=Yii::app()->session['permissions'];
				if($checkPermission[0]['view']!=0){
					Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
					$this->redirect(array('/user/dashboard'));
				}
				 $rid=base64_decode($_GET['RID']); 
			}
			if(Yii::app()->user->getState('user_type')==1){
				 $rid=base64_decode($_GET['RID']); 
			} 
			 
			if(Yii::app()->user->getState('user_type')==2){
				$rid=Yii::app()->user->usercode;
			} 
		
		$steppoolDetails=Steppools::model()->getLevelByRid($rid);
		$this->render('steppool',array('steppoolDetails'=>$steppoolDetails, 'id'=>$rid));
	}
	
	 function getLevel($MaxId, $level){
		if($MaxId>=pow(2,$level) && $MaxId<=pow(2,$level+1)-1){
		  return $level+1;
		} else{
		   return $level;
		}
 }
 
 
 function findLevel($Id){ //get level position of rid in this function
	$CurrentLevel=Steppools::model()->getByICurrentLevel($Id);
	$CurrentL=$CurrentLevel['level'];
	$max_id=$CurrentLevel['max_id'];
	
	$MaxL=Steppools::model()->getMaxLevel($Id);
	
	 $LevelCount=pow(2,$MaxL-$CurrentL);
	 $endPoint=$LevelCount+(pow(2,$MaxL-1))-1;
	 $nodeGap=pow(2,$MaxL-$CurrentL)*($max_id-(pow(2,$CurrentL-1)));
	$endPoint=$endPoint+$nodeGap;
	
	$Lcount=Steppools::model()->getLevelCount($MaxL, $endPoint);
	if($Lcount==0){
		 return $MaxL-$CurrentL-2;
	} else {
	   return $MaxL-$CurrentL-1;
	}
	 
	//debug($LevelCount);
	//exit;
	/*echo "Lcount".$Lcount=$this->Steppool->getLevelCount($MaxL-$CurrentL);
	echo "<br>";
	if($LevelCount==$Lcount){
	  return $MaxL-$CurrentL-1;
	} else {
	   return $MaxL-$CurrentL-2;
	}*/
	
}

function getamount($slevel){
			if($slevel==1){
			return	$refincome=400;
			}
			else if($slevel==2){
			return	$refincome=600;
			}
			else if($slevel==3){
			return	$refincome=1000;
			}
			else if($slevel==4){
			return	$refincome=2000;
			}
			else if($slevel==5){
			return	$refincome=4000;
			}
			else if($slevel==6){
			return	$refincome=8000;
			}
			else if($slevel==7){
			return	$refincome=16000;
			}
			else if($slevel==8){
			return	$refincome=32000;
			}
			else if($slevel==9){
			return	$refincome=64000;
			}
			else if($slevel==10){
				$refincome=125000;
			}
			else{
			return	$refincome=0;
			}}
			
			
function actionUpdate_Steppollamount(){
			ini_set('max_execution_time',120); 
			$qry="SELECT Sponserdetail.ImmediateSponserId  FROM sponserdetails as Sponserdetail inner join registrations as Registration on Sponserdetail.ImmediateSponserId=Registration.Rid where Registration.Role='S' and Registration.bv!='0' and  Sponserdetail.LNode!='NULL' and Sponserdetail.RNode!='NULL' and Registration.bv>='100' ";
			$command=Yii::app()->db->createCommand($qry);
			$SponserMembers=$command->queryAll();
			foreach($SponserMembers as $member){
				$this->updatelevelamount_new($member['ImmediateSponserId']);
			}
		
	}			
	
	function updatelevelamount_new($Id){
			 $exist=Steppools::model()->checkExistById($Id);// 
			if($exist!=0){
				$CurrentLevelDetail=Steppools::model()->getByICurrentLevel($Id);
				$CurrentLevel=$CurrentLevelDetail['level'];
				$CurrentMaxId=$CurrentLevelDetail['max_id'];
			
				$LevelMax=Steppools::model()->getMaxLevel($Id);
				
				$max_idMax=Steppools::model()->getMaxId($Id);
				
				$differeance=$CurrentMaxId+1;
				
				$temp_Id=$CurrentMaxId;
				$finalLevel=0;
				for($n=1;$n<=$LevelMax-$CurrentLevel; $n++){
					$temp_Id=$temp_Id+$differeance*(pow(2,$n-1));
					$temp_Id;
					if($temp_Id<=$max_idMax){
						$finalLevel++;					
					} else {
						
						break; 
					}
					
				}
				$final_kevel=($finalLevel)-1;
				//$level=$this->findLevel($Id);
				if($final_kevel>0){
					$amount=$this->getamount($final_kevel);
					
					$pastAmount=Steppools::model()->getAmountByRid($Id);
					$curnetDate=date('Y-m-d H:i:s');
					if($pastAmount!=$amount){		
					$bv=$amount/10;
						$connectionUpdate=Yii::app()->db;
						$sqlsteppool = "UPDATE steppools SET amount = '$amount', steppool_bv='$bv',  final_kevel = '$final_kevel', created_date='$curnetDate' WHERE Rid= '$Id' ";
						$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
						$commandsteppool->execute();
						$sendMobile=Registrations::model()->MobileNoByRID($Id);
										
								$greensms="Dear%20Associate%20Congratulation%20your%20id(".$Id.")%20has%20been%20entered%20successfully%20in%20Step%20Pool%20Level%20is%20".$final_kevel;
								
								$curentDate=date('Y-m-d H:i:s');		
								$url = "http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=6dd3689460a74aaae178c2a57611222c&message=$greensms&senderId=STSFSU&routeId=1&mobileNos=$sendMobile&smsContentType=english";
								
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, $url);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_HEADER, 0);
								curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
								$result = curl_exec($ch);
								curl_exec($ch);
					}
				} 
				
			}
	}	


	
	
			
	function UpdateLevels($id){
		    //$id=$_GET['id']; 
			$this->factorial($id);
			
	}	
	
	function factorial($number) {  
				global $counter;
				$counter ++;
				$quotient=$number/2; 
				$reminder=$number%2; 
				if(($counter-1)>0){
					$getLevel=$counter-1;
				} else {
					$getLevel=0;
				}
				$Rid=Steppools::model()->getRidByID(floor($quotient));
				$existingLevel=Steppools::model()->getLevelByRid($Rid);
				//echo $quotient.'/'.$getLevel;
				if($existingLevel!=$getLevel){
						$amount=$this->getamount($getLevel);
						$bv=$amount/10;
						$curnetDate=date('Y-m-d H:i:s');
						$connectionUpdate=Yii::app()->db;
						$sqlsteppool = "UPDATE steppools SET amount = '$amount', steppool_bv='$bv',  final_kevel = '$getLevel', created_date='$curnetDate',  payment_status='0' WHERE Rid= '$Rid' ";
						$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);
						$commandsteppool->execute();
						$sendMobile=Registrations::model()->MobileNoByRID($Rid);
						$greensms="Dear%20Associate%20Congratulation%20your%20id(".$Rid.")%20has%20been%20entered%20successfully%20in%20Step%20Pool%20Level%20is%20".$getLevel;
								
						$curentDate=date('Y-m-d H:i:s');		
						$url = "http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=6dd3689460a74aaae178c2a57611222c&message=$greensms&senderId=STSFSU&routeId=1&mobileNos=$sendMobile&smsContentType=english";
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, $url);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_HEADER, 0);
						curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
						$result = curl_exec($ch);
						curl_exec($ch);
					
				}
				//echo $quotient.'/'.$getLevel.'/'.$reminder;
				//echo '<br>';  
				if ($reminder!=0) { 
					if((floor($quotient)%2)!=0){
						return  $this->factorial($quotient); 
					} 
					
				} 
				
				
				
				//echo $quotient.'/'.$counter;
				//echo '<br>';
				//echo Steppools::model()->getRidByID(floor($quotient)).'/'.$getLevel;
		}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}