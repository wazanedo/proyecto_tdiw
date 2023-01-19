<div class="grid-container">
    <?php foreach ($resultado_categorias as $categoria) : ?>
        <div id="categoria" class="categoria<?php echo $categoria['category_id'] ?>">
            <a class="a_categoria" style="text-decoration:none;" id="<?php echo $categoria['category_id'] ?>" href="/index.php?action=llistaProd&ProdId=<?php echo $categoria['category_id'] ?>&categoria=<?php echo $categoria['name'] ?>">
                <h2 id="class_title_h2" class="title_categoria"><?php echo (htmlentities($categoria['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8')); ?></h2>
                <img id="<?php echo $categoria['category_id'] ?>" src="<?php echo (htmlentities($categoria['image'])); ?>" class="img_categoria">
            </a>
        </div>

    <?php endforeach; ?>
</div>

<div id="prodcut_list">
    <script>
        $(document).ready(function() {
            $('a#llistar_cat_button').click(function(event) {
                $('div.grid-container').toggle('slow', 'linear');
                event.preventDefault();
            });

            $("a.a_categoria").click(function(event) {
                var href = $(this).attr("href");
                $("#prodcut_list").hide('slow', 'linear');
                $("#prodcut_list").load(href);
                $("#prodcut_list").toggle('slow', 'linear');
                event.preventDefault();
            });
        });
    </script>
</div>