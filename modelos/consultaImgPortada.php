<?php
function consultaPortada($dbconn){
    $consulta = pg_query($dbconn, "select img from producto");
    return $consulta; //????

}