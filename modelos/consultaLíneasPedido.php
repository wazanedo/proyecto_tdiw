<?php

function consultaLinias($connexio)
{
    $false_value = "0";
    try {
        $sql = "SELECT id FROM pedido WHERE user_id = (?) AND finalizada = (?)";
        $consulta_Idcomanda = $connexio->prepare($sql);
        $consulta_Idcomanda->bindParam(1, $_SESSION['user'], PDO::PARAM_INT);
        $consulta_Idcomanda->bindParam(2, $false_value, PDO::PARAM_INT);
        $consulta_Idcomanda->execute();
        $resultat_Idcomanda = $consulta_Idcomanda->fetch();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    try {
        $sql = "SELECT * FROM linia_comanda WHERE comanda_id = (?)";
        $consulta_linies = $connexio->prepare($sql);
        $consulta_linies->bindParam(1, $resultat_Idcomanda['id'], PDO::PARAM_INT);
        $consulta_linies->execute();
        $resultat_linies = $consulta_linies->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return ($resultat_linies);
}
