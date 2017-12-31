<?php

/**
 * This is the model class for table "bankdetails".
 *
 * The followings are the available columns in table 'bankdetails':
 * @property integer $id
 * @property string $Rid
 * @property string $BankName
 * @property string $BranchName
 * @property string $MicerNo
 * @property string $AccNo
 * @property string $AccType
 * @property string $AccDetail
 * @property string $IFSC
 * @property string $created
 * @property string $updated
 */
class Bankdetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bankdetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('BankName, BranchName, AccNo, IFSC', 'required', 'on'=>'insert'),
			//array('BankName,	BranchName, AccNo, IFSC', 'required', 'on'=>'edit'),
			//array('Rid, created, updated', 'required'),
			//array('Rid', 'length', 'max'=>20),
			//array('BankName, BranchName, MicerNo, AccDetail, IFSC', 'length', 'max'=>100),
			//array('AccNo, AccType', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			//array('id, Rid, BankName, BranchName, MicerNo, AccNo, AccType, AccDetail, IFSC, created, updated', 'safe', 'on'=>'search'),
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
			'account_holder' => "Account Holder's Name",
			'BankName' => 'Bank Name',
			'BranchName' => 'Branch Name',
			'MicerNo' => 'Micer No.',
			'AccNo' => 'Acc/No.',			'adhar_no' => 'Aadhar No.',
			'AccType' => 'Acc Type',
			'AccDetail' => 'Acc Detail',
			'IFSC' => 'IFSC Code',
			'created' => 'Created',
			'updated' => 'Updated',
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
		$criteria->compare('BankName',$this->BankName,true);
		$criteria->compare('BranchName',$this->BranchName,true);
		$criteria->compare('MicerNo',$this->MicerNo,true);
		$criteria->compare('AccNo',$this->AccNo,true);
		$criteria->compare('AccType',$this->AccType,true);
		$criteria->compare('AccDetail',$this->AccDetail,true);
		$criteria->compare('IFSC',$this->IFSC,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function getBankDetasilById($Rid){
				$sql='SELECT  Bankdetails.* FROM bankdetails AS Bankdetails WHERE Bankdetails.Rid="'.$Rid.'"';
			  $command=Yii::app()->db->createCommand($sql);
			  $bankDetailArray=$command->queryRow();
			  return $bankDetailArray;
		}
		
		public static function getBankDetasilByRid($Rid){
				$sql='SELECT  * FROM bankdetails WHERE Rid="'.$Rid.'"';
			  $command=Yii::app()->db->createCommand($sql);
			  $bankDetailArray=$command->queryRow();
			  return $bankDetailArray;
		}



	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bankdetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
