<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['email'])) {
        $name = "Evento Admin";
        //$name = $_POST['name'];
        $email = $_POST['email'];
        $subject = "EVENTO Admin Confirmation email";
        //$subject = $_POST['subject'];
        $body = "Thank you for registering with Evento. We hope our services fulfill your needs. Have a nice day!";
        //$body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "svarunrajs@gmail.com";
        $mail->Password = 'ttfk dpst qssb jpok';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress($email);
        //$mail->addAddress("udays.cs22@bmsce.ac.in");
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>