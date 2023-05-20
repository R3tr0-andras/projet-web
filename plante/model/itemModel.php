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
        $selectitem ->execute([
            'itemId'=> $_GET["itemId"]
        ]);
        $item = $selectitem->fetch();
        return $item;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
