<?php
// vaciar cesta
unset($_SESSION['cart']);
header('Location: index.php');