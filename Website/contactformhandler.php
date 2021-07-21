<?php
if($_POST){
    $name = '';
    $email = '';
    $message = '';
}
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

    $to = "becks7750@gmail.com";
    $subject = "GP New Message";
    $headers = 'MIME-Version: 1.0'."\r\n".'From:'.$email."\r\n";
    $body = "Sent on: ". $date . " Name:".$name." Email:".$email." Message:".$message."\r\n";
	$mail = mail($to, $subject, $body, $headers);

    if($mail) {echo"Message Sent!";}
    else{echo "Message Failed to send.";}
