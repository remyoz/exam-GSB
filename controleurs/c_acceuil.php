<?php
/**
 * Cette page php constitu le controleur des actions qui seront mennées sur la page d'acceuil
 * @author Remy DEBERTONNE <remy.debertonne@gmail.com>
 * @package Default
 */
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
if ($action == "vueAcceuil"){
       include("vues/v_accueil.php");
}
?>
