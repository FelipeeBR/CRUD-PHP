<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/*function send($data) {
    $to = 'felipe@gmail.com';
    $subject = $data -> subject;
    $message = $data -> message;
    $headers = "From: {$data->email}" . "\r\n" .
    'Reply-To: contato@devclass.com.br' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    return mail($to, $subject, $message, $headers);
}*/

function send(array $data) {
    $email = new PHPMailer();
    $email -> CharSet = 'UTF-8';
    $email -> SMTPSecure = 'plain';
    $email -> isSMTP();
    $email -> Host = 'sandbox.smtp.mailtrap.io';
    $email -> Port = 465;
    $email -> SMTPAuth = true;
    $email -> Username = '1295751aff07d4';
    $email -> Password = '8331958cb6732d';
    $email -> isHTML(true);
    $email -> setFrom('felipemendes737@gmail.com');
    $email -> FromName = $data['quem'];
    $email -> addAddress($data['para']);
    $email -> Body = $data['mensagem'];
    $email -> Subject = $data['assunto'];
    $email -> AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita HTML';
    $email -> MsgHTML($data['mensagem']);

    echo $email->ErrorInfo();

    return $email->send(); 
}

