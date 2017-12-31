<?php 
class MyClass extends CApplicationComponent {
 
 public function datefolrmate($date) {
 	return date('d F Y', strtotime($date));
 }
  public function datetimefolrmate($date) {
 	return date('d F Y h:i:s', strtotime($date));
 }
 
 public function dateFormate($date) {
 	return date('d F Y h:i:s', strtotime($date));
 }
 
 public function examCurentDate() {
 	date_default_timezone_set('Asia/Calcutta'); 
	 return date('F d, Y H:i:s');
 }
 
 public function getUniqueNumber() {
 	date_default_timezone_set('Asia/Calcutta'); 
	 return date('YmdHis');
 }
 
  public function getUniquePassword() {
 	$length = 6;
	$chars = array_merge(range(0,9));
	shuffle($chars);
	$uniqueNumber = implode(array_slice($chars, 0,$length));
	return $uniqueNumber;
 }
 
 public function sendSMS($mobile, $massage){
	$sendMobile=$mobile;
	$msg = str_replace(' ', '%20', $massage);
	$url = "http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=6dd3689460a74aaae178c2a57611222c&message=$msg&senderId=STEPPL&routeId=1&mobileNos=$sendMobile&smsContentType=english";
		
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	curl_exec($ch);
 }
 
 
 
 
 
  public function hindiHeading() {
 	return array(
			'save' => 'Your record successfully saved ',
			'notsave' => 'Your record could not be save, Please try again. ',
			'update' => 'Your record updated successfully ',
			'notupdate' => 'Your record could not be update, Please try again. ',
			'user_registration' => 'Your have successfully registered, Please login. ',
			'productadd' => 'Firstly select package ',
			'addProductMsg' => 'You have successfully added item in cart',
			'addPackage' => 'You have assing successfully package to student',
		);
 }
 
 
 
}


?>