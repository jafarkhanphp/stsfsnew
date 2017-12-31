<?php

/**
 * This is the model class for table "steppools".
 *
 * The followings are the available columns in table 'steppools':
 * @property integer $id
 * @property integer $Rid
 * @property string $final_kevel
 * @property integer $amount
 * @property integer $steppool_bv
 * @property integer $max_id
 * @property integer $level
 * @property string $created_date
 * @property integer $payment_status
 * @property string $payment_date
 * @property integer $sms_status
 * @property string $sms_date
 */
class Steppools extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'steppools';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Rid, amount, steppool_bv, max_id, level, created_date, payment_date, sms_date', 'required'),
			array('Rid, amount, steppool_bv, max_id, level, payment_status, sms_status', 'numerical', 'integerOnly'=>true),
			array('final_kevel', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Rid, final_kevel, amount, steppool_bv, max_id, level, created_date, payment_status, payment_date, sms_status, sms_date', 'safe', 'on'=>'search'),
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
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Rid' => 'Rid',
			'final_kevel' => 'Final Level',
			'amount' => 'Amount',
			'steppool_bv' => 'Steppool Bv',
			'max_id' => 'Max',
			'level' => 'Level',
			'created_date' => 'Created Date',
			'payment_status' => 'Payment Status',
			'payment_date' => 'Payment Date',
			'sms_status' => '0-->not send,1-->Sended',
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
		$criteria->compare('Rid',$this->Rid);
		$criteria->compare('final_kevel',$this->final_kevel,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('steppool_bv',$this->steppool_bv);
		$criteria->compare('max_id',$this->max_id);
		$criteria->compare('level',$this->level);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('payment_status',$this->payment_status);
		$criteria->compare('payment_date',$this->payment_date,true);
		$criteria->compare('sms_status',$this->sms_status);
		$criteria->compare('sms_date',$this->sms_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public static	function UpdateTotalCount(){		$stepDetails=Steppools::model()->getSteppoolByDesc();		$i=0;		foreach($stepDetails as $details){			$Rid=$details['Rid'];			$id=$details['id'];			$sql1="SELECT count(*) as totalcount FROM registrations where SponserID='$Rid' and bv!=0 ";				$command1=Yii::app()->db->createCommand($sql1);				$directSponserCount=$command1->queryScalar();			if($i==0){				$connectionUpdate=Yii::app()->db;				$sqlsteppool = "UPDATE steppools SET total_count = '0' , direct_sponser='$directSponserCount' WHERE Rid= '$Rid' ";				$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);				$commandsteppool->execute();			} else{								/*$sql3="SELECT total_count FROM steppools ";				$command3=Yii::app()->db->createCommand($sql3);				$total_count=$command3->queryRow();				$total=$total_count['total_count']+1;*/								$connectionUpdate=Yii::app()->db;				$sqlsteppool = "UPDATE steppools SET total_count = total_count+1 , direct_sponser='$directSponserCount'  WHERE Rid= '$Rid' ";				$commandsteppool = $connectionUpdate->createCommand($sqlsteppool);				$commandsteppool->execute();			}		$i++;		}
		//exit;
	}
	
	
	
	public static function checkCountEntry($Rid, $level){
			$sql="SELECT count(*) as totalcount FROM steppoolamount where Rid='$Rid' and level  ='$level' ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryScalar();
			return $queryArray;
		}
	
	
	
  
	
	
	
	
	
	public static function getSteppoolByDesc(){
			$sql='SELECT * FROM steppools order by id DESC ';
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryAll();
			return $queryArray;
	}
	
	public static function getSteppoolByAsc(){
			$sql='SELECT * FROM steppools order by id asc ';
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryAll();
			return $queryArray;
	}
	
	
	
	public static function paidStatus(){
			$sql='SELECT count(*) as totalcount FROM invoices where payment_status=1 ';
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryScalar();
			return $queryArray;
		}
		
		public static function getStepPoolAmt($rid){
			$sql="SELECT id, amount, final_kevel, steppool_bv FROM steppools where Rid='$rid' and payment_status=0 ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryRow();
			return $queryArray;
		}
		
		
		public static function getStepPoolDetailByRID($rid){
			$sql="SELECT * FROM steppools where Rid='$rid' ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryRow();
			return $queryArray;
		}
		
		public static function getRidByID($Id){
				$sql="SELECT Rid FROM steppools where id='$Id' ";
				$command=Yii::app()->db->createCommand($sql);
				$registrationDetailArray=$command->queryRow();
				return $registrationDetailArray['Rid'];
		}
		
		
		
		public static function stepPoolcheck($rid){
			$sql="SELECT amount, final_kevel, steppool_bv FROM steppools where Rid='$rid' and payment_status=1 ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryRow();
			return $queryArray;
		}
		
		public static function getMaxId(){
		  $sql='SELECT position_member FROM steppools order by position_member desc limit 1';
		  $command=Yii::app()->db->createCommand($sql);
		  $registrationDetailArray=$command->queryRow();
		  return $registrationDetailArray['position_member'];
		}
		
		
		public static function getAmountByRid($rid){
			  $sql="SELECT amount FROM steppools where  Rid='$rid'  ";
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['amount'];
		}
		
		
		
		public static function getMaxLevel(){
			  $sql='SELECT level FROM steppools order by level desc limit 1';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['level'];
		}
		
		public static function getLevelByRid($Rid){
			  $sql="SELECT final_kevel FROM steppools where Rid='$Rid' ";
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['final_kevel'];
		}
		
		
	public static function checkExistById($Rid){
			$sql="SELECT count(*) as totalcount FROM steppools where Rid='$Rid'  ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryScalar();
			return $queryArray;
		}
		
		
		public static function getByICurrentLevel($rid){
			$sql="SELECT level, max_id FROM steppools where Rid='$rid'  ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryRow();
			return $queryArray;
		}
		
		
		public static function getLevelCount($maxLevel, $endpoint){
			$sql="SELECT count(*) as totalcount FROM steppools as Steppool where Steppool.level='$maxLevel' and Steppool.max_id='$endpoint' ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryScalar();
			return $queryArray;
		}
	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Steppools the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
