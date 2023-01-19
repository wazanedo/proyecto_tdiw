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
            <?php foreach($productos_1 as $producto): ?>
                <div id="prod_id_<?php echo $producto['category_id']?>" class="product">
                    <a class="producte" id="producte<?php echo $producto['product_id'] ?>" href="/index.php?action=detalls&prod_id=<?php echo $producto['product_id']; ?>&cat_id=<?php echo $producto['category_id'];?>&cat_name=<?php echo $categoria?>">
                    <img id="corners_prod" class="product_img" src="<?php echo (htmlentities($producto['image'])); ?>">
                        <div id="detalls_producte" style="text-decoration:none;">

                        </div>
                    </a>

                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>

<script>
    $(document).ready(function (){
        $("a.producte").click(function (event){
            $('div#detalls_producte').hide('fast', 'linear');
            var href = $(this).attr("href");
            var id = $(this).attr("id");
            var element = "a#" + id +">div#detalls_producte";
            $(element).load(href);
            $(element).toggle('slow', 'linear');

            event.preventDefault();
        });
    });
</script>