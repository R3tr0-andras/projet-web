<?php

require_once "model/userModel.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/profil') {
    require_once "template/user/profil.php";
} elseif ($uri == "/inscription") {
    if (isset($_POST["btnEnvoi"])) {
        var_dump("coucou");
        $messageErreur = verifEmpty();
        var_dump($messageErreur);
        if (!$messageErreur) {
            var_dump("coucou");
            CreerUser($pdo);
            header("location:/connexion");
        }
        var_dump($messageErreur);
    }
    require_once "template/user/inscriptionOrmodify.php";
} elseif ($uri === "/connexion") {
    var_dump("coucou");
    if (isset($_POST["btnEnvoi"])) {
        connexionUser($pdo);
        var_dump("coucou");
        header("location:/");
    }
    require_once "template/user/connexion.php";
} elseif ($uri == "/deconnexion") {
    session_destroy();
    header("location:/");
} elseif ($uri == "/modify") {
    if (isset($_POST["btnEnvoi"])) {
        var_dump("coucou");
        $messageErreur = verifEmpty();
        var_dump($messageErreur);
        if (!$messageErreur) {
            var_dump("coucou");
            modifierUser($pdo);
            header("location:/connexion");
        }
        var_dump($messageErreur);
    }
    require_once "template/user/inscriptionOrmodify.php";
} elseif ($uri == "/suppri") {
    supprimerUser($pdo);
    
} elseif ($uri == "/conversation") {
    $allusers = selectionUsers($pdo);
    //var_dump($allusers);
    require_once "template\conversation\VoirUsers.php";
} elseif (isset($_GET["UserID"]) && $uri === "/conversation?UserID=" . $_GET["UserID"]) {
    $conversation = selectionConversation($pdo);
    if ($conversation !== Null) {
        var_dump('$conversation');
        $messages=selectionMessage($pdo,$conversation);
        var_dump($messages);
        require_once "template\conversation\discussion.php";
    } else {
        creerConversation($pdo);
        $conversationId = $pdo->lastInsertId();
        creerUserConversation($pdo, $conversationId);
        var_dump('lol');
    }
    if (isset($_POST["btnEnvoi"])) {
        ajouterMessage($pdo, $conversation);
    }
}

function verifempty()
{
    foreach ($_POST as $key => $value) {
        var_dump($key . ' => ' . $value);
        if (empty($value)) {
            $messageErreur[$key] = "votre " . $key . " est vide";
        }
    }
    if (isset($messageErreur)) {
        return $messageErreur;
    } else {
        return false;
    }
}