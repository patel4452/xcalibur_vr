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
    $curl = curl_init("https://webhooks.integrately.com/a/webhooks/7aa4c5ee30894774ac00d8655c030293");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}
if (!$postData) {
	die();
}else {
	postToEmail($postData);//die(' here ');
	header('Location: business-tq');
	die;
}

?>