<?php

include_once __DIR__ . '/../modelos/conectaBD.php';
include_once __DIR__ . '/../modelos/inicia_sesion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filters = filter_input_array(
        INPUT_POST,
        [
            'correu' => FILTER_DEFAULT,
            'pass' => FILTER_DEFAULT,
        ]
    );
    $email = $filters['correu'];
    $password = $filters['pass'];

    $user = login($email, $password);

    if ($user) {
        $_SESSION['user'] = $user['name_user'];
        echo '<script text= "text/javascript"> alert("¡La sessión ha sido iniciada correctamente!");
        document.location.href="index.php";
        </script>';
    } else {
        echo '<script text= "text/javascript"> alert("¡La sessión NO ha sido iniciada correctamente!"); 
        document.location.href="index.php";
        </script>';
    }
    // header("Location:index.php");
}
