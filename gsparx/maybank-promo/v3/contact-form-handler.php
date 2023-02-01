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
    $curl = curl_init("https://webhooks.integrately.com/a/webhooks/e59d315b060b4e2cb2ff7f16a3c8aa77");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}
if (!$postData) {
	die();
}else {
	postToEmail($postData);//die(' here ');
	header('Location: thank-you.html?token='.urlencode($encrypted_string));
	die;
}

?>