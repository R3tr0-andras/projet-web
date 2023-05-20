<div class="flex space-a">
    <?php foreach ($items as $item) :  ?>
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
                </div>
            </div>
        </div>  
    <?php endforeach ?>
</div>