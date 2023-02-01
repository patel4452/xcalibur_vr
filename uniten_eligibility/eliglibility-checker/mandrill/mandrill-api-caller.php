<?php
require_once 'src/Mandrill.php';
$mandrill = new Mandrill('pHxrSEBtxEwIXvcJb6fKrA');
try{  
 
        $message = array(
                //'subject' => 'Subject of Email',
                //'text' => 'Contents of email goes here', // or just use 'html' to support HTMl markup
                //'from_email' => 'vennilamscit@gmail.com',
                //'from_name' => 'vennila', //optional
				
				/*'created_at'=> '2015-01-08 07:35:01',
				'send_at'=> '2015-01-09 11:40:01',*/
                'to' => array(
                        array( // add more sub-arrays for additional recipients
                                'email' => 'aasathbegum.s@digicliff.com',
                                'name' => 'aasathbegum', // optional
                                'type' => 'to' //optional. Default is 'to'. Other options: cc & bcc
                                ),
								
								array( // add more sub-arrays for additional recipients
                                'email' => 'aasathbegum@gmail.com',
                                'name' => 'aasathbegum', // optional
                                'type' => 'to' //optional. Default is 'to'. Other options: cc & bcc
                                )
								
                ),
				
				
			
				
				
 
                /* Other API parameters (e.g., 'preserve_recipients => FALSE', 'track_opens => TRUE',
                  'track_clicks' => TRUE) go here */
        );
		
		$template_name = 'test template12';

$template_content = array(
    array(
        'name' => 'main',
        'content' => 'Hi *|FIRSTNAME|* *|LASTNAME|*, thanks for signing up.'),
    array(
        'name' => 'footer',
        'content' => 'Copyright 2012.')

);
 /*$headers = $message->getHeaders();
   
$headers->addTextHeader('X-MC-SendAt', '2015-01-08 01:00:00');
*/
//$result = $mandrill->messages->listScheduled($to);
$result = $mandrill->messages->sendTemplate($template_name,$template_content,$message);
 
   // $result = $mandrill->messages->send($message);
    print_r($result); //only for debugging
 
} catch(Mandrill_Error $e) {
 
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
 
    throw $e;
}