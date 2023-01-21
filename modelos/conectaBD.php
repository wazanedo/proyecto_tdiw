<?php
function conectaBD()
{
    $dbconn = pg_connect("host=localhost port=5432 dbname=tdiw-k1 user=tdiw-k1 password=Xa9nrA8s");
    return $dbconn;
}
