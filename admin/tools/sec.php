<?php
/**
 * Created by PhpStorm.
 * User: criscastro
 * Date: 27/04/17
 * Time: 00:16
 * don't touch my code  :) , really  don't touch it -.-
 */
include '../core/Database.php';
include  '../core/Config.php';
include  '../controller/recuperarContrasena.php';

function encrypt_decrypt($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}
///****************TESTER********////
$plain_txt = "operacion marmota";
echo "Plain Text = $plain_txt\n";

$encrypted_txt = encrypt_decrypt('encrypt', $plain_txt);
echo "Encrypted Text = $encrypted_txt\n";

$decrypted_txt = encrypt_decrypt('decrypt', $encrypted_txt);
echo "Decrypted Text = $decrypted_txt\n";

if( $plain_txt === $decrypted_txt ) echo "SUCCESS";
else echo "FAILED";

echo "\n";
$conexion = Database::connect();
$query = mysqli_query($conexion,"SELECT Nombre,Correo  FROM usuario WHERE Correo = 'alan@hotmail.com'");
$row = mysqli_fetch_array($query);
echo '<span style="color: white;background-color: #1d937c">'.'gato miau :3'.'</span>';
sendPass('djcriz5@gmail.com');

/**************************END TESTER*****/