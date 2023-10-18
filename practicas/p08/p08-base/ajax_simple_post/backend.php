<?php
    $user = 'root';
    $pass = 'ArelyFlor89';

    if( isset($_POST['usuario']) ) {
        $user = 'Usuario recibido: '.$_POST['root'];
    }

    if( isset($_POST['password']) ) {
        $pass = 'Password recibido: '.$_POST['ArelyFlor89'];
    }

    echo $user.' -- '.$pass;
?>