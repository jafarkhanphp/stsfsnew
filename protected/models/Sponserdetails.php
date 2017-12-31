<?php

/**
 * This is the model class for table "sponserdetails".
 *
 * The followings are the available columns in table 'sponserdetails':
 * @property integer $id
 * @property integer $Rid
 * @property string $sponserId
 * @property string $ImmediateSponserId
 * @property string $Level
 * @property integer $no_of_members
 * @property string $PlanName
 * @property integer $MemberStatus
 * @property integer $RegistrationFee
 * @property string $created
 */
class Sponserdetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sponserdetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('Rid, no_of_members, created', 'required'),
			//array('Rid, no_of_members, MemberStatus, RegistrationFee', 'numerical', 'integerOnly'=>true),
			//array('sponserId, ImmediateSponserId, Level', 'length', 'max'=>20),
			//array('PlanName', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Rid, sponserId, ImmediateSponserId, Level, no_of_members, PlanName, MemberStatus, RegistrationFee, created', 'safe', 'on'=>'search'),
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
	
	function getAllImidateInsponser(){ 
			$sql=" SELECT Sponserdetail.ImmediateSponserId, Registration.created FROM sponserdetails AS Sponserdetail 
			INNER JOIN registrations AS Registration ON Sponserdetail.ImmediateSponserId = Registration.Rid 
			WHERE Registration.Role = 'S' and Registration.bv!=0 and Sponserdetail.LNode!='NULL' and Sponserdetail.RNode!='NULL' ";
			$command=Yii::app()->db->createCommand($sql);
		  	 return $command->queryAll();
	}
	
	
	function leftCountNew($id){ 
		if($id==0){
			return 0;
		} else {
			$sql='SELECT  Sponserdetails.LNode, Sponserdetails.RNode  FROM sponserdetails AS Sponserdetails 
			WHERE Sponserdetails.ImmediateSponserId="'.$id.'" ';
		 	 $command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryRow();
			
			
			if(!empty($sponserDetail)){
			  $Lnode=$sponserDetail['LNode'];
				$lNodeBv=Registrations::model()->getBvByRid($Lnode);
				$totalLeftMember=$this->totalbothBV($Lnode);
			  	if($totalLeftMember>0){
					return  $totalLeftMember;	
				} else {
					return 0;
				}
			} else {
			  return 0;	
			}
			
			
		
		}
			
	}
	
	
	
	function totalbothBV($id){
			if($id==NULL){
			return 0;
			} else {
			$sql='SELECT  Sponserdetails.LNode, Sponserdetails.RNode FROM sponserdetails AS Sponserdetails 
			WHERE Sponserdetails.ImmediateSponserId="'.$id.'" ';
		 	 $command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryRow();
			//print_r('<pre>');   print_r($sponserDetail['LNode']);   print_r('</pre>'); exit;
			
			if(isset($sponserDetail['LNode'])){
				 $Lnode2=$sponserDetail['LNode'].',';
			} else {
				$Lnode2=0;
			}
			if(isset($sponserDetail['RNode'])){
				$Rnode2=$sponserDetail['RNode'];
			} else {
				$Rnode2=0;
			}
			
			
			
			  return 1+$this->getboathNode($Lnode2)+$this->getboathNode($Rnode2);
		}
	}
	
	
	
	
	
	function leftCount($id){ 
		if($id==0){
			return 0;
		} else {
			$sql='SELECT  Sponserdetails.LNode, Sponserdetails.RNode FROM sponserdetails AS Sponserdetails 
			WHERE Sponserdetails.ImmediateSponserId="'.$id.'" ';
		 	 $command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryRow();
			
			if(!empty($sponserDetail)){
			  $Lnode=$sponserDetail['LNode'];
				$totalLeftMember=$this->getboathNode($Lnode);
			  	if($totalLeftMember>0){
					return  $totalLeftMember;	
				} else {
					return 0;
				}
			} else {
			  return 0;	
			}
			
			
		
		}
			
	}
	
	public function getboathNode($id){
		if($id==NULL){
			return 0;
			} else {
			$sql='SELECT  Sponserdetails.LNode, Sponserdetails.RNode FROM sponserdetails AS Sponserdetails 
			WHERE Sponserdetails.ImmediateSponserId="'.$id.'" ';
		 	 $command=Yii::app()->db->createCommand($sql);
		  	$sponserDetail=$command->queryRow();
			//print_r('<pre>');   print_r($sponserDetail['LNode']);   print_r('</pre>'); exit;
			
			if(isset($sponserDetail['LNode'])){
				 $Lnode2=$sponserDetail['LNode'].',';
			} else {
				$Lnode2=0;
			}
			if(isset($sponserDetail['RNode'])){
				$Rnode2=$sponserDetail['RNode'];
			} else {
				$Rnode2=0;
			}
			
			
			
			  return 1+$this->getboathNode($Lnode2)+$this->getboathNode($Rnode2);
		}
	}
	
	
	
	
	
	
	function getSteppoolDetails(){ 		
		$qry="SELECT Sponserdetail.ImmediateSponserId  FROM sponserdetails as Sponserdetail inner join registrations as Registration on Sponserdetail.ImmediateSponserId=Registration.Rid where Registration.Role='S' and Registration.bv!='0' and  Sponserdetail.LNode!='NULL' and Sponserdetail.RNode!='NULL' and Registration.bv!='0' ";
		$command=Yii::app()->db->createCommand($qry);
		$SponserMembers=$command->queryAll();
		return $SponserMembers;
	}	
	
	
	function getLNode($Rid){ 		
				if(empty($Rid)){			
					return 0;		
				} else {			
				$sql='SELECT  Sponserdetails.LNode FROM sponserdetails AS Sponserdetails WHERE Sponserdetails.ImmediateSponserId="'.$Rid.'" ';		 	 $command=Yii::app()->db->createCommand($sql);		  	
				$sponserDetail=$command->queryRow();			
				if(!empty($sponserDetail)){			 
				 return $Lnode=$sponserDetail;			
				 } else {			 
				  return 0;				
				  }	
				  	}			
	}		
						
	function getRNode($Rid){ 		
		if(empty($Rid)){			
			return 0;		
		} else {			
			$sql='SELECT  Sponserdetails.RNode FROM sponserdetails AS Sponserdetails WHERE Sponserdetails.ImmediateSponserId="'.$Rid.'" ';		 	 
			$command=Yii::app()->db->createCommand($sql);		  	
			$sponserDetail=$command->queryRow();			
			if(!empty($sponserDetail)){			 
				return $Lnode=$sponserDetail;			
			} else {			 
				return 0;				
			}	
		}			
	}
	
	public function getSponserInfo()
	{
		$sql='select sponserId, Rid, Level, no_of_members from sponserdetails order by id desc limit 1';
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryRow();
		return $recordset;
	}	
	public function chechInsponserIDExistInSponserTable($referalD){		
	$countSponser = Yii::app()->db->createCommand("SELECT count(*) count FROM sponserdetails AS Sponserdetails WHERE Sponserdetails.ImmediateSponserId= '$referalD' ")->queryScalar();		
	return $countSponser;	
	}	
	
	public function getSponserId($Rid)
	{
		$sql='select id from sponserdetails where Rid="'.$Rid.'"';
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryRow();
		return $recordset['id'];
	}
	
	public function countMember() {
			$countMember = Yii::app()->db->createCommand('SELECT count(*) count FROM sponserdetails ')->queryScalar();
			return $countMember;
		}
		public function getSponserById($Rid)
		{
		$sql='select sponserId, ImmediateSponserId, no_of_members from sponserdetails where Rid="'.$Rid.'"';
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryRow();
		return $recordset;
		}
		public function getSponserDetailById($Rid)
		{
		$sql='select s.sponserId, s.ImmediateSponserId, s.no_of_members,u.password from sponserdetails as s left join user as u on u.usercode=s.Rid where s.Rid="'.$Rid.'"';
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryRow();
		return $recordset;
		}
		
		public function getTotalSponser($Rid)
		{
			//SELECT count(id_status) count FROM registrations where id_status=1 order by Rid desc limit 0,"'.$id.'"
		$sql="select s.Rid,s.sponserId, s.ImmediateSponserId, s.no_of_members,r.* from sponserdetails as s left join registrations as r on r.Rid=s.Rid where s.sponserId=$Rid order by s.Rid desc";
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryAll();
		return $recordset;
		}
		
		public function getUserInfo($Rid){		
			$sql="select s.Rid,s.sponserId, s.ImmediateSponserId, s.no_of_members,r.*,u.status from sponserdetails as s 		inner join registrations as r on r.Rid=s.Rid inner join user as u on u.usercode=s.Rid where s.Rid=$Rid order by s.Rid";		
			$command=Yii::app()->db->createCommand($sql);		
			$recordset=$command->queryRow();		
			return $recordset;		
		}
		
		function getLeftNodeRightNode($Rid){ 		
			if(empty($Rid)){				
				return 0;			
			} else {				
				$sql='SELECT  Sponserdetails.LNode, Sponserdetails.RNode FROM sponserdetails AS Sponserdetails WHERE Sponserdetails.ImmediateSponserId="'.$Rid.'" ';				
				$command=Yii::app()->db->createCommand($sql);				
				$sponserDetail=$command->queryRow();				
				if(!empty($sponserDetail)){				  
					return $sponserDetail;				
				} else {				  
					return 0;				
				}		
			}			
		}
					
		public function getTotalDownlineJoining($Rid)
		{
			$countTotalJoining = Yii::app()->db->createCommand('select count(Rid) from sponserdetails where Rid > "'.$Rid.'"')->queryScalar();
			return $countTotalJoining;
		}
		public function getTotalDownlinePaidJoining($Rid)
		{
			$countTotalJoining = Yii::app()->db->createCommand('select count(r.Rid) from sponserdetails as s inner join registrations as r on r.Rid=s.Rid where r.Rid > "'.$Rid.'" and r.id_status=1')->queryScalar();
			return $countTotalJoining;
		}
		public function getTotalDirectJoining($Rid)
		{
			$countTotalJoining = Yii::app()->db->createCommand('select count(r.Rid) from sponserdetails as s inner join registrations as r on r.Rid=s.Rid where r.Rid > "'.$Rid.'" and s.sponserId="'.$Rid.'"')->queryScalar();
			return $countTotalJoining;
		}
		public function getTotalDirectPaidJoining($Rid)
		{
			$countTotalJoining = Yii::app()->db->createCommand('select count(r.Rid) from sponserdetails as s inner join registrations as r on r.Rid=s.Rid where r.Rid > "'.$Rid.'" and s.sponserId="'.$Rid.'" and r.id_status=1')->queryScalar();
			return $countTotalJoining;
		}
		
		public function getSponserDetails($Rid)
		{
			
		$sql="select FirstName, ContactNo1, Address,PanNo, account_no, bank_name from registrations where Rid=$Rid";
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryRow();
		return $recordset;
		}
		
		public function getLevelIncome($Rid)
		{
		  
		$sql='select green_count, level, green_sponser from registrations where Rid="'.$Rid.'"';
		$command=Yii::app()->db->createCommand($sql);
		$recordset=$command->queryRow();
		  
		
		  if($recordset['green_count'] > 25 && $recordset['green_sponser'] == 1 ){
			   $connection=Yii::app()->db;
			   $sql2='update registrations set level=1,green_count=green_count-25, green_sponser=green_sponser - 1 where Rid="'.$Rid.'" ';
			   $command2 = $connection->createCommand($sql2);
			   $command2->execute();
			   return 1000;
			  
		  }else if($recordset['green_count'] > 100 && $recordset['green_sponser'] > 1){
			   $connection=Yii::app()->db;
			   $sql2='update registrations set level=(level+2),green_count=(green_count-100), green_sponser=(green_sponser-2) where Rid="'.$Rid.'" ';
			   $command2 = $connection->createCommand($sql2);
			   $command2->execute();
			   return 1500;
			 
			  }else{
				   return 0;
			  }
		  
		  
		  
		  //select count(r.id_status) as count from registrations as r left join sponserdetails as s on s.Rid=r.Rid where r.id_status=1 and s.id between 2 and 172
		  
		
		}
		public function getLevelIncome_origialbackup($Rid)
		{
		  $sql='select total_sponser,no_of_members from sponserdetails where Rid="'.$Rid.'"';
		  $command=Yii::app()->db->createCommand($sql);
		  $recordset=$command->queryRow();
		  
		  $sql1='select no_of_members from sponserdetails order by no_of_members desc limit 1 ';
		  $command1=Yii::app()->db->createCommand($sql1);
		  $recordset1=$command1->queryRow();
		  
		  $countGreenId = Yii::app()->db->createCommand('select count(r.id_status) as count from registrations as r left join sponserdetails as s on s.Rid=r.Rid where r.id_status=1 and s.id between "'.$recordset['no_of_members'].'" and "'.$recordset1['no_of_members'].'"')->queryScalar();
		  if($countGreenId > 49 && $recordset['total_sponser'] > 0 ){
			   $connection=Yii::app()->db;
			   $sql2='update sponserdetails set Level=1,total_sponser=total_sponser - 1 where Rid="'.$Rid.'" ';
			   $command2 = $connection->createCommand($sql2);
			   $command2->execute();
			   return 1000;
			  
		  }else{
			  return 0;
			  }
		  
		  
		  
		  //select count(r.id_status) as count from registrations as r left join sponserdetails as s on s.Rid=r.Rid where r.id_status=1 and s.id between 2 and 172
		  
		
		}
	
	

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Rid' => 'Rid',
			'sponserId' => 'Sponser',
			'ImmediateSponserId' => 'Immediate Sponser',
			'Level' => 'Level',
			'no_of_members' => 'No Of Members',
			'PlanName' => 'Plan Name',
			'MemberStatus' => 'Member Status',
			'RegistrationFee' => 'Registration Fee',
			'created' => 'Created',
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
		$criteria->compare('sponserId',$this->sponserId,true);
		$criteria->compare('ImmediateSponserId',$this->ImmediateSponserId,true);
		$criteria->compare('Level',$this->Level,true);
		$criteria->compare('no_of_members',$this->no_of_members);
		$criteria->compare('PlanName',$this->PlanName,true);
		$criteria->compare('MemberStatus',$this->MemberStatus);
		$criteria->compare('RegistrationFee',$this->RegistrationFee);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sponserdetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
