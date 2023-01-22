<?php

include_once __DIR__ . '/conectaBD.php';

function consultaProductos1($categoria_id)
{
    $conexion = conectaBD();
    $result = pg_query($conexion, "select * from producto where category_id='$categoria_id'");
    $resultado_query = pg_fetch_all($result);
    return ($resultado_query);
}
