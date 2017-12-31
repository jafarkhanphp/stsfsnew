<?php

class BinaryincomeController extends Controller
{
	

	
	public function actionIndex(){
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
		
		
		$model = new Binaryincome($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Binaryincome'])){
				$model->attributes=$_GET['Binaryincome'];
				$criteria->addSearchCondition('t.RID', '%'.$_GET['Binaryincome']['RID']."%", 0);				
				$criteria->addSearchCondition('t.created', '%'.$_GET['Binaryincome']['created']."%", 0);
			}
			if(Yii::app()->user->user_type==2){/// For admin Login
				
				$usercode=Yii::app()->user->getState('usercode');
				$criteria->addCondition('t.RID="'.$usercode.'"');
				
			 
			}
		$dataProvider=new CActiveDataProvider('Binaryincome', array('criteria' => $criteria,
		'sort'=>array( "defaultOrder"=>"created DESC" ), 
		'pagination' => array ( 'PageSize' => 30,  ) ,
		));
		$this->render('index',array('dataProvider'=>$dataProvider,'model'=>$model));
	}
	
	public function actionPair(){
		$this->layout = false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
			$this->redirect(array('/site/login'));
		} 
			if(Yii::app()->user->getState('user_type')==0 || Yii::app()->user->getState('user_type')==3){
				$checkPermission=Yii::app()->session['permissions'];
				if($checkPermission[0]['lists']!=0){
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
		
		
		$model = new Binaryincome($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Binaryincome'])){
				$model->attributes=$_GET['Binaryincome'];
					$criteria->addSearchCondition('t.RID', '%'.$_GET['Binaryincome']['RID']."%", 0);				
				//$criteria->addSearchCondition('t.name', '%'.$_GET['Referalamount']['name']."%", 0);
			}
			 
			$criteria->addCondition("t.RID='$rid'");
		$dataProvider=new CActiveDataProvider('Binaryincome', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('id'=>true),  ), 
		'pagination' => array ( 'PageSize' => 15,  ) ,
		));
		$this->render('pair',array('dataProvider'=>$dataProvider,'model'=>$model, 'id'=>$rid));
	}



