<h1>Page d'acceuil</h1>

<?php foreach ($items as $item) :  ?>
    <div class="">
        <h2> <?= $item -> itemNom ?> </h2>
        <img src="<?= $item->itemphoto ?>" alt="photo de <?= $item -> itemDesc ?>">
        <p><span><?= $item-> itemPrix  ?>€</span></p>

        <a href="voirItem?itemId=<?= $item->itemId ?>">voir le produit</a></p>
    </div>

<?php endforeach ?>