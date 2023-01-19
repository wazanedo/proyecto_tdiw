<?php
$insertar = null;
$insertar = 'INSERT INTO "public"."user" (email, name_user, password, adress, poblation, zip_code) VALUES ($1,$2,$3,$4,$5,$6)';
$insercio =  pg_query_params($connexio, $insertar, [$correu, $nom, $password, $adreca, $poblacio, $codi_postal]) or die(pg_last_error($connexio));

if (!$insercio) {
    echo 'ERROR EN LA INSERCION';
    #echo ("Esto es el contenido de res: ". $insercio);
} else {
    echo '<script> alert("CUENTA CREADA!") </script>';
    echo '<script> document.location.href = "/index.php?action=inici"; </script>';
}
