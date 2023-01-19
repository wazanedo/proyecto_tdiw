<?php
require_once __DIR__ . '/conectaBD.php';

function login(string $email, string $password)
{
    $connexio = conectaBD();
    //echo($email);
    $sql = 'SELECT user_id, email, password, name_user FROM "public"."user" WHERE "email" = $1';
    $resultado = pg_prepare($connexio, "consulta", $sql);
    $resultado = pg_execute($connexio, "consulta", array($email));

    // fetch $resultado with associated indexes
    $resultados = pg_fetch_assoc($resultado);

    // if there is a result, check the password
    if ($resultados) {
        // check the password
        if (password_verify($password, $resultados['password'])) {
            // password is correct, return the user
            return $resultados;
        } else {
            // password is not correct, return false
            return false;
        }
    }
}
