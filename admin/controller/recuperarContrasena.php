<?php
/**
 * Created by PhpStorm.
 * User: criscastro
 * Date: 26/04/17
 * Time: 23:33
 *
 * don't touch my code  :) , really  don't touch it -.-
 */
require 'tools/PHPMailerAutoload.php';
require 'tools/sec.php';
function processingForm(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo  'hello there';
        if (isset($_POST["example-email"])) {
            $email = $_POST['example-email'];
            if(isset($_POST["enviar"])){
               sendPass($email);
                    echo  $email;
            }else if(isset($_POST["rechazar"])){

               //TODO

            }

        } else {
            ?>
            <div style="background-color:#F5A9A9; height:30px; padding-top:10px; padding-left: 30px;"><b>No haz introducido un correo valido</b></div>
            <?php

        }
    }

}
function sendPass($email){
    $conexion = Database::connect();
    $query = mysqli_query($conexion,"SELECT Nombre,Correo,contra  FROM usuario WHERE Correo = '$email'");

    if ($query->num_rows>0) { // enviar el correo
        $row = mysqli_fetch_array($query);
        /*TODO encriptacion del password y desencriptacion aqui  , hacer que reciba el pass del gmail usado atraves de la bd */
        //sendEmail($row['Correo'],$row['Nombre'],encrypt_decrypt('decrypt', $row['contra']));
        echo 'enviando';
        sendEmail($row['Correo'],$row['Nombre'],$row['contra']);
    } else {// no existe en la base de datos
            echo "Error: " . mysqli_error($conexion);
    }

}

function sendEmail($recipient,$nameRecipient,$password){
    $mail = new PHPMailer();
    $mail->IsSMTP();
//enable debug mode . for tests 2 are better, in normal situation  use always  0
// 0 = off (production)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 2;
//define gmail as smtp server
    $mail->Host = 'smtp.gmail.com';
//  use 587 port  for tls encrypting
    $mail->Port = 587;
//define security protocol
    $mail->SMTPSecure = 'tls';
//gmail only works if you are authenticated
    $mail->SMTPAuth = true;
//Defining our email
    $mail->Username = "sistemadefutbolescom@gmail.com";
    $dc_txt = encrypt_decrypt('decrypt', 'RUdwM1V4dGxIdzRNNWJrMzA0VVlPSjdYQndTazZ6SStNcTdSeUVXWEJGTT0=');
    $mail->Password = $dc_txt;
    echo '<p style="background-color: #3ebc4b">'.$dc_txt.'</p>';

//defining recipient (email,(optional) name)
    $mail->SetFrom('sistemadefutbolescom@gmail.com', 'Diego de Sistema de futbol escom');
/*@var $recipient: email recipient
 *@var $namerecipient: name of the recipient*/
    $mail->AddAddress($recipient, $nameRecipient);
//define mail subject
    $mail->Subject = 'Recuperacion de Password';
/*define mail body in html format
    $mail->MsgHTML(file_get_contents('correomaquetado.html'), dirname(ruta_al_archivo));*/
 $mail->msgHTML('<h1>'.$nameRecipient.', haz solicitado la recuperacion de tu password aqui esta tu password :</h1>
 <br> <span style="color: white;background-color: #1d937c">'.$password.'</span><br> recomendamos que cambies tu password lo mas pronto posible ');
/*altern mail body if html is blocked */
    $mail->AltBody = $nameRecipient.'haz solicitado la recuperacion de tu password, aqui esta tu clave de acceso '.$password.' te recomendamos que cambies tu pasword lo mas pronto posible.';
//Enviamos el correo
    if (!$mail->Send()) {
        echo "Error: " . $mail->ErrorInfo;
    } else {
        echo "Se ha enviado el correo de recuperacion exitosamente!";
    }
}