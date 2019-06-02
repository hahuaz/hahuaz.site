<?php 
$myemail = 'iletisim@hahuaz.site';//<-----Put Your email address here.
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$tel = $_POST['tel']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 

	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Phone: $tel \n Message \n $message"; 
    
    $headers = "From: $email_address";
	
	mail($myemail,$subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: thanks.html');

?>
