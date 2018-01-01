<?php

/**
 * This is the model class for table "registrations".
 *
 * The followings are the available columns in table 'registrations':
 * @property string $Rid
 * @property integer $branch_id
 * @property string $bv
 * @property integer $persentage
 * @property integer $upgrade_status
 * @property integer $package_id
 * @property integer $toppup_pack_id
 * @property string $topup_dateRidExist
 * @property string $JoiningPackage
 * @property string $PV
 * @property string $TitleName
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property integer $Age
 * @property string $DOB
 * @property string $fatherName
 * @property string $MotherName
 * @property string $Occupation
 * @property string $Sex
 * @property string $MaritalStatus
 * @property string $PanNo
 * @property string $ContactNo1
 * @property string $ContactNo2
 * @property string $ContactNo3
 * @property string $Emailaddress
 * @property string $Address
 * @property string $City
 * @property string $State
 * @property string $District
 * @property string $ZipCode
 * @property string $Country
 * @property string $Nominee
 * @property string $NAge
 * @property string $Relation
 * @property string $SponserID
 * @property string $ImmediateSponserId
 * @property string $BinaryPosition
 * @property string $PinNo
 * @property string $RegistrationDate
 * @property string $Terms
 * @property string $BloodGroup
 * @property string $Username
 * @property string $Password
 * @property string $Status
 * @property string $Role
 * @property string $Level
 * @property string $Nationality
 * @property string $Upgradedate
 * @property string $PackageDetails
 * @property string $Image
 * @property string $created
 * @property string $pack_update_date
 * @property string $last_login
 * @property string $current_login
 * @property integer $is_deleted
 * @property integer $created_by
 */
