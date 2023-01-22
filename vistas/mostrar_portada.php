<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaki Moda</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-latest.js"></script> -->
    <link rel="stylesheet" type="text/css" href="/css/principal.css">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <!--<link rel="stylesheet" type="text/css" href="/css/footer.css">-->
    <link rel="stylesheet" type="text/css" href="/css/detalls_producte.css">
    <link rel="stylesheet" type="text/css" href="/css/header_desplegable.css">
    <link rel="stylesheet" type="text/css" href="/css/products.css">
</head>

<body>
<header class="">
    <div class="wrapper">
        <div class="logo1"> Kaki Moda</div>
        <nav class="menu_div">
            <!-- sign in or logout button, depends on session logged status -->
            <?php if (isset($_SESSION['user'])) { ?>
                <div class="dropdown">
                    <a class="dropbtn sign_in"><?php echo $_SESSION['user'] ?></a>
                    <div class="dropdown-content">
                        <a href="index.php?action=logout" class="sign_in">Cerrar sesión</a>
                        <a href="index.php?action=profile" class="sign_in">Perfil</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="dropbtn sign_in">Cesta</a>
                    <div class="dropdown-content">
                        <a href="index.php?action=mostrar_cesta" class="sign_in">Ver contenido</a>
                        <?php if (isset($_SESSION['cart'])) { ?>
                            <a href="index.php?action=vaciar_cesta" class="sign_in">Vaciar cesta</a>
                        <?php } ?>
                    </div>
                </div>
            <?php } else { ?>
                <a href="index.php?action=signin" class="sign_in">Sign In</a>
            <?php } ?>
            <a id="llistar_cat_button" class="sign_in">Llistar Categories</a>
        </nav>
    </div>
</header>
<section class="contenido wrapper">

    <div class="cateogrias">
        <?php include __DIR__ . '/../controladores/listar_categorias.php'; ?>
    </div>

</section>
</body>

</html>