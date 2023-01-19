
<?php
function consultaCategorias($dbconn)
{
    $result = pg_query($dbconn, "select * from categorias");
    $resultado_categorias = pg_fetch_all($result);
    return ($resultado_categorias);
}
?>

