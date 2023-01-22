<?php
/*if($_SERVER['REQUEST_METHOD']=== 'POST')
{
    echo('wdwdwdwd');
    //echo($_POST ['correu']);
}*/
session_start();
$accio = $_GET['action'] ?? NULL; //echo($accio);
switch ($accio) {
        // productos
    case 'llistaProd':
        include_once __DIR__ . '/recursos/recurso_listar_productos_1.php';
        break;
    case 'detalls':
        include_once __DIR__ . '/controladores/controlador_detalls_producte.php';
        break;
        // login
    case 'login':
        require __DIR__ . '/recursos/recurso_login.php';
        break;
    case 'signin':
        require __DIR__ . '/recursos/recurso_signin.php';
        break;
    case 'signin_handle':
        require __DIR__ . '/recursos/recurso_signin_handle.php';
        break;
    case 'login_handle':
        require __DIR__ . '/recursos/recurso_login_handle.php';
        break;
    case 'logout':
        require __DIR__ . '/recursos/recurso_logout.php';
        break;
    case 'profile':
        require __DIR__ . '/recursos/recurso_profile.php';
        break;
        // cesta
    case 'anadir_cesta':
        include_once __DIR__ . '/recursos/recurso_anadir_cesta.php';
        break;
    case 'mostrar_cesta':
        require __DIR__ . '/recursos/recurso_mostrar_cesta.php';
        break;
    case 'vaciar_cesta':
        require __DIR__ . '/recursos/recurso_vaciar_cesta.php';
        break;
        // home
    default:
        include_once __DIR__ . '/recursos/resource_listar_categorias.php';
        break;
}
