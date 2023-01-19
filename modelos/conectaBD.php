<?php
function conectaBD()
{
    $dbconn = pg_connect("host=localhost port=5432 dbname=BDWeb user=postgres password=admin123");
    return $dbconn;
}
