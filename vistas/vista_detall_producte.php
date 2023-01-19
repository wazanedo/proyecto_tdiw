<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaki Moda</title>
    <link rel="stylesheet" type="text/css" href="/../css/detalls_producte.css">
</head>
<body>
    <?php foreach ($detalls as $d):?>
        <a>  <?php echo $d['name']; ?></a>
        <!--<a>  <?php echo $d['price'] ?></a>-->
        <a>  <?php echo $d['description'] ?> </a>
        <!--<div>  <?php echo $d["product_id"] ?></div>-->
            <?php $url = "/index.php?action=añadir_cesta" .
        "&referencia=" . $d["id"] .
        "&nombre=" . str_replace(" ", "-",$d["name"]) .
        "&precio=" . $d["price"]?>
            <div>    <a href="<?php echo $url; ?>" class="button añadir">Añadir a la cesta</a>
    <?php
    endforeach;
    ?>
</body>

<script>
    $(document).ready(function (){
        $("a#return_categorie").click(function (event){
            //$("div#detalls_producte").hide('slow', 'linear');
            //$("h1.name_categoria").show('slow', 'linear');
            //$("div.grid-container-prods").show('slow', 'linear');
            //event.preventDefault();
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('body .añadir').click(function(event) {
            var link = $(this).attr("href");
            $.ajax({
                url: '/index.php', success: function (result) {
                    var navLink = "/index.php?action=añadir_cesta";console.log(link);
                    //$(".nav_links").hide().load(navLink, function () {
                      //  console.log("Load nav completed")
                    //}).fadeIn(300);
                    //event.preventDefault();
                    //$("#added").show();
                }
            });
            //event.preventDefault();
        })
    })
   //onclick llama a index con parámetros(action e id prodcuto)
    //el resultado se añade al html del carrito visible en la web //https:www.php.net/manual/en/function.array-push.php
</script>
