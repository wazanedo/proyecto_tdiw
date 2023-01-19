<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaki Moda</title>
    <link rel="stylesheet" type="text/css" href="/../css/detalls_producte.css">
</head>
<body>
    <?php foreach ($detalls as $d):?>
        <br> <a> Nombre: <?php echo $d['name']; ?></a> <br/>
        <br> <a> Precio: <?php echo $d['price'] ?></a> <br/>
        <br> <a> Descripción: <?php echo $d['description'] ?> </a> <br/>
        <br> <div> Referencia: <?php echo $d["product_id"] ?></div> <br/>
        botón añadir producto
        <div> <a href= "????????>" class="button">Añadir a la cesta</a>   </div>
        <!--<a id="return_categorie"> <button class="sign_in">Return</button> </a>-->
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
//    onclick llama a index con parámetros(action e id prodcuto)
//     el resultado se añade al html del carrito visible en la web //https:www.php.net/manual/en/function.array-push.php
</script>
