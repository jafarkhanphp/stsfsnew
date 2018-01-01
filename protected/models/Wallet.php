<?php
/**
 * This is the model class for table "wallet".
 *
 
 * The followings are the available columns in table 'wallet':
 * @property integer $id
 * @property integer $rid
 * @property integer $against_insert_id
 * @property integer $account_head_id
 * @property string $account_head_name
 * @property string $credit
 * @property string $debit
* @property string $balance
 * @property string $created
 * @property integer $created_by
 */
class Wallet extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wallet';
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rid, against_insert_id, account_head_id, account_head_name, credit, debit, balance, created, created_by', 'required'),
			array('rid, against_insert_id, account_head_id, created_by', 'numerical', 'integerOnly'=>true),
			array('account_head_name', 'length', 'max'=>200),
			array('credit, debit, balance', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, rid, against_insert_id, account_head_id, account_head_name, credit, debit, balance, created, created_by', 'safe', 'on'=>'search'),
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
	public static function getBalanceByDebit($rid, $debit){
			$sql="SELECT balance FROM wallet where rid=$rid order by id desc limit 1";
			$command=Yii::app()->db->createCommand($sql);
			$registrationDetailArray=$command->queryRow();
			return $registrationDetailArray['balance']-$debit;
	}
	public static function getBalanceByCredit($rid, $Credit){
			$sql="SELECT balance FROM wallet where rid=$rid order by id desc limit 1";
			$command=Yii::app()->db->createCommand($sql);
			$registrationDetailArray=$command->queryRow();
			return $registrationDetailArray['balance']+$Credit;
	}
	
	public static function getWAlletAmt($rid){
			$sql1="SELECT sum(amount) as amount FROM payment_request WHERE rid='$rid' and delete_status=1 and (status=0 or status=1) ";
			$command1=Yii::app()->db->createCommand($sql1);
			  $DetailArray=$command1->queryRow();
			  $didectamt= $DetailArray['amount'];
			
			$sql="SELECT balance FROM wallet where rid=$rid order by id desc limit 1";
			$command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['balance']-$didectamt;
	}
	
	
	
	
	public static function totalWalletEntry($rid){
		$countRegistration = Yii::app()->db->createCommand('SELECT count(*) count FROM wallet  WHERE rid="'.$rid.'" and credit!=0  ')->queryScalar();
		return $countRegistration;
	}
	
	
	public static function WithdrawlAmount($rid){
			$sql="SELECT sum(debit) as widthamt FROM wallet where rid=$rid and account_head_id=3";
			$command=Yii::app()->db->createCommand($sql);
			$registrationDetailArray=$command->queryRow();
			return $registrationDetailArray['widthamt'];
	}
	public static function WithdrawlAmountadmin(){
			$sql="SELECT sum(debit) as widthamt FROM wallet where account_head_id=3";
			$command=Yii::app()->db->createCommand($sql);
			$registrationDetailArray=$command->queryRow();
			return $registrationDetailArray['widthamt'];
	}
	
	
	
	
	
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'rid' => 'Rid',
			'against_insert_id' => 'Invoice Id or Pin Purches ID',
			'account_head_id' => 'Account Head',
			'account_head_name' => 'Account Head Name',
			'credit' => 'Credit',
			'debit' => 'Debit',
			'balance' => 'Balance',
			'created' => 'Created',
			'created_by' => 'Created By',
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
		$criteria->compare('rid',$this->rid);
		$criteria->compare('against_insert_id',$this->against_insert_id);
		$criteria->compare('account_head_id',$this->account_head_id);
		$criteria->compare('account_head_name',$this->account_head_name,true);
		$criteria->compare('credit',$this->credit,true);
		$criteria->compare('debit',$this->debit,true);
		$criteria->compare('balance',$this->balance,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('created_by',$this->created_by);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Wallet the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}