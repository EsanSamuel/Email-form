<?php

$name = $email = $phone = $website = $textarea ="";

$name = isset(($_POST['name']));
$email = isset(($_POST['email']));
$phone = isset(($_POST['phone']));
$website = isset(($_POST['website']));
$textarea = isset(($_POST['textarea']));

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
