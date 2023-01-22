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
                list.append("<li><a class='add_prod' href='/index.php?action=anadir_cesta&prod_id=" + data[0].product_id + "'>Añadir al carrito</a></li>");
                item.html(list);
            }
        });
        item.toggle('slow', 'linear');
    });

    $(document).on("click", ".add_prod", function() {
        event.preventDefault();
        var href = $(this).attr('href');
        $.ajax({
            url: href,
            type: "GET",
            success: function(response) {
                console.log(response);
            }
        });
    });
</script>