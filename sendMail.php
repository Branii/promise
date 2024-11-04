<?php 
require 'vendor/autoload.php';
include 'senderMail.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$params = $name . ' ' . $email . ' ' . $message;

$message = [
    'to' => 'braniiblack@gamil.com',
    'subject' => 'Portfolio view',
    'body' => $params 
];
$result = (new SenderMail)->sendMail($message);
print_r($result);