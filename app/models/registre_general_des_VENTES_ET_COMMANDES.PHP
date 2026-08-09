<?php 
require_once dirname(__DIR__)."/core/database.php";
function getRegistsre ():array{
$pdo = connexionDB();
$sql = " SELECT
    v.reference,
    c.nom,
    c.prenom,
    c.telephone,
    v.montant_total,
    mp.libelle AS mode_paiement
FROM ventes v
JOIN clients c
    ON c.id = v.client_id
LEFT JOIN paiements p
    ON p.vente_id = v.id
LEFT JOIN mode_paiements mp
    ON mp.id = p.mode_paiement_id";

 $arrays = query($pdo ,$sql,false);
    $pdo = null;
return $arrays;
}
