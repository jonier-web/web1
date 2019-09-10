<?php

    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $to = "jonier.a.gutierrez.g@gmail.com"; // Correo de contacto

    // Recogeremos los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = nl2br($_POST['mensaje']);

        
            $mail->From = $email;
            $mail->addAddress($to);
            $mail->Subject = $asunto;
            $mail->isHtml(true);
            $mail->Body = '<p>El siguiente mensaje fué enviado a través del sitio web:</p> 
                           <p>'.$mensaje.'</p><br>
                           <p>Por: <strong>'.$nombre.'</strong></p>
                           <p>Teléfono: '.$telefono.'</p>
                           <p>E-mail: '.$email.'</p>';

            $mail->CharSet = 'UTF-8';
            $mail->send();
            echo '<div class="card-panel light-green accent-4 z-depth-2 center">
                        <span class="grey-text text-darken-4">¡Mensaje enviado con éxito!</span>      
                  </div>';
    
?>
