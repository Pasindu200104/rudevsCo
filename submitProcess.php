<?php

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$email = $_POST["email"];
$name = $_POST["name"];
$sub = $_POST["sub"];
$desc = $_POST["desc"];

if(empty($name)){
    echo ("Please enter your Name");
}else if (empty($email)) {
    echo ("Please enter your Email");
} else if (strlen($email) > 100) {
    echo ("Email must have less than 100 characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email");
} else if(empty($sub)){
    echo ("Please enter subject");
}else{
    $email = $_POST["email"];
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'dilshanpasindu593@gmail.com';
    $mail->Password = 'lbbgpkwmkrkodmfg';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('dilshanpasindu593@gmail.com', 'Requests');
    $mail->addReplyTo('dilshanpasindu593@gmail.com', 'Requests');
    $mail->addAddress('dilshanpasindu593@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = $sub;
    $bodyContent = '<h3>Sender Email :- '.$email.' </h3><h3>Sender Name:- '.$name.' </h3>
    <h3>Description :- '.$desc.'</h3>';

    $mail->Body    = $bodyContent;

    if (!$mail->send()) {
        echo 'Submiting failed. Try Again.';
    } else {
        echo 'Success';
    }
}
?>