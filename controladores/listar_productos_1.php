<?php

include_once __DIR__ . '/../modelos/get_productos_1.php';

$categoria_id = $_GET['CategoriaId'];
$categoria = $_GET['categoria'];
$lista_productos = consultaProductos1($categoria_id);

echo json_encode($lista_productos);