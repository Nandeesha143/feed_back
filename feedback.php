<?php
	$name= $_POST['name'];
	$visitor_email=$_POST['email'];
	$text=$_POST['text'];
	$text1=$_POST['text'];
	$text2=$_POST['text'];
	$text3=$_POST['text'];
	$text4=$_POST['text'];
	$text5=$_POST['text'];
	$text6=$_POST['text'];
	$text7=$_POST['text'];



	$email_from = 'n80@gmail.com';

	$email_subject = "new from submission";

	$emaail_body = "user name: $name.\n".
						"user email: $visitor_email.\n".
							"user text:$text.\n".
							"user text:$text1.\n".
							"user text:$text2.\n".
							"user text:$text3.\n".
							"user text:$text4.\n".
							"user text:$text5.\n".
							"user text:$text6.\n".
							"user text:$text7.\n";

	$to = "rnandeesha3001@gmail.com";

	$header = "from : $email_from \r\n";
	$headers = "reply-to: $visitor_email \r\n";
	mail($to,$email_subject,$emaail_body,$headers);
	header("location:home.html");


?>