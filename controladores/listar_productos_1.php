<?php
include_once __DIR__ . '/../modelos/get_productos_1.php';
include_once __DIR__ . '/../modelos/conectaBD.php';
$categoria_id = $_GET['CategoriaId']; 
$categoria = $_GET['categoria'];
$connection = conectaBD();
$lista_productos = consultaProductos1($connection, $categoria_id);
?>

<section>
<h1 class="name_categoria"> <?php echo $categoria; ?> </h1>
</section>

<?php
include_once __DIR__ . '/../vistas/listar_productos_1.php';
?>