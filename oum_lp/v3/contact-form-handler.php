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
		$str_mobile_verified = $_POST['mobile_verified'];

		$postData['learning_centre'] = $_POST['learning_centers'];
		$postData['course'] = $_POST['courses'];
		$postData['ic_passport_no'] = $_POST['ic_passport'];
		$postData['name'] = $_POST['fullname'];
		$postData['phone'] = $_POST['mobile'];
		$postData['email'] = $_POST['emailId'];
		$postData['city'] = $_POST['city'];
		$postData['utm_source'] = $_POST['utm_source'];
		$postData['utm_medium'] = $_POST['utm_medium'];
		$postData['utm_campaign'] = $_POST['utm_campaign'];
		$postData['utm_term'] = $_POST['utm_term'];
		$postData['utm_gclid'] = $_POST['utm_gclid'];
		$postData['utm_content'] = $_POST['utm_content'];

		$encodeData = json_encode($postData);

		// NEW CUSTOM CURL 

		$curl = curl_init();
		curl_setopt_array($curl, array(

			CURLOPT_URL => "https://xcaliburlead.com/leadManagement/CreateLead",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $encodeData,
			CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache",
				"content-type: application/json",
				"Authorize: 86ab4a-97265c-356a8f-dd016e-cd0f44",
			),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
		}
		//die('curl section ');
		// END
		//Test number
		//$str_phone_number = '601121232097';
		
		$company = 'timesmedia';
		$user = 'timesmedia';
		$password='R090aW1lczg5ODk=';
		$thank_message = urlencode('Thank you for your interest in Open University Malaysia for the May 2020 intake. Our counsellors will get in touch with you soon. For more information, please visit www.oum.edu.my.');
		$message_to_client = urlencode('Name:'.$str_name.', Phone: '.$str_phone_number.', email: '.$str_email);
		
		$gateway='L';
		$mode='BUK';
		$type='TX';
		$hp = $str_phone_number;
		$mesg=$thank_message;
		$charge='0';
		$maskid='I';
		$convert='0';
		$post_data_details = array(
		  'company' => $company,
			'user' => $user,
			'password' => $password,
			'gateway' => $gateway,
			'mode' => $mode,
			'type' => $type,
			'hp' => $hp,
			'mesg' => $mesg,
			'charge' => $charge,
			'maskid' => $maskid,
			'convert' => $convert
		);
		
		//SMS scripts to verify the phone number
		if($str_mobile_verified == 'Verified'){ $result = post_request('http://api.gosms.com.my/eapi/sms.aspx/?company=timesmedia&', $post_data_details,'http://api.gosms.com.my/'); }
		
		//email template
		/*
		$headers  = "From:  enquiries@oum.edu.my \n";
	
		$headers .= 'Content-type: text/html; charset=UTF-8'. "\r\n";
		$headers .= "Reply-To: enquiries@oum.edu.my \n";
		$subject  = "Thank you for your interest in Open University Malaysia";
		
		$msg	  = file_get_contents('email_template.txt');
		
		
		require_once 'mandrill/src/Mandrill.php';
        $mandrill           =   new Mandrill('BdToF9imlAPbwEG1P8UqSg');
        $from_name          =   'Open University Malaysia';

        $emailId = clean_text($str_email);
		$emailId1 = 'don@times.my';
		
		$message = array(
            'subject'       =>  "Thank you for your interest in Open University Malaysia",
            'html'          =>  $msg, // or just use 'html' to support HTMl markup
            'from_email'    =>  'enquiries@oum.edu.my', //'info@educliff.com'
            'from_name'     =>  'Open University Malaysia',//$collegeName['collegeName'], //optional
            'to'            =>  array(
										array('email' =>trim($emailId),'name' =>'','type' => 'to'),
								),
		);
		
        // email trigger 
		if($mandrill->messages->send($message)){
			echo json_encode(array('message'=>'OK'));
		}
		*/
		// email template end
		checkLc($postData);postToSheet($postData, 'https://webhooks.integrately.com/a/webhooks/6751c0a134794db29e532d35734a0c8e'); 
		$encrypted_string = base64_encode($postData['emailId']);
		header('Location: Thank-you-page.html?token='.urlencode($encrypted_string));		
		die;
}
function post_request($url, $_data, $referer ) {

// convert variables array to string:
	$data = array();
	while(list($n,$v) = each($_data)){
		$data[] = "$n=$v";
	}
	$data = implode('&', $data);
// format --> test1=a&test2=b etc.

// parse the given URL
	$url = parse_url($url);
	if ($url['scheme'] != 'http') {
		die('Only HTTP request are supported !');
	}

// extract host and path:
	$host = $url['host'];
	$path = $url['path'].'?'.$data;

// open a socket connection on port 80
	$fp = fsockopen($host, 80);

// send the request headers:
	fputs($fp, "POST $path HTTP/1.1\r\n");
	fputs($fp, "Host: $host\r\n");
	fputs($fp, "Referer: $referer\r\n");
	fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
	fputs($fp, "Content-length: ". strlen($data) ."\r\n");
	fputs($fp, "Connection: close\r\n\r\n");
	fputs($fp, $data);

	$result = '';
	while(!feof($fp)) {
// receive the results of the request
		$result .= fgets($fp, 128);
	}

// close the socket connection:
	fclose($fp);

// split the result header from the content
	$result = explode("\r\n\r\n", $result, 2);

	$header = isset($result[0]) ? $result[0] : '';
	$content = isset($result[1]) ? $result[1] : '';

// return as array:
	return array(
		'status' => 'ok',
		'header' => $header,
		'content' => $content
	);
} 

