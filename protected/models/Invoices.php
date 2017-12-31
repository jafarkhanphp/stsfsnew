<?php

/**
 * This is the model class for table "invoices".
 *
 * The followings are the available columns in table 'invoices':
 * @property integer $id
 * @property string $Rid
 * @property integer $joining_package_id
 * @property string $name
 * @property string $address
 * @property string $mobile
 * @property string $pan
 * @property string $cycle_date_from
 * @property string $cycle_date_to
 * @property integer $account_no
 * @property string $check_no
 * @property string $bank_name
 * @property integer $net_payable_amount
 * @property integer $tds
 * @property integer $service_charge
 * @property integer $other_deduction
 * @property string $remarks
 * @property string $created_date
 * @property string $download_date
 * @property integer $payment_status
 * @property string $payment_date
 * @property integer $sms_status
 * @property string $sms_date
 */
class Invoices extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'invoices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Rid, joining_package_id, name, mobile, cycle_date_from, cycle_date_to, created_date, sms_date', 'required'),
			array('joining_package_id, account_no, net_payable_amount, tds, service_charge, other_deduction, payment_status, sms_status', 'numerical', 'integerOnly'=>true),
			array('Rid', 'length', 'max'=>20),
			array('name', 'length', 'max'=>25),
			array('address', 'length', 'max'=>500),
			array('mobile, pan', 'length', 'max'=>10),
			array('check_no', 'length', 'max'=>50),
			array('bank_name, remarks', 'length', 'max'=>200),
			array('download_date, payment_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Rid, joining_package_id, name, address, mobile, pan, cycle_date_from, cycle_date_to, account_no, check_no, bank_name, net_payable_amount, tds, service_charge, other_deduction, remarks, created_date, download_date, payment_status, payment_date, sms_status, sms_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}	public static function checkInvoiceDeuplicate($rid, $createdDate){			$sql="SELECT count(*) as totalcount FROM invoices where rid='$rid' and created_date='$createdDate' ";			$command=Yii::app()->db->createCommand($sql);			$queryArray=$command->queryScalar();			return $queryArray;		}							
	
	public function getDirectJoining($Rid,$start_date,$end_date)
	{
		$sql='SELECT count(s.Rid) as count FROM sponserdetails as s join registrations as r on r.Rid=s.Rid WHERE r.id_status=1 and s.sponserId="'.$Rid.'" and r.activation_date <= "'.$end_date.'" and r.activation_date >= "'.$start_date.'"';
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryRow();
		return $recordset['count'];
	}
	
	public function getTotalAmount($Rid,$totalSponser,$start_date,$end_date)
	{
		 $connection=Yii::app()->db;
		 $tds=Settings::model()->getSiteSettingByName('tds');
	     $servic_charge=Settings::model()->getSiteSettingByName('service_charge');
		 
		 //............ level income start..........................
		 $levelIncome=Sponserdetails::model()->getLevelIncome($Rid);
		 //............ level income end ...........................
		 $sDetail=Sponserdetails::model()->getSponserDetails($Rid);
		 $ti=(2500 * $totalSponser);
		 $di=($ti*5)/100;
		
		 
		 $query1=Yii::app()->db->createCommand()->insert('invoices',
														   	   array('Rid'=>$Rid,'name'=>$sDetail['FirstName'],'address'=>$sDetail['Address'],'mobile'=>$sDetail['ContactNo1'],'pan'=>$sDetail['PanNo'],'account_no'=>$sDetail['account_no'],'bank_name'=>$sDetail['bank_name'], 'cycle_date_to'=>$end_date, 'cycle_date_from'=>$start_date, 'tds'=>$tds,'service_charge'=>$servic_charge, 'level_income'=>$levelIncome,'direct_income'=>$di,'created_date'=>date('Y-m-d')));
		 
		$sql='SELECT T2.Rid,T2.sponserId FROM ( SELECT @r AS _Rid, (SELECT @r := sponserId FROM sponserdetails WHERE Rid = _Rid) AS parent_id, @l := @l + 1 AS lvl FROM (SELECT @r := "'.$Rid.'", @l := 1711140001) vars, sponserdetails m WHERE @r <> 1711140001) T1 JOIN sponserdetails T2 ON T1._Rid = T2.Rid ORDER BY T1.lvl ASC';
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryAll();
		//return $recordset;
		$i=2;
		foreach($recordset as $info){
			 $userDetail=Sponserdetails::model()->getSponserDetails($info['sponserId']);
			//echo "<pre>";print_r($info['sponserId']);
			if($i==2){$pec=4;}else if($i==3){$pec=3;}else if($i==4){$pec=2;}else if($i>=5 && $i<12){$pec=1;}else{$pec='.5';}
			$totalIncome=(2500 * $totalSponser);
		    $directIncome=($totalIncome*$pec)/100;
			
			
			
			$countRid = Yii::app()->db->createCommand('select count(Rid) as count from invoices where Rid="'.$info['sponserId'].'" and created_date="'.date('Y-m-d').'"')->queryScalar();
			  if($countRid==0)
			  {
				  
		 
				  $query=Yii::app()->db->createCommand()->insert('invoices',
														   	   array('Rid'=>$info['sponserId'],'name'=>$userDetail['FirstName'],'address'=>$userDetail['Address'],'mobile'=>$userDetail['ContactNo1'],'pan'=>$userDetail['PanNo'],'account_no'=>$userDetail['account_no'],'bank_name'=>$userDetail['bank_name'], 'cycle_date_to'=>$end_date,'cycle_date_from'=>$start_date,'tds'=>$tds,'service_charge'=>$servic_charge,'team_income'=>$directIncome,'created_date'=>date('Y-m-d')));
				  
			  }else{
			
				  $sql2='update invoices set team_income=team_income + "'.$directIncome.'" where Rid="'.$info['sponserId'].'" ';
				  $command2 = $connection->createCommand($sql2);
				  $command2->execute();
			  }
			 
			
		
		$i++;}
		//return $directIncome;
	}
	
	public function getTotalAmount_backup($Rid,$totalSponser)
	{
		 $connection=Yii::app()->db;
		 $sDetail=Sponserdetails::model()->getSponserDetails($Rid);
		 $ti=(2500 * $totalSponser);
		 $di=($ti*5)/100;
		 $query1=Yii::app()->db->createCommand()->insert('invoices',
														   	   array('Rid'=>$Rid,'name'=>$sDetail['FirstName'],'address'=>$sDetail['Address'],'mobile'=>$sDetail['ContactNo1'],'pan'=>$sDetail['PanNo'],'account_no'=>$sDetail['account_no'],'bank_name'=>$sDetail['bank_name'], 'cycle_date_to'=>date('Y-m-d'), 'cycle_date_from'=>date('Y-m-d'), 'net_payable_amount'=>$di,'created_date'=>date('Y-m-d')));
		 
		$sql='SELECT T2.Rid,T2.sponserId FROM ( SELECT @r AS _Rid, (SELECT @r := sponserId FROM sponserdetails WHERE Rid = _Rid) AS parent_id, @l := @l + 1 AS lvl FROM (SELECT @r := "'.$Rid.'", @l := 1711140001) vars, sponserdetails m WHERE @r <> 1711140001) T1 JOIN sponserdetails T2 ON T1._Rid = T2.Rid ORDER BY T1.lvl ASC';
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryAll();
		//return $recordset;
		$i=1;
		foreach($recordset as $info){
			 $userDetail=Sponserdetails::model()->getSponserDetails($info['sponserId']);
			//echo "<pre>";print_r($info['sponserId']);
			if($i==1){$pec=5;}else if($i==2){$pec=4;}else if($i==3){$pec=3;}else if($i==4){$pec=2;}else if($i>=5 && $i<12){$pec=1;}else{$pec='.5';}
			$totalIncome=(2500 * $totalSponser);
		    $directIncome=($totalIncome*$pec)/100;
			$countRid = Yii::app()->db->createCommand('select count(Rid) as count from invoices where Rid="'.$info['sponserId'].'" and created_date="'.date('Y-m-d').'"')->queryScalar();
			  if($countRid==0)
			  {
				  $query=Yii::app()->db->createCommand()->insert('invoices',
														   	   array('Rid'=>$info['sponserId'],'name'=>$userDetail['FirstName'],'address'=>$userDetail['Address'],'mobile'=>$userDetail['ContactNo1'],'pan'=>$userDetail['PanNo'],'account_no'=>$userDetail['account_no'],'bank_name'=>$userDetail['bank_name'], 'cycle_date_to'=>date('Y-m-d'),'cycle_date_from'=>date('Y-m-d'), 'net_payable_amount'=>$directIncome,'created_date'=>date('Y-m-d')));
				  
			  }else{
				  $sql2='update invoices set net_payable_amount=net_payable_amount + "'.$directIncome.'" where Rid="'.$info['sponserId'].'" ';
				  $command2 = $connection->createCommand($sql2);
				  $command2->execute();
				  
			  }
			
			
		
		$i++;}
		//return $directIncome;
	}
	
	public function getTdsAmount($Rid)
	{
		 $connection=Yii::app()->db;
		 $start_date='2017-11-11';
		 $end_date=date('Y-m-d');
		 $tds=Settings::model()->getSiteSettingByName('tds');
	     $servic_charge=Settings::model()->getSiteSettingByName('service_charge');
		 $sql='select Rid,team_income,level_income,total_income from invoices where cycle_date_to =<"'.$end_date.'" and cycle_date_from >="'.$start_date.'"';
		 $command=Yii::app()->db->createCommand($sql);
		 $recordset=$command->queryRow();
		 return $recordset;
		 
		  //$sql2='update invoices set net_payable_amount=net_payable_amount + "'.$directIncome.'" where Rid="'.$info['sponserId'].'" ';
				  //$command2 = $connection->createCommand($sql2);
				  //$command2->execute();
		  //$tdsDetection1=($directIncome*$tds)/100;
		 // $serviceDetection1=($directIncome*$servic_charge)/100;
		  //$payAmount1=$di-($tdsDetection1+$serviceDetection1);
	}
	
	
	
	public static function countInvoiceByDate($Date){
			$sql="SELECT count(*) as totalcount FROM invoices where invoices.created_date='$Date' ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryScalar();
			return $queryArray;
		}
		
	public static function getotalAmtByDate($Date){
		$sql="SELECT sum(gross_amount) as totalamount FROM invoices where created_date='$Date' ";
		$command=Yii::app()->db->createCommand($sql);
		$queryArray=$command->queryRow();
		 return  $queryArray['totalamount'];
	}

	public static function geTotalPaybulAmtByDate($Date){
		$sql="SELECT sum(net_payable_amount) as totalamount FROM invoices where created_date='$Date' ";
		$command=Yii::app()->db->createCommand($sql);
		$queryArray=$command->queryRow();
		 return  $queryArray['totalamount'];
	}
	
	public static function geTotalHandlingAmtByDate($Date){
		$sql="SELECT sum(servicecharge_amt) as totalamount FROM invoices where created_date='$Date' ";
		$command=Yii::app()->db->createCommand($sql);
		$queryArray=$command->queryRow();
		 return  $queryArray['totalamount'];
	}
	
	public static function geTotalGrossAmtByDate($Date){
		$sql="SELECT sum(gross_amount) as totalamount FROM invoices where created_date='$Date' ";
		$command=Yii::app()->db->createCommand($sql);
		$queryArray=$command->queryRow();
		 return  $queryArray['totalamount'];
	}
	
	
		public static function paymentCountByDate($Date){
			$sql="SELECT count(*) as totalcount FROM invoices where created_date='$Date' and payment_status!=1 ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryScalar();
			return $queryArray;
	}
	public function getDate()
	{
		$countDateExist = Yii::app()->db->createCommand('select count(created_date) as count from invoices where created_date="'.date('Y-m-d').'"')->queryScalar();
		return $countDateExist;
	}
	
	public function getUserIncome($Rid)
	{
		$sql='select level_income,team_income,direct_income,total_income,payable_income from invoices where Rid="'.$Rid.'" order by id desc limit 1';
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryRow();
		return $recordset;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Rid' => 'Rid',
			'joining_package_id' => 'Joining Package',
			'name' => 'Name',
			'address' => 'Address',
			'mobile' => 'Mobile',
			'pan' => 'Pan',
			'cycle_date_from' => 'Date From',
			'cycle_date_to' => 'Date To',
			'account_no' => 'Account No',
			'check_no' => 'Check No',
			'bank_name' => 'Bank Name',
			'net_payable_amount' => 'Net Payable Amount',
			'tds' => 'Tds',
			'service_charge' => 'Service Charge',
			'other_deduction' => 'Other Deduction',
			'remarks' => 'Remarks',
			'created_date' => 'Created Date',
			'download_date' => 'Download Date',
			'payment_status' => 'Payment Status',
			'payment_date' => 'Payment Date',
			'sms_status' => '0-->unsend,1-->send',
			'sms_date' => 'Sms Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Rid',$this->Rid,true);
		$criteria->compare('joining_package_id',$this->joining_package_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('pan',$this->pan,true);
		$criteria->compare('cycle_date_from',$this->cycle_date_from,true);
		$criteria->compare('cycle_date_to',$this->cycle_date_to,true);
		$criteria->compare('account_no',$this->account_no);
		$criteria->compare('check_no',$this->check_no,true);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('net_payable_amount',$this->net_payable_amount);
		$criteria->compare('tds',$this->tds);
		$criteria->compare('service_charge',$this->service_charge);
		$criteria->compare('other_deduction',$this->other_deduction);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('download_date',$this->download_date,true);
		$criteria->compare('payment_status',$this->payment_status);
		$criteria->compare('payment_date',$this->payment_date,true);
		$criteria->compare('sms_status',$this->sms_status);
		$criteria->compare('sms_date',$this->sms_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Invoices the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}