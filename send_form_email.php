<?php
    error_reporting(E_ALL);
    require 'PHPMailer/PHPMailerAutoload.php';
    if(isset($_POST['email'])) {
        $email_to = "qweed@quezx.com";
        function died($error) {
        // your error code can go here
            echo "We are very sorry, but there were error(s) found with the form you submitted. ";
            echo "These errors appear below.<br /><br />";
            echo $error."<br /><br />";
            echo "Please go back and fix these errors.<br /><br />";
            die();
        } 
        // validation expected data exists
        if(!isset($_POST['first_name'])||
            !isset($_POST['email']) ||
            !isset($_POST['telephone'])){
            died('We are sorry, but there appears to be a problem with the form you submitted.');       
            }
        $first_name = $_POST['first_name'];
        $email_from = $_POST['email'];                      // required
        $telephone = $_POST['telephone']; 
        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

        if(!preg_match($email_exp,$email_from)){
            $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        }
        $string_exp = "/^[A-Za-z .'-]+$/";
        if(!preg_match($string_exp,$first_name)){
            $error_message .= 'The Name you entered does not appear to be valid.<br />';
        }
        if(strlen($error_message) > 0){
            died($error_message);
        }

        $mail = new PHPMailer;
        $mail->SMTPDebug = 0;                               // Enable verbose debug output
        $mail->isSMTP();                                    // Set mailer to use SMTP
        $mail->Host = 'quezx.com';                          // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                             // Enable SMTP authentication
        $mail->Username = 'contact@quezx.com';              // SMTP username
        $mail->Password = 'ScTi(.tS.pBF';                   // SMTP password
        $mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;   
        $mail->From = 'contact@quezx.com';
        $mail->FromName = 'Qweed Beta Subscribtion';
        $mail->addAddress($email_to);
        $mail->Subject = 'New Beta Subscribtion request';
        $mail->Body    = "A request has come for subcription. Details are as follows:

                            Name:$first_name 

                            Email:$email_from

                            Number:$telephone";

        if(!$mail->send()){
            header('Location: index.html?response=0');      
        } 
        else{
            header('Location: index.html?response=1');
        }
    }
?>
