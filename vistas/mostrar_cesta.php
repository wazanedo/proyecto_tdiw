<?php if(isset($_SESSION['cart'])) { ?>
    <table>
    <thead>
        <th>Imagen</th>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Subtotal</th>
    </thead>
    <!-- php for loop -->
    <?php for ($i = 0; $i < count($_SESSION['cart']['items']); $i++) : ?>
        <tr>
            <td><img class="product_img" src="<?= $_SESSION['cart']['items'][$i]['product_img'] ?>" alt="imagen producto" width="100px"></td>
            <td><?= $_SESSION['cart']['items'][$i]['product_name'] ?></td>
            <td><?= $_SESSION['cart']['items'][$i]['product_quantity'] ?></td>
            <td><?= $_SESSION['cart']['items'][$i]['product_price'] ?>€</td>
            <td><?= $_SESSION['cart']['items'][$i]['product_price'] * $_SESSION['cart']['items'][$i]['product_quantity'] ?>€</td>
        </tr>
    <?php endfor; ?>
    <tr>
        <td colspan="3">Total</td>
        <td colspan="2"><?= $_SESSION['cart']['total_price'] ?>€</td>
    </tr>
</table>

<a href="index.php?action=guardar_cesta">Guardar cesta</a>

<?php } else { ?>
    <p>Cesta vacia!</p>
<?php } ?>