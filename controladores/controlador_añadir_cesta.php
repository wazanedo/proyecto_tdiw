<?php
if(!isset($_SESSION['user_id'])){
    echo "Inicia sesión para empezar tu compra.";
} else { //La sessión está iniciada
    if(!isset($_SESSION['cart'])) {//si hay artículos previos se inicializa la cesta
        $_SESSION['cart']['items'] = array();
        $_SESSION['cart']['total_price'] = 0;
        $_SESSION['cart']['elems_count'] = 0;
    }
    $product_id = $_REQUEST['product_id'];
    $product_name = $_REQUEST['product_name'];
    $product_price = $_REQUEST['product_price'];
    $product_img = $_REQUEST['product_img'];

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
    if($found) {
        $_SESSION['cart']['items'][$i]['product_quantity'] += 1;
    } else {
        $cartProduct = array('product_id'=>$product_id,
            'product_name'=>str_replace("-", " ", $product_name),
            'product_price'=>$product_price,
            'product_img'=>$product_img,
            'product_quantity'=>1);

        array_push($_SESSION['cart']['items'], $cartProduct);
    }

    $_SESSION['cart']['total_price'] += $product_price;
    $_SESSION['cart']['elems_count'] += 1;

    require_once __DIR__ .'/../controladores/controlador_detalls_producte.php';
}
