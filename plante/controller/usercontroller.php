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
            createUser($pdo);
            header("location:/connexion");
        }
        var_dump($messageErreur);
    }
    require_once "template/user/inscriptionOrmodify.php";
} elseif ($uri === "/connexion") {
    var_dump("coucou");
    if (isset($_POST["btnEnvoi"])) {
        conectuser($pdo);
        var_dump("couou");
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
            modifUser($pdo);
            header("location:/connexion");
        }
        var_dump($messageErreur);
    }
    require_once "template/user/inscriptionOrmodify.php";
} elseif ($uri == "/suppri") {
    suppriUser($pdo);
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