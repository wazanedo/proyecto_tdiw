<?php
function getDetalls ($dbconn, $id, $catid)
{
    $result = pg_query($dbconn, "select * from producto where category_id='$catid' and product_id='$id'");
    $resultado_query =pg_fetch_all($result);
    return ($resultado_query);
}
?>
