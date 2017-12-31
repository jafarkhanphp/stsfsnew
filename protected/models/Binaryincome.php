<?php

/**
 * This is the model class for table "binaryincome".
 *
 * The followings are the available columns in table 'binaryincome':
 * @property integer $id
 * @property integer $RID
 * @property integer $BalanceLeft
 * @property integer $balanceRight
 * @property integer $totalLeft
 * @property integer $totalRight
 * @property integer $pair_count
 * @property integer $amount
 * @property integer $agg_pair
 * @property string $created
 * @property integer $payment_status
 * @property string $payment_date
 * @property integer $banery_id
 */
class Binaryincome extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'binaryincomes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RID, BalanceLeft, balanceRight, totalLeft, totalRight, pair_count, amount, agg_pair, created, payment_date, banery_id', 'required'),
			array('RID, BalanceLeft, balanceRight, totalLeft, totalRight, pair_count, amount, agg_pair, payment_status, banery_id', 'numerical', 'integerOnly'=>true),
			
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

	public function getPairByRid($RID)
	{
			$sql='SELECT  * FROM binaryincome WHERE binaryincome.RID="'.$RID.'" order by  id desc ';
		 	$command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryRow();
			return $sponserDetail;
	}
	 
	 public function getMaxDate()
	{
			$sql='SELECT  binaryincome.created FROM binaryincome  order by id desc limit 1 ';
		 	$command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryRow();
			return  $sponserDetail;
	}
	
	 public function getAmountByRidNonStatus($Rid){
			$sql='SELECT  * FROM binaryincome where RID="'.$Rid.'" order by  id desc ';
		 	$command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryRow();
			return $sponserDetail;
	}
	 
	 public function getAmountByRid($Rid){
			$sql='SELECT  * FROM binaryincome where RID="'.$Rid.'" and payment_status=0 order by  id desc ';
		 	$command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryRow();
			return $sponserDetail;
	}
	
	public function getToltalAmountByRid($Rid){
			$sql='SELECT  sum(amount) as amount, sum(pair_count) as pair_count FROM binaryincome where RID="'.$Rid.'" and payment_status=0 order by  id desc ';
		 	$command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryRow();
			return $sponserDetail;
	}
	
	public function gePairDetailByID($Rid){
			$sql='SELECT aggLeft, aggRight, totalLeft, totalRight, id FROM binaryincome where RID="'.$Rid.'" and payment_status=0 order by  id desc ';
		 	$command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryRow();
			return $sponserDetail;
	}
	
	
	 
	 
	 public function getTopThreePairAchiver(){
			$sql='SELECT DISTINCT (Binaryincome.RID) AS Rid, Registration.name, Registration.image,Registration.Sex, Binaryincome.created FROM binaryincome AS Binaryincome LEFT JOIN registration AS Registration ON Registration.RID = Binaryincome.RID WHERE Binaryincome.amount !=0 ORDER BY Binaryincome.agg_pair DESC LIMIT 3 ';
		 	$command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryAll();
			return $sponserDetail;
	}
	 
	 
	 public function RidExist($Rid, $agg_pair){
		$countRidID = Yii::app()->db->createCommand('SELECT count(*) count FROM binaryincomes WHERE RID="'.$Rid.'" and agg_bv="'.$agg_pair.'"  ')->queryScalar();
		return $countRidID;
	}
	 
	 
	 
	 function getPairAmt($Rid){ /*get pair amount by Rid*/
		if($Rid==0){
			return 0;
		} else {
			$sql='SELECT  sum(Binaryincome.total_bv) as bv  FROM binaryincomes AS Binaryincome WHERE Binaryincome.RID="'.$Rid.'" ';
		 	 $command=Yii::app()->db->createCommand($sql);
		  	 $pairIncomeDetail=$command->queryRow();
			 $Amt=$pairIncomeDetail['bv'];
			 return  $Amt;
		}
			
	}
	
	public static function getBinaryDetailByRid($Rid){
			$sql='SELECT  Binaryincome.agg_left_bv, Binaryincome.agg_right_bv, Binaryincome.after_total_caping_bv, Binaryincome.total_laps, Binaryincome.total_laps, Binaryincome.totalLeft, Binaryincome.totalRight, Binaryincome.agg_pair, Binaryincome.agg_bv  FROM binaryincomes AS Binaryincome WHERE Binaryincome.RID="'.$Rid.'" order by id desc limit 1 ';
		 	 $command=Yii::app()->db->createCommand($sql);
		  	 return $pairIncomeDetail=$command->queryRow();
		}
		
		
		public function checkMonthlyBv($Rid){
			$curentYear=date('Y');
			$curentMonth=date('m');
			$sql="SELECT sum(total_bv) as total FROM binaryincomes WHERE RID='$Rid' and  YEAR( created ) ='$curentYear' AND MONTH( created ) ='$curentMonth'";
		 	$command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryRow();
			return $sponserDetail['total'];
	}
	
	
	
	
	
	 
	 
	 
	 
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'RID' => 'Rid',
			'BalanceLeft' => 'Balance Left',
			'balanceRight' => 'Balance Right',
			'totalLeft' => 'Total Left',
			'totalRight' => 'Total Right',
			'pair_count' => 'Pair Count',
			'amount' => 'Amount',
			'agg_pair' => 'Agg Pair',
			'created' => 'Created',
			'payment_status' => 'Payment Status',
			'payment_date' => 'Payment Date',
			'banery_id' => 'Banery',
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
		$criteria->compare('RID',$this->RID);
		$criteria->compare('BalanceLeft',$this->BalanceLeft);
		$criteria->compare('balanceRight',$this->balanceRight);
		$criteria->compare('totalLeft',$this->totalLeft);
		$criteria->compare('totalRight',$this->totalRight);
		$criteria->compare('pair_count',$this->pair_count);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('agg_pair',$this->agg_pair);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('payment_status',$this->payment_status);
		$criteria->compare('payment_date',$this->payment_date,true);
		$criteria->compare('banery_id',$this->banery_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Binaryincome the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
