<?php
ob_start();
//session_start();
//ini_set('error_reporting', E_ALL);
$postData = $_POST;
// echo "<pre>"; print_r($_POST);exit;
function clean_text($text='') {
	$text = trim($text);
	$text = strip_tags($text);
	$text = addslashes($text);
	$text = htmlspecialchars($text);
	return $text;
}
if (!$postData) {
	die();
}else {
	    $currenthref = $_SERVER['HTTP_REFERER'];
		$referrerref = str_replace("https://", '', $currenthref);
		$referrerref = str_replace("http://", '', $currenthref);
		$str_name = $_POST['fullname'];
		$str_phone_number = $_POST['mobile'];
		$str_email = $_POST['emailId'];
		
		$encrypted_string = base64_encode($postData['emailId']);
		header('Location: thankyou.php?token='.urlencode($encrypted_string));
}

?>