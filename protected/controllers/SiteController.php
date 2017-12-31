<?php

class SiteController extends Controller

{

	//public $layout='column1';

	/**

	 * Declares class-based actions.

	 */



	public function actions(){

		return array(

			// captcha action renders the CAPTCHA image displayed on the contact page

			'captcha'=>array(

				'class'=>'CCaptchaAction',

				'backColor'=>0xFFFFFF,

			),

			// page action renders "static" pages stored under 'protected/views/site/pages'

			// They can be accessed via: index.php?r=site/page&view=FileName

			'page'=>array(

				'class'=>'CViewAction',

			),



		);



	}

	/**

	 * This is the action to handle external exceptions.

	 */

	public function actionError()
{
    if($error=Yii::app()->errorHandler->error)
        $this->render('error', $error);
}
	public function actionAbout()

	{

		$this->layout=false;		 

		$this->render('about',array());	 

	}

	

	 public function actionProducts()	 

	 {		 

	    $this->layout=false;		 

		$this->render('products',array());

	 }	 

	 public function actionPlan()	 

	 {	

	 	 $this->layout=false;		 

		 $this->render('plan',array());	 

	 }	
	 
	 public function actionReward()	 

	 {	

	 	 $this->layout=false;		 

		 $this->render('reward',array());	 

	 }	 		  		 

	 public function actionOpportunity()	 

	 {	

	 	 $this->layout=false;

		 $plan=Plan::model()->getPlan();

		

			 

		 $this->render('opportunity',array('plan'=>$plan));	 

	 }	 	 

	 

	 public function actionDownloads()	 

	 {

		 $this->layout=false;		 

		 $this->render('downloads',array());	 

	 }	 	 

	 

	 public function actionPhotoGallery()	 

	 {		

	     $this->layout=false;		 

		 $this->render('photogallery',array());	 

	 }	 	 

	 

	 public function actionVideoGallery()	 

	 {		

	     $this->layout=false;		 

		 $this->render('videogallery',array());	 

	 }	 	 

	 

	 public function actionContact()	 

	 {	

	 	 $this->layout=false;		 

		 $this->render('contact',array());	 

	 }	 	 

	 

	 public function actionLegals()	 

	 {	

	 	 $this->layout=false;		 

		 $this->render('legals',array());	 

	 }
	 
	 public function actionGallery()	 

	 {	

	 	 $this->layout=false;		 

		 $this->render('gallery',array());	 

	 }	
	 
	 public function actionIndex()	 

	 {	

	 	 $this->layout=false;		 

		 $this->render('index',array());	 

	 }		  

/**

    *Displays the index page

	



	public function actionIndex(){

	    $this->layout = 'none';

		$plan=Plan::model()->getPlan();

		

		$this->render('index',array('plan'=>$plan));

	    

	} */

	public function actionRegistration()

	{

		$this->layout = 'none';

		$model=new Registrations;

		$this->render('registration',array('model'=>$model));

	}

	public function actionMemberlogin()

	{

		$this->layout = 'none';

		$this->render('memberlogin',array());

	}



	public function actionCreate()

