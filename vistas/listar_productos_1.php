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
                    <div id="prod_id_<?php echo $producto['category_id'] ?>" class="product">
                        <a class="producte" id="producte<?php echo $producto['product_id'] ?>" href="/index.php?action=detalls&prod_id=<?php echo $producto['product_id']; ?>">
                            <img id="corners_prod" class="product_img" src="<?php echo (htmlentities($producto['image'])); ?>">
                            <div id="detalls_producte" style="text-decoration:none; display:none">
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>

<script>
    $(document).ready(function() {
        $("a.producte").click(function(event) {
            event.preventDefault();
            var href = $(this).attr("href");
            var img = $(this).children().eq(0);
            var detalls = $(this).children().eq(1);
            img.toggle('slow', 'linear');
            detalls.load(href);
            detalls.toggle('slow', 'linear');
        });
    });
</script>