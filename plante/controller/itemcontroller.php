<?php
require_once("model/itemModel.php");
require_once("model/tagAnsSpecifimodel.php");

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/index.php' || $uri === '/') { //sur la page d'acceuil ou on voit tous les item 
    $items = selectAllItems($pdo);
    require_once "template/item/seeAll.php";
} elseif (isset($_GET["itemId"]) && $uri === "/voirItem?itemId=" . $_GET["itemId"]) { //pour voir un element en particulier 
    $item = selectOneItem($pdo);
    require_once "template/item/seeOne.php";
} elseif ($uri === "/ajouterplante") { // si l'utilisateur veut ajouter une plante 
    if (isset($_POST["btnEnvoi"])) {
        //var_dump($_POST);
        ajouterplante($pdo);
        $planteId = $pdo->lastInsertId();
        for ($i = 0; $i < count($_POST["tag"]); $i++) {
            $tagId = $_POST["tag"][$i];
            addplante($pdo, $tagId, $planteId);
        }
        header("/mesplante");
    }
    $specieaux = selectAllSpecieau($pdo);
    $specsols = selectAllSpecsol($pdo);
    $tags = selectAllTag($pdo);
    require_once "template/item/addOrEditItem.php";
} elseif ($uri == "/mesplante") {
    $items = selectsuerPlante($pdo);
    require_once "template/item/seeAll.php";
} elseif (isset($_GET["PlanteId"]) && $uri === "/deletePlante?PlanteId=" . $_GET["PlanteId"]) { //pour supprimer les plante
    //var_dump($_GET);
    deleteTagPlante($pdo);
    deletePlante($pdo);
    header("/mesplante");
} elseif (isset($_GET["PlanteId"]) && $uri === "/modifierPlante?PlanteId=" . $_GET["PlanteId"]) { //pour modifier les plante
    //var_dump($_GET);
    $item = selectOneItem($pdo);
    $specieaux = selectAllSpecieau($pdo);
    $specsols = selectAllSpecsol($pdo);
    $tags = selectAllTag($pdo);
    $plateformesjeux = selectTagItem($pdo);

    require_once('Templates/jeux/createOrEditjeu.php');
}