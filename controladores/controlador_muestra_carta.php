<?php
    session_start();
    if ($_SESSION['user'] == null || $_SESSION['user'] == ''){
        echo '<script> alert("INICIA SESIÓN ANTES DE CONTINUAR!") </script>';
        echo '<script> document.location.href = "/index.php?action=login"; </script>';
        die();
    }
    include_once __DIR__ . "/../modelos/conectaBD.php";
    include_once __DIR__ . "/../modelos/consultaLíneasPedido.php";
    $connexio = connectaBD();
    $resultatLinies = consultaLinias($connexio);
    if(empty($resultatLinies)){
        echo "<script>alert('Cabàs buit!');</script>";
        echo "<script>window.location.href='/index.php?action=inici';</script>";
    }else{
        include_once __DIR__ . "/../vistes/mostraLiniasComanda.php";
    }
?>
