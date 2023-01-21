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
</head>

<body>
    <header class="">
        <div class="wrapper">
            <div class="logo1"> Kaki Moda - <?php echo ($_SESSION['logged']) ? ($_SESSION['name_user']) : ('no user') ?></div>
            <nav class="menu_div">
                <!-- sign in or logout button, depends on session logged status -->
                <?php if ($_SESSION['logged']) { ?>
                    <a href="index.php?action=logout" class="sign_in">Logout</a>
                <?php } else { ?>
                    <a href="index.php?action=signin" class="sign_in">Sign In</a>
                <?php } ?>

                <a class="sign_in">Cart</a>
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