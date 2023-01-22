<?php

// Comentarios
// 1. $_POST['adreça] no se lee completo, creo que por incompatibilidad de caracteres UTF-8, se cambio a $_POST['adreca']
// 2. $_POST['població] lo mismo, se cambio a $_POST['poblacio']
// 3. $_POST['password'] no existe, es por esto que se puede ingresar con cualquier contraseña, se cambio a $_POST['pass']

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST["nom"];
    $correu = $_POST["correu"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $adreca = $_POST["adreca"];
    $poblacio = $_POST["poblacio"];
    $codi_postal = $_POST["codi_postal"];
    //Filtraras a nivel de servidor lo que tienes
    $nom = filter_var($nom, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $correu = filter_var($correu, FILTER_SANITIZE_EMAIL);
    $adreca = filter_var($adreca, FILTER_SANITIZE_STRING);
    $poblacio = filter_var($poblacio, FILTER_SANITIZE_STRING);
    $codi_postal = filter_var($codi_postal, FILTER_SANITIZE_NUMBER_INT);

    require_once __DIR__ . '/../modelos/conectaBD.php';
    $connexio = conectaBD();
    //SI esta ok Llamaras al modelo i guardaras usuario
    require_once __DIR__ . '/../modelos/guarda_Registro.php';


    // cargaras una vista que diga "OK FECLIDADES" o "MIERDA"
    return;

    //include_once __DIR__ . '/../vistas/vista_formulario.php';
}
