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
    $curl = curl_init("https://webhooks.integrately.com/a/webhooks/4d3c6927a04a4eb8aed0cb0b79633567");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}
if (!$postData) {
	die();
}else {
	postToEmail($postData);//die(' here ');
	header('Location: download_brochure.html?token='.urlencode($encrypted_string));
	die;
}

?>