public function actionMember_Mbv(){
		$id=Yii::app()->user->id;
		if(Yii::app()->user->getId()===null){  
			Yii::app()->user->setFlash('error', "Please login again!");
            $this->redirect('/site/login');
		} 
		
	  $Rid=User::model()->getUserCode($id);
		
		$model = new Binaryincome($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Binaryincome'])){
				$model->attributes=$_GET['Binaryincome'];
				$criteria->addSearchCondition('t.RID', '%'.$_GET['Binaryincome']['RID']."%", 0);				
				//$criteria->addSearchCondition('t.name', '%'.$_GET['Referalamount']['name']."%", 0);
			}
		$criteria->addCondition('t.RID="'.$Rid.'"');
		$dataProvider=new CActiveDataProvider('Binaryincome', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('id'=>true),  ), 
		'pagination' => array ( 'PageSize' => 15,  ) ,
		));
		$this->render('member_mbv',array('dataProvider'=>$dataProvider,'model'=>$model));

	
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
	public function actionUpdate_Banery_old(){
		$setingDetails=Settings::model()->getSiteSettingByName('generate_payout_days');
		//$invDifrentDate=$setingDetails['setting_value'];
		//print_r('ss<pre>');   print_r($setingDetails);   print_r('</pre>');  exit;
		$invoice_detail=Invoices::model()->getInvoiceById();
		 $curentDate=date('Y-m-d');
		//print_r('<pre>');   print_r($invoice_detail);   print_r('</pre>');  exit;
		if(!empty($invoice_detail)){
			 $invoiceDate=date('Y-m-d', strtotime($invoice_detail. ' + '.$setingDetails .'days'));
		} else {
			$invoiceDate=date('Y-m-d');
		}
		if($invoiceDate==$curentDate){
			$sql="SELECT Sponserdetails.ImmediateSponserId,  Registration.created  FROM sponserdetails as Sponserdetails inner join registration as Registration on Sponserdetails.ImmediateSponserId=Registration.Rid where Registration.roles='1' ";
		$command=Yii::app()->db->createCommand($sql);
		$sponsernDetail=$command->queryAll();
			for($i=0;$i<(count($sponsernDetail));$i++){
				$Rid=$sponsernDetail[$i]['ImmediateSponserId'];
				$this->pairIncome($Rid);
			}
			Yii::app()->user->setFlash('success', '<i class="fa fa-check-circle"></i><strong>Pair Income Updated Successfully.</strong>');
		  	$this->redirect(array('user/closing'));
				
		} else {
				Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied. You can create Invoice on '.$invoiceDate.'</strong>');
				$this->redirect(array('user/closing'));
			
		}
	}
	function pairIncome_old($Rid){
		ini_set('max_execution_time',120); 
			$model=new Binaryincome;
			if($Rid){
					 
					 $totalLeft=Sponserdetails::model()->leftCount($Rid)-1;
					 $totalRight=Sponserdetails::model()->RightCount($Rid)-1;
					// print_r('<pre>');   print_r($totalRight.'-'.$totalLeft);   print_r('</pre>');  exit;
					
					$agg=($totalLeft < $totalRight)?($totalLeft):($totalRight);
					 if($agg>0){
						$getPaircount=Binaryincome::model()->getPairByRid($Rid);
						
						//debug($getPaircount);
						if(!empty($getPaircount)){
							$pair_count=$agg_Pair-$getPaircount['agg_pair'];
							$aggrigayPair=$agg;
							$aggLeft=$totalLeft  ;
							$aggRight=$totalRight; 
							$leftPair=abs(($getPaircount['aggLeft'])-$totalLeft);
							$RightPair=abs(($getPaircount['aggRight'])-($totalRight));
							$balanceLeft=$totalLeft-$agg;
							$balanceRight=$totalRight-$agg;
						
						} else {
							$aggrigayPair=$agg;
							$pair_count=$agg;
							$leftPair=$totalLeft;
							$RightPair=$totalRight;
							$balanceLeft=$totalLeft-$agg;
							$balanceRight=$totalRight-$agg;
							$aggLeft=$totalLeft;
							$aggRigh=$totalRight;
						}
						
						$pairAmt=Settings::model()->getSiteSettingByName('pair_amount');
						$Amount=$agg*$pairAmt;
							
							$checkExist=Binaryincome::model()->RidExist($Rid, $totalRight,$totalLeft);
							//debug($checkExist);
							if($checkExist==0 && $agg!=0){
								$query=Yii::app()->db->createCommand()->insert('binaryincome',
											array('RID'=>$Rid,
											'BalanceLeft'=>$balanceLeft, 
											'balanceRight'=>$balanceRight, 
											'aggLeft'=>$aggLeft,
											'aggRight'=>$aggRigh,
											'totalLeft'=>$leftPair,
											'totalRight'=>$RightPair,
											'pair_count'=>$pair_count,
											'amount'=>$Amount,
											'agg_pair'=>$aggrigayPair,
											'created'=>date('Y-m-d H:i:s'),
											'payment_status'=>0
											));
							
							}
							
					 }

			 	 
			}
			 
	}
	
	public function actionUpdate_Banery(){
			$sql="SELECT Sponserdetails.ImmediateSponserId,  Registration.created  FROM sponserdetails as Sponserdetails inner join registration as Registration on Sponserdetails.ImmediateSponserId=Registration.Rid where Registration.roles='1' ";
		$command=Yii::app()->db->createCommand($sql);
		$sponsernDetail=$command->queryAll();
			for($i=0;$i<(count($sponsernDetail));$i++){
				$Rid=$sponsernDetail[$i]['ImmediateSponserId'];
				$this->pairIncome($Rid);
			}
	}
	
	function pairIncome($Rid){
		ini_set('max_execution_time',120); 
			$model=new Binaryincome;
			if($Rid){
					 $totalLeft=Sponserdetails::model()->leftCount($Rid)-1;
					 $totalRight=Sponserdetails::model()->RightCount($Rid)-1;
				 //print_r('<pre>');   print_r($totalRight.'-'.$totalLeft);   print_r('</pre>');  exit;
					$agg=($totalLeft < $totalRight)?($totalLeft):($totalRight);
					 if($agg>0){
						$getPaircount=Binaryincome::model()->getPairByRid($Rid);
						$pairAmt=Settings::model()->getSiteSettingByName('pair_amount');
						//debug($getPaircount);
						if(!empty($getPaircount)){
							$pair_count=$agg-$getPaircount['agg_pair'];
							$aggrigayPair=$agg;
							$aggLeft=$totalLeft  ;
							$aggRight=$totalRight; 
							$leftPair=abs(($getPaircount['aggLeft'])-$totalLeft);
							$RightPair=abs(($getPaircount['aggRight'])-($totalRight));
							$balanceLeft=$totalLeft-$agg;
							$balanceRight=$totalRight-$agg;
							$Amount=($agg-$getPaircount['agg_pair'])*$pairAmt;
						
						} else {
							$aggrigayPair=$agg;
							$pair_count=$agg;
							$leftPair=$totalLeft;
							$RightPair=$totalRight;
							$balanceLeft=$totalLeft-$agg;
							$balanceRight=$totalRight-$agg;
							$aggLeft=$totalLeft;
							$aggRight=$totalRight;
							$Amount=$agg*$pairAmt;
						}
						
						
						
							
							$checkExist=Binaryincome::model()->RidExist($Rid, $aggrigayPair);
							//debug($checkExist);
							if($checkExist==0 && $agg!=0){
								$query=Yii::app()->db->createCommand()->insert('binaryincome',
											array('RID'=>$Rid,
											'BalanceLeft'=>$balanceLeft, 
											'balanceRight'=>$balanceRight, 
											'aggLeft'=>$aggLeft,
											'aggRight'=>$aggRight,
											'totalLeft'=>$leftPair,
											'totalRight'=>$RightPair,
											'pair_count'=>$pair_count,
											'amount'=>$Amount,
											'agg_pair'=>$aggrigayPair,
											'created'=>date('Y-m-d H:i:s'),
											'payment_status'=>0
											));
							
							}
							
					 }

			 	 
			}
			 
	}
	
	
	
}