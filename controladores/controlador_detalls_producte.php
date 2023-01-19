<!-- Cambios -->
<!-- 1. "$product_id" es suficientemente descriptivo, no hace falta "$cat_id", removido -->
<!-- 2. "$cat_name" nunca se usa, removido -->

<?php
include_once __DIR__ . '/../modelos/get_detalls_producte.php';
include_once __DIR__ . '/../modelos/conectaBD.php';
$product_id = $_GET['prod_id'];
$connection = conectaBD();
$detalls = getDetalls($connection, $product_id);
include_once __DIR__ . '/../vistas/vista_detall_producte.php';
?>