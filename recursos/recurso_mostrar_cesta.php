<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaki Moda</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/principal.css">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/detalls_producte.css">
    <link rel="stylesheet" type="text/css" href="/css/header_desplegable.css">
    <!-- add products.css -->
    <link rel="stylesheet" type="text/css" href="/css/products.css">
    <!-- add cesta.css -->
    <link rel="stylesheet" type="text/css" href="/css/cesta.css">
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
                <!-- enlace a inicio -->
                <a href="index.php" class="sign_in">Inicio</a>
            </nav>
        </div>
    </header>
    <section>
        <div class="contenido wrapper">
            <?php include __DIR__ . '/../controladores/mostrar_cesta.php'; ?>
        </div>
    </section>
</body>

</html>