<?php
/*if($_SERVER['REQUEST_METHOD']=== 'POST')
{
    echo('wdwdwdwd');
    //echo($_POST ['correu']);
}*/
session_start();
$accio = $_GET['action'] ?? NULL; //echo($accio);
switch ($accio) {
    case 'llistaProd':
        include_once __DIR__ . '/recursos/recurso_listar_productos_1.php';
        break;
    case 'detalls':
        include_once __DIR__ . '/recursos/recurso_detalls_producte.php';
        break;
    case 'añadir_cesta':
        include_once __DIR__ . '/recursos/recurso_añadir_cesta.php';
        break;
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
    case 'muestra_carta':
        require __DIR__ . '/recursos/recurso_muestra_carta.php';
        break;
    case 'logout':
        require __DIR__ . '/recursos/recurso_logout.php';
        break;
    default:
        include_once __DIR__ . '/recursos/resource_listar_categorias.php';
        break;
}
