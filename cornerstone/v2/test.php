<?php
ob_start();
$postData = $_POST;
function clean_text($text='') {
	$text = trim($text);
	$text = strip_tags($text);
	$text = addslashes($text);
	$text = htmlspecialchars($text);
	return $text;
}
function postToEmail($formdata)
{
    $data = $formdata;
    $curl = curl_init("https://webhooks.integrately.com/a/webhooks/cb24d838afcb4c95aa2a32218d9545ff");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, ($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}
if (!$postData) {
	die();
}else {
	//echo"<pre>"; print_r($postData);die;
	postToEmail($postData);//die(' here ');
	header('Location: thank-you.html?token='.urlencode($encrypted_string));
	die;
}

?>