	{

		//echo "<pre>";print_r($_POST);die;

		$model=new Registrations;

		$model1=new Sponserdetails;

		$model3=new User;

	if ($model->validate())	{

		if(isset($_POST)){

			$sponser_detail=Sponserdetails::model()->getSponserInfo();

			$countmember=Sponserdetails::model()->countMember();

			

			$model->SponserID	   = $_POST['sponser_id'];

			$model->FirstName	   = $_POST['name'];

			$model->DOB	           = $_POST['dob'];

			$model->Address	       = $_POST['address'];

			$model->ContactNo1	   = $_POST['contact_no'];

			$model->PanNo	       = $_POST['pan_no'];

			$model->ifsc	       = $_POST['ifsc'];

			$model->bank_name	   = $_POST['bank_name'];

			$model->branch_name	   = $_POST['branch_name'];

			$model->account_no	   = $_POST['account_no'];

			$model->created  	   =date('Y-m-d ');

			if($model->save()){

		    $lastId=Yii::app()->db->lastInsertID;

			

			$model1->Rid	    = $lastId;

			$model1->sponserId	=  $_POST['sponser_id'];

			$model1->ImmediateSponserId	=  $sponser_detail['Rid'];

			$model1->no_of_members	=  $countmember;

			$model1->created  	=date('Y-m-d');

			$model1->save();

			

			

			     

			

			$query=Yii::app()->db->createCommand()->insert('user',

														   	   array('username'=>$lastId,'password'=>$_POST['password'],'user_type'=>2,'status'=>0, 'usercode'=>$lastId));

		

			

			

				echo '1'.'/'.$lastId;

			

				

			}

		}

	}

		

	}

	

	public function actionLogin(){
		$this->layout = 'none';
		$model=new LoginForm;
		//echo Yii::app()->user->id; exit;
		if(Yii::app()->user->id!=''){
			if(Yii::app()->user->getState('user_type')==2){
				$this->redirect(array('user/member_dashboard'));
			} else {
				$this->redirect(array('user/dashboard'));
			}

		}

        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form'){

            echo CActiveForm::validate($model);

            Yii::app()->end();

        }

        // collect user input data

        if(isset($_POST['LoginForm'])) {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
				//echo Yii::app()->user->user_type; exit;
				if(Yii::app()->user->user_type==2){
                     $this->redirect(array('user/member_dashboard'));
                }else{
					$this->redirect(array('user/dashboard'));//0=Admin
                }
        }
        // display the login form
        $this->render('login',array('model'=>$model));

	}





	public function actionLogout()

	{



		//Yii::app()->user->setFlash('success', 'You are logged out successfully.');



		//Yii::app()->user->logout();



		//$this->redirect(Yii::app()->homeUrl);



		//$this->render('login',array('model'=>$model));



		Yii::app()->user->setFlash('error', "Successful!");



		Yii::app()->user->logout();



		$this->redirect(array('login'));



		//$this->redirect(Yii::app()->homeUrl);



	}



	



	public function actionTest(){ //Testing for Excel 



		$model = new User(); //Table Name



        $labels = $model->attributeNames();



        $data = $model->findAll();



       //Begin an excel object



        $objPHPExcel = Yii::app()->excel;



        //Set labels in excel file



        $objPHPExcel->getActiveSheet()->setCellValue('A1',$labels[0]);



        $objPHPExcel->getActiveSheet()->setCellValue('B1',$labels[1]);



        $objPHPExcel->getActiveSheet()->setCellValue('C1',$labels[2]);



        $objPHPExcel->getActiveSheet()->setCellValue('D1',$labels[3]);



        $i = 2;



        foreach($data as $record){



            //Set value for each cell



            $objPHPExcel->getActiveSheet()->setCellValue('A'. $i,$record->id);



            $objPHPExcel->getActiveSheet()->setCellValue('B'. $i,$record->username);



            $objPHPExcel->getActiveSheet()->setCellValue('C'. $i,$record->password);



            $objPHPExcel->getActiveSheet()->setCellValue('D'. $i,$record->create);



            $i++;



        }



        //Set width for each B,C,D cell 



        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(24);



        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(24);



        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(24);



        //file name



        $filename = "abc.xlsx";



        //Save to abc.xlsx file



        // You can use like PHPExcel documentation from codeplex: 



        //$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);



       // $objWriter->save($filename);



        //$objPHPExcel->saveExcel2007($objPHPExcel,$filename);



		header('Content-Type: application/vnd.ms-excel');



    	header('Content-Disposition: attachment;filename="'.$filename.'"');



    	header('Cache-Control: max-age=0');



    	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');



    	$objWriter->save('php://output'); // This function for download excel file 



	}





}


