<?php
function consultaProductos1($dbconn, $ProdId)
{
    $result = pg_query($dbconn, "select * from producto where category_id='$ProdId'");
    $resultado_query =pg_fetch_all($result);
    return ($resultado_query);
}
?>