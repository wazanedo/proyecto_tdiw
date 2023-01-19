<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sessió</title>
</head>
<body>
<section>
    <div class="form">
        <div class = "title">
            <header>
                <h1 id=log-in_header>IDENTIFÍCATE</h1>
            </header>
        </div>
        <div class="login-form">
            <div class="input-fields">
                <form action="/index.php?action=login_handle" target="_self" method="post">
                    <input type="email" name="correu" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Direcció de correu electrònic" required>
                    <input type="password" name="pass" placeholder="Contrasenya" required>
                    <div class="button" ><input type = "submit"></div>
                </form>
            </div>
            <!--<div class="button" onclick="submit">Inicia sessió</div>-->
            <div class="text_form">Aún no te has registrado?<div>
                    <div class="button" onclick="location.href='/index.php?action=signin'">Crea un compte</div>
                </div>

            </div>
</section>

</body>
</html>

