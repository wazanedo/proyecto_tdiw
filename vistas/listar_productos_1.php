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
                    <div id="product<?php echo $producto['category_id'] ?>" class="product">
                        <img id="corners_prod" class="product_img" src="<?php echo (htmlentities($producto['image'])); ?>">
                        <div id="detalls_producte" style="text-decoration:none; display:none"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>

<script>
    $(document).ready(function() {
        $("div.product").click(function(event) {
            event.preventDefault();
            var id = $(this).attr('id').replace(this.className, '');
            var href = "/index.php?action=detalls&prod_id="+id;
            var detalls = $(this).children().eq(1);
            detalls.load(href);
            detalls.toggle('slow', 'linear');
        });
    });
</script>