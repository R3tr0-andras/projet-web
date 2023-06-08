<?php
function selectAllSpecieau($pdo)
{
    try {
        $query = "select * from specieau ";
        $selectSpecieau = $pdo->prepare($query);
        $selectSpecieau->execute();
        $specieau = $selectSpecieau->fetchall();
        return $specieau;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectAllSpecsol($pdo)
{
    try {
        $query = "select * from specsol";
        $selectspecsol = $pdo->prepare($query);
        $selectspecsol->execute();
        $specsol = $selectspecsol->fetchall();
        return $specsol;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectAllTag($pdo)
{
    try {
        $query = "select * from tag";
        $selectPlateforme = $pdo->prepare($query);
        $selectPlateforme->execute();
        $plateforme = $selectPlateforme->fetchall();
        return $plateforme;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function addplante($pdo, $tagId, $planteId)
{
    try {
        $query = "insert into tag_item (tagId, itemId) values (:tagId,:itemId)";
        $addplateforme = $pdo->prepare($query);
        $addplateforme->execute([
            "tagId" => $tagId,
            "itemId" => $planteId
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function deleteTagPlante($pdo)
{
    try {
        $query = 'delete from tag_item where  itemId= :itemId';
        $deleteOne = $pdo->prepare($query);
        $deleteOne->execute([
            'itemId' => $_GET["PlanteId"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}