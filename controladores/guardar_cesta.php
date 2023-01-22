<?php

include_once __DIR__ . '/../modelos/guardar_cesta.php';

saveCart($_SESSION['cart'], $_SESSION['user_id']);

// redirect to index
header('Location: index.php');