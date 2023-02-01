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
    $curl = curl_init("https://webhooks.integrately.com/a/webhooks/8b763a9fab1c40d6aea498ad823fa9d9");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}
if (!$postData) {
	die();
}else {
	//postToEmail($postData);//die(' here ');
	header('Location: thank-you.html?token='.urlencode($encrypted_string));
	die;
}

?>