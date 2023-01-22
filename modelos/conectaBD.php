<?php
function conectaBD()
{
    $dbconn = pg_connect("host=localhost port=5432 dbname=tdiw-k1 user=tdiw-k1 password=Xa9nrA8s");
    //$dbconn = pg_connect("host=localhost port=5432 dbname=BDWeb2 user=postgres password=admin123");
    return $dbconn;
}
