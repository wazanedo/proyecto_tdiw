<?php
include_once __DIR__ . '/../modelos/get_detalls_producte.php';

$id = $_GET['prod_id'];

$detalls = getDetalls($id);

echo json_encode($detalls);
