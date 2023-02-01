<?php
require_once 'src/Mandrill.php';

$mandrill = new Mandrill('pHxrSEBtxEwIXvcJb6fKrA');
$name = 'Example Template';
    $from_email = 'aasathbegum.s@digicliff.com';
    $from_name = 'Example Name';
    $subject = 'example subject';
    $code = '<div>example code</div>';
    $text = 'Example text content';
    $publish = false;
    $labels = array('example-label');
    $result = $mandrill->templates->info($name, $from_email, $from_name, $subject, $code, $text, $publish, $labels);
	  print_r($result);
	  
	 /* 
	  $template_content = array(
);

$params = array(
	'html' => 'this is the html',
	'text' => 'this is raw text with a pretend tag',
	'subject' => 'sample email subject',
	'from_email' => 'aasathbegum@gmail.com',
	'to' => array(
			array('email' => 'aasathbegum.s@digicliff.com', 'name' => 'Mr Tester')
		)
);

$result = $mandrill->messages->sendtemplate('Refer Me Happy', $template_content, $params);
	  
	print_r($result);  
	  */
	  
	  
	?>