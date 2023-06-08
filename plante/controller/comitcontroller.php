<?php
require_once("model/comitModel.php");

$uri = $_SERVER['REQUEST_URI'];
// Passer la variable $comments au template
$data['comments'] = $comments;

if ($uri === '/addComment') {
    if (isset($_POST["itemId"], $_POST["author"], $_POST["content"])) {
        $itemId = $_POST["itemId"];
        $author = $_POST["author"];
        $content = $_POST["content"];
        
        // Appel de la fonction pour ajouter le commentaire
        ajouterCommentaire($pdo, $itemId, $author, $content);
    }
}
if ($uri === '/itemDetails') {
    if (isset($_GET["itemId"])) {
        $itemId = $_GET["itemId"];
        
        // Appel de la fonction pour récupérer les commentaires
        $comments = obtenirCommentaire($pdo, $itemId);
        $data['comments'] = $comments;
    }
}