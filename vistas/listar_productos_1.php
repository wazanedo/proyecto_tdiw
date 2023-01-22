<!-- Cambios -->
<!-- 1. "$cat_id" nunca se usa, removido -->
<!-- 2. "$cat_name" nunca se usa, removido -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids</title>
    <link rel="stylesheet" type="text/css" href="/../css/products.css">
</head>

<body>
    <section>
        <div>
            <div class="grid-container-prods">
                <?php foreach ($lista_productos as $producto) : ?>
                    <div id="product<?php echo $producto['product_id'] ?>" class="product">
                        <img id="corners_prod" class="product_img" src="<?php echo (htmlentities($producto['image'])); ?>">
                        <div id="detalls_producte" style="text-decoration:none; display:none">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>

<script>
    $(document).on("click", ".product", function() {
        event.preventDefault();
        var id = $(this).attr('id').replace(this.className, '');
        var href = "/index.php?action=detalls&prod_id=" + id;
        var item = $(this).children().eq(1);
        $.ajax({
            url: href,
            type: "GET",
            success: function(response) {
                var data = JSON.parse(response);
                item.html("");
                var list = $("<ul></ul>");
                list.append("<li><b>ID:</b> " + data[0].product_id + "</li>");
                list.append("<li><b>Nombre:</b> " + data[0].name + "</li>");
                list.append("<li><b>Descripcion:</b> " + data[0].description + "</li>");
                list.append("<li><b>Precio:</b> " + data[0].price + "</li>");
                list.append("<li><a href='/index.php?action=anadir_cesta&prod_id=" + data[0].product_id + "'>Añadir al carrito</a></li>");
                item.html(list);
            }
        });
        item.toggle('slow', 'linear');
    });
</script>