<?php

$name = $email = $phone = $website = $textarea ="";

$name = isset(($_GET['name']));
$email = isset(($_GET['email']));
$phone = isset(($_GET['phone']));
$website = isset(($_GET['website']));
$textarea = isset(($_GET['textarea']));

if(!empty($email) && !empty($textarea)){

	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		$reciever = "esansamuel555@gmail.com";
		$subject = "From: $name ($email)";
		$body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nTextarea: $textarea\n\nRegards,\n$name";
		$sender = "From: $email";

    if(mail($reciever, $subject, $body, $sender)){
			echo "Submitted successfully!";
     }//closure of the mail() condition

     else{
			echo "Sorry,Not submitted!";
		} 
	}//closure of the filter_var condition

	else{
			echo "Enter a valid email address!";
		}
    }//closure of the !empty() condition

		else{
			echo "Email and message are required!";
		}

?>
