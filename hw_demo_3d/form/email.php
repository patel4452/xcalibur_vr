<?php

$postData = $_POST;

function clean_text($text='') {
	$text = trim($text);
	$text = strip_tags($text);
	$text = addslashes($text);
	$text = htmlspecialchars($text);
	return $text;
}

		$your_email = "dushyant@times.my";
		$sfname	      = clean_text($postData["first_name"]);
		$slname	      = clean_text($postData["last_name"]);
		$sname	      = $sfname ." ".$slname;
		
		$smail	      = clean_text($postData["emailId"]);
		$sphone	      = clean_text($postData["mobile"]); 
		$suser_type	  = clean_text($postData["user_type"]);
		if($suser_type == 'ProspectiveStudent'){
			$user_type = 'Prospective Student';
		} else if($suser_type == 'CurrentStudent'){
			$user_type = 'Current Student';
		} else {
			$user_type = 'Parent';
		}
		$stitle       = "New Virtual Tour Enquiry";
		
		$headers  = "From:  info@xcalibur360.com \n";
	
		$headers .= 'Content-type: text/html; charset=UTF-8'. "\r\n";
		$headers .= "Reply-To: $smail \n";
		$subject  = $stitle;
		
		$msg	  = "New Virtual Tour Enquiry\n <br/><br/>";
		$msg	 .= "Name : \t $sname \r\n  <br/><br/>";
		$msg	 .= "Email : \t $smail \r\n <br/><br/>";		
		$msg 	.= "Phone : \t $sphone \r\n <br/><br/> ";
		$msg 	.= "I am a  : \t $user_type \r\n <br/><br/> ";
		
		
		require_once 'mandrill/src/Mandrill.php';
        $mandrill           =   new Mandrill('BdToF9imlAPbwEG1P8UqSg');
        $from_name          =   'Xcalibur360';

        $emailId = 'dushyant@times.my';
		$emailId1= 'jevitha@times.my';
		$emailId2= 'clic@naza.com.my';
		$emailId3= 'vino@times.my';
		
        $message = array(
            'subject'       =>  $stitle,
            'html'          =>  $msg, // or just use 'html' to support HTMl markup
            'from_email'    =>  'info@afterschool.my', //'info@educliff.com'
            'from_name'     =>  'Xcalibur360',//$collegeName['collegeName'], //optional
            'to'            =>  array(
										array('email' =>trim($emailId),'name' =>'','type' => 'to'),
										array('email' =>trim($emailId1),'name' =>'','type' => 'to')
								),
		);
        
		if($mandrill->messages->send($message)){
			echo json_encode(array('message'=>'OK'));
		}
		
