<?php
// rechercherItems.php

// Récupérer la valeur saisie dans la barre de recherche
$searchTerm = $_GET['search'];

// Effectuer la requête pour récupérer les items correspondants à la recherche
// Utilisez votre propre logique de requête ici en fonction de votre base de données

// Exemple d'utilisation d'un tableau statique pour les démonstrations
$items = [
    // ...
];

// Afficher uniquement les items correspondants à la recherche
$filteredItems = array_filter($items, function ($item) use ($searchTerm) {
    return $item->itemNom == $searchTerm;
});

?>

<div class="flex space-a">
    <?php foreach ($filteredItems as $item) : ?>
        <div class="card">
        <div class="space-a flex">
                <div>
                    <a href="voiritem?itemId=<?= $item->itemId ?>"><img src="<?= $item->itemphoto ?>" alt="photo de plante" style="width: 90px; height: 115px;"></a>
                </div>
                <div>
                    <h2> <?= $item -> itemNom ?> </h2>
                   <br>
                    <p> <span> <?= $item-> itemPrix  ?>€ / unité</span> </p>
                    <br>
                    <br>
                    <button class="itembutton"> <a href="voirItem?itemId=<?= $item->itemId ?>" class="colorwhite">voir le produit</a> </button>
                    <?php if ($uri == "/mesplante") : ?>
                    <h3><a href="deletePlante?PlanteId=<?= $item->itemId ?>" class="link colorWhite"> modifier  </a></h3>
                    <h3><a href="deletePlante?PlanteId=<?= $item->itemId ?>" class="link colorWhite"> supprimer  </a></h3>
                <?php endif ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
