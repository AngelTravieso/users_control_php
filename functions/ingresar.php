<?php

    $nombre = $_POST['name'];
    $password = $_POST['password'];

    echo "Usuario: $nombre";
    
    echo "<br>";

    echo "Contraseña: $password";

    
    $error = true;

    header("Location: http://localhost/crud_php?error=$error");


?>