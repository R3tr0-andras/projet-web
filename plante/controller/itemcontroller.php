<?php
require_once("model/itemModel.php");

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/index.php' || $uri === '/') {
    $items=selectAllItems($pdo);
    require_once "template/item/seeAll.php";
}elseif (isset($_GET["itemId"]) && $uri === "/voirItem?itemId=" . $_GET["itemId"]) {
    $item=selectOneItem($pdo);
    require_once "template/item/seeOne.php";
}