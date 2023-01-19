<div class="form">
    <div class = "title">
        <header>
            <link rel="stylesheet" type="text/css" href="/css/formulario.css">
            <h1 id=log-in_header >Créate una cuenta nueva</h1>
        </header>
    </div>
    <div class="form">
        <div class="input-fields">
            <form action="/index.php?action=signin_handle" id="form_register" target="_self" method="post">
                <label for="name">Nom:</label><br>
                <input type="text" name="nom" pattern="[A-Za-z\s]+" placeholder="Nom i cognom" required><br>
                <label for="email">Email:</label><br>
                <input type="email" name="correu" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Direcció de correu electrònic" required><br>
                <label for="password">Password:</label><br>
                <input type="password" name="password" pattern="[a-zA-Z0-9\s]+" placeholder="Contrasenya" required><br>
                <input type="text" name="adreca" pattern="[A-Za-z\s]+{30}" placeholder="Adreça" required><br>
                <input type="text" name="poblacio" max="30" pattern="[A-Za-z\s]+{30}"  placeholder="Població" required><br>
                <input type="text" name="codi_postal" pattern="[0-9]{5}" placeholder="Codi Postal" required><br>
                <div class="button" ><input type="submit" name="resgister" ></div>
            </form>

            <div class="text_form">¿Ya tienes cuenta?</div>
            <div class="button1" onclick="location.href='/index.php?action=login'">Inicia sesión</div>
            <div></div>
        </div>
    </div>
</div>

