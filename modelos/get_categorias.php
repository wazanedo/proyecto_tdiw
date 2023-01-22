
<?php
function consultaCategorias($dbconn)
{
    $result = pg_query($dbconn, "select * from categorias order by category_id");
    $resultado_categorias = pg_fetch_all($result);
    return ($resultado_categorias);
}
?>

