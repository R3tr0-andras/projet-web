<?php

function selectAllItems($pdo)
{
    try {
        $query = "select * from item ";
        $selectItems = $pdo->prepare($query);
        $selectItems->execute();
        $items = $selectItems->fetchall();
        return $items;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectOneItem($pdo)
{
    try {
        $query = "select * from item inner JOIN user ON item.userId = user.userId  where itemId = :itemId ";
        $selectitem = $pdo->prepare($query);
        $selectitem->execute([
            'itemId' => $_GET["itemId"]
        ]);
        $item = $selectitem->fetch();
        return $item;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function ajouterplante($pdo)
{
    try {
        $query = "insert into item (itemPrix, itemDesc, itemStock, itemValidate, specieauID, specsolID, userId, itemphoto, itemNom) values(:itemPrix, :itemDesc, :itemStock, :itemValidate, :specieauID, :specsolID, :userId, :itemphoto, :itemNom)";
        $ajouterplanter = $pdo->prepare($query);
        $ajouterplanter->execute([
            'itemNom' => $_POST['itemNom'],
            'itemPrix' => $_POST['itemPrix'],
            'itemDesc' => $_POST['itemDesc'],
            'itemStock' => $_POST['itemStock'],
            'itemphoto' => $_POST['image'],
            'itemValidate' => true,
            'specsolID' => $_POST['specsol'],
            'specieauID' => $_POST['specieau'],
            'userId' => $_SESSION['user']->userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function deleteAlljeuxUser($dbh)
{
    try {
        $query = 'delete from jeuxenvente where userId=:userId';
        $deleteAll = $dbh->prepare($query);
        $deleteAll->execute([
            'userId' => $_SESSION['user']->userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectsuerPlante($pdo)
{
    try {
        $query = "select * from item inner JOIN specieau ON item.specieauID = specieau.speciauID inner JOIN specsol ON item.specsolID = specsol.specsolID where userId = :userId";
        $selectPlante = $pdo->prepare($query);
        $selectPlante->execute([
            'userId' => $_SESSION['user']->userId
        ]);
        $Plante = $selectPlante->fetchall();
        return $Plante;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectTagItem($dbh)
{

    try {
        $query = "select * from plateforme where plateformeID in (select plateformeId from plateforme_jeux where jeuxId= :jeuxId);";
        $selectPlateforme = $dbh->prepare($query);
        $selectPlateforme->execute([
            'jeuxId' => $_GET["jeuxID"]
        ]);
        $plateformes = $selectPlateforme->fetchall();
        return $plateformes;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function deletePlante($pdo)
{
    try {
        $query = 'delete from item where  itemId= :itemId';
        $deleteOne = $pdo->prepare($query);
        $deleteOne->execute([
            'itemId' => $_GET["PlanteId"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}