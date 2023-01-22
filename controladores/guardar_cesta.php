<?php

include_once __DIR__ . '/../modelos/guardar_cesta.php';

saveCart($_SESSION['cart'], $_SESSION['user_id']);

// redirect to index
require_once __DIR__ . '/../vistas/confirmación_compra.php';

//header('Location: index.php');