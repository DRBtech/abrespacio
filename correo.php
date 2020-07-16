<?php
    if(isset($_POST['enviar'])){
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg'])){
            $asunto = $_POST['name'] . ' - abrespacio.cl';
            $email = 'danielradriganb@gmail.com';
            $msg = "Nombre: " . $_POST['name'] . "\r\n";
            $msg .= "Email: " . $_POST['email'] . "\r\n";
            $msg .= "Mensaje: " . $_POST['msg'] . "\r\n";
            $header = "From: noreply@example.com" . "\r\n";
            $header .= "X-Mailer: PHP/" . phpversion();
            $mail = mail($email, $asunto, $msg, $header);
            if($mail) {
                echo "<p>Mensaje enviado</p>";
            } 
            else {
                echo "<p>Mensaje no enviado</p>";
            }
        }
    }
?>