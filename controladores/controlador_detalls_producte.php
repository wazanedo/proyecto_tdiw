<?php
include_once __DIR__ . '/../modelos/get_detalls_producte.php';
include_once __DIR__ . '/../modelos/conectaBD.php';
$product_id = $_GET['prod_id'];
$cat_id = $_GET['cat_id'];
$categoria_name = $_GET['cat_name'];
$connection = conectaBD();
$detalls = getDetalls($connection, $product_id, $cat_id);
include_once __DIR__ . '/../vistas/vista_detall_producte.php';
?>