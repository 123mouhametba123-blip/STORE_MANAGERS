<?php
 require_once dirname(__DIR__)."/core/database.php";
 require_once dirname(__DIR__)."/models/registre_general_des_VENTES_ET_COMMANDES.PHP";
function affichage():void {
    $arrays = getRegistsre();
    // var_dump($arrays);
    // die();
    require_once dirname(__DIR__)."/views/v2.html.php";
}