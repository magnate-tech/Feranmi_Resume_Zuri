<?php
$altmess = $message;
$to = "mosesafolsons@gmail.com";
$nameto = "Feranmi Afolabi";
$from  = "support@teslaonlineshares.com"; 
$namefrom = "($name - $email) Zuri";
$mail = new PHPMailer();
$mail->SMTPDebug = 0;
$mail->CharSet = 'UTF-8';
$mail->isSMTP();
$mail->SMTPAuth   = true;
$mail->Host   = "server266.web-hosting.com";
$mail->Port       = 465;
$mail->Username   = $from;
$mail->Password   = "Tstocks###";
$mail->SMTPSecure = "ssl";
$mail->setFrom($from,$namefrom);
$mail->addCC($from,$namefrom);
$mail->Subject  = $subject;
$mail->isHTML();
$mail->Body = $message;
$mail->AltBody  = $altmess;
$mail->addAddress($to, $nameto);
if($mail->send()){
    $result;
    $result = "
        <div class='alert alert-success' role='alert'>
            Success! I'll get to you shortly.
        </div>";
}
else{
    $result;
    $result = "
        <div class='alert alert-danger' role='alert'>
            Ooops... Something went wrong Naza. Try Again Later.
        </div>";
}