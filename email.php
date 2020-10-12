<?php 
    require_once dirname(__FILE__) . '/vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

class Send_email {
    private $post_data;
    public function __construct() {
        $this->post_data = $_POST;
        if(!$this->post_data){
            echo 'wrong';
            return;
        }
        if(!$this->post_data['name'] || !$this->post_data['email']){
            echo 'empty';
            return;
        }
        $this->send_mail();
    }
    public function send_mail()
    {
        $mail = new PHPMailer(true);

        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'arif598745@gmail.com';                     // SMTP username
            $mail->Password   = 'bottrish@bari';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('arif598745@gmail.com', 'Portfolio');
            $mail->addAddress('dev.ar.arif@gmail.com', 'Arifur Rahman Arif');     // Add a recipient
            $mail->addReplyTo('' . $this->post_data['email'] . '', '' . $this->post_data['name'] .'');
      
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = '' . $this->post_data['subject'] ? $this->post_data['subject'] : 'Empty Subject' . '';
            $mail->Body    = '' . $this->post_data['msg'] ? $this->post_data['msg'] : 'Empty Messege' . '';
            $mail->AltBody = '' . $this->post_data['msg'] ? $this->post_data['msg'] : 'Empty Messege' . '';

            $mail->send();
            echo 'sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
new Send_email;