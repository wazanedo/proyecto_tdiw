<?php
function consultaProductos1($dbconn, $CategoriaId)
{
    $result = pg_query($dbconn, "select * from producto where category_id='$CategoriaId'");
    $resultado_query = pg_fetch_all($result);
    return ($resultado_query);
}
