<?php
if ($_SESSION['user'] == null || $_SESSION['user'] == '') {
    echo '<script> alert("INICIA SESIÓN ANTES DE CONTINUAR!") </script>';
    echo '<script> document.location.href = "/index.php?action=login"; </script>';
    die();
}
include_once __DIR__ . "/../vistas/mostrar_cesta.php";
