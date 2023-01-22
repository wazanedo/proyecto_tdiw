<?php

include_once __DIR__ . '/conectaBD.php';

function getDetalls($id)
{
    $conexion = conectaBD();
    $result = pg_query($conexion, "select * from producto where product_id='$id'");
    $resultado_query = pg_fetch_all($result);
    return $resultado_query;
}
