<?php
require_once 'src/Mandrill.php';
$mandrill = new Mandrill('pHxrSEBtxEwIXvcJb6fKrA');
try{  
 
        $message = array(
                'subject' => 'Subject of Email',
               'html' => '<p>this is a test message with Mandrill\'s PHP wrapper!.</p>', // or just use 'html' to support HTMl markup
                'from_email' => 'vennilamscit@gmail.com',
                'from_name' => 'vennila', //optional
				
				
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
		
		$result = $mandrill->messages->send($message);
 
   // $result = $mandrill->messages->send($message);
    print_r($result); //only for debugging
 
} catch(Mandrill_Error $e) {
 
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
 
    throw $e;
}