<?php
include_once __DIR__ . '/../modelos/get_productos_1.php';
include_once __DIR__ . '/../modelos/conectaBD.php';
$categoria = $_GET['categoria'];
$prod_id = $_GET['ProdId']; #Aquest valor en realitat es la id de la categoria que volem mostrar
?>

<section>
    <h1 class="name_categoria"> <?php echo $categoria; ?> </h1>
</section>
<?php
$connection=conectaBD();
$productos_1 = consultaProductos1($connection, $prod_id);
include_once __DIR__ . '/../vistas/listar_productos_1.php';
?>