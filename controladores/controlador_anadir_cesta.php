<?php

// se incluye getDetalls
include_once __DIR__ . '/../modelos/get_detalls_producte.php';

// se comprueba inicio de sesion
if (!isset($_SESSION['user'])) {
    // sesion no iniciada
    echo "Inicia sesión para empezar tu compra.";
} else {
    // sessión iniciada

    // se comprueba si existe la cesta
    if (!isset($_SESSION['cart'])) {
        // no existe, se inicia
        $_SESSION['cart']['items'] = array();
        $_SESSION['cart']['total_price'] = 0;
        $_SESSION['cart']['elems_count'] = 0;
    }

    // se leen los datos del producto de la base de datos dado el id
    $product_id = $_GET['prod_id'];
    $product = getDetalls($product_id)[0];
    $product_name = $product['name'];
    $product_price = $product['price'];
    $product_img = $product['image'];

    $found = false;
    $i = 0;

    //miramos si está en la cesta para incrementar o no la comanda existente o hacer una nueva
    while (!$found && $i < count($_SESSION['cart']['items'])) {
        if ($_SESSION['cart']['items'][$i]['product_id'] == $product_id) {
            $found = True;
        } else {
            $i++;
        }
    }
    if ($found) {
        $_SESSION['cart']['items'][$i]['product_quantity'] += 1;
    } else {
        $cartProduct = array(
            'product_id' => $product_id,
            'product_name' => str_replace("-", " ", $product_name),
            'product_price' => $product_price,
            'product_img' => $product_img,
            'product_quantity' => 1
        );

        array_push($_SESSION['cart']['items'], $cartProduct);
    }

    $_SESSION['cart']['total_price'] += $product_price;
    $_SESSION['cart']['elems_count'] += 1;

    echo var_dump($_SESSION['cart']);
}
