<?php
/**
 * This is the model class for table "payment_request".
 *
 * The followings are the available columns in table 'payment_request':
 * @property integer $id
 * @property integer $rid
 * @property string $request_date
 * @property string $amount
 * @property integer $payment_mod
 * @property string $Cheque_UTR
 * @property integer $status
 * @property string $status_update_date
 * @property string $remarks
 * @property string $created
 * @property integer $created_by
 */
class PaymentRequest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'payment_request';
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('amount, payment_mod', 'required'),
			array('amount', 'numerical', 'integerOnly'=>true),
			//array('amount', 'length', 'max'=>10),
			//array('Cheque_UTR', 'length', 'max'=>100),
			//array('remarks', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			//array('id, rid, request_date, amount, payment_mod, Cheque_UTR, status, status_update_date, remarks, created, created_by', 'safe', 'on'=>'search'),
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
			'rid' => 'Rid',
			'request_date' => 'Request Date',
			'amount' => 'Amount',
			'payment_mod' => 'Payment Mode',
			'Cheque_UTR' => 'Cheque/UTR No',
			'status' => 'Status',
			'status_update_date' => 'Action Date',
			'remarks' => 'Remarks',
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
		$criteria->compare('request_date',$this->request_date,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('payment_mod',$this->payment_mod);
		$criteria->compare('Cheque_UTR',$this->Cheque_UTR,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('status_update_date',$this->status_update_date,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('created_by',$this->created_by);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public static function checkID($id){
			$sql="SELECT count(*) as totalcount FROM payment_request where id='$id' ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryScalar();
			return $queryArray;
		}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PaymentRequest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}