class Registrations extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	 public $fromdate;	
	  public $todate;	
	 public $pair; 
	 public $profilepass;	
	 public $countGreen='';
	 public $countRight='';
	 public $countGreenMember='';
	 public $countGreenMemberRight='';
	public $nodevalue='';
	public $Rightnodevalue='';
	
	public function tableName()
	{
		return 'registrations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pin_id, package_id, BinaryPosition, FirstName,  Sex, ContactNo1, SponserID', 'required', 'on'=>'insert'),
			
			array('ContactNo1', 'numerical', 'on'=>'insert'),
			array('DOB', 'type', 'type' => 'date', 'message' => '{attribute}: is not a date!', 'dateFormat' => 'yyyy-MM-dd', 'on'=>'insert'),
			//array('Emailaddress','email', 'on'=>'insert'),
			//array('Image', 'file', 'types'=>'jpg, gif, png, jpge', 'maxSize'=>1024 * 1024 * 1, 'tooLarge'=>'File has to be bigger than 1MB', 'on'=>'insert'),
			
			array('FirstName, Sex, ContactNo1', 'required', 'except'=>'edit'),
			array('ContactNo1, ZipCode', 'numerical', 'except'=>'edit'),
			array('Image', 'file', 'types'=>'jpg, gif, png, jpge',  'allowEmpty'=>true, 'maxSize'=>1024 * 1024 * 1, 'tooLarge'=>'File has to be bigger than 1MB', 'except'=>'edit'),
			array('package_id, profilepass', 'required', 'on'=>'redupgrade'),
			
			
			
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			//array('Rid, branch_id, bv, persentage, upgrade_status, package_id, toppup_pack_id, topup_date, JoiningPackage, PV, TitleName, FirstName, MiddleName, LastName, Age, DOB, fatherName, MotherName, Occupation, Sex, MaritalStatus, PanNo, ContactNo1, ContactNo2, ContactNo3, Emailaddress, Address, City, State, District, ZipCode, Country, Nominee, NAge, Relation, SponserID, ImmediateSponserId, BinaryPosition, PinNo, RegistrationDate, Terms, BloodGroup, Username, Password, Status, Role, Level, Nationality, Upgradedate, PackageDetails, Image, created, pack_update_date, last_login, current_login, is_deleted, created_by', 'safe', 'on'=>'search'),
		);
	}
	
	public function countMember(){
		$countmember = Yii::app()->db->createCommand("select count(Rid) from registrations")->queryScalar();
		return $countmember;
	}
	public function getBusinessTurnover(){
		    $sql="select sum(package_amt) as amount from registrations";
			$command=Yii::app()->db->createCommand($sql);
			$recordset=$command->queryRow();
			return $recordset['amount'];
	}
	public static function AutosharingTurnover(){
			$sql="SELECT sum(amount) as amt FROM steppoolamount";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryRow();
			return $queryArray['amt'];
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
			'Rid' => 'Rid',
			'branch_id' => 'Branch',
			'pin_id' => 'Pin No.',
			'bv' => 'Business Volume',
			'persentage' => 'Persentage',
			'upgrade_status' => 'Upgrade Status',
			'package_id' => 'Package',
			'toppup_pack_id' => 'Toppup Pack',
			'topup_date' => 'Topup Date',
			'JoiningPackage' => 'Joining Package',
			'PV' => 'Pv',
			'TitleName' => 'Title Name',
			'FirstName' => 'Name',
			'MiddleName' => 'Middle Name',
			'LastName' => 'Last Name',
			'Age' => 'Age',
			'DOB' => 'DOB',
			'fatherName' => "Father's/Husband Name",
			'MotherName' => 'Mother Name',
			'Occupation' => 'Occupation',
			'Sex' => 'Sex',
			'MaritalStatus' => 'Marital Status',
			'PanNo' => 'Pan No',
			'ContactNo1' => 'Mobile',
			'ContactNo2' => 'Contact No2',
			'ContactNo3' => 'Contact No3',
			'Emailaddress' => 'Email ID',
			'Address' => 'Address',
			'City' => 'City',
			'State' => 'State',
			'District' => 'District',
			'ZipCode' => 'Zip Code',
			'Country' => 'Country',
			'Nominee' => 'Nominee',
			'NAge' => 'Nage',
			'Relation' => 'Relation',
			'SponserID' => 'Who Introduces You',
			'ImmediateSponserId' => 'Immediate Sponser',
			'BinaryPosition' => 'Position',
			'PinNo' => 'Pin No',
			'RegistrationDate' => 'Registration Date',
			'Terms' => 'Terms',
			'BloodGroup' => 'Blood Group',
			'Username' => 'Username',
			'Password' => 'Password',
			'Status' => 'Status',
			'Role' => 'Role',
			'Level' => 'Level',
			'Nationality' => 'Nationality',
			'Upgradedate' => 'Upgradedate',
			'PackageDetails' => 'Package Details',
			'Image' => 'Image',
			'created' => 'Created',
			'pack_update_date' => 'Pack Update Date',
			'last_login' => 'Last Login',
			'current_login' => 'Current Login',
			'is_deleted' => 'Is Deleted',
			'created_by' => 'Created By', 
			'profilepass' => 'Profile Password',
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

		$criteria->compare('Rid',$this->Rid,true);
		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('bv',$this->bv,true);
		$criteria->compare('persentage',$this->persentage);
		$criteria->compare('upgrade_status',$this->upgrade_status);
		$criteria->compare('package_id',$this->package_id);
		$criteria->compare('toppup_pack_id',$this->toppup_pack_id);
		$criteria->compare('topup_date',$this->topup_date,true);
		$criteria->compare('JoiningPackage',$this->JoiningPackage,true);
		$criteria->compare('PV',$this->PV,true);
		$criteria->compare('TitleName',$this->TitleName,true);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('MiddleName',$this->MiddleName,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('Age',$this->Age);
		$criteria->compare('DOB',$this->DOB,true);
		$criteria->compare('fatherName',$this->fatherName,true);
		$criteria->compare('MotherName',$this->MotherName,true);
		$criteria->compare('Occupation',$this->Occupation,true);
		$criteria->compare('Sex',$this->Sex,true);
		$criteria->compare('MaritalStatus',$this->MaritalStatus,true);
		$criteria->compare('PanNo',$this->PanNo,true);
		$criteria->compare('ContactNo1',$this->ContactNo1,true);
		$criteria->compare('ContactNo2',$this->ContactNo2,true);
		$criteria->compare('ContactNo3',$this->ContactNo3,true);
		$criteria->compare('Emailaddress',$this->Emailaddress,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('City',$this->City,true);
		$criteria->compare('State',$this->State,true);
		$criteria->compare('District',$this->District,true);
		$criteria->compare('ZipCode',$this->ZipCode,true);
		$criteria->compare('Country',$this->Country,true);
		$criteria->compare('Nominee',$this->Nominee,true);
		$criteria->compare('NAge',$this->NAge,true);
		$criteria->compare('Relation',$this->Relation,true);
		$criteria->compare('SponserID',$this->SponserID,true);
		$criteria->compare('ImmediateSponserId',$this->ImmediateSponserId,true);
		$criteria->compare('BinaryPosition',$this->BinaryPosition,true);
		$criteria->compare('PinNo',$this->PinNo,true);
		$criteria->compare('RegistrationDate',$this->RegistrationDate,true);
		$criteria->compare('Terms',$this->Terms,true);
		$criteria->compare('BloodGroup',$this->BloodGroup,true);
		$criteria->compare('Username',$this->Username,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Status',$this->Status,true);
		$criteria->compare('Role',$this->Role,true);
		$criteria->compare('Level',$this->Level,true);
		$criteria->compare('Nationality',$this->Nationality,true);
		$criteria->compare('Upgradedate',$this->Upgradedate,true);
		$criteria->compare('PackageDetails',$this->PackageDetails,true);
		$criteria->compare('Image',$this->Image,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('pack_update_date',$this->pack_update_date,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('current_login',$this->current_login,true);
		$criteria->compare('is_deleted',$this->is_deleted);
		$criteria->compare('created_by',$this->created_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
		
		public static function getAllMembers(){
			$sql="SELECT Rid FROM registrations where bv!=0 order by Rid asc ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryAll();
			return $queryArray;
		}
		
		public static function networkDetails($Rid){		
			return Yii::app()->db->createCommand('SELECT Plan.package_name, Registration.agg_leftbv , Registration.agg_rightbv , Registration.agg_bv , Registration.tota_left_bv,
			Registration.total_right_bv, Registration.total_mbv, Registration.bv, Registration.Rid,Registration.FirstName,
			Registration.Sex, Registration.created, Registration.Image, Registration.SponserID  FROM registrations AS Registration 					 left join packages as Plan on Plan.id=Registration.package_id  WHERE Registration.Rid="'.$Rid.'"')->queryRow();	}		public static function networSponserkDetails($Rid){		return Yii::app()->db->createCommand('SELECT Registration.FirstName, Registration.Sex ,Sponserdetails.LNode,						Sponserdetails.RNode FROM sponserdetails AS Sponserdetails left join registrations AS Registration on 						Registration.Rid=Sponserdetails.ImmediateSponserId WHERE Sponserdetails.ImmediateSponserId="'.$Rid.'"')->queryRow();						
			}	
	
	public static function checkSponserId($reffrelId){
		$countRegistration = Yii::app()->db->createCommand('SELECT count(*) count FROM registrations AS Registration WHERE Registration.Rid="'.$reffrelId.'"  ')->queryScalar();
		return $countRegistration;
	}
	
	public static function getSponsorID($rid){
			$sql="SELECT SponserID FROM registrations where Rid=$rid ";
			$command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['SponserID'];
		}
	
	
	public static function countGreenMember(){
			$sql='SELECT count(*) as totalcount FROM registrations where package_id!=1 ';
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryScalar();
			return $queryArray;
		}
		
		public static function countGreenMemberByBranchID($branchId){
			$sql="SELECT count(*) as totalcount FROM registrations where package_id!=1 and branch_id='$branchId' ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryScalar();
			return $queryArray;
		}
		
		
		
		public static function countRedMember(){
			$sql='SELECT count(*) as totalcount FROM registrations where package_id=1 ';
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryScalar();
			return $queryArray;
		}
		
		
		public static function countRedMemberByBranchId($branchId){
			$sql="SELECT count(*) as totalcount FROM registrations where package_id=1 and branch_id='$branchId' ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryScalar();
			return $queryArray;
		}
		
		
		
	
	public static function getUserPhoto(){
			$sql='SELECT registrations.Image FROM registrations where bv!=0 and Image!="" order by Rid desc limit 9';
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryAll();
			return $queryArray;
		}
		
		
		public static function getContactNoByRID($rid){
			$sql="SELECT registrations.ContactNo1 FROM registrations where Rid=$rid ";
			$command=Yii::app()->db->createCommand($sql);
			$queryArray=$command->queryAll();
			return $queryArray;
		}
		
		public static function MobileNoByRID($rid){
			$sql="SELECT registrations.ContactNo1 FROM registrations where Rid=$rid ";
			$command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['ContactNo1'];
		}
		
		
		
		
		
		public static function FirstNameByRID($rid){
			$sql="SELECT registrations.FirstName FROM registrations where Rid=$rid ";
			$command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['FirstName'];
		}
		
		
		
		public static function getRidDetail($RID){
				$sql='SELECT Rid,package_id , BinaryPosition, ContactNo1, ImmediateSponserId FROM registrations WHERE Rid="'.$RID.'" ';
				$command=Yii::app()->db->createCommand($sql);
				$queryArray=$command->queryRow();
				return $queryArray;
		}
		
		public static function getRidCustomeDetails($RID){
				$sql="SELECT registrations.created,registrations.Rid,registrations.FirstName,registrations.bv, registrations.RegistrationDate,  registrations.MiddleName, registrations.LastName, registrations.JoiningPackage,   registrations.Address, registrations.Address, packages.package_name FROM registrations left join packages on packages.id=registrations.package_id WHERE Rid='$RID' ";
				$command=Yii::app()->db->createCommand($sql);
				$queryArray=$command->queryRow();
				return $queryArray;
		}
		
		public static function getRidDetails($RID){
				$sql="SELECT registrations.created,registrations.Rid,registrations.FirstName,registrations.bv, registrations.RegistrationDate,  registrations.MiddleName, registrations.LastName, registrations.City, registrations.Image, registrations.fatherName, registrations.State, registrations.PanNo, registrations.Address, registrations.Username,  registrations.DOB,  registrations.pack_update_date,  registrations.ContactNo1, registrations.ZipCode, packages.package_name FROM registrations left join packages on packages.id=registrations.package_id WHERE Rid='$RID' ";
				$command=Yii::app()->db->createCommand($sql);
				$queryArray=$command->queryRow();
				return $queryArray;
		}
		
		public static function getProfileDetailsByEID($RID){
				$sql="SELECT 
				registrations.*, registrations.DOB as userdob, 
				bankdetails.*,  packages.*, user.username, user.password
				FROM registrations left join packages on packages.id=registrations.package_id 
				left join user on user.usercode=registrations.Rid
				 left join bankdetails on bankdetails.Rid=registrations.Rid
				 
				WHERE registrations.Rid='$RID' ";
				$command=Yii::app()->db->createCommand($sql);
				$queryArray=$command->queryRow();
				return $queryArray;
		}
		
		
		public static function getBvByRid($Rid){
			  $sql='SELECT bv FROM registrations WHERE Rid="'.$Rid.'"';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['bv'];
		}
		
		public static function getTotalBvByFronDatetoDate($fromDate, $todate){
			  $sql="SELECT sum(bv) as bv FROM registrations WHERE bv!=0 and created BETWEEN '$fromDate' AND '$todate' ";
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['bv'];
		}
		
		public static function getTotalAmountByFronDatetoDate($fromDate, $todate){
			  $sql="SELECT sum(JoiningPackage) as JoiningPackage FROM registrations WHERE bv!=0 and created BETWEEN '$fromDate' AND '$todate' ";
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['JoiningPackage'];
		}
		
		public static function getTotalMemberByPackageID($packageId){
			  $sql="SELECT count(*) as totalmember FROM registrations WHERE package_id='$packageId' ";
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['totalmember'];
		}
		
		public static function getRIDNameByRid($Rid){
			  $sql="SELECT FirstName FROM registrations WHERE Rid='$Rid' ";
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['FirstName'];
		}
		
		public static function getTotalCollectionByPackageID($packageId){
			  $sql="SELECT sum(JoiningPackage) as collections FROM registrations WHERE package_id='$packageId' ";
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['collections'];
		}
		
		public static function getTotalBVByPackageID($packageId){
			  $sql="SELECT sum(bv) as BVcollections FROM registrations WHERE package_id='$packageId' ";
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['BVcollections'];
		}
		
		
		
		
		public static function getSomeDetailsByRID($RID){
				$sql='SELECT Registration.FirstName, Registration.Address, Registration.City, Registration.ContactNo1,Registration.PanNo,Registration.fatherName, Registration.bv, Registration.package_id, Registration.PanNo FROM registrations as  Registration WHERE Rid="'.$RID.'" ';
				$command=Yii::app()->db->createCommand($sql);
				$queryArray=$command->queryRow();
				return $queryArray;
		}
		
		public function sponserExist($sponserID){
		$countSponserID = Yii::app()->db->createCommand('SELECT count(*) count FROM registrations AS Registration WHERE Rid="'.$sponserID.'" ')->queryScalar();
		return $countSponserID;
	}
		
		
		function getTotalMemberLeft($id){ 
			$this->countGreenMember=0;
			if($id==0){
				return 0;
			} else {
				
				if(!empty($id)){
				 $Lnode=$id;
					$this->getGrenMemberLeft($Lnode);
					$left=$this->countGreenMember; //50%-100%
					return $left>0?$left:0;
					
				} else {
				  return 0;	
				}
			}
			
	}
	
	
	public function getGrenMemberLeft($id){
		
		if($id==NULL){
			return 0;
		} else {
			$sponserDetail2=Sponserdetails::model()->getLeftNodeRightNode($id);
			if(isset($sponserDetail2['LNode'])){
				$Lnode2=$sponserDetail2['LNode'];
			} else {
				$Lnode2=0;
			}
			if(isset($sponserDetail2['RNode'])){
				$Rnode2=$sponserDetail2['RNode'];
			} else {
				$Rnode2=0;
			}
			
			$qry1="SELECT  Registration.bv FROM  registrations AS Registration  WHERE Registration.Rid =$id and Registration.bv!=0 	";
		 	 $command=Yii::app()->db->createCommand($qry1);
		  	 $LeftPackageDetails=$command->queryRow();
			    if(!empty($LeftPackageDetails)){
			 		if($LeftPackageDetails['bv']!=0){
						    $this->countGreenMember++;
							//echo $LeftPackageDetails['bv'];
							//echo '<br>';
					} 
				 } 
						
			  return $this->getGrenMemberLeft($Lnode2)+$this->getGrenMemberLeft($Rnode2);
		}
	
	}
	
	
	
	function getTotalMemberRight($id){ 
			$this->countGreenMemberRight=0;
			if($id==0){
				return 0;
			} else {
				
				if(!empty($id)){
				 $Rnode=$id;
					$this->getGrenMemberRight($Rnode);
					$rights= $this->countGreenMemberRight; //50%-100%
					return $rights>0?$rights:0;
				} else {
				  return 0;	
				}
			}
			
	}
	
	
	public function getGrenMemberRight($id){
		
		if($id==NULL){
			return 0;
		} else {
			$sponserDetail2=Sponserdetails::model()->getLeftNodeRightNode($id);
			if(isset($sponserDetail2['LNode'])){
				$Lnode2=$sponserDetail2['LNode'];
			} else {
				$Lnode2=0;
			}
			if(isset($sponserDetail2['RNode'])){
				$Rnode2=$sponserDetail2['RNode'];
			} else {
				$Rnode2=0;
			}
			
			$qry1="SELECT Registration.bv FROM  registrations AS Registration  WHERE Registration.Rid =$id and Registration.bv!=0 	";
		 	 $command=Yii::app()->db->createCommand($qry1);
		  	 $LeftPackageDetails=$command->queryRow();
			    if(!empty($LeftPackageDetails)){
			 		if($LeftPackageDetails['bv']!=0){
						    $this->countGreenMemberRight++;
							//echo $LeftPackageDetails['bv'];
							//echo '<br>';
					} 
				 } 
						
			  return $this->getGrenMemberRight($Lnode2)+$this->getGrenMemberRight($Rnode2);
		}
	
	}
	
	
	function getTotalBVLeft($id){ 
		$this->countGreen=0;
		if($id==0){
			return 0;
		} else {
			
			if(!empty($id)){
			 $Lnode=$id;
				$this->getGren($Lnode);
				$lefts= $this->countGreen; //50%-100%
				return $lefts>0?$lefts:'0';
				
			} else {
			  return 0;	
			}
		}
			
	}
	
	
	function getTotalBVRight($id){ 
		$this->countRight='';
		if($id==0){
			return 0;
		} else {
			if(!empty($id)){
			 $Rnode=$id;
				$this->getGrenRight($Rnode);
				$right= $this->countRight; //50%-100%
				return $right>0?$right:0; 
			} else {
			  return 0;	
			}
		}
			
	}
	
	public function getGren($id){
		
		if($id==NULL){
			return 0;
		} else {
			$sponserDetail2=Sponserdetails::model()->getLeftNodeRightNode($id);
			if(isset($sponserDetail2['LNode'])){
				$Lnode2=$sponserDetail2['LNode'];
			} else {
				$Lnode2=0;
			}
			if(isset($sponserDetail2['RNode'])){
				$Rnode2=$sponserDetail2['RNode'];
			} else {
				$Rnode2=0;
			}
			
			$qry1="SELECT Registration.bv FROM  registrations AS Registration  WHERE Registration.Rid =$id and Registration.bv!=0 	";
		 	 $command=Yii::app()->db->createCommand($qry1);
		  	 $LeftPackageDetails=$command->queryRow();
			    if(!empty($LeftPackageDetails)){
			 		if($LeftPackageDetails['bv']!=0){
						    $this->countGreen=intval($this->countGreen)+intval($LeftPackageDetails['bv']);
							
					} 
				 } 
						
			  return $this->getGren($Lnode2)+$this->getGren($Rnode2);
		}
	
	}
	
	public function getGrenRight($id){
		if($id==NULL){
			return 0;
		} else {
			$sponserDetail2=Sponserdetails::model()->getLeftNodeRightNode($id);
			if(isset($sponserDetail2['LNode'])){
				$Lnode2=$sponserDetail2['LNode'];
			} else {
				$Lnode2=0;
			}
			if(isset($sponserDetail2['RNode'])){
				$Rnode2=$sponserDetail2['RNode'];
			} else {
				$Rnode2=0;
			}
			
			$qry1="SELECT Registration.bv FROM  registrations AS Registration  WHERE Registration.Rid =$id and Registration.bv!=0 	";
		 	 $command=Yii::app()->db->createCommand($qry1);
		  	 $LeftPackageDetails=$command->queryRow();
			    if(!empty($LeftPackageDetails)){
			 		if($LeftPackageDetails['bv']!=0){
						    $this->countRight=intval($this->countRight)+intval($LeftPackageDetails['bv']);
							//echo $LeftPackageDetails['bv'].$this->countRight ;
							//echo '<br>';
					} 
				 } 
						
			  return $this->getGrenRight($Lnode2)+$this->getGrenRight($Rnode2);
		}
	
	}
	
	function CountTotalGreenLeft($id){ 
		$this->countGreen=0;
		if($id==0){
			return 0;
		} else {
			$sponserDetail1=Sponserdetails::model()->getLNode($id);
			
			if(!empty($sponserDetail1)){
			 $Lnode=$sponserDetail1['LNode'];
				$this->getGren($Lnode);
				return $this->countGreen; //50%-100%
			} else {
			  return 0;	
			}
		}
			
	}
	
	 
	
	function CountTotalGreenRight($id){ 
	$this->countRight='';
		if($id==0){
			return 0;
		} else {
			$sponserDetail1=Sponserdetails::model()->getRNode($id);
			
			if(!empty($sponserDetail1)){
			 $Lnode=$sponserDetail1['RNode'];
				$this->getGrenRight($Lnode);
				return $this->countRight; //50%-100%
			} else {
			  return 0;	
			}
		}
			
	}
	
	
	 
	public function totalleftmemberlist($id){
		$this->nodevalue='';
		if($id==0){
			return 0;
		} else {
			$this->Business_LNode($id);
			return $this->nodevalue;
		}
			
	}
	
	
	public function Business_LNode($id){
		if($id==NULL){
			return 0;
		} else {
			$sponserDetail2=Sponserdetails::model()->getLeftNodeRightNode($id);
			if(isset($sponserDetail2['LNode'])){
				$Lnode2=$sponserDetail2['LNode'];
			} else {
				$Lnode2=0;
			}
			if(isset($sponserDetail2['RNode'])){
				$Rnode2=$sponserDetail2['RNode'];
			} else {
				$Rnode2=0;
			}
			
			$qry1="SELECT Registration.Rid FROM  registrations AS Registration  WHERE Registration.Rid =$id and Registration.bv!=0 and Registration.package_id!=1 	";
		 	 $command=Yii::app()->db->createCommand($qry1);
		  	 $LeftPackageDetails=$command->queryRow();
			    if(!empty($LeftPackageDetails)){
						    $this->nodevalue=$this->nodevalue.','.$LeftPackageDetails['Rid'];
				 } 
						
			  return $this->Business_LNode($Lnode2)+$this->Business_LNode($Rnode2);
		}
		
		
		
	}
	
	public function Business_RNode($id){
		ini_set('max_execution_time',120 ); 
		if($id==NULL){
			return 0;
		} else {
			$sponserDetail2=Sponserdetails::model()->getLeftNodeRightNode($id);
			if(isset($sponserDetail2['LNode'])){
				$Lnode2=$sponserDetail2['LNode'];
				$this->Rightnodevalue.=$Lnode2.',';
				
			} else {
				$Lnode2=0;
			}
			if(isset($sponserDetail2['RNode'])){
				$Rnode2=$sponserDetail2['RNode'];
				$this->Rightnodevalue.=$Rnode2.',';
				
			} else {
				$Rnode2=0;
			}
			  return $this->Business_RNode($Lnode2)+$this->Business_RNode($Rnode2);

		}
	}	
		
	public function RidExist($Rid, $total_mbv){
		$countRidID = Yii::app()->db->createCommand('SELECT count(*) count FROM registrations WHERE Rid="'.$Rid.'" and total_mbv="'.$total_mbv.'"  ')->queryScalar();
		return $countRidID;
	}	
	
	public function RidTotalBvByRid($Rid, $total_mbv){
		$sql='SELECT total_mbv FROM registrations WHERE Rid="'.$Rid.'" and total_mbv="'.$total_mbv.'"  ';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['total_mbv'];
	}
	
	public function getImdiateSponserByRid($Rid){		
		$sql='SELECT ImmediateSponserId FROM registrations WHERE Rid="'.$Rid.'"  ';		
		$command=Yii::app()->db->createCommand($sql);		
		$registrationDetailArray=$command->queryRow();		
		return $registrationDetailArray['ImmediateSponserId'];	
		}		
		
		public function getImdiateSponserDetailsByRid($Rid){		
			$sql='SELECT ImmediateSponserId, BinaryPosition  FROM registrations WHERE Rid="'.$Rid.'"  ';	
			$command=Yii::app()->db->createCommand($sql);		
			$registrationDetailArray=$command->queryRow();		
			return $registrationDetailArray;	
		}
	
	public function gettotalLeftBvByRid($Rid){
		$sql='SELECT tota_left_bv FROM registrations WHERE Rid="'.$Rid.'"  ';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['tota_left_bv'];
	}
	
	
	public function gettotalRightBvByRid($Rid){
		$sql='SELECT total_right_bv FROM registrations WHERE Rid="'.$Rid.'"  ';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['total_right_bv'];
	}
	
	public function getPostioSponser($Rid){
		$sql='SELECT BinaryPosition FROM registrations WHERE Rid="'.$Rid.'"  ';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['BinaryPosition'];
	}

	
	public function LeftBv($Rid){
		$sql='SELECT tota_left_bv FROM registrations WHERE Rid="'.$Rid.'"  ';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['tota_left_bv'];
	}		
	
	public function bvDetailsByRid($Rid){		
		$sql='SELECT tota_left_bv, total_right_bv, total_mbv  FROM registrations WHERE Rid="'.$Rid.'"  ';		
		$command=Yii::app()->db->createCommand($sql);		
		$registrationDetailArray=$command->queryRow();		
		return $registrationDetailArray;	
	}			
	
	public function RightBv($Rid){
		$sql='SELECT total_right_bv FROM registrations WHERE Rid="'.$Rid.'"  ';
			  $command=Yii::app()->db->createCommand($sql);
			  $registrationDetailArray=$command->queryRow();
			  return $registrationDetailArray['total_right_bv'];
	}
	
	
		
	
	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registrations the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
