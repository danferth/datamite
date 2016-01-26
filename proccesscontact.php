<?php

/*subject and email variables*/

	$emailSubject = 'Contact form DataMite.com';
	$salesManager = 'sales@datamitetech.com';
	
/* gathering data variables*/

	$nameField = $_REQUEST['name'];
	$companyField = $_REQUEST['company'];
	$phoneField = $_REQUEST['phone'];
	$emailField = $_REQUEST['email'];
	$commentsField = $_REQUEST['comments'];
	
/*body of email variable*/

	$body = <<<EOD
<br /><hr /><br />
Name: $nameField <br />
Company: $companyField <br />
Phone number: $phoneField <br />
Email: $emailField <br /><br />
Comments: $commentsField <br />
EOD;

/*headers and proccess of email*/

	$headers = "From: $emailField\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($salesManager, $emailSubject, $body, $headers);
	
/* Results*/

	header("Location: http://www.datamitetech.com/thankyou.html");

?>