function postToSheet($formdata, $curl_url)
{
    $data = $formdata;
    $curl = curl_init($curl_url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
	
	
}

function checkLc($formdata){
	
	switch ($formdata['learning_centre']){
		
		case 'Alor Setar' :
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/a6e540884730494597be50062c4af657');
		break;
		case 'Bangi':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/f9f464f670a2413cb110aa2a87dc380c');
		break;
		case 'Banting':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/b254d4cc36724709ab980e6bc9239c65');
		break;
		case 'Batu Pahat':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/4f96580fc02746c5a638d8321077e4f4');
		break;
		case 'Bintulu':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/bf087ab47397454fba7621e4093fe67c');
		break;
		case 'Ipoh':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/668fdbfbf7b34736a131925d34ac6205');
		break;
		case 'Johor Bahru':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/e396b48c544440889af160cabe557a04');
		break;
		case 'Kelantan':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/48b2dc0e26c64f46bee0986e72af4f18');
		break;
		case 'Keningau':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/7b8fe03f52ef470b96bdaf8ae6018f97');
		break;
		case 'Kota Kinabalu':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/4e0d9ebd3c13419f974a25dccc678f41');
		break;
		case 'Kota Marudu':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/160af4b7a7604fac81b911127fb7eb2d');
		break;
		case 'Kuala Lipis':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/cfc05c6e720e4151a8cb85787389caa5');
		break;
		case 'Kuala Selangor':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/cd22470f7ec748aa8a588022af1cab56');
		break;
		case 'Kuantan':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/f23374ede8c54246af7d43f40eb4012f');
		break;
		case 'Kuching':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/f4c80428c5ff4b6aace5393d6902dc0d');
		break;
		case 'Lahad Datu':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/b399c1ce6c6f4807bf444b1471747823');
		break;
		case 'Manjung':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/d04df065ab804366807fa4d436c57c8a');
		break;
		case 'Melaka':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/479d18ceadc74198b72fdfd3e1c370d2');
		break;
		case 'Miri':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/ac5d8753e6c644188c236df1bf690bba');
		break;
		case 'Negeri Sembilan':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/f26582f6c10e44fa9ee903f4fb2d25cf');
		break;
		case 'Kelana Jaya':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/3ee8cc1dd4b84e699051d0308336379c');
		break;
		case 'Petaling Jaya':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/aba8a21a76c24145a3bb06f9ad925f65');
		break;
		case 'Sandakan':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/53ed07aa144248ab933f5e68bccb1edf');
		break;
		case 'Seberang Jaya':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/b21cf4378b7e404e9df07640debc5e3a');
		break;
		case 'Shah Alam':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/d2eaa1ce849f4b4c8bf7dbb3ad52d944');
		break;
		case 'Sibu':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/db8281c5cb5448018de9283d52f73c38');
		break;
		case 'Simpang Renggam':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/37d026deb84f49aea70b111a03dbe2f9');
		break;
		case 'Sri Rampai':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/a411adaad92641fab57c44d1d1e98115');
		break;
		case 'Sungai Petani':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/8d08dc664bb94d7283c5c3327365b37c');
		break;
		case 'Taiping':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/b9e40fc49dfe42d3a5dce548630863db');
		break;
		case 'Tanjong Malim':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/1c1d67caf8914d0d86b85a281093d263');
		break;
		case 'Tawau':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/1edce4ede6a9435d9b9070cde8359588');
		break;
		case 'Temerloh':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/b7d7d0b608574b2fbf671280264ab275');
		break;
		case 'Terengganu':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/49e116751b0f4b238882b6fdedd41026');
		break;
		case 'Pontian':
		 postToSheet($formdata, 'https://webhooks.integrately.com/a/webhooks/855377cb442547968fff62d4e8cb007d');
		break;
	}
}
?>