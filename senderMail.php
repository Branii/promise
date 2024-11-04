<?php 
require 'vendor/autoload.php';
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 class SenderMail {

    private $mail;

    public function __construct() {
        $this->mail = new PHPMailer(true);
        try {
            $this->mail->isSMTP();
            $this->mail->Host       = 'smtp.gmail.com';
            $this->mail->SMTPAuth   = true;
            $this->mail->Username   = 'braniiblack@gmail.com';
            $this->mail->Password   = 'xxxxxxxxxxxxx';
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $this->mail->Port       = 587; 
            $this->mail->setFrom('braniiblack@gmail.com', 'Dr. Promise');
        } catch (Exception $e) {
            echo "Mailer error: {$this->mail->ErrorInfo}";
        }
    }

    public function sendMail(array $params) {
        try {
            $this->mail->addAddress($params['to']);
            $this->mail->isHTML(true);
            $this->mail->Subject = $params['subject'];
            $this->mail->Body = $params['body'];
            $this->mail->send();
            return 'Message has been sent';
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }

 }