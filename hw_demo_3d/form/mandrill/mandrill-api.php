<?php
require_once 'src/Mandrill.php';

// If are not using environment variables to specific your API key, use:
$mandrill = new Mandrill('pHxrSEBtxEwIXvcJb6fKrA');

$message = array(
    'subject' => 'Test message',
    'from_email' => 'aasathbegum@gmail.com',
    'html' => '<p>this is a test message with Mandrill\'s PHP wrapper!.</p>',
    'to' => array(array('email' => 'aasathbegum.s@digicliff.com', 'name' => 'Recipient 1')),
    'merge_vars' => array(array(
        'rcpt' => 'recipient1@domain.com',
        'vars' =>
        array(
            array(
                'name' => 'FIRSTNAME',
                'content' => 'Recipient 1 first name'),
            array(
                'name' => 'LASTNAME',
                'content' => 'Last name')
    ))));

$template_name = 'Stationary';

$template_content = array(
    array(
        'name' => 'main',
        'content' => 'Hi *|FIRSTNAME|* *|LASTNAME|*, thanks for signing up.'),
    array(
        'name' => 'footer',
        'content' => 'Copyright 2012.')

);

print_r($mandrill->messages->sendTemplate($template_name, $template_content, $message));

?>