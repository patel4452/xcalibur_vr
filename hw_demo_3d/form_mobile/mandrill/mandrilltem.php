<?php
require_once 'src/Mandrill.php';
    $mandrill = new Mandrill('pHxrSEBtxEwIXvcJb6fKrA');

try {
    $name = 'test template12';
    $from_email = 'vennilamscit@gmail.com';
    $from_name = 'vennila';
    $subject = 'example subject';
    $code = '<div>example code</div>';
    $text = 'Example text content';
    $publish = false;
    $labels = array('example-label');
	$created_at = '2015-01-07 ';
   $updated_at= '2015-01-08';
		
    $result = $mandrill->templates->update($name, $from_email, $from_name, $subject, $code, $text, $publish, $labels);
	
	    $resulttemp = $mandrill->templates->info($name);

	}
	
	catch(Mandrill_Error $e) {
 
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
 
    throw $e;
}
	?>