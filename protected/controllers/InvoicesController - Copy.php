<?php

class InvoicesController extends Controller{
	
	public function actionIndex($search=''){
		$this->layout = false;
			if(Yii::app()->user->id==''){  
				Yii::app()->user->setFlash('error', "Please login again!");
				$this->redirect(array('/site/login'));
			} 
			$checkPermission=Yii::app()->session['permissions'];
			if($checkPermission[0]['lists']!=0){
				Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> PermissionDenied</strong>');
				$this->redirect(array('/user/dashboard'));
			}
			
		$model = new Invoices($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Invoices'])){
				$model->attributes=$_GET['Invoices'];
				$criteria->addSearchCondition('t.rid', '%'.$_GET['Invoices']['rid']."%", 0);				
				$criteria->addSearchCondition('t.name', '%'.$_GET['Invoices']['name']."%", 0);
				$criteria->addSearchCondition('t.payment_status', $_GET['Invoices']['payment_status']."%", 0);
				if($_GET['Invoices']['cycle_date_from']!='' & $_GET['Invoices']['cycle_date_to']!=''){
					$fromdate=date('Y-m-d', strtotime($_GET['Invoices']['cycle_date_from']));
					$todate=date('Y-m-d', strtotime($_GET['Invoices']['cycle_date_to']));
					$criteria->condition = "t.cycle_date_from >= '$fromdate' AND t.cycle_date_to <= '$todate'";
				}
				
			} else {
					if($_GET['fromDate']!='' & $_GET['toDate']!=''){
						$fromdate=date('Y-m-d', strtotime($_GET['fromDate']));
						$todate=date('Y-m-d', strtotime($_GET['toDate']));
						$criteria->condition = "t.cycle_date_from >= '$fromdate' AND t.cycle_date_to <= '$todate'";
				}
			}
			
		if(Yii::app()->user->getState('user_type')==1){
			$criteria->join = 'LEFT JOIN registrations ON registrations.Rid = t.rid';
			$userBranch=Yii::app()->user->getState('branch_id');
			$criteria->condition = "registrations.branch_id= '$userBranch'";
		}
			
			
		$dataProvider=new CActiveDataProvider('Invoices', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('id'=>true),  ), 
		'pagination' => array ( 'PageSize' => 20,  ) ,
		));
		$this->render('index',array('dataProvider'=>$dataProvider,'model'=>$model));

	
	}
	
	function actionBranch_Wise_Invoice(){
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
		
	  	 $model = new Invoices;
		$fireQuery='';
		$fromDt='';
		$toDt='';
		$Branch='';
		$totalamt='';
		if(isset($_POST['Invoices'])){
				if($_POST['Invoices']['From']!="" && $_POST['Invoices']['To']!="" && $_POST['Invoices']['Branch']!=""){
							   $fromDt=date("Y-m-d", strtotime($_POST['Invoices']['From']));
							   $toDt=date("Y-m-d" , strtotime($_POST['Invoices']['To']));
							   $Branch=$_POST['Invoices']['Branch'];
					   
								 $qry1="SELECT invoices.id, invoices.rid, invoices.cycle_date_from 	, invoices.cycle_date_to, invoices.total_bv, invoices.gross_amount, invoices.created_date, invoices.payment_status, registrations.FirstName FROM invoices left join registrations on registrations.Rid=invoices.rid WHERE registrations.branch_id='$Branch' and invoices.cycle_date_from >= '$fromDt' AND invoices.cycle_date_to <= '$toDt'		";
								 $command=Yii::app()->db->createCommand($qry1);
		  	 					$fireQuery=$command->queryAll();
								$totalamt=Yii::app()->db->createCommand("SELECT sum(invoices.gross_amount) as totalamt FROM invoices left join registrations on registrations.Rid=invoices.rid WHERE registrations.branch_id=$Branch and invoices.cycle_date_from >= '$fromDt' AND invoices.cycle_date_to <= '$toDt' ")->queryScalar();
								
					} else {
								Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Please enter From date and To date</strong>'); $this->redirect(array('branch_wise_invoice'));
								
				}
		} 
		$this->render('branch_wise_invoice',array('model'=>$model, 'fireQuery'=>$fireQuery, 'totalamt'=>$totalamt, 'searchdetails'=>array('fromDt'=>$fromDt, 'toDt'=>$toDt, 'Branch'=>$Branch)));	
	}
	
	public function actionBranch_Wise_Invoice_Export(){
		$fromDt=$_GET['From'];
		$toDt=$_GET['To'];
		$Branch=$_GET['Branch'];
		$model = new Invoices(); //Table Name
        $qry1="SELECT invoices.id, invoices.rid, invoices.cycle_date_from 	, invoices.cycle_date_to, invoices.total_bv, invoices.gross_amount, invoices.created_date, invoices.payment_status, registrations.FirstName FROM invoices left join registrations on registrations.Rid=invoices.rid WHERE registrations.branch_id='$Branch' and invoices.cycle_date_from >= '$fromDt' AND invoices.cycle_date_to <= '$toDt'		";
		 $command=Yii::app()->db->createCommand($qry1);
		$fireQuery=$command->queryAll();
		
       //Begin an excel object
        $objPHPExcel = Yii::app()->excel;
        //Set labels in excel file
        $objPHPExcel->getActiveSheet()->setCellValue('A1','Invoice Id');
        $objPHPExcel->getActiveSheet()->setCellValue('B1','RID');
        $objPHPExcel->getActiveSheet()->setCellValue('C1','Name');
        $objPHPExcel->getActiveSheet()->setCellValue('D1','From');
		$objPHPExcel->getActiveSheet()->setCellValue('E1','To');
		$objPHPExcel->getActiveSheet()->setCellValue('F1','Total BV');
		$objPHPExcel->getActiveSheet()->setCellValue('G1','Amount');
		$objPHPExcel->getActiveSheet()->setCellValue('H1','Payment Status');
		//$objPHPExcel->getActiveSheet()->setCellValue('F1',$labels[5]);
        $i = 2;
        foreach($fireQuery as $memberDetails){
            //Set value for each cell
           // $objPHPExcel->getActiveSheet()->setCellValue('A'. $i,$record->id);
            $objPHPExcel->getActiveSheet()->setCellValue('A'. $i,$memberDetails['id']);
            $objPHPExcel->getActiveSheet()->setCellValue('B'. $i,$memberDetails['rid']);
            $objPHPExcel->getActiveSheet()->setCellValue('C'. $i,$memberDetails['FirstName']);
			$objPHPExcel->getActiveSheet()->setCellValue('D'. $i,$memberDetails['cycle_date_from']);
			$objPHPExcel->getActiveSheet()->setCellValue('E'. $i,$memberDetails['cycle_date_to']);
			$objPHPExcel->getActiveSheet()->setCellValue('F'. $i,$memberDetails['total_bv']);
			$objPHPExcel->getActiveSheet()->setCellValue('G'. $i,$memberDetails['gross_amount']);
			if($memberDetails['payment_status']==0){	$printstatus='Unpaid';} else { $printstatus='Paid'; }				
			$objPHPExcel->getActiveSheet()->setCellValue('H'. $i,$printstatus);
            $i++;
        }
        //Set width for each B,C,D cell 
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getStyle("A1:H1")->getFont()->setBold(true)->getColor()->setRGB('#287EBB');;
        //file name
        $filename = date('Ymmdd')."branchwise.csv";
        //Save to abc.xlsx file
        // You can use like PHPExcel documentation from codeplex: 
        //$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
       // $objWriter->save($filename);
        //$objPHPExcel->saveExcel2007($objPHPExcel,$filename);
		header('Content-Type: application/vnd.ms-excel');
    	header('Content-Disposition: attachment;filename="'.$filename.'"');
    	header('Cache-Control: max-age=0');
    	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    	$objWriter->save('php://output'); // This function for download excel file 
	}
	
	
	public function actionInvice_Wise_Listing($search=''){
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
			
		$model = new Invoices($scenario='search');
		$criteria = new CDbCriteria;
		
		$where=' where 1=1 ';
		if(isset($_GET['Invoices'])){
				$model->attributes=$_GET['Invoices'];
				//$criteria->addSearchCondition('t.rid', '%'.$_GET['Invoices']['rid']."%", 0);				
				//$criteria->addSearchCondition('t.name', '%'.$_GET['Invoices']['name']."%", 0);
				//$criteria->addSearchCondition('t.payment_status', $_GET['Invoices']['payment_status']."%", 0);
				if($_GET['Invoices']['cycle_date_from']!='' & $_GET['Invoices']['cycle_date_to']!=''){
					$fromdate=date('Y-m-d', strtotime($_GET['Invoices']['cycle_date_from']));
					$todate=date('Y-m-d', strtotime($_GET['Invoices']['cycle_date_to']));
					$criteria->condition = "t.cycle_date_from >= '$fromdate' AND cycle_date_to <= '$todate'";
					$where.= " and   t.cycle_date_from >= '$fromdate' AND t.cycle_date_to <= '$todate'";;
				}
			}
			
			
		$criteria->select = " DISTINCT t.created_date, t.cycle_date_from, t.cycle_date_to";
		$criteria->join = 'LEFT JOIN registrations ON registrations.Rid = t.rid';
		$where2='';
		if(Yii::app()->user->getState('user_type')==1){
			$userBranch=Yii::app()->user->getState('branch_id');
			$criteria->condition = "registrations.branch_id= '$userBranch'";
			$where2=" and  registrations.branch_id= '$userBranch' ";
		}
		
		 //$criteria->distinct = true;

  		$totalCount = Yii::app()->db->createCommand("SELECT COUNT(DISTINCT t.created_date) FROM invoices as  t LEFT JOIN registrations ON registrations.Rid = t.rid  $where  $where2 ")->queryScalar();

			
			
		$dataProvider=new CActiveDataProvider('Invoices', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('created_date'=>true),  ), 
		'pagination' => array ( 'PageSize' => 20,  ) ,  'totalItemCount' => $totalCount,

		));
		$this->render('invice_wise_listing',array('dataProvider'=>$dataProvider,'model'=>$model));

	
	}
	
	
	public function actionMember_Invoice($search=''){
		$this->layout = false;
			if(Yii::app()->user->id==''){  
				Yii::app()->user->setFlash('error', "Please login again!");
				$this->redirect(array('/site/login'));
			} 
			
			$checkPermission=Yii::app()->session['permissions'];
			if(!empty($checkPermission)){
				if($checkPermission[0]['lists']!=0){
					Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
					$this->redirect(array('/user/dashboard'));
				}
			} else {
				if(Yii::app()->user->getState('user_type')!=2){
					Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
					$this->redirect(array('/site/login'));
				}
			}
			
			$model = new Invoices($scenario='search');
			$criteria = new CDbCriteria;
			$rid=Yii::app()->user->getState('usercode');
		
		if(isset($_GET['Invoices'])){
				$model->attributes=$_GET['Invoices'];
				$criteria->addSearchCondition('t.name', '%'.$_GET['Invoices']['name']."%", 0);
				$criteria->addSearchCondition('t.payment_status', $_GET['Invoices']['payment_status']."%", 0);
				if($_GET['Invoices']['cycle_date_from']!='' & $_GET['Invoices']['cycle_date_to']!=''){
					$fromdate=date('Y-m-d', strtotime($_GET['Invoices']['cycle_date_from']));
					$todate=date('Y-m-d', strtotime($_GET['Invoices']['cycle_date_to']));
					$criteria->condition = "t.cycle_date_from >= '$fromdate' AND t.cycle_date_to <= '$todate'";
				}
				
			} 
			
		$criteria->condition = "rid='$rid' ";
		$dataProvider=new CActiveDataProvider('Invoices', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('id'=>true),  ), 
		'pagination' => array ( 'PageSize' => 20,  ) ,
		));
		$this->render('member_invoice',array('dataProvider'=>$dataProvider,'model'=>$model));

	
	}
	
	
	public function actionInvoice_Print(){
		 $this->layout = false;
			if(Yii::app()->user->id==''){  
				Yii::app()->user->setFlash('error', "Please login again!");
				$this->redirect(array('/site/login'));
			} 
			$checkPermission=Yii::app()->session['permissions'];
			if(!empty($checkPermission)){
				if($checkPermission[0]['prints']!=0){
					Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong> Permission Denied</strong>');
					$this->redirect(array('/user/dashboard'));
				}
			} 
			
			
			
		$invoiceid=base64_decode($_GET['id']);
		$model = new Invoices();
		if(isset($_POST['Invoices'])){
			$model->attributes=$_POST['Invoices'];
			$check_no=$_POST['Invoices']['check_no'];
			$advance=abs($_POST['Invoices']['advance']);
			$totalAmt=Invoices::model()->getTotalAmtById($invoiceid);
			$Rid=Invoices::model()->getRIDById($invoiceid);
			if($advance>$totalAmt){
				Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong>Advance amount should not be greater than total amount </strong>');
				//$this->redirect(array('/user/dashboard'));
				$this->redirect(Yii::app()->request->urlReferrer);
			}
			
			if($advance!=0){
				$grouseAmt=$totalAmt-$advance;
				$pastAdvanceBalance=Accounts::model()->getAvancebyRid($Rid);
				$balancePaid=$pastAdvanceBalance-$advance;
				Yii::app()->db->createCommand()->insert('accounts', array('rid'=>$Rid,'invoice_id'=>$invoiceid, 'payed'=>$advance, 'balance'=>$balancePaid, 'payment_date'=>date('Y-m-d')));
			} else {
				$grouseAmt=$totalAmt;
			}
			
			
			$connection=Yii::app()->db;
			$sql = "UPDATE  invoices SET check_no = '$check_no', advance='$advance', gross_amount='$grouseAmt' WHERE id = '$invoiceid'";
			$command = $connection->createCommand($sql);
			$command->execute();
		
		}
		
		
		
		$invoiceDetail = Invoices::model()->findByPk($invoiceid);
		$this->render('invoice_print',array('model'=>$model, 'invoiceDetail'=>$invoiceDetail));
	}
	
	
	function actionAll_Invoice(){
			$fromDate='2017-12-07'//date('Y').'-'.date('m').'-01';
			//$toDate=date('Y').'-'.date('m').'-15';
			//$lastDay=date("t", strtotime($fromDate)); 
			
			//$endDate=date('Y').'-'.date('m').'-'.$lastDay;
			$curentDate=date('Y-m-d');
			//$this->create_invoice(10015568,$fromDate, $toDate, $toDate); exit;
			//exit;
			
			
					$allMembers=Sponserdetails::model()->getAllImidateInsponser();
					foreach($allMembers as $member){
						$this->create_invoice($member['ImmediateSponserId'],$fromDate, '', $curentDate);
					}
			
	}
	
	
	function create_invoice($Rid, $startDate,$todate,$endDate){
			ini_set('max_execution_time',120); 
			$curentDate=date('Y-m-d');
			$FirstEnding=date('Y').'-'.date('m').'-15';
			$tdspersentage=Settings::model()->getSiteSettingByName('tds');
			$serviceCharges=Settings::model()->getSiteSettingByName('handling');
			$bv_rate=Settings::model()->getSiteSettingByName('bv_rate');
			//$advanceAmount=Accounts::model()->getAvancebyRid($Rid)==''?'':Accounts::model()->getAvancebyRid($Rid);
			
			  $sql="SELECT sum(total_bv_amt) as total amt, sum(total_bv) as totalbv FROM binaryincomes where RID='$Rid' and  payment_status=0 "; 
			 $command=Yii::app()->db->createCommand($sql);
			 $pairDetails=$command->queryRow();
			
					$total_pair_bv 			=0;
					$total_left_bv			=0;
					$total_right_bv			=0;
					$current_left_bv		=0;
					$current_right_bv		=0;
					$balance_left_bv		=0;
					$balance_right_bv		=0;
					$total_bv				=0;
					$total_bv_amount 		=0;
					
					$banery_id=0;
					
					
			if(!empty($pairDetails)){
							//$total_pair_bv 			=$pairDetails['after_caping_bv'];
							$total_left_bv			=$pairDetails['agg_left_bv'];
							$total_right_bv			=$pairDetails['agg_right_bv'];
							$current_left_bv		=$pairDetails['left_bv'];
							$current_right_bv		=$pairDetails['right_bv'];
							$balance_left_bv		=$pairDetails['balance_left_bv'];
							$balance_right_bv		=$pairDetails['balance_right_bv'];
							$bv_rate				=$pairDetails['bv_rate'];
							$total_bv				=$pairDetails['total_bv'];
							$total_bv_amount 		=$pairDetails['total_bv_amt'];
							
							$banery_id=$pairDetails['id'];
			} 
			
			
			if (($curentDate <= $FirstEnding)) { //For first Invoice 
			 
      			$fDate=$startDate;
				$tDate=$todate;
				
				$reward_id			=	'0';
				$reward_name 		=	'0';
				$reward_instalment	=	'0';
				$reward_amount		=	'0';
				$reward_bv			=	'0';
				$reward_remarks 	=	'Not Applicable  for this invoice';
				
    		}else  { // For Second Invoice 
				$fDate=$startDate;
				$tDate=$endDate;
      			$rewardDetail=Rewards::model()->getRewardAmt($Rid); //result in array
				if(!empty($rewardDetail)){
						$binaryDetail=Binaryincome::model()->checkMonthlyBv($Rid); //get total mumber curent year
						$baneryCaping=Settings::model()->getSiteSettingByName('reward_caping_bv');
						
						if($binaryDetail>=$baneryCaping){
							$reward_id			=	$rewardDetail['id'];
							$reward_name 		=	$rewardDetail['rewards_name'];
							$reward_instalment	=	$rewardDetail['installment_id'];
							$reward_amount		=	$rewardDetail['amount'];
							$reward_bv			=	$rewardDetail['reward_bv'];
							$reward_remarks 	=	'';
						} else{
							$reward_id			=	0;//$rewardDetail['id'];
							$reward_name 		=	0;//$rewardDetail['rewards_name'];
							$reward_instalment	=	0;//$rewardDetail['installment_id'];
							$reward_amount		=	0;//$rewardDetail['amount'];
							$reward_bv			=	0;//$rewardDetail['reward_bv'];
							$reward_remarks 	=	'Not Applicable because not complete monthly (400) BV';
						}
					
						
					
				} else {
					$reward_id			=	'0';
					$reward_name 		=	'0';
					$reward_instalment	=	'0';
					$reward_amount		=	'0';
					$reward_bv			=	'0';
					$reward_remarks 	=	'';
				}
   			}
			
			
			//exit;
			$stepPoolAmt=Steppools::model()->getStepPoolAmt($Rid);
			if(!empty($stepPoolAmt)){
				if($stepPoolAmt['final_kevel']==0){
					$steppool_level 	= 	$stepPoolAmt['final_kevel'];
					$steppool_amount 	=	$stepPoolAmt['amount'];
					$steppool_bv		=	$stepPoolAmt['steppool_bv'];
					$steppool_status 	=	'Not In Level';
					$last_level 		=	$stepPoolAmt['final_kevel'];
				}else{
					$steppool_level 	= 	$stepPoolAmt['final_kevel'];
					$steppool_amount 	=	$stepPoolAmt['amount'];
					$steppool_bv		=	$stepPoolAmt['steppool_bv'];
					$steppool_status 	=	'UnPaid';
					$last_level 		=	$stepPoolAmt['final_kevel'];
				}
				
			
			} else {
				$stepPoolcheck=Steppools::model()->stepPoolcheck($Rid);//check last payment 
				if(!empty($stepPoolcheck)){
					if($stepPoolcheck['final_kevel']==0){
						$steppool_level 	= 	$stepPoolcheck['final_kevel'];
						$steppool_amount 	=	0;
						$steppool_bv		=	0;
						$steppool_status 	=	'Not In Level';
						$last_level 		=	0;
					} else {
						$steppool_level 	= 	0;
						$steppool_amount 	=	0;
						$steppool_bv		=	0;
						$steppool_status 	=	'Paid';
						$last_level 		=	$stepPoolcheck['final_kevel'];
					}
					
				} else {
					$steppool_level 	= 	0;
					$steppool_amount 	=	0;
					$steppool_bv		=	0;
					$steppool_status 	=	'Not Applicable';
					$last_level 		=	0;
				}
			}
			
			
			
			
			
			
			
			
			$registrationDetails=Registrations::model()->getSomeDetailsByRID($Rid);
			$name=$registrationDetails['FirstName'].' '.$registrationDetails['LastName'] ;
			$address='' ;
			$mobile='';
			$PanNo='';
			$joining_bv='';
			$joining_package_id='';
			$pan='';
			if(!empty($registrationDetails)){
			    $name=$registrationDetails['FirstName'].' '.$registrationDetails['LastName'] ;
				$address=$registrationDetails['Address']; 
				$mobile=$registrationDetails['ContactNo1'];
				$PanNo=$registrationDetails['PanNo'];
				$joining_bv=$registrationDetails['bv'];
				$joining_package_id=$registrationDetails['package_id']; 
				$pan=$registrationDetails['PanNo'];
			}
			
			
			//debug($policy_no2);
			$BankDetail=Bankdetails::model()->getBankDetasilById($Rid);
			$bank_name='';
			$account_no='';
			if(!empty($BankDetail)){
			    $bank_name=$BankDetail['BankName'];
				$account_no=$BankDetail['AccNo'];
			}
			
			
			 $sql='SELECT  Referalamount.id, Referalamount.ref_amount, Referalamount.bv FROM referalamounts AS Referalamount 
			 WHERE Referalamount.RID="'.$Rid.'" and  Referalamount.payment_status=0  ';
		 	$command=Yii::app()->db->createCommand($sql);
		  	$referalDetails=$command->queryRow();
			//print_r($referalDetails); exit;
			//$referalDetails=Referalamount::model()->getRefralDetailsRids($Rid);
			//echo $referalDetails;
			$referalAmount=0;
			$referalbv=0;
			if(!empty($referalDetails)){
			    if($referalDetails['ref_amount']!=0){
					$referalAmount=$referalDetails['ref_amount'];
					$referalbv=$referalDetails['bv'];
				} else {
					$referalAmount=0;
					$referalbv=0;
				}
				
			}
			//print_r($referalbv); exit;
			if($totalpairAmount<0){
				$totalpairAmount=0;
			} else {
				$totalpairAmount=$totalpairAmount;
			}
			
			
			$totalAmount=($referalAmount+$steppool_amount+$reward_amount+$totalpairAmount);
			 $tdsamount=($totalAmount*$tdspersentage)/100;
			 
			 $servcharges=$totalAmount*$serviceCharges/100;
			$NetAmount=$totalAmount-$tdsamount-$servcharges;
			if($NetAmount>250){
				$remarks='';
			} else {
				$remarks='Payment is not applicable Because your payment amount less then 500/-';
			}
			$total_bvs=$total_bv+$reward_bv+$steppool_bv+$referalbv;
			
			
		if($NetAmount>0)	{
			if(Invoices::model()->checkInvoiceDeuplicate($Rid, date('Y-m-d'))==0){
			 $query=Yii::app()->db->createCommand()->insert('invoices', array('rid'=>$Rid,'banery_id'=>$banery_id, 'joining_bv'=>$joining_bv, 'joining_package_id'=>$joining_package_id, 'name'=>$name, 'address'=>$address, 'mobile'=>$mobile , 'pan'=>$pan, 'cycle_date_from'=>$fDate, 'cycle_date_to'=>$tDate, 'account_no'=>$account_no, 'check_no'=>'', 'bank_name'=>$bank_name, 'referal_amount'=>$referalAmount,  'referal_bv'=>$referalbv,   'steppool_level'=>$steppool_level, 'steppool_amount'=>$steppool_amount, 'steppool_bv'=>$steppool_bv, 'steppool_status'=>$steppool_status, 'last_level'=>$last_level, 'total_pair'=>$totalPair, 'total_pair_bv'=>$total_pair_bv, 'total_left_bv'=>$total_left_bv, 'total_right_bv'=>$total_right_bv, 'current_left_bv'=>$current_left_bv, 'current_right_bv'=>$current_right_bv, 'balance_left_bv'=>$balance_left_bv, 'balance_right_bv'=>$balance_right_bv, 'bv_rate'=>$bv_rate, 'total_bv'=>$total_bvs, 'total_bv_amount'=>$total_bv_amount, 'totalLeft'=>$totalLeft, 'curentLeftPair'=>$curentLeft, 'curentRightPair'=>$curentRight, 'totalRight'=>$totalRight, 'pair_amount'=>$totalpairAmount, 'reward_id'=>$reward_id, 'reward_name'=>$reward_name, 'reward_instalment'=>$reward_instalment, 'reward_amount'=>$reward_amount, 'reward_bv'=>$reward_bv, 'reward_remarks'=>$reward_remarks, 'BalanceLeft'=>$balanceLeft, 'BalanceRight'=>$balanceRight, 'net_payable_amount'=>$totalAmount, 'tds'=>$tdsamount, 'service_charge'=>$servcharges , 'other_deduction'=>0 , 'advance'=>0 , 'remarks'=>$remarks , 'gross_amount'=>$NetAmount , 'created_date'=>$curentDate, 'payment_status'=>0));
				if(!empty($pairDetails)){
							if($total_bv_amount!=0){
								$bnId=$pairDetails['id'];
								$connection11=Yii::app()->db;
								$sql11 = "UPDATE  binaryincomes SET  payment_status = '1', payment_date='$curentDate' WHERE id = '$bnId'";
								$command11 = $connection11->createCommand($sql11);
								$command11->execute();
							}
				}
				if(!empty($rewardDetail)){
						if($binaryDetail>=$baneryCaping){
							$reward_id			=	$rewardDetail['id'];
								$connection10=Yii::app()->db;
								$sql10 = "UPDATE  rewards SET  payment_status = '1', payment_update_date='$curentDate' WHERE id = '$reward_id'";
								$command10 = $connection10->createCommand($sql10);
								$command10->execute();
							
						} 
				}
				if(!empty($stepPoolAmt)){
					if($stepPoolAmt['final_kevel']==0){
						
					}else{
						$setpid 			= 	$stepPoolAmt['id'];
							$connection12=Yii::app()->db;
							$sql12 = "UPDATE  steppools SET  payment_status = '1', payment_date='$curentDate' WHERE id = '$setpid'";
								$command12 = $connection12->createCommand($sql12);
								$command12->execute();
					}
			}
				if(!empty($referalDetails)){
					if($referalDetails['ref_amount']!=0){
						$refid=$referalDetails['id'];
						$connection13=Yii::app()->db;
							$sql13 = "UPDATE  referalamounts SET  payment_status = '1', payment_date='$curentDate' WHERE id = '$refid'";
								$command13 = $connection13->createCommand($sql13);
								$command13->execute();
						
						
					} 
			}
				
			
			}
		}
			
	
	}
	
	public function actionUpdate_Payout() {
			$id=base64_decode($_GET['id']);
		  	$cdate=date('Y-m-d');
			$createdid=Yii::app()->user->id;
			$sql="SELECT * FROM invoices  WHERE  id='$id' ";
		 	$command=Yii::app()->db->createCommand($sql);
		  	$invoiceDetails=$command->queryRow();
			$createdid=Yii::app()->user->id;
			$connection=Yii::app()->db;
				$sql2 = "UPDATE   invoices SET  payment_status = '1', payment_date = '".$cdate."' WHERE id='".$invoiceDetails['id']."'";
				$command2 = $connection->createCommand($sql2);
				$command2->execute();
				
				$connection=Yii::app()->db;
				$sql = "UPDATE  binaryincomes SET  payment_status = '1', payment_date = '".$cdate."', created_by= '".$createdid."'	 WHERE id='".$invoiceDetails['banery_id']."' ";
				$command = $connection->createCommand($sql);
				$command->execute();
				
				if($invoiceDetails['referal_amount']!=0){
					$sql1 = "UPDATE  referalamounts SET payment_status = '1', payment_date = '".$cdate."', created_by= '".$createdid."' WHERE RID='".$invoiceDetails['rid']."'";
					$command1 = $connection->createCommand($sql1);
					$command1->execute();
				}
				
				if($invoiceDetails['reward_amount']!='NULL'){
					$sql1 = "UPDATE rewards  SET payment_status='1', payment_update_date= '".$cdate."' WHERE RID='".$invoiceDetails['reward_id']."'";
					$command1 = $connection->createCommand($sql1);
					$command1->execute();
				}
			
			Yii::app()->user->setFlash('success', '<i class="fa fa-check-circle"></i><strong> Payment Status Update Sucessfully </strong>');
			//$this->redirect(array('invoices/invice_wise_listing'));
			 $this->redirect(Yii::app()->request->urlReferrer);
			
			
			
			
	  }
	  
	  
	  public function actionPaid_All() {
		  	$fromDate=$_GET['fromDate'];
			$toDate=$_GET['toDate'];
		  	$cdate=date('Y-m-d');
			$createdid=Yii::app()->user->id;
			$sql="SELECT  * FROM invoices  WHERE   cycle_date_from >= '$fromDate' AND cycle_date_to <= '$toDate' ";
		 	$command=Yii::app()->db->createCommand($sql);
		  	$invoiceDetails=$command->queryAll();
			foreach($invoiceDetails as $invoce){
			    //print_r($invoce['id']); exit;
				
				$connection=Yii::app()->db;
				$sql2 = "UPDATE   invoices SET  payment_status = '1', payment_date = '".$cdate."' WHERE id='".$invoce['id']."'";
				$command2 = $connection->createCommand($sql2);
				$command2->execute();
				
				$connection=Yii::app()->db;
				$sql = "UPDATE  binaryincomes SET  payment_status = '1', payment_date = '".$cdate."', created_by= '".$createdid."'	 WHERE id='".$invoce['banery_id']."' ";
				$command = $connection->createCommand($sql);
				$command->execute();
				
				if($invoce['referal_amount']!=0){
					$sql1 = "UPDATE  referalamounts SET payment_status = '1', payment_date = '".$cdate."', created_by= '".$createdid."' WHERE RID='".$invoce['rid']."'";
					$command1 = $connection->createCommand($sql1);
					$command1->execute();
				}
				
				if($invoce['reward_amount']!='NULL'){
					$sql1 = "UPDATE rewards  SET payment_status='1', payment_update_date= '".$cdate."' WHERE RID='".$invoce['reward_id']."'";
					$command1 = $connection->createCommand($sql1);
					$command1->execute();
				}
			}
			Yii::app()->user->setFlash('success', '<i class="fa fa-check-circle"></i><strong> Payment Status Update Sucessfully </strong>');
				$this->redirect(array('invoices/invice_wise_listing'));
			
	  }
	  
	  
	public function actionSend_Sms_One_By_One(){ 
			$this->layout = false;
		if(Yii::app()->user->id==''){  
			Yii::app()->user->setFlash('error', "Please login again!");
			$this->redirect(array('/site/login'));
		} 
		$cdate=date('Y-m-d');
	
                $id=base64_decode($_GET['id']);
                if(!empty($id)){
					$sql="SELECT * FROM invoices  WHERE  id='$id' ";
					$command=Yii::app()->db->createCommand($sql);
					$invoiceDetails=$command->queryRow();
					$sendMobile=$invoiceDetails['mobile'];
					$RIDS=$invoiceDetails['rid'];
					$curentDate=date('Y-m-d H:i:s');
					

							if($invoiceDetails['steppool_amount']!=0){
								$steppool_info=Steppools::modewl()->getStepPoolDetailByRID($invoiceDetails['rid']);
								if(!empty($steppool_info)){
									$steppool_id=$steppool_info['id'];
									$Rid=$steppool_info['Rid'];
									$final_kevel=$steppool_info['final_kevel'];
									$steppoolAmount=$steppool_info['amount'];
									
									$connection=Yii::app()->db;
									$sql = "UPDATE  steppools SET  sms_status = '1', sms_date='$cdate' WHERE id = '$steppool_id'";
									$command = $connection->createCommand($sql);
									$command->execute();
																		
									
									$smscontent="Dear%20Associate%20Congratulation%20your%20id(".$Rid.")%20has%20been%20entered%20successfully%20in%20Step%20Pool%20and%20Level%20is%20".$final_kevel."Amt".$steppoolAmount;
								
										
								$url = "http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=6dd3689460a74aaae178c2a57611222c&message=$smscontent&senderId=STSFSU&routeId=1&mobileNos=$sendMobile&smsContentType=english";

								
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, $url1);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_HEADER, 0);
								curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
								//$result = curl_exec($ch);
								curl_exec($ch);
									
									
								}
							}
							if($invoiceDetails['steppool_amount']!=0){
							$referal_info=Referalamount::model()->getRefralDetailsRid($RIDS);
								if(!empty($referal_info)){
									
									$connection=Yii::app()->db;
									$sql = "UPDATE  referalamounts SET  sms_status = '1', sms_date='$cdate' WHERE RID = '$RIDS'";
									$command = $connection->createCommand($sql);
									$command->execute();
									$referal_amount=$referal_info['ref_amount'];
									$greensms="Dear%20Associate%20Congratulation%20your%20id(".$RIDS.")%20has%20been%20completed%20first%20matching%20successfully%20Amt".$referal_amount;
								
								$url = "http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=6dd3689460a74aaae178c2a57611222c&message=$greensms&senderId=STSFSU&routeId=1&mobileNos=$sendMobile&smsContentType=english";
								
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, $url2);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_HEADER, 0);
								curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
								//$result = curl_exec($ch);
								curl_exec($ch);
									
									
								}
								
							}
							if($invoiceDetails['reward_amount']!='NULL' && $invoiceDetails['reward_amount']!=""){
								$rewards_detail=Rewards::model()->getRewardDetailByid($RIDS);
									if(!empty($rewards_detail)){
										$rewardid=$invoiceDetails['reward_id'];
										$reward_instalment=$invoiceDetails['reward_instalment'];
										$reward_amount=$invoiceDetails['reward_amount'];
										
										$connection=Yii::app()->db;
									$sql1 = "UPDATE  rewards SET  sms_status = '1', sms_date='$cdate' WHERE id = '$rewardid'";
									$command = $connection->createCommand($sql1);
									$command->execute();
										
										$greensmsreward="Dear%20Associate%20Congratulation%20your%20id(".$RIDS.")%20has%20been%20complete%20reward%20instalment".$reward_instalment."Amt".$reward_amount;
										
								$curentDate=date('Y-m-d H:i:s');		
								$url = "http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=6dd3689460a74aaae178c2a57611222c&message=$greensmsreward&senderId=STSFSU&routeId=1&mobileNos=$sendMobile&smsContentType=english";
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, $url3);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_HEADER, 0);
								curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
								//$result = curl_exec($ch);
								curl_exec($ch);
										
								}
							}
							
								$gross_amount=$invoiceDetails['gross_amount'];
								$cycle_date_from=$invoiceDetails['cycle_date_from'];
								$cycle_date_to=$invoiceDetails['cycle_date_to'];
								$name=$invoiceDetails['name'];
								$mobile=$invoiceDetails['mobile'];
								$created_date=$invoiceDetails['created_date'];
								
								$connection=Yii::app()->db;
								$sql2 = "UPDATE   invoices SET  sms_status = '1', sms_date='$cdate' WHERE id = '$id'";
								$command = $connection->createCommand($sql2);
								$command->execute();
								
								
								
							
							 $IDregistrationMass=str_replace(' ', '',"Your%20Income%20of%20Rs".$gross_amount."%20for%20this%20cycle%20(".$cycle_date_from."%20to%20".$cycle_date_to.")%20Invoice%20No:".$id."%20Rid:%20".$RIDS."%20:%20".$name."%20Mb%20:%20".$mobile."%20Dt:%".$created_date);
			
			
							$curentDate=date('Y-m-d H:i:s');		
								 $url4 = "http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=6dd3689460a74aaae178c2a57611222c&message=$IDregistrationMass&senderId=STSFSU&routeId=1&mobileNos=$sendMobile&smsContentType=english";
							
							$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, $url4);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_HEADER, 0);
							curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
							curl_exec($ch);
							
								Yii::app()->user->setFlash('success', '<i class="fa fa-check-circle"></i><strong> Sms send sucessfully!</strong>');
								$this->redirect(Yii::app()->request->urlReferrer);
										
				}else{
								Yii::app()->user->setFlash('danger', '<i class="fa fa-times-circle"></i><strong>Sms could not be Send. Please try again</strong>'); 
								$this->redirect(Yii::app()->request->urlReferrer);
                        }
                        
                
        }	  
		
	public function actionTDS_Report($search=''){
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
			
		$model = new Invoices($scenario='search');
		$criteria = new CDbCriteria;
		
		$where=' where 1=1 ';
		if(isset($_GET['Invoices'])){
				$model->attributes=$_GET['Invoices'];
				if($_GET['Invoices']['cycle_date_from']!='' & $_GET['Invoices']['cycle_date_to']!=''){
					$fromdate=date('Y-m-d', strtotime($_GET['Invoices']['cycle_date_from']));
					$todate=date('Y-m-d', strtotime($_GET['Invoices']['cycle_date_to']));
					$criteria->condition = "t.cycle_date_from >= '$fromdate' AND cycle_date_to <= '$todate'";
					$where.= " and   t.cycle_date_from >= '$fromdate' AND t.cycle_date_to <= '$todate'";;
				}
			}
			
			
		$criteria->select = " DISTINCT t.created_date, t.cycle_date_from, t.cycle_date_to";
		$criteria->join = 'LEFT JOIN registrations ON registrations.Rid = t.rid';
		$where2='';
		if(Yii::app()->user->getState('user_type')==1){
			$userBranch=Yii::app()->user->getState('branch_id');
			$criteria->condition = "registrations.branch_id= '$userBranch'";
			$where2=" and  registrations.branch_id= '$userBranch' ";
		}
		
		 //$criteria->distinct = true;

  		$totalCount = Yii::app()->db->createCommand("SELECT COUNT(DISTINCT t.created_date) FROM invoices as  t LEFT JOIN registrations ON registrations.Rid = t.rid  $where  $where2 ")->queryScalar();

			
			
		$dataProvider=new CActiveDataProvider('Invoices', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('created_date'=>true),  ), 
		'pagination' => array ( 'PageSize' => 20,  ) ,  'totalItemCount' => $totalCount,

		));
		$this->render('tds_report',array('dataProvider'=>$dataProvider,'model'=>$model));

	
	}	
	
	public function actionIndex_Tds($search=''){
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
			
		$model = new Invoices($scenario='search');
		$criteria = new CDbCriteria;
		if(isset($_GET['Invoices'])){
				$model->attributes=$_GET['Invoices'];
				$criteria->addSearchCondition('t.rid', '%'.$_GET['Invoices']['rid']."%", 0);				
				$criteria->addSearchCondition('t.name', '%'.$_GET['Invoices']['name']."%", 0);
				//$criteria->addSearchCondition('t.payment_status', $_GET['Invoices']['payment_status']."%", 0);
				if($_GET['Invoices']['cycle_date_from']!='' & $_GET['Invoices']['cycle_date_to']!=''){
					$fromdate=date('Y-m-d', strtotime($_GET['Invoices']['cycle_date_from']));
					$todate=date('Y-m-d', strtotime($_GET['Invoices']['cycle_date_to']));
					$criteria->condition = "t.cycle_date_from >= '$fromdate' AND t.cycle_date_to <= '$todate'";
				}
				
			} else {
					if($_GET['fromDate']!='' & $_GET['toDate']!=''){
						$fromdate=date('Y-m-d', strtotime($_GET['fromDate']));
						$todate=date('Y-m-d', strtotime($_GET['toDate']));
						$criteria->condition = "t.cycle_date_from >= '$fromdate' AND t.cycle_date_to <= '$todate'";
				}
			}
			
		if(Yii::app()->user->getState('user_type')==1){
			$criteria->join = 'LEFT JOIN registrations ON registrations.Rid = t.rid';
			$userBranch=Yii::app()->user->getState('branch_id');
			$criteria->condition = "registrations.branch_id= '$userBranch'";
		}
			
			
		$dataProvider=new CActiveDataProvider('Invoices', array('criteria' => $criteria,
		'sort'=>array( 'defaultOrder'=> array('id'=>true),  ), 
		'pagination' => array ( 'PageSize' => 20,  ) ,
		));
		$this->render('index_tds',array('dataProvider'=>$dataProvider,'model'=>$model));

	
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