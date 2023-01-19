 <?php
require_once __DIR__ . '/../modelos/conectaBD.php';
require_once __DIR__ . '/../modelos/consultaImgPortada.php'; //falta crear //imagenes que irán saliendo en la portada
$connexion=conectaBD();
$res=consultaPortada($connexion);
require_once __DIR__ . '/Vistas/mostrarPortada.php' //fata crear
?>