<?php
require_once 'src/Mandrill.php';

try {
$mandrill = new Mandrill('pHxrSEBtxEwIXvcJb6fKrA');

$raw_message = 'From: aasathbegum@gmail.com
To: aasathbegum.s@digicliff.com
Subject: Some Subject

Some content.';
    $from_email = 'aasathbegum@gmail.com';
    $from_name = 'From Name';
    $to = array('aasathbegum@gmail.com');
    $async = false;
    $ip_pool = 'Main Pool';
    $send_at = '2015-01-09 12:38:01';
    $return_path_domain = null;
    $result = $mandrill->messages->sendRaw($raw_message, $from_email, $from_name, $to, $async, $ip_pool, $send_at, $return_path_domain);
    print_r($result);
	exit;
	
    /*
    Array
    (
        [0] => Array
            (
                [email] => recipient.email@example.com
                [status] => sent
                [reject_reason] => hard-bounce
                [_id] => abc123abc123abc123abc123
            )
    
    )
    */
} catch(Mandrill_Error $e) {
    // Mandrill errors are thrown as exceptions
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
    throw $e;
}
