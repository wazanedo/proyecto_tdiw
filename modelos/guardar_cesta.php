<?php

include_once __DIR__ . '/../modelos/conectaBD.php';

function saveCart($cart, $user_id)
{
    $dbconn = conectaBD();

    // count total products in cart
    $total_products = 0;
    for ($i = 0; $i < count($cart['items']); $i++) {
        $total_products += $cart['items'][$i]['product_quantity'];
    }

    // create new pedido with cart elements
    $query = "INSERT INTO pedidos (user_id, date, total_products, total_import) VALUES ('" . $user_id . "', '" . date('Y-m-d') . "', '" . $total_products . "', '" . $cart['total_price'] . "')";
    $result = pg_query($dbconn, $query);

    // get last inserted id
    $query = "SELECT MAX(pedido_id) FROM pedidos";
    $result = pg_query($dbconn, $query);
    $pedido_id = pg_fetch_row($result)[0];

    $query = "INSERT INTO linea_pedido (id_producto, id_pedido, cantidad, precio_unitario, precio_total) VALUES ";
    for ($i = 0; $i < count($cart['items']); $i++) {
        $precio_total = $cart['items'][$i]['product_price'] * $cart['items'][$i]['product_quantity'];
        $query .= "('" . $cart['items'][$i]['product_id'] . "', '" . $pedido_id . "', '" . $cart['items'][$i]['product_quantity'] . "', '" . $cart['items'][$i]['product_price'] . "', '" . $precio_total . "')";
        if ($i < count($cart['items']) - 1) {
            $query .= ", ";
        }
    }
    $result = pg_query($dbconn, $query);
    if (!$result) {
        echo "An error occurred.\n";
        exit;
    }
    pg_close($dbconn);
    // clear cart
    unset($_SESSION['cart']);
}
