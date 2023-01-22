<div class="grid-container">
    <?php foreach ($resultado_categorias as $categoria) : ?>
        <div id="categoria" class="categoria<?php echo $categoria['category_id'] ?>">
            <a class="a_categoria" style="text-decoration:none;" id="<?php echo $categoria['category_id'] ?>" href="/index.php?action=llistaProd&CategoriaId=<?php echo $categoria['category_id'] ?>&categoria=<?php echo $categoria['name'] ?>">
                <h2 id="class_title_h2" class="title_categoria"><?php echo (htmlentities($categoria['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8')); ?></h2>
                <img id="<?php echo $categoria['category_id'] ?>" src="<?php echo (htmlentities($categoria['image'])); ?>" class="img_categoria">
            </a>
        </div>

    <?php endforeach; ?>
</div>

<div id="prodcut_list" style="display: none">
</div>

<script>
    $(document).ready(function() {
        $('a#llistar_cat_button').click(function(event) {
            event.preventDefault();
            $('div.grid-container').toggle('slow', 'linear');
        });

        $('a.a_categoria').click(function(event) {
            event.preventDefault();
            var href = $(this).attr('href');
            $('div#prodcut_list').hide('slow', 'linear');
            $.ajax({
                url: href,
                type: "GET",
                success: function(response) {
                    var data = JSON.parse(response);
                    var list = $("<div></div>");
                    list.append("<h2>Productos</h2>");
                    list.append("<div class='grid-container-prods'></div>");
                    $.each(data, function(index, value) {
                        var product = $("<div id='product" + value.product_id + "' class='product'></div>");
                        product.append("<img id='corners_prod' class='product_img' src='" + value.image + "'>");
                        product.append("<div id='detalls_producte' style='text-decoration:none; display:none'></div>");
                        list.children().eq(1).append(product);
                    });
                    $('div#prodcut_list').html(list);
                }
            });
            $('div#prodcut_list').toggle('slow', 'linear');
        });
    });
</script>

<?php include_once __DIR__ . '/../vistas/listar_productos_1.php'; ?>