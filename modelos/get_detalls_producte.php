<!-- Cambios -->
<!-- 1. No hace falta "$cat_id", removido -->

<?php
function getDetalls($dbconn, $id)
{
    $result = pg_query($dbconn, "select * from producto where product_id='$id'");
    $resultado_query = pg_fetch_all($result);
    return ($resultado_query);
